<!-- Sidearea Starts -->
<div class="col-md-4 col-xs-12">
    <!-- Categories Starts -->
    <h3 class="main-heading">Categories</h3>
    <ul class="list-unstyled side-list-1">
        @each('blog.categorylist', $categories, 'category')
    </ul>
    <!-- Categories Ends -->
    <!-- Spacer Starts -->
    <hr class="space-block small">
    <!-- Spacer Ends -->
    <!-- Recent Posts Starts -->
    @include('blog.widget')
            <!-- Recent Posts Ends -->
    <!-- Spacer Starts -->
    <hr class="space-block small">
    <!-- Spacer Ends -->
    <!-- Recent Comments Starts
    <h3 class="main-heading">Recent Comments</h3>
    <ul class="list-unstyled recent-comments-block">
        <!-- Recent Comment #1 Starts
        <li>
            <div class="clearfix">
                <img src="images/blog/avatar-1.jpg" alt="Avatar" class="img-responsive pull-left recent-comments-block-img">
                <h6>Super Admin</h6>
                <p class="details"><a href="#">Jan 12, 2015 |  16.45</a></p>
            </div>
            <p>
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </li>
        Recent Comment #1 Ends -->
    <!-- Recent Comment #2 Starts -->
    <!-- Spacer Starts -->
    <hr class="space-block small">
    <!-- Spacer Ends -->
    <!-- Archives Starts
    <h3 class="main-heading">Archives</h3>
    <ul class="list-unstyled side-list-1">
        <li><a href="#">December 2014</a></li>
        <li><a href="#">November 2014</a></li>
        <li><a href="#">October 2014</a></li>
        <li><a href="#">September 2014</a></li>
        <li><a href="#">August 2014</a></li>
        <li><a href="#">July 2014</a></li>
        <li><a href="#">June 2014</a></li>
        <li><a href="#">May 2014</a></li>
        <li><a href="#">April 2014</a></li>
    </ul>
    <!-- Archives Ends -->
</div>
<!-- Sidearea Ends -->