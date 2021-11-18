<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class ChefsController extends Controller
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
        return view('backendpage.books.books');
   
    }

    public function storebooks(Request $request){    
    	 $data=array();   
         $data['title']=$request->title;
         $data['description']=$request->description;
         $image=$request->image;
         $file=$request->file;
        $destinationPath = 'public/books/';
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath, $filename);
        $data['file']='public/books/'.$filename;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/books/'.$image_);
                 $data['image']='public/books/'.$image_;
                 $done=DB::table('books')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'books Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'books Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }

    }

    public function allbooks(){
        $books=DB::table('books')->get();
    	return view('backendpage.books.showbooks',compact('books'));
    }

    public function editbooks($id){

        $books=DB::table('books')->where('id',$id)->first();
     return view('backendpage.books.Editbooks',compact('books')); 

     
    }

    public function updatebooks(Request $request,$id){
        $data=array();   
        $data['title']=$request->title;
        $data['description']=$request->description;
        $image=$request->image;


        $file=$request->file;
        $destinationPath = 'public/books/';
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath, $filename);
        $data['file']='public/books/'.$filename;

       
           
            



          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/books/'.$image_);
                $data['image']='public/books/'.$image_;
                
               
                $done=DB::table('books')->where('id',$id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'books Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->route("all.books")->with($notification);
                }else{
                  $notification = array(
                        'message' => 'books Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('books')->where('id',$id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'books Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->route("all.books")->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'blog Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }
    }

    public function deletebooks ($id){

        $slidder=DB::table('books')->where('id',$id)->first();
        $image=$slidder->image;
        unlink($image);

          $done=DB::table('books')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'books Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'books Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }
}


