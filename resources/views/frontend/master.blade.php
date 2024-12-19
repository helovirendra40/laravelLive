
<!DOCTYPE html>
<html lang="en">
  
<!-- index-two18:22  -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>VidyaLive</title>
        <!-- Css Files -->
    
        <link rel="stylesheet" href="{{ asset("assets/frontend/css/bootstrap.css") }}"/> 
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color-two.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color-three.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/color-four.css") }}"/>  
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/font-awesome.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/flaticon.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/slick-slider.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/slick-theme.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/prettyphoto.css") }}"/>   
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/responsive.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/owl.carousel.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/owl.theme.default.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/frontend/css/style.css") }}"/>
    <link rel='stylesheet' href='https://unpkg.com/swiper@6.8.1/swiper-bundle.min.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    </head>
    <body>
        <div class="wm-main-wrapper">
               <!--//  Banner start \\-->
             
            <!--// Banner End \\-->
            <x-frontend.header/>
           
                @yield("content")
            <x-frontend.footer/>   
                
            <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/prettyphoto.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/jquery.mCustomScrollbar.js') }}"></script>
            <script src="{{ asset('assets/frontend/build/mediaelement-and-player.js') }}"></script>
            <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
            <script src="{{ asset("assets/frontend/js/jQuery_v3.4.1_min.js") }}"></script>
            {{-- <script src="{{ asset("js/bootstrap_v4.3.1_min.js") }}"></script> --}}
            <script src="{{ asset("assets/frontend/js/owl.carousel.min.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/typed.min.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/slick.min.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/custom.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/customjs.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/slide.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/slider.js") }}"></script>
            <script src="{{ asset("assets/frontend/js/tab.js") }}"></script> 
            <script src="{{ asset("assets/frontend/js/filter.js") }}"></script> 
            <script src="{{ asset("assets/frontend/js/swipe.js") }}"></script> 
            <script src='https://unpkg.com/swiper@6.8.1/swiper-bundle.min.js'></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            @yield("script")
        </div>
    </body>
</html>