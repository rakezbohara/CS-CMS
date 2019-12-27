@extends('admin_home.layout')

@section('page_name','Create Blog')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BLOG > CREATE</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CREATE NEW POST</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('createblogpost') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" required minlength="20">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h6>Content</h6>
                                        <textarea id="ckeditor" name="ckeditor" class="ckeditor"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace( 'ckeditor' );
                                            CKFinder.setupCKEditor( editor, '/ckfinder/' );
                                        </script>

                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ date("y-m-d") }}" name="pubdate" required>
                                        <label class="form-label">Pub-date</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">CREATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>
@endsection