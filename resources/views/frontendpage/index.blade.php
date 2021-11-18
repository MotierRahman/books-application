@extends('layouts.frontend.link')

@section('body')
@php 
    $slidder=DB::table('slidder')
        ->orderBy('id','DESC')->limit(1)->get();
        $blog=DB::table('blog')
        ->orderBy('id','DESC')->limit(1)->get();

        $chefs=DB::table('books')
        ->orderBy('id','DESC')->limit(100)->get(); 
        $menus=DB::table('menus')
        ->orderBy('id','DESC')->limit(9)->get();

@endphp


     <section id="home" >
          <div class="row">
               @foreach($slidder as $row)
               <img src="{{ asset($row->image) }}" style="height: 600px; width: 100%;">
                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-12 col-sm-12" >
                                             <h3 style="color:#000; text-align: center;">Books &amp; Station</h3>
                                             <h1 style="color:#000; text-align: center;">{{ $row->title }}</h1>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         @endforeach
                    </div>
          </div>
     </section>
       
     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>All Books Collection</h2>
                              <h4>They are nice &amp; friendly</h4>
                         </div>
                    </div>
                    @foreach($chefs as $row)
                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="{{ asset($row->image)  }}" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>নিজে বই পড়ুন অন্য কে বই পড়তে উৎসাহও দেন</h4> 
                                             
                                             <a class="social-icon" href="{{url('/download',$row->file)}}">Dodnload</a>
                                        </div>

                                   </div>
                                   
                         </div>
                         <a href="{{url('/download',$row->file)}}" class="btn btn-sm btn-info" style="width:100%;">Download</a>
                         <div class="team-info">
                              <h3>{{ $row->title }}</h3>
                              <p>{{ $row->description }}</p>
                         </div>
                    </div>
                    @endforeach
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Upcomming Books Collection</h2>
                              <h4>Welcome &amp; Book store</h4>
                         </div>
                    </div>
                    @foreach($menus as $row)
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         
                         <div class="menu-thumb">
                              <a href="#" class="image-popup" title="American Breakfast">
                                   <img src="{{  asset($row->image)  }}" class="img-responsive" alt="">

                                   <div class="menu-info" style="text-align: center;">
                                        <h3 >{{ $row->name }}</h3>
                                        <p>Yhank you.</p> 
                                   </div>
                              </a>
                         </div>

                    </div>
                    @endforeach
               </div>
          </div>
     </section>





     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>

     @endsection          


     