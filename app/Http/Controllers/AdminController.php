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
    
}
