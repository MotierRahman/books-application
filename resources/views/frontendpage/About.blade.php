@extends('layouts.frontend.link')

@section('body')

@php 
   

        $chefs=DB::table('team')
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
                              <h2>Meet our Team</h2>
                              <h4>They are nice &amp; friendly</h4>
                         </div>
                    </div>
                    @foreach($chefs as $row)
                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="{{ asset($row->image)  }}" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>{{ $row->name }}</h3>
                              <p>{{ $row->position }}</p>
                         </div>
                    </div>
                    @endforeach
                    
               </div>
          </div>
     </section>





@endsection