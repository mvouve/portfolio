@extends('layout')
@section('content')
<!-- Content Area Starts -->
<div id="content-area" class="container">
    <!-- Row Starts -->
    <div class="row">
        <!-- Mainarea Starts -->
        <div class="col-md-8 col-xs-12">
            <!-- Blog Single Post Starts -->
            <article class="blog-post single">
                <!-- Blog Media Starts -->
                <div class="blog-media">
                    <img src="{{ $post->featured_image }}" alt="Blog Title" class="img-responsive">
                </div>
                <!-- Blog Media Ends -->
                <!-- Blog Post Info Starts -->
                <ul class="post-info list-unstyled list-inline">
                    <li>
                        <i class="fa fa-calendar-o"></i>
                        Posted on {{ $post->created_at->toFormattedDateString() }}
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <a href="#">By Super Admin</a>
                    </li>
                   {{--<li>
                        <i class="fa fa-comments"></i>
                        <a href="#">10 Comments</a>
                    </li>--}}
                </ul>
                <!-- Blog Post Info Ends -->
                <!-- Blog Title Starts -->
                <h5 class="blog-title">
                    {{ $post->title }}
                </h5>
                <!-- Blog Title Ends -->
                <!-- Blog Post Content Starts -->
                <div class="blog-post-content">
                    {{ $post->body }}
                </div>
                <!-- Blog Post Content Ends -->
            </article>
            <!-- Blog Single Post Ends -->
            {{--<!-- Author Bio Starts
            <div class="blog-author-bio">
                <h5>About the Author</h5>
                <div class="row">
                    <div class="col-xs-3 author-bio-img">
                        <img src="images/blog/author-bio-img1.jpg" alt="Author Name" class="img-responsive">
                    </div>
                    <div class="col-xs-9">
                        <p class="text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Author Bio Ends -->
            <!-- Comments Display Starts
            <div class="comments-area">
                <h5 class="main-heading">Comments (3)</h5>
                <!-- Comment #1 Starts
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="images/avatar/avatar-1.png" alt="Avatar">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading">Super Admin</h6>
                        <p class="date"><a href="#">Jan 12, 2015 | 16.45</a></p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        </p>
                        <ul class="list-unstyled list-inline comments-btn">
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-mail-forward"></i></a></li>
                        </ul>
                        <!-- Nested Comment #1 Starts
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/avatar/avatar-1.png" alt="Avatar">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading">Super Admin</h6>
                                <p class="date"><a href="#">Jan 12, 2015 | 16.45</a></p>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                </p>
                                <ul class="list-unstyled list-inline comments-btn">
                                    <li><a href="#">0</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-mail-forward"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Nested Comment #1 Ends
                    </div>
                </div>
                 Comment #1 Ends
            </div>
            <!-- Comments Display Ends -->
            <!-- Comments Form Starts
            <div class="comment-form">
                <h5 class="main-heading">Leave Your Comments</h5>
                <form role="form">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control text-uppercase no-border-radius" placeholder="NAME">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control text-uppercase no-border-radius" placeholder="EMAIL">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control text-uppercase no-border-radius" rows="5" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-main text-uppercase no-border-radius" value="Post Comment">
                        </div>
                    </div>
                </form>
            </div>
            <!-- Comments Form Ends -->--}}
            <!-- Spacer Starts -->
            <hr class="space-block medium hidden-lg hidden-md">
            <!-- Spacer Ends -->
        </div>
        <!-- Mainarea Ends -->
        @include('blog.sidebar')
    </div>
    <!-- Row Ends -->
</div>
<!-- Content Area Ends -->
@endsection