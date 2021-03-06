<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\DB;
use App\Models\visitor;
use App\Models\staffattendance;
use App\Models\User;
use Carbon\Carbon;
// use session;


class VisitorController extends Controller
{
    public function visitors()
    {
        return view('/visitors.visitors');
    
    }
    public function addData(Request $request)
    {   
        $visitor = new Visitor;
        $visitor->visitor_name= $request->visitor_name;
        $visitor->visit_from= $request->visit_from;
        $visitor->visit_to= $request->visit_to;
        $visitor->visitor_contact=$request->visitor_contact;
        $visitor->visitor_vehicle_no=$request->visitor_vehicle_no;
        $visitor->Entry_time=$request->Entry_time;
        $visitor->Exit_time=$request->Exit_time;
        $visitor->save();
        
        
        
        
        $basic  = new \Nexmo\Client\Credentials\Basic('99e8e35f', 'IpmOFQy2d8GJe9Pp');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([       
        'to' => '91'.$request->visitor_contact,
        'from' => '918149707532',
        'text' => 'Welcome to softcare society!!'
        ]);
        
        
        
        $request->session()->flash('status','entry Submitted successfully');
        return redirect('member');
        
    }

    public function tdate( Request $request)
    {

    		
    			
    		
    			$from=$request->date1;
    			$to=$request->date2;
    			$data = visitor::whereBetween('Entry_time',[$from,$to])->get();

    	   		   return view('visitor_list',['data'=>$data ]);

	}


    public function show()
    {
    	
        $data= visitor::all();
        return view('visitor_list',['visitors'=>$data]);
    }

    public function show_flatanduser()
    {
    	
        $data= User::all();
        return view('visitors',['users'=>$data]);
    }

    //show user name on mainenance-entry
    public function show_username()
    {
    	
        $data= User::all();
        return view('maintenance/maintenance-entry',['users'=>$data]);
    }

   //show flat and user name on member page
   public function show_flatusername()
   {
       
       $data= User::all();
       return view('member',['users'=>$data]);
   }



    



    public function display()
    {
        // return DB::table('visitors')
        // ->where('visitor_id',1 )
        // ->get();
        
        $data= visitor::all()
        ->where('Exit_time',  '2020-11-25');
        return view('admin',['visitors'=>$data]);
    }
    public function displayonhome()
    {
               
        $data= visitor::all();
        // ->where('Exit_time',  '2020-11-25');
        return view('home',['visitors'=>$data]);
    }

    // display visitors table on member blade
    // public function displayonmember()
    // {
               
    //     $data= visitor::where('Exit_time', '2020-11-27')->paginate(5);
        
    //     return view('member',['visitors'=>$data]);

        
    // }

    public function staff_attendance( Request $request)
	{
		$atd=new staffattendance ;
        $atd->staff_name=$request->input('staff_name');
        $atd->staff_intime=$request->input('staff_intime');
        $atd->staff_outtime=$request->input('staff_outtime');
        $atd->save();
        
		return redirect('staff_attendance');
	}

	public function staff_attendance_list()
	{
		$data=staffattendance::all();
		return view('staff/staff_attendance',['data'=>$data ]);


	}




    
}