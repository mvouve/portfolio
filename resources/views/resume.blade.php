@extends('layout')
@section('content')
    <div id="content-area" class="container">
        <div class="row">
            <div class="col-md-12">
                <object id="resume" data="files/resume.pdf" type="application/pdf" style="width:100%; height:1140px">
                    Your browser does not support pdfs, <a href="files/resume.pdf">click here to download resume.</a>
                </object>
            </div>
        </div>
    </div>
@endsection