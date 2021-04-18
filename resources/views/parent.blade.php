<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('icons/font/bootstrap-icons.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/img/logoEduApp.png') }}">


    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/logoEduApp.png') }}">

   <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logoEduApp.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logoEduApp.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logoEduApp.png') }}">

    <title>EduApp</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/pe-icons.css') }}" rel="stylesheet">

</head>

<body id="page-top" class="index">
<div class="master-wrapper">
    <div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><img src="{{ asset('assets/img/loading.GIF') }}" alt="loading"/></span>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
        <div class="top-bar smoothie hidden-xs">
            <div class="container">
                <div class="clearfix">
                    <ul class="list-inline social-links wow pull-left">
                        <li style="background-color: #5bc0de">
                            <a href="#"><i class="fa fa-twitter"  style="font-size: 2rem"></i></a>
                        </li>
                        <li style="background-color: #0a53be">
                            <a href="#"><i class="fa fa-facebook" style="font-size: 2rem" ></i></a>
                        </li>
                        <li style="background-color: #0a53be">
                            <a href="#"><i class="fa fa-linkedin-square" style="font-size: 2rem"></i></a>
                        </li>
                    </ul>
                    <div class="pull-right text-right">
                        <ul class="list-inline">
                            <li>
                                <div><i class="fa fa-envelope-o" style="font-size: 2rem"></i>eduapp@gmail.com</div>
                            </li>
                            <li>
                                <div class="meta-item"><i class="fa fa-mobile" style="font-size: 2rem; background-color: black"></i> 78 277 71 40</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothie logo logo-light" href=""><img src="{{ asset('assets/img/logoEduApp.png') }}" alt="logo" width="100" height="100"></a>
                <a class="navbar-brand smoothie logo logo-dark" href=""><img src="{{ asset('assets/img/logoEduApp.png') }}" alt="logo" width="80" height="80">EDUAPP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    </li>
                    <li><a href="">Services</a></li>


                    <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                </ul>
            </div>

        </div>

    </nav>

    <div id="search-wrapper">
        <button type="button" class="close">×</button>
        <div class="vertical-center text-center">
            <form>
                <input type="search" value="" placeholder="Enter Search Term" />
                <button type="submit" class="btn btn-primary btn-white">Search</button>
            </form>
        </div>
    </div>

    <!-- Header -->
    <header id="headerwrap" class="backstretched fullheight">
        <div class="container vertical-center">
            <div class="intro-text vertical-center text-left smoothie">
                <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Le site des universités</div>
                <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Venez <span class="rotate">chercher tout les infos concernant les universités Sénégalais</span></div>
            </div>
        </div>
    </header>

</div>



@yield('content')







<footer class="white-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list-inline social-links wow">
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>

            <hr class="thin-hr" />

            <div class="col-md-12 text-center wow">
                <span class="copyright">Copyright 2021.</span>
            </div>
        </div>
    </div>
</footer>






<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('assets/js/init.js') }}"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>

<script src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([

            "assets/img/bg/ucad1.jpeg",
            "assets/img/bg/ucad2.jpeg",
            "assets/img/bg/ucad4.jpeg",
            "assets/img/bg/ugbs.jpeg",
            "assets/img/bg/ugbs1.jpeg",
            "assets/img/bg/uvs0.png"


        ], {
            duration: 8000,
            fade: 500
        });
    });
</script>






</body>

</html>
