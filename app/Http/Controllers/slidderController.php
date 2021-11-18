<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class slidderController extends Controller
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
        return view('backendpage.slidder.slidder');
   
    }

    public function storeslidder(Request $request){    
    	 $data=array();   
         $data['title']=$request->title;
         $data['description']=$request->description;
         $image=$request->image;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/slidder/'.$image_);
                 $data['image']='public/slidder/'.$image_;
                 $done=DB::table('slidder')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'Slidder Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'Slidder Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }

    }

    public function allslidder(){
        $slidder=DB::table('slidder')->get();
    	return view('backendpage.slidder.showslidder',compact('slidder'));
    }

    public function editslidder($id){

        $slidder=DB::table('slidder')->where('id',$id)->first();
     return view('backendpage.slidder.Editslidder',compact('slidder')); 

     
    }

    public function updateslidder(Request $request,$id){
        $data=array();   
        $data['title']=$request->title;
        $data['description']=$request->description;
        $image=$request->image;

          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/slidder/'.$image_);
                $data['image']='public/slidder/'.$image_;
               
                $done=DB::table('slidder')->where('id',$id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'Slidder Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->route("all.slidder")->with($notification);
                }else{
                  $notification = array(
                        'message' => 'Slidder Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('slidder')->where('id',$id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'Slidder Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->route("all.slidder")->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'Slidder Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }
    }

    public function deleteslidder($id){

        $slidder=DB::table('slidder')->where('id',$id)->first();
        $image=$slidder->image;
        unlink($image);

          $done=DB::table('slidder')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'Slidder Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'Slidder Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }

}
