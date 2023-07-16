<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function deshboard()  {

        return view('admin.pages.deshboard');
        
    }
    public function table()  {

        return view('admin.pages.table');
        
    }
    public function login()  {

        return view('admin.pages.login');
        
    }

    public function register() {
        return view('admin.pages.register');
    }
}
