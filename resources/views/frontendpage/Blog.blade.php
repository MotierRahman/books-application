@extends('layouts.frontend.link')

@section('body')

@php 
  $blog=DB::table('blog')
        ->orderBy('id','DESC')->limit(100)->get(); 
@endphp
<div class="spacer">
     <h6>.</h6>
</div>
<section class="py-5">
     
</section>
    @foreach($blog as $row)
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   
                                   <h2>{{ $row->title }}</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>{{ $row->description }}.</p>
                              </div>
                         </div>
                    </div>


                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="{{ $row->image }}" class="img-responsive" alt="">
                         </div>
                    </div>
          

                    
               </div>
          </div>
     </section>
     @endforeach
    
     <section class="py-5"></section>

@endsection