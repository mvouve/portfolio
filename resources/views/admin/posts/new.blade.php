@extends('admin.layout')
@section('menu')
    @include('admin.menu', ['active' => $menu_active])
@endsection
@section('section-content')
    <form>
        <div class="col-md-9">
            <script src="{{ asset("js/tinymce/tinymce.min.js") }}"></script>
            <script type="text/javascript">
                tinymce.init({
                    selector: 'textarea',
                    height: 500,
                    menubar: false,
                    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
                })
            </script>
            <div class="input-group input-group-lg">
                <span class="input-group-addon">Title</span>
                <input type="text" class="form-control" value="{{ (isset($post))?$post->title:"" }}">
            </div>
            <textarea>
                @if(isset($post))
                    {{ $post->body }}
                @endif
            </textarea>
            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Save</button>
        </div>
        <div class="col-md-3">
            <div class="well">
                @each('admin.posts.new.category', $categories, 'category')
                <hr>
                <button class="btn btn-default pull-right" data-toggle="modal" data-target="#add_category">Add Category</button>
                <div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="add_category_label">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="add_category_label">Add Category</h4>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
@endsection