<!DOCTYPE html>
<html lang="en">
<head>

     <title>Book-store</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
@php 
    $setting=DB::table('settings')
        ->orderBy('id','DESC')->limit(1)->get();
        

@endphp
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{  asset('frontend/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{  asset('frontend/css/font-awesome.min.css')  }}">
     <link rel="stylesheet" href="{{  asset('frontend/css/animate.css')  }}">
     <link rel="stylesheet" href="{{  asset('frontend/css/owl.carousel.css')  }}">
     <link rel="stylesheet" href="{{  asset('frontend/css/owl.theme.default.min.css')  }}">
     <link rel="stylesheet" href="{{  asset('frontend/css/magnific-popup.css')  }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{  asset('frontend/css/templatemo-style.css')  }}">

</head>
<body>
     

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    @foreach($setting as $row)
                    <a href="/" class="navbar-brand">{{ $row->logoname }}</a>
                    @endforeach
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="/" class="smoothScroll">Home</a></li>
                         <li><a href="/About" class="smoothScroll">About</a></li>
                         <li><a href="/Books" class="smoothScroll">Books</a></li>
                         <li><a href="/Menu" class="smoothScroll">Upcomming Books</a></li>
                         <li><a href="/Blog" class="smoothScroll">Blog</a></li>
                         <li><a href="/Contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                         <a href="/Login" class="section-btn">Submit Assignment</a>
                    </ul>
               </div>

          </div>
     </section>

     @yield('body')


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   @foreach($setting as $row)
               
                    
                                   <p>{{ $row->address_one }},<br> {{ $row->address_two }}, <br>{{ $row->address_three }}.</p>
                                   @endforeach
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Reservation</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   
                                   @foreach($setting as $row)
                                   <p>{{ $row->number }}</p>
                                   

                                   <p><a href="mailto:info@company.com">{{ $row->email }}</a></p>
                                   <p>LINE: {{ $row->line }} </p>
                                   @endforeach
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              @foreach($setting as $row)
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>{{ $row->closed_day }}: Closed</p>
                                   <div>
                                        <strong>{{ $row->open_day_one }}</strong>
                                        <p>{{ $row->open_day_time_one }}</p>
                                   </div>
                                   <div>
                                        <strong>{{ $row->open_day_two }}</strong>
                                        <p>{{ $row->open_day_time_two }}</p>
                                   </div>
                              </div>
                              @endforeach
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p><br>Copyright &copy; 2021 <br>MD Motier Rahaman.
                              
                              <br><br>Design By:MD Motier Rahaman</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="{{  asset('frontend/js/jquery.js')  }}"></script>
     <script src="{{  asset('frontend/js/bootstrap.min.js')  }}"></script>
     <script src="{{  asset('frontend/js/jquery.stellar.min.js')  }}"></script>
     <script src="{{  asset('frontend/js/wow.min.js')  }}"></script>
     <script src="{{  asset('frontend/js/owl.carousel.min.js')  }}"></script>
     <script src="{{  asset('frontend/js/jquery.magnific-popup.min.js')  }}"></script>
     <script src="{{  asset('frontend/js/smoothscroll.js')  }}"></script>
     <script src="{{  asset('frontend/js/custom.js')  }}"></script>

</body>
</html>