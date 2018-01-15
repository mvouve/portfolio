<li class="row">
    <div class="col-xs-4">
        <img src="{{ $post->featured_image }}" alt="Blog Post Image" class="img-responsive recent-post-block-img">
    </div>
    <div class="col-xs-8">
        <h5 class="recent-post-block-title">
            <a href="{{url("blog/" . $post->slug)}}">{{ $post->title }}</a>
        </h5>
        <ul class="list-unstyled list-inline recent-post-block-meta">
            <li><i class="fa fa-calendar-o"></i>{{ $post->created_at->toFormattedDateString() }}</li>
            <li><i class="fa fa-user"></i> <a href="#">By {{ $post->author->display_name }}</a></li>
        </ul>
        <p>
            {{ str_limit($post->body, 70, '...' ) }}
        </p>
    </div>
</li>