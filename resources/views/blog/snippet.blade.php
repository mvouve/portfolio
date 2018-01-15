<article class="blog-post">
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
            <a href="#">By {{ $post->author->display_name }}</a>
        </li>
        <!--<li>
            <i class="fa fa-comments"></i>
            <a href="#">10 Comments</a>
        </li>-->
    </ul>
    <!-- Blog Post Info Ends -->
    <!-- Blog Title Starts -->
    <h5 class="blog-title">
        <a href="{{ url('blog/' . $post->slug ) }}">{{$post->title}}</a>
    </h5>
    <!-- Blog Title Ends -->
    <!-- Blog Post Content Starts -->
    <div class="blog-post-content">
        <p>
           {{str_limit($post->body, 300) }}
        </p>
        <hr class="space-block tiny">
        <p>
            <a href="{{ url('blog/' . $post->slug ) }}" class="more-link">
                Read More
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </p>
    </div>
    <!-- Blog Post Content Ends -->
</article>