<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use DB;

class MaintenanceController extends Controller
{
    public function adddata(Request $request)
    {   
        // $maintenance = new Maintenance;
        // $maintenance->name= $request->name;
        // $maintenance->year= $request->year;
        // $maintenance->month= $request->month;
        // $maintenance->amount= $request->amount;

        
        $name = $request->input('name');
        $year = $request->input('year');
        $month = $request->input('month');
        $amount = $request->input('amount');

        $data = array(
            'name' => $name,
            'year' => $year,
            'month' => $month,
            'amount' => $amount
        );

        $count = DB::table('maintenances')->where('month', $month)
                                ->where('year',$year)
                                ->where('name',$name)
                                ->count();
        if($count > 0){
            $request->session()->flash('status1','Entry Already Exists!');
        }else{
            DB::table('maintenances')->insert($data);
            $request->session()->flash('status','Entry Submitted successfully');
        }


        // $maintenance->save();
        // session()->flash('msg', 'Successfully done!.');
        
        return redirect('maintenance-entry');
    }



     
}