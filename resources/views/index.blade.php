<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>Directory Landing Page</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    {{-- For rating --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!--header-top start -->
    <header id="header-top" class="header-top">
        <ul>
            <li>
                <div class="header-top-left">
                    <ul>
                        <li class="select-opt">
                            <select name="language" id="language">
                                <option value="default">EN</option>
                                <option value="Bangla">BN</option>
                                <option value="Arabic">AB</option>
                            </select>
                        </li>
                        <li class="select-opt">
                            <select name="currency" id="currency">
                                <option value="usd">USD</option>
                                <option value="euro">Euro</option>
                                <option value="bdt">BDT</option>
                            </select>
                        </li>
                        <li class="select-opt">
                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="head-responsive-right pull-right">
                <div class="header-top-right">
                    <ul>
                        <li class="header-top-contact">
                            +1 222 777 6565
                        </li>
                        <li class="header-top-contact">
                            <a href="#">sign in</a>
                        </li>
                        <li class="header-top-contact">
                            <a href="#">register</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </header><!--/.header-top-->
    <!--header-top end -->

    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
                data-minus-value-mobile="55" data-speed="1000">

                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">list<span>race</span></a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=" scroll active"><a href="#home">home</a></li>
                            <li class="scroll"><a href="#works">how it works</a></li>
                            <li class="scroll"><a href="#explore">explore</a></li>
                            <li class="scroll"><a href="#reviews">review</a></li>
                            <li class="scroll"><a href="#blog">blog</a></li>
                            <li class="scroll"><a href="#contact">contact</a></li>
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section><!-- /.top-area-->
    <!-- top-area End -->

    <!--welcome-hero start -->
    @foreach ($homeslider as $homeslider)
        <section id="home" class="welcome-hero"
            style="background-image:url({{ filter_var($homeslider->image, FILTER_VALIDATE_URL) ? $homeslider->image : Voyager::image($homeslider->image) }}); background-repeat: no-repeat;">
            <div class="container">
                <div class="welcome-hero-txt">
                    <h2>best place to find and explore <br> that all you need </h2>
                    <p>
                        Find Best Place, Restaurant, Hotel, Real State and many more think in just One click
                    </p>
                </div>
                <div class="welcome-hero-serch-box">
                    <div class="welcome-hero-form">
                        <div class="single-welcome-hero-form">
                            <h3>what?</h3>
                            <form action="index.html">
                                <input type="text" placeholder="Ex: palce, resturent, food, automobile" />
                            </form>
                            <div class="welcome-hero-form-icon">
                                <i class="flaticon-list-with-dots"></i>
                            </div>
                        </div>
                        <div class="single-welcome-hero-form">
                            <h3>location</h3>
                            <form action="index.html">
                                <input type="text" placeholder="Ex: london, newyork, rome" />
                            </form>
                            <div class="welcome-hero-form-icon">
                                <i class="flaticon-gps-fixed-indicator"></i>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-hero-serch">
                        <button class="welcome-hero-btn" onclick="window.location.href='#'">
                            search <i data-feather="search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section><!--/.welcome-hero-->
    @endforeach

    <!--welcome-hero end -->

    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-restaurant"></i>
                            </div>
                            <h2><a href="#">resturent</a></h2>
                            <p>150 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-travel"></i>
                            </div>
                            <h2><a href="#">destination</a></h2>
                            <p>214 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <h2><a href="#">hotels</a></h2>
                            <p>185 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <h2><a href="#">healthcaree</a></h2>
                            <p>200 listings</p>
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-transport"></i>
                            </div>
                            <h2><a href="#">automotion</a></h2>
                            <p>120 listings</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>how it works</h2>
                <p>Learn More about how our website works</p>
            </div><!--/.section-header-->
            <div class="works-content">
                {{-- @foreach ($contents as $content) --}}
                <div class="row">
                @foreach ($contents as $content)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-lightbulb-idea"></i>
                            </div>
                            <h2><a href="#">{{ $content->title }}</a></h2>
                            <p>{{ $content->description }}</p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-networking"></i>
                            </div>
                            <h2><a href="#">{{ $content->title }}</a></h2>
                            <p>{{ $content->description }}</p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <i class="flaticon-location-on-road"></i>
                            </div>
                            <h2><a href="#">{{ $content->title }}</a></h2>
                            <p>{{ $content->description }}</p>
                            <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                                read more
                            </button>
                        </div>
                    </div>--}}
                @endforeach

                </div>
                {{-- @endforeach --}}
            </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->
    <section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>explore</h2>
                <p>Explore New place, food, culture around the world and many more</p>
            </div><!--/.section-header-->
            <div class="explore-content">
                <div class="row">
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e1.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2><a href="#">tommy helfinger bar</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">resturent</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e2.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">featured</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-2">
                                <h2><a href="#">swim and dine resort</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">4.5</span>
                                    <a href="#"> 8 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">50$-500$</span>
                                    </span>
                                    <a href="#">hotel</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn open-btn" onclick="window.location.href='#'">open
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e3.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-3">
                                <h2><a href="#">europe tour</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 15 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5k$-10k$</span>
                                    </span>
                                    <a href="#">destination</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e4.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">most view</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-4">
                                <h2><a href="#">banglow with swiming pool</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 10 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">10k$-15k$</span>
                                    </span>
                                    <a href="#">real estate</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e5.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">featured</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-2">
                                <h2><a href="#">vintage car expo</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">4.2</span>
                                    <a href="#"> 8 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">500$-1200$</span>
                                    </span>
                                    <a href="#">automotion</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn open-btn" onclick="window.location.href='#'">open
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e6.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-5">
                                <h2><a href="#">thailand tour</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> 15 ratings</a>
                                    <span class="explore-price-box">
                                        form
                                        <span class="explore-price">5k$-10k$</span>
                                    </span>
                                    <a href="#">destination</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close
                                                now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.explore-->
    <!--explore end -->

    <!--reviews start -->
    <section id="reviews" class="reviews">
        <div class="section-header">
            <h2>clients reviews</h2>
            <p>What our client say about us</p>
        </div><!--/.section-header-->
        <div class="reviews-content">
            <div class="testimonial-carousel">
                @foreach ($reviews as $review)
                    <div class="single-testimonial-box">
                        <div class="testimonial-description">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src={{ filter_var($review->avatar, FILTER_VALIDATE_URL) ? $review->avatar : Voyager::image($review->avatar) }}
                                        alt="clients">
                                </div><!--/.testimonial-img-->
                                <div class="testimonial-person">
                                    <h2>{{ $review->name }}</h2>
                                    <h4>{{ $review->country }}</h4>
                                    {{-- <div class="testimonial-person-star" data-rating="{{ $review->rating }}">
                                        <!-- Render stars dynamically using JavaScript -->
                                    </div> --}}
                                    <div class="testimonial-person-star">
                                        {{-- @for (var i=1; i<6; i++)
                                        <i class="fa fa-star"></i>
                                        @endfor --}}
                                        {{-- <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> --}}
                                        {{ $review->rating }}
                                    </div>
                                </div><!--/.testimonial-person-->
                            </div><!--/.testimonial-info-->
                            <div class="testimonial-comment">
                                <p> {{ $review->review }} </p>
                            </div><!--/.testimonial-comment-->
                        </div><!--/.testimonial-description-->
                    </div><!--/.single-testimonial-box-->
                @endforeach
            </div>
        </div>
    </section><!--/.reviews-->
    <!--reviews end -->

    <!-- statistics strat -->
    @foreach ($slider as $slider)
        <section id="statistics" class="statistics"
            style="background-image:url({{ filter_var($slider->image, FILTER_VALIDATE_URL) ? $slider->image : Voyager::image($slider->image) }}); background-repeat: no-repeat;">
            <div class="container">
                <div class="statistics-counter">
                    @foreach ($listings as $listing)
                        <div class="col-md-3 col-sm-6">
                            <div class="single-ststistics-box">
                                <div class="statistics-content">
                                    <div class="counter">{{ $listing->number }}</div> {{-- <span>k+</span> --}}
                                </div><!--/.statistics-content-->
                                <h3>{{ $listing->title }}</h3>
                            </div><!--/.single-ststistics-box-->
                        </div><!--/.col-->
                    @endforeach
                </div><!--/.statistics-counter-->
            </div><!--/.container-->
        </section><!--/.counter-->
    @endforeach
    <!-- statistics end -->

    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    {{-- loop for blog --}}
                    @foreach ($posts as $post)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img src= "{{ filter_var($post->image, FILTER_VALIDATE_URL) ? $post->image : Voyager::image($post->image) }}"
                                        alt="blog image">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#"> {{ $post->title }} </a></h2>
                                    <h4>posted <span>by</span> <a href="#">{{ $post->author->name }}
                                        </a>{{ $post->created_at->format('M Y') }}</h4>
                                    {{-- <div>
                                        <p class="description"> {{ $post->body }} </p>
                                        <a href="#" class="read-more" onclick="toggleDescription(event)">Read More</a>
                                    </div> --}}
                                    {{-- <p> {{ $post->meta_description }} </p> --}}
                                    {{-- <a href="#" class="read-more" onclick="toggleDescription(event)">Read More</a> --}}
                                    {{-- <p class="read-more" onclick="toggleDescription(this)">
                                        Read More
                                    </p> --}}
                                    <p>
                                        <span id="short-description">{{ $post->getShortDescription() }}</span>
                                        <span id="full-description" style="display: none;">{{ $post->description }}</span>
                                    </p>

                                    <button id="read-more-btn" onclick="toggleDescription()">READ MORE</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- loop end for blog --}}
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end -->

    <!--subscription strat -->
    <section id="contact" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    do you want to add your business listing with us?
                </h2>
                <p>
                    Listrace offer you to list your business with us and we very much able to promote your Business.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscription-input-group">
                        <form action="#">
                            <input type="email" class="subscription-input-form"
                                placeholder="Enter your email here">
                            <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                                create account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/subscription-->
    <!--subscription end -->

    <!--footer start-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer-menu">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">list<span>race</span></a>
                        </div><!--/.navbar-header-->
                    </div>
                    <div class="col-sm-9">
                        <ul class="footer-menu-item">
                            <li class="scroll"><a href="#works">how it works</a></li>
                            <li class="scroll"><a href="#explore">explore</a></li>
                            <li class="scroll"><a href="#reviews">review</a></li>
                            <li class="scroll"><a href="#blog">blog</a></li>
                            <li class="scroll"><a href="#contact">contact</a></li>
                            <li class=" scroll"><a href="#contact">my account</a></li>
                        </ul><!--/.nav -->
                    </div>
                </div>
            </div>
            <div class="hm-footer-copyright">
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            &copy;copyright. designed and developed by <a
                                href="https://www.themesine.com/">themesine</a>
                        </p><!--/p-->
                    </div>
                    <div class="col-sm-7">
                        <div class="footer-social">
                            <span><i class="fa fa-phone"> +1 (222) 777 8888</i></span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div><!--/.hm-footer-copyright-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top"
                    title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script src="assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="assets/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

    {{-- <script>
            function toggleDescription(event) {
                event.preventDefault();
                const description = document.querySelector('.description');
                description.classList.toggle('expanded');
            }
        </script> --}}

    {{-- <script>
            function toggleDescription(element) {
                const description = element.parentNode;
                description.classList.toggle('expanded');
                element.textContent = description.classList.contains('expanded') ? 'Read Less' : 'Read More';
            }
        </script> --}}

    <script>
        function toggleDescription() {
            var shortDesc = document.getElementById('short-description');
            var fullDesc = document.getElementById('full-description');
            var btn = document.getElementById('read-more-btn');

            if (shortDesc.style.display === 'none') {
                shortDesc.style.display = 'inline';
                fullDesc.style.display = 'none';
                btn.innerHTML = 'READ MORE';
            } else {
                shortDesc.style.display = 'none';
                fullDesc.style.display = 'inline';
                btn.innerHTML = 'READ LESS';
            }
        }
    </script>

    {{-- <script>
        $(document).ready(function() {
            $('.testimonial-person-star').each(function() {
                var rating = $(this).data('rating');
                renderStars($(this), rating);
            });

            function renderStars(container, rating) {
                container.empty();
                for (var i = 1; i <= 5; i++) {
                    var star = $('<i class="fa fa-star"></i>');
                    if (i <= rating) {
                        star.addClass('rated');
                    }
                    container.append(star);
                }
            }
        });
    </script> --}}

</body>

</html>
