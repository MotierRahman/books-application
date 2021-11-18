<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class TeamController extends Controller
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
        return view('backendpage.team.team');
   
    }

    public function storeteam(Request $request){    
    	 $data=array();   
         $data['name']=$request->name;
         $data['position']=$request->position;
         $image=$request->image;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/team/'.$image_);
                 $data['image']='public/team/'.$image_;
                 $done=DB::table('team')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'team Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'team Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }

    }

    public function allteam(){
        $team=DB::table('team')->get();
    	return view('backendpage.team.showteam',compact('team'));
    }

    public function editteam($id){

        $team=DB::table('team')->where('id',$id)->first();
     return view('backendpage.team.Editteam',compact('team')); 

     
    }

    public function updateteam(Request $request,$id){
        $data=array();   
        $data['name']=$request->name;
        $data['position']=$request->position;
        $image=$request->image;

          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/team/'.$image_);
                $data['image']='public/team/'.$image_;
               
                $done=DB::table('team')->where('id',$id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'team Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->route("all.team")->with($notification);
                }else{
                  $notification = array(
                        'message' => 'team Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('team')->where('id',$id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'team Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->route("all.team")->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'team Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }
    }

    public function deleteteam($id){

        $team=DB::table('team')->where('id',$id)->first();
        $image=$team->image;
        unlink($image);

          $done=DB::table('slidder')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'team Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'team Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }
}
