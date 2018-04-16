<div class="list-group list-group-item-action">
    <a href="{{ url('/admin/blog/list') }}" class="list-group-item list-group-item-action {{ (isset($post_type) && $post_type == 'blog')?'active':'' }}" >Blog Posts</a>
    @if($post_type == 'blog')
    <a href="{{ url('/admin/blog/new') }}" class="list-group-item list-group-item-action list-group-item-dark">New Blog</a>
    @endif
    <a href="{{ url('/admin/project/list')  }}" class="list-group-item list-group-item-action {{ (isset($post_type) && $post_type == 'project')?'active':'' }}">Projects</a>
    @if($post_type == 'project')
    <a href="{{ url('/admin/project/new') }}" class="list-group-item list-group-item-action list-group-item-dark">New Project</a>
    @endif
</div>