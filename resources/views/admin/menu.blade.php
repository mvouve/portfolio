<div class="list-group list-group-item-action">
    <a href="{{ url('/admin/list/blog') }}" class="list-group-item list-group-item-action {{ (isset($active) && $active == 'list-blog')?'active':'' }}" >Blog Posts</a>
    <a href="{{ url('/admin/new/blog') }}" class="list-group-item list-group-item-action  {{ (isset($active) && $active == 'new-blog')?'active':'' }}">New Blog</a>
    <a href="{{ url('/admin/list/project')  }}" class="list-group-item list-group-item-action {{ (isset($active) && $active == 'list-project')?'active':'' }}">Projects</a>
    <a href="{{ url('/admin/new/project')  }}" class="list-group-item list-group-item-action {{ (isset($active) && $active == 'new-project')?'active':'' }}">New Project</a>
</div>