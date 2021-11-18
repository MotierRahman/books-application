<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class MenussController extends Controller
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
        return view('backendpage.menus.menus');
   
    }

    public function storemenus(Request $request){    
    	 $data=array();   
         
         $data['name']=$request->name;
         $image=$request->image;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/menus/'.$image_);
                 $data['image']='public/menus/'.$image_;
                 $done=DB::table('menus')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'Upcomming book Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'Upcomming book Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }

    }

    public function allmenus(){
        $menus=DB::table('menus')->get();
    	return view('backendpage.menus.showmenus',compact('menus'));
    }

    public function editmenus($id){

        $menus=DB::table('menus')->where('id',$id)->first();
     return view('backendpage.menus.Editmenus',compact('menus')); 

     
    }

    public function updatemenus(Request $request,$id){
        $data=array();   
        
        $data['name']=$request->name;
        $image=$request->image;

          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/menus/'.$image_);
                $data['image']='public/menus/'.$image_;
               
                $done=DB::table('menus')->where('id',$id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'Upcomming book Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->route("all.menus")->with($notification);
                }else{
                  $notification = array(
                        'message' => 'Upcomming book Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('menus')->where('id',$id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'Upcomming book Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->route("all.menus")->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'Upcomming book Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }
    }

    public function deletemenus($id){

        $slidder=DB::table('menus')->where('id',$id)->first();
        $image=$slidder->image;
        unlink($image);

          $done=DB::table('menus')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'Upcomming book Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'Upcomming book Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }
}
