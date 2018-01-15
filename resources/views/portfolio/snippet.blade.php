<li class="col-md-3 col-sm-6 col-xs-12 gallery-grid" data-groups='["all"@foreach($post->categories as $category),"{{ $category->slug }}"@endforeach]'>
    <img src="{{$post->featured_image }}" alt="Gallery Image1" class="img-responsive">
    <h5>{{$post->title}}</h5>
    <p>
        {{str_limit($post->body) }}
    </p>
    <p><a href="{{url('project/' . $post->slug )}}" class="btn btn-main">Read More</a></p>
</li>