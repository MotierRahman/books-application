<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class SettingsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(){
        return view('backendpage.settings.settings');
   
    }

    public function storesettings(Request $request){
    	$data=array();   
        $data['logoname']=$request->logoname;
        $data['number']=$request->number;
        $data['email']=$request->email;
        $data['line']=$request->line;
        $data['closed_day']=$request->closed_day;
        $data['open_day_one']=$request->open_day_one;
        $data['open_day_time_one']=$request->open_day_time_one;
        $data['open_day_two']=$request->open_day_two;
        $data['open_day_time_two']=$request->open_day_time_two;
        $data['address_one']=$request->address_one;
        $data['address_two']=$request->address_two;
        $data['address_three']=$request->address_three;
        $done=DB::table('settings')->insert($data);
 
         if($done){
             $notification = array(
                 'message' => 'settings Added Successfully.',
                 'alert-type' => 'success'
             );
         return redirect()->back()->with($notification);
         }else{
           $notification = array(
                 'message' => 'settings Not Added',
                 'alert-type' => 'danger'
             );
         return redirect()->back()->with($notification);
         }

    }
    public function allsettings(){
        $allsettings=DB::table('settings')->get();
    	return view('backendpage.settings.showsettings',compact('allsettings'));
    }

    
    public function editsettings($id){

        $settings=DB::table('settings')->where('id',$id)->first();
     return view('backendpage.settings.Editsettings',compact('settings')); 

     
    }

    public function updatesettings(Request $request,$id){
    	$data=array();   
        $data['logoname']=$request->logoname;
        $data['number']=$request->number;
        $data['email']=$request->email;
        $data['line']=$request->line;
        $data['closed_day']=$request->closed_day;
        $data['open_day_one']=$request->open_day_one;
        $data['open_day_time_one']=$request->open_day_time_one;
        $data['open_day_two']=$request->open_day_two;
        $data['open_day_time_two']=$request->open_day_time_two;
        $data['address_one']=$request->address_one;
        $data['address_two']=$request->address_two;
        $data['address_three']=$request->address_three;
        
        $done=DB::table('settings')->where('id',$id)->update($data);
 
         if($done){
             $notification = array(
                 'message' => 'settings Update Successfully.',
                 'alert-type' => 'success'
             );
         return redirect()->route("all.settings")->with($notification);
         }else{
           $notification = array(
                 'message' => 'settings Not Update',
                 'alert-type' => 'danger'
             );
         return redirect()->back()->with($notification);
         }

    }

    public function deletesettings($id){
    	$done=DB::table('settings')->where('id',$id)->delete();
        if($done){
            $notification = array(
                'message' => 'settings Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'settings Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }
    }
}
