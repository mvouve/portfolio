@extends('layout')
@section('content')
<!-- Main Banner Starts -->
<section class="main-banner three parallax">
    <h2 class="text-uppercase">Contact Me</h2>
</section>
<!-- Main Banner Ends -->
<!-- Content Area Starts -->
<div id="content-area" class="container">
    <h3 class="main-heading center">Where to Find Me</h3>
    <!-- Google Map Starts -->
    <div class="map"></div>
    <!-- Google Map Ends -->
    <!-- Row Starts -->
    <div class="row text-center-xs">
        <!-- Sidearea Starts -->
        <div class="col-sm-4 col-xs-12">
            <h3 class="main-heading">Contact Info</h3>
            <p class="bold">
                I'd love to talk about future opportunities or things I have written on this website. Please contact me by phone or email to chat.
            </p>
            <ul class="list-unstyled address-list">
                <li class="clearfix">
                    <i class="fa fa-phone-square pull-left"></i>
                    <a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a>
                </li>
                <li class="clearfix">
                    <i class="fa fa-envelope pull-left"></i>
                    <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                </li>
            </ul>
        </div>
        <!-- Sidearea Ends -->
        <!-- Mainarea Starts -->
        <div class="col-sm-8 col-xs-12">
            <h3 class="main-heading">Contact Form</h3>
            <p>
                Alternatively, use this form to send me an email.
            </p>
            <!-- Contact Form Starts -->
            <div class="status alert alert-success contact-status"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                <div class="row">
                    <!-- Name Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name: </label>
                            <input type="text" class="form-control" name="name" id="name" required="required" placeholder="NAME">
                        </div>
                    </div>
                    <!-- Name Field Ends -->
                    <!-- Email Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email: </label>
                            <input type="text" class="form-control" name="email" id="email" required="required" placeholder="EMAIL">
                        </div>
                    </div>
                    <!-- Email Field Ends -->
                    <!-- Phone No Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneno" class="sr-only">Phone No: </label>
                            <input type="text" class="form-control" name="phoneno" id="phoneno" required="required" placeholder="PHONE NO">
                        </div>
                    </div>
                    <!-- Phone No Field Ends -->
                    <!-- Subject Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject: </label>
                            <input type="text" class="form-control" name="subject" id="subject" required="required" placeholder="SUBJECT">
                        </div>
                    </div>
                    <!-- Subject Field Ends -->
                    <!-- Message Field Starts -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="message" class="sr-only">Message: </label>
                            <textarea class="form-control" rows="8" name="message" id="message" required="required" placeholder="MESSAGE"></textarea>
                        </div>
                    </div>
                    <!-- Message Field Ends -->
                    <div class="col-xs-12">
                        <input type="submit" class="btn btn-lg btn-main" value="Submit Form">
                    </div>
                </div>
            </form>
            <!-- Contact Form Ends -->
        </div>
        <!-- Mainarea Ends -->
    </div>
    <!-- Row Ends -->
</div>
<!-- Content Area Ends -->
@endsection