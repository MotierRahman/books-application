@extends('layouts.frontend.link')

@section('body')

@php 
  $chefs=DB::table('books')
        ->orderBy('id','DESC')->limit(9)->get(); 
@endphp
<div class="spacer">
     <h6>.</h6>
</div>
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
                                             
                                             <a class="social-icon" href="#">Dodnload</a>
                                        </div>

                                   </div>
                                   <button type="button" class="btn btn-sm btn-info" style="width:100%;">Download</button>
                         </div>
                         <div class="team-info">
                              <h3>{{ $row->title }}</h3>
                              <p>{{ $row->description }}</p>
                         </div>
                    </div>
                    @endforeach
                    
               </div>
          </div>
     </section>

@endsection