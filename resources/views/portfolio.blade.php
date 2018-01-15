@extends('layout')
@section('content')
<!-- Main Banner Starts -->
<section class="main-banner two parallax">
    <h2 class="text-uppercase">Portfolio</h2>
</section>
<!-- Main Banner Ends -->
<!-- Content Area Starts -->
<div id="content-area" class="container">
    <!-- Portfolio Gallery Filters Starts -->
    <ul id="gallery-filter" class="list-unstyled list-inline">
        <li>
            <a href="#" class="active" data-group="all">
                Show All
            </a>
        </li>
        @each('portfolio.categoryfliter', $categories, 'category', 'portfolio.empty')
    </ul>
    <!-- Portfolio Gallery Filters Ends -->
    <!-- Portfolio Gallery Starts -->
    <ul id="gallery-grid" class="row col4">
        @each('portfolio.snippet', $posts, 'post')
    </ul>
    <!-- Portfolio Gallery Ends -->
</div>
<!-- Content Area Ends -->
@endsection