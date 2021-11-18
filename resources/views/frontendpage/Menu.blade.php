@extends('layouts.frontend.link')

@section('body')
@php 
 $menus=DB::table('menus')
        ->orderBy('id','DESC')->limit(9)->get();
@endphp
<div class="spacer">
     <h6>.</h6>
</div>

	
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
     

@endsection