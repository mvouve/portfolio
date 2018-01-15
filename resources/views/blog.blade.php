@extends('layout')
@section('content')
<!-- Main Banner Starts -->
<section class="main-banner one parallax">
    <h2 class="text-uppercase">Blog</h2>
</section>
<!-- Main Banner Ends -->
<!-- Content Area Starts -->
<div id="content-area" class="container">
    <!-- Row Starts -->
    <div class="row">
        <!-- Mainarea Starts -->
        <div class="col-md-8 col-xs-12">
            <h3 class="main-heading">Blog List</h3>
            @each('blog.snippet', $posts, 'post', 'blog.empty')
            <!-- Pagination Starts -->
            {{ $posts->links() }}
            <!-- Pagination Ends -->
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