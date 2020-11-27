<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demo;
// use session;


class DemoController extends Controller
{
     function addData(Request $req)
    {
    	$demo= new demo;
    	$demo->name=$req->name;
    	$demo->role=$req->role;
    	$demo->email=$req->email;
    	$demo->phone=$req->phone;
    	$demo->location=$req->location;
    	$demo->save();
    	// $req->session()->flash('status','Your Entry Submitted SuccessFully..!!');
    	return view('/welcome');
    }
}