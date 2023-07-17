<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    // --------- user login ---------
    public function login()  {

        return view('admin.pages.auth.login');
        
    }

    public function userLogin(Request $request) {
       
        $email = $request->email;
        $password = md5($request->password);
       $user =  User::where('email', '=', $email)
             ->where('password', '=', $password)
             -> first();
             if($user){
                //check if user is approved(check value of status column is 1)
                if($user->status==1){
                    // Session user info in the session
                    Session()->put('user_fname',$user->first_name);
                    Session()->put('user_lname',$user->last_name);
                    Session()->put('user_email',$user->email);
                    Session()->put('user_role',$user->role);
                    return redirect('dashboard');

                }else{
                    return redirect()->back()->with('error','User Not Approved Yet');
                }
             }else{
                return redirect()->back()->with('error','User Not Found with these credentials'); 
             }
                
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
    public function logout(Request $request) {
        $request ->session()->forget(['user_fname','user_lname','user_email','user_role']);
               
        return redirect('login');
    }
}









