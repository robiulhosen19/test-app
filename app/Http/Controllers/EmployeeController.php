<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()  {
        
    
    return view('website/pages/employee/create');
    }
}
