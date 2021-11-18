<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class BlogController extends Controller
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
        return view('backendpage.blog.blog');
   
    }

    public function storeblog(Request $request){    
    	 $data=array();   
         $data['title']=$request->title;
         $data['description']=$request->description;
         $image=$request->image;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/blog/'.$image_);
                 $data['image']='public/blog/'.$image_;
                 $done=DB::table('blog')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'blog Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'blog Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }

    }

    public function allblog(){
        $blog=DB::table('blog')->get();
    	return view('backendpage.blog.showblog',compact('blog'));
    }

    public function editblog($id){

        $blog=DB::table('blog')->where('id',$id)->first();
     return view('backendpage.blog.Editblog',compact('blog')); 

     
    }

    public function updateblog(Request $request,$id){
        $data=array();   
        $data['title']=$request->title;
        $data['description']=$request->description;
        $image=$request->image;

          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/blog/'.$image_);
                $data['image']='public/blog/'.$image_;
               
                $done=DB::table('blog')->where('id',$id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'blog Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->route("all.blogs")->with($notification);
                }else{
                  $notification = array(
                        'message' => 'Slidder Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('blogs')->where('id',$id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'blog Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->route("all.blog")->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'blog Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }
    }

    public function deleteblog($id){

        $slidder=DB::table('blog')->where('id',$id)->first();
        $image=$slidder->image;
        unlink($image);

          $done=DB::table('blog')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'blog Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'blog Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }
}
