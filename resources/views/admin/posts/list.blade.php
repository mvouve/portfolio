@extends('admin.layout')
@section('menu')
    @include('admin.menu', ['active' => $menu_active])
@endsection
@section('section-content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Published</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @each('admin.posts.item', $posts, 'post')
    </tbody>
</table>
@endsection