
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="NSC Restaurant is a simple restaraunt website for restaurant business" />
    <meta name="keywords" content="restaurant, pizza, burger, business, house, online, delevery, html, coffee, cafe, bar" />
    <meta name="author" content="BDEXPERT" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    
    <!--====== TITLE TAG ======-->
    <title>Inicio NSC Restaurant</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('img/favicon.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typed.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="style-classic">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"><i class="fa fa-cutlery"></i></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
        <header class="top-area cooking-effect" id="home">
            <div class="top-area-bg"><div class="Background"><canvas class="Background-canvas"></canvas></div></div>
            <div class="header-top-area">
                @include('top-header')
                @include('nav')
            </div>
                @include('slideshow')
        </header>
    <!--END TOP AREA-->

    <!--ABOUT AREA-->
        @include('about-us')
    <!--ABOUT AREA END-->

    <!--PROMOTIONS AREA-->
        @include('promotions')
    <!--PROMOTIONS AREA END-->

    <!--CARTA AREA-->
        @include('menus')
    <!--CARTA AREA END-->

    <!--RESERVATION BUTTON AREA-->
        <section class="reservation-button-area section-padding" id="reservation-button">
            <div class="reservation-button-area-bg" data-stellar-background-ratio="0.6"></div>
            <div class="container">
                @include('reservation-button-parallax')
                @include('reservation-form')
            </div>
        </section>
    <!--RESERVATION BUTTON AREA END-->

    <!--TEAM AREA-->
        @include('chefs-area')
    <!--TEAM AREA END-->
    
    <!--INSTAGRAM GALLERY -->
        @include('image-gallery')
    <!-- INSTAGRAM GALLERY -->

    <!--BLOG AREA
    <section class="blog-area section-padding" id="blog">
        <div class="blog-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="area-title text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row post-slider">
                <div class="col-xl-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Recieved first day first reservation</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 February, 2017</a> - <a href="#">5 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Home to get your home delevery ?</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 February, 2017</a> - <a href="#">5 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Restaurant welcome day meetup</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 February, 2017</a> - <a href="#">5 Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    BLOG AREA END-->

    <!--INSTAGRAM GALLERY FEED
    <section class="gallery-area section-padding bg-white" id="gallery">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="instagram-feed-content text-center">
                        <div class="instagram" id="instagram"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   INSTAGRAM GALLERY FEED END-->

    <!--FOOER AREA-->
        @include('footer')
    <!--FOOER AREA END-->

    <!-- Terminos y Condiciones -->
        @include('terminos-condiciones')

    <!-- Política de privacidad -->
        @include('politica-privacidad')

    <!--====== SCRIPTS JS ======-->
        @include('scripts-files')
</body>

</html>