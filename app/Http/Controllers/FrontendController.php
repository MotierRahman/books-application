<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

class FrontendController extends Controller
{
    public function about(){
    	return view('frontendpage.About');
    }
    public function books(){
    	return view('frontendpage.books');
    }
    public function Menu(){
    	return view('frontendpage.Menu');
    }
    public function Blog(){
    	return view('frontendpage.Blog');
    }
    public function Contact(){
    	return view('frontendpage.Contact');
    }
    public function download(Request $request,$file){
    	return response()->download('public/books'.$file);
    }
    
}
