@extends('layout')
@section('content')
<!-- Slider Section Starts -->
<section class="slider clearfix">
    <div id="camera_wrap_1" class="camera_wrap">
        <!-- Slide #1 Starts -->
        <div data-src="images/slider/slider-img1.jpg">
            <div class="camera_caption fadeFromLeft hidden-xs">
                <h1>Professional <br>Software Engineering</h1>
            </div>
        </div>
        <!-- Slide #1 Ends -->
        <!-- Slide #2 Starts -->
        <div data-src="images/slider/slider-img2.jpg">
            <div class="camera_caption fadeFromLeft hidden-xs">
                <h1>Reliable <br>Results</h1>
            </div>
        </div>
        <!-- Slide #2 Ends -->
    </div>
</section>
<!-- Slider Section Ends -->
<!-- Welcome Section Starts -->
<section class="welcome">
    <div class="container text-center">
        <!-- Intro Text Starts -->
        <div class="intro">
            <h2 class="main-color text-uppercase">Welcome</h2>
            <h4>I am a professional software engineer capable of building a project to suit your needs.</h4>
        </div>
        <!-- Intro Text Ends -->
        <!-- Welcome Boxes Starts -->
        <div class="row">
            <!-- Box #1 Starts -->
            <div class="col-md-4 col-xs-12">
                <div class="welcome-box">
                    <h3 class="main-color text-uppercase">Who i Am</h3>
                    <p>
                        <img src="images/home/home-img1.jpg" alt="Who i Am" class="img-responsive">
                    </p>
                    <p>
                        I am a software developer living in Orange County, California. I completed a Bachelor of Technology in Computer Systems Technology at the British Columbia Institute of Technology in 2017.
                    </p>
                </div>
            </div>
            <!-- Box #1 Ends -->
            <!-- Box #2 Starts -->
            <div class="col-md-4 col-xs-12">
                <div class="welcome-box">
                    <h3 class="main-color text-uppercase">What i Offer</h3>
                    <p>
                        <img src="images/home/home-img2.jpg" alt="What i Offer" class="img-responsive">
                    </p>
                    <p>
                        I offer professional software development techniques with the aim of creating secure software for you or your company in a timely fassion.
                    </p>
                </div>
            </div>
            <!-- Box #2 Ends -->
            <!-- Box #3 Starts -->
            <div class="col-md-4 col-xs-12">
                <div class="welcome-box">
                    <h3 class="main-color text-uppercase">My Design Philosophy</h3>
                    <p>
                        <img src="images/home/home-img3.jpg" alt="My Creative Ideas" class="img-responsive">
                    </p>
                    <p>
                        <strong>Design early and refine often.</strong> My design philosophy is to begin design before development begins, and to ensure that all requirements can be met while maintaining stakeholder engagement and managing expectations.
                    </p>
                </div>
            </div>
            <!-- Box #3 Ends -->
        </div>
        <!-- Welcome Boxes Ends -->
    </div>
</section>
<!-- Welcome Section Starts -->
<!-- Quote Carousel Starts -->
<section class="quote-carousel parallax">
    <div class="container text-center">
        <h3 class="main-heading inverse center">What Makes Me Different</h3>
        <!-- Carousel Starts -->
        <div id="quote-carousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper For Sliders Starts -->
            <div class="carousel-inner">
                <!-- Quote #1 Starts -->
                <div class="item active">
                    <p>
                        <img src="images/home/quote-carousel-img1.jpg" alt="Image" class="img-responsive">
                    </p>
                    <p>
                        With increasing numbers cyber attacks, its important to hire a developer who understands the risks and how to mitigate them. My training can help you or your company protect yourself against the risks associated with the modern Internet.
                    </p>
                </div>
                <!-- Quote #1 Ends -->
                <!-- Quote #2 Starts -->
                <div class="item">
                    <p>
                        <img src="images/home/quote-carousel-img2.jpg" alt="Image" class="img-responsive">
                    </p>
                    <p>
                        Many modern software projects require multiple programming languages, through my experience in school, at work, and on my own time I have become proficient in C, C++, Golang, SQL, PHP, Java, Android, Win32, Linux System programming, JavaScript, CSS and HTML and have worked on various levels of software projects.
                    </p>
                </div>
                <!-- Quote #2 Ends -->
                <!-- Quote #3 Starts -->
                <div class="item">
                    <p>
                        <img src="images/home/quote-carousel-img3.jpg" alt="Image" class="img-responsive">
                    </p>
                    <p>
                        Leadership skills are important at all levels of an organization. Through my time as a councilor on the BCITSA, as well as as a Set-Rep I learned valuable leadership skills and was even honored with the Set-Rep of the Year award in 2016.
                    </p>
                </div>
                <!-- Quote #3 Ends -->
            </div>
            <!-- Wrapper For Sliders Ends -->
            <!-- Indicators Starts -->
            <ol class="carousel-indicators">
                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#quote-carousel" data-slide-to="1"></li>
                <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>
            <!-- Indicators Ends -->
        </div>
        <!-- Carousel Ends -->
    </div>
</section>
<!-- Quote Carousel Ends -->
@endsection