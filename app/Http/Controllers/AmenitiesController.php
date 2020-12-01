<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gym;
use App\Models\swim;
use App\Models\playzone;


class AmenitiesController extends Controller
{
    function addData(Request $req)
    {
    	$gym= new gym;
    	$gym->name=$req->name;
    	$gym->flat_no=$req->flat_no;
    	$gym->date=$req->date;
    	$gym->slot=$req->slot;
    	$gym->save();
    	return redirect('/gym');
    }
    function showgym()
    {
    $data=gym::all();
    return view('amenities/gym',['gyms'=>$data]);
    }

    function addpoolData(Request $req)
    {
    	$swim= new swim;
    	$swim->name=$req->name;
    	$swim->flat_no=$req->flat_no;
    	$swim->date=$req->date;
    	$swim->slot=$req->slot;
    	$swim->save();
    	return redirect('swim');
    }
    function showpooluser()
    {
    $data=swim::all();
    return view('amenities/swim',['swims'=>$data]);
    }


    function addplayData(Request $req)
    {
    	$play= new playzone;
    	$play->name=$req->name;
    	$play->flat_no=$req->flat_no;
    	$play->date=$req->date;
    	$play->slot=$req->slot;
    	$play->save();
    	return redirect('playzone');
    }
    function showplayuser()
    {
    $data=playzone::all();
    return view('amenities/playzone',['playzones'=>$data]);
    }

}
