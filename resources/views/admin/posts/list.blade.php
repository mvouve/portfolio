@extends('admin.layout')
@section('menu')
    @include('admin.menu', ['post_type' => $post_type])
@endsection
@section('section-content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @each('admin.posts.item', $posts, 'post')
    </tbody>
</table>
@endsection