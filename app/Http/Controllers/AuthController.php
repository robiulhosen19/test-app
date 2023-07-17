<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    // --------- user login ---------
    public function login()  {

        return view('admin.pages.auth.login');
        
    }

    
public function userLogin(Request $request)
{
    $email = $request->email;
    $password = $request->password;

    // Use the email to fetch the user from the database
    $user = User::where('email', $email)->first();

    if ($user) {
        // Verify the password using Laravel's built-in authentication
        if (Hash::check($password, $user->password)) {
            // Check if the user is approved (status column is 1)
            if ($user->status == 1) {
                // Store user info in the session
                session([
                    'user_fname' => $user->first_name,
                    'user_lname' => $user->last_name,
                    'user_email' => $user->email,
                    'user_role' => $user->role,
                ]);

                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'User Not Approved Yet');
            }
        }
    }

    return redirect()->back()->with('error', 'User Not Found with these credentials');
}


    // --------- Teacher Register ---------

    public function teacherRegister() {
        return view('admin.pages.auth.teacher_register');
    }
    public function registrationTeacher(Request $request) {

        $user = new User();
        if($request->password == $request->conf_password){
            User::where('email','=', $request->email)->first();
            if($user){
                return redirect()->back()->with('error','User email already exists');
            }
            else{
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->password = md5($request->password);
                $user->role = 'Teacher';
                if($user->save()){
                    return redirect()->back()->with('success','User Registered. Waiting for admin approval');
                }
            }
        }
        else{
            return redirect()->back()->with('error','Password Mismatch');
        }

    }

    // --------- Student Register ---------
    public function studentRegister() {
        return view('admin.pages.auth.student_register');
    }
    public function registrationStudent(Request $request) {

        $user = new User();
        if($request->password == $request->conf_password){
        
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->student_id = $request->yid;
                $user->password = md5($request->password);
                $user->role = 'Student';
                if($user->save()){
                    return redirect()->back()->with('success','User Registered. Waiting for admin approval');
                }
        }
        else{
            return redirect()->back()->with('error','Password Mismatch');
        }

    }
}









