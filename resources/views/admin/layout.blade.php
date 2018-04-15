@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-2">
            @yield('menu')
        </div>
        <div class="col-md-10">
            @yield('section-content')
        </div>
    </div>
@endsection