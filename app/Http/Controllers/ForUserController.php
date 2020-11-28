<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ForUserController extends Controller
{
    //
      // display user table on member blade
      public function userdisplayonmember()
      {
                 
          $data= User::all();
          
          return view('member',['users'=>$data]);
  
          
      }
}
