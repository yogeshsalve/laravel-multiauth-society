<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginDashboardController extends Controller
{
    //
    public function logindashboard()
   {
       return view('/pages.logindashboard');
   
   }
}
