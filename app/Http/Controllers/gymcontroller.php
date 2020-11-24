<?php

namespace App\Http\Controllers;
use App\Models\gym;
use Illuminate\Http\Request;

class gymcontroller extends Controller
{
    function addData(Request $req)
    {
    	$gym= new gym;
    	$gym->name=$req->name;
    	$gym->flat_no=$req->flat_no;
    	$gym->date=$req->date;
    	$gym->slot=$req->slot;
    	$gym->save();
    	return redirect('gym');
    }
    function show()
    {
    return view('gym1');
    

    }
    // function show1()
    // {
    //     $data = gym::all();
    //     return view('gym1',['gyms'=>$data]);
        
    // }
function show1()
    {
    $data=gym::all();
    return view('gym1',['gyms'=>$data]);
    }

function show2()
    {
    $data=gym::all();
    return view('gym',['gyms'=>$data]);
    }
}
