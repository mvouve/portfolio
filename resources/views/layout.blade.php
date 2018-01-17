<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Marc Vouve">

    <title>Marc Vouve</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">

    <!-- Template CSS Files  -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/camera.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
    <link rel="shortcut icon" href="images/fav.png">

</head>
<body>
<!-- Header Starts -->
<header class="header">
    <!-- Header Top Bar Starts -->
    <div class="top-bar hidden-xs">
        <div class="container">
            <!-- Left List Starts -->
            <ul class="list-unstyled list-inline pull-left">
                <li>
                    <i class="fa fa-map-marker"></i>{{ config('app.location') }}</li>
                <li>
                    <i class="fa fa-envelope"></i><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                </li>
            </ul>
            <!-- Left List Ends -->
            <!-- Right List Starts -->
            <ul class="list-unstyled list-inline pull-right">
                <li>
                    <i class="fa fa-phone"></i>
                    {{ config('app.phone') }}
                </li>
                <li>&nbsp;</li>
                <li><a href="{{ config('app.linkedin') }}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{ config('app.github') }}"><i class="fa fa-github"></i></a></li>
                <li><a href="{{ config('app.bitbucket') }}"><i class="fa fa-bitbucket"></i></a></li>
            </ul>
            <!-- Right List Ends -->
        </div>
    </div>
    <!-- Header Top Bar Ends -->
    <!-- Navbar Starts -->
    <div id="nav" class="navbar navbar-default navbar-static-top" role="navigation">
        <!-- Container Starts -->
        <div class="container">
            <!-- Navbar Header Starts -->
            <div class="navbar-header">
                <!-- Collapse Button Starts -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collapse Button Ends -->
                <!-- Logo Starts -->
                <a href="{{ url("/") }}" class="navbar-brand">
                    <img class="img-responsive" src="/images/logo.png" alt="Logo">
                </a>
                <!-- Logo Ends -->
            </div>
            <!-- Navbar Header Ends -->
            <!-- Navbar Collapse Starts -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ (Request::path() == '/')?"active":"" }}"><a href="{{ url("/") }}">Home</a></li>
                    <li class="{{ (Request::path() == 'about' || Request::path() == 'resume'|| Request::path() == 'courses')?"active":"" }} dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            About<i class="fa fa-angle-down"></i>
                        </a>
                        <ul  class="dropdown-menu" role="menu">
                            <li><a href="{{ url("about") }}">About Me</a></li>
                            <li><a href="{{url("resume") }}">Resume</a></li>
                            <li><a href="{{url("courses") }}">Courses</a></li>
                        </ul>
                    </li>
                    <li class="{{ ( Request::is('project/*') ||Request::is('portfolio/*') ||Request::path() == 'portfolio')?"active":"" }}"><a href="{{url("portfolio")}}">Portfolio</a></li>
                    <li class="{{ (Request::is('blog/*') ||Request::path() == 'blog')?"active":"" }}"><a href="{{url("blog")}}">Blog</a></li>
                    <li class="{{ (Request::path() == 'contact')?"active":"" }}"><a href="{{ url("contact") }}">Contact Me</a></li>
                </ul>
            </div>
            <!-- Navbar Collapse Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Navbar Ends -->
</header>
<!-- Header Ends -->
@yield('content')
<!-- Footer Starts -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Address Starts -->
            <!-- Address Ends -->
            <!-- Follow Us Starts -->
            <div class="col-sm-4 col-xs-12">
                <div class="foot-column">
                    <h4 class="text-uppercase light">Follow Me</h4>
                    <ul class="list-unstyled list-inline social-media-links">
                        <li><a href="{{ config('app.linkedin') }}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="{{ config('app.github') }}"><i class="fa fa-github"></i></a></li>
                        <li><a href="{{ config('app.bitbucket') }}"><i class="fa fa-bitbucket"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Follow Us Ends -->
            <!-- E-mail Us Starts -->
            <div class="col-sm-4 col-xs-12">
                <div class="foot-column">
                    <h4 class="text-uppercase light">E-mail Me</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- E-mail Us Ends -->
            <!-- Contact Us Starts -->
            <div class="col-sm-4 col-xs-12">
                <div class="foot-column last">
                    <h4 class="text-uppercase light">Contact Me</h4>
                    <ul class="list-unstyled">
                        <li>{{ config('app.phone') }}</li>
                    </ul>
                </div>
            </div>
            <!-- Contact Us Ends -->
        </div>
    </div>
    <!-- Copyright Starts -->
    <div class="copyright text-center">
        Marc Vouve &copy; 2018 All Rights Reserved. Based off
        Architect &copy; 2015 All Rights Reserved. Designed by <a href="http://www.sainathchillapuram.com">Sainath Chillapuram</a>
    </div>
    <!-- Copyright Ends -->
</footer>
<!-- Footer Ends -->
<!-- Template JS Files -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mobile.customized.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/camera.min.js"></script>
<script src="js/jquery.shuffle.modernizr.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/custom.js"></script>
</body>
</html>