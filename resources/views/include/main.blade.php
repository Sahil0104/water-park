<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- ===== Mobile viewport optimized ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"
    />
    <!-- ===== Meta Tags - Description for Search Engine purposes ===== -->
    <meta name="description" content="Swimmerland - Water Park HTML Template" />
    <meta
      name="keywords"
      content="water park, pool, summer, swimming, swimmerland"
    />
    <meta name="author" content="GnoDesign" />

    <!-- ===== Website Title ===== -->
    <title>Water Park</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link
      rel="apple-touch-icon-precomposed"
      href="images/apple-touch-icon.png"
    />

    <!-- ===== Google Fonts ===== -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans"
      rel="stylesheet"
    />

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/shuffle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
    
  </head>

  <body>
    <!-- ===== Start of Header ===== -->
    @include( 'include.header' )
    <!-- ===== End of Header ===== -->

    <!-- ===== Main Section - Slider ===== -->
    <div>
        @yield('content')
    </div>
    


    <!-- ===== Start of Footer ===== -->
    @include('include.footer')
    <!-- ===== End of Footer ===== -->

    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/modernizr.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/calendar.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
  </body>
</html>
