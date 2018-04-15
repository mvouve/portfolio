<div class="list-group list-group-item-action">
    <a href="{{ url('/admin/blog') }}" class="list-group-item list-group-item-action {{ (isset($active) && $active == 'blog')?'active':'' }}" >Blog Posts</a>
    <a href="{{ url('/admin/blog/new') }}" class="list-group-item list-group-item-action list-group-item-dark">New Blog</a>
    <a href="{{ url('/admin/project')  }}" class="list-group-item list-group-item-action">Projects</a>
    <a href="{{ url('/admin/project/new') }}" class="list-group-item list-group-item-action list-group-item-dark {{ (isset($active) && $active == 'project')?'active':'' }}">New Project</a>
</div>