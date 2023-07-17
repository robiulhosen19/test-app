<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()  {

        return view('admin.pages.login');
        
    }

    public function teacherRegister() {
        return view('admin.pages.register');
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
}









