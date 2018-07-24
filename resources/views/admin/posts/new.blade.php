@extends('admin.layout')
@section('menu')
    @include('admin.menu', ['active' => $menu_active])
@endsection
@section('section-content')
    <form class="new-post" action="/admin/save/">
        <div class="col-md-9">
            <script src="{{ asset("js/tinymce/tinymce.min.js") }}"></script>
            <script type="text/javascript">
                tinymce.init({
                    selector: 'textarea',
                    height: 500,
                    menubar: true,
                    plugins: 'codesample code paste',
                    paste_data_images: true,
                    browser_spellcheck: true,
                    images_upload_url: '/admin/image/upload',
                    images_upload_base_path: '/storage',
                    images_upload_credentials: true,
                    codesample_dialog_width: '400',
                    codesample_dialog_height: '400',
                    codesample_languages: [
                        {text: 'HTML/XML', value: 'markup'},
                        {text: 'JavaScript', value: 'javascript'},
                        {text: 'CSS', value: 'css'},
                        {text: 'PHP', value: 'php'},
                        {text: 'Ruby', value: 'ruby'},
                        {text: 'Python', value: 'python'},
                        {text: 'Java', value: 'java'},
                        {text: 'C', value: 'c'},
                        {text: 'C#', value: 'csharp'},
                        {text: 'C++', value: 'cpp'}
                    ],
                    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | imageupload | code | help'
                });
            </script>
            <div class="input-group input-group-lg  new-post__title">
                <span class="input-group-addon">Title</span>
                <input type="text" class="form-control" name="title" value="{{ (isset($post))?$post->title:"" }}">
            </div>
            <textarea class="new_post__content" name="body">
                @if(isset($post))
                    {{ $post->body }}
                @endif
            </textarea>
            <submit type="button" class="btn btn-primary new-post__publish"><span class="glyphicon glyphicon-pencil"></span>Publish</submit>
            <submit type="button" class="btn btn-secondary new-post__save"><span class="glyphicon glyphicon-floppy-save"></span>Save</submit>
        </div>
        <div class="col-md-3">
            <div class="well">
                <label>Categories</label>
                @each('admin.posts.new.category', $categories, 'category')
                <hr>
                <button class="btn btn-default pull-right" data-toggle="modal" data-target="#add_category">Add Category</button>
                <div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="add_category_label">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close new-post__add-category-button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
            <div class="well">
                <label for="featured-image-string">Featured Image</label>
                    <input type="file" id="new-post__featured-image-upload" name="featured-image-upload" accept="image/*" />
                </div>
            </div>
        </div>
    </form>
@endsection