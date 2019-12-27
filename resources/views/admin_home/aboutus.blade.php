@extends('admin_home.layout')

@section('page_name','About Us')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ABOUT US</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT ABOUT US</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action="{{url('adminaboutus')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h6>AboutUs In English</h6>
                                        <textarea id="ckeditor1" name="ckeditor1" class="ckeditor"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace( 'ckeditor1' );
                                            CKEDITOR.instances.ckeditor1.setData( ' {!! $aboutus['content_en'] !!} ');
                                            CKFinder.setupCKEditor( editor, '/ckfinder/' );
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h6>AboutUs In Nepali</h6>
                                        <textarea id="ckeditor2" name="ckeditor2" class="ckeditor"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace( 'ckeditor2' );
                                            CKEDITOR.instances.ckeditor2.setData( ' {!! $aboutus['content_np'] !!} ');
                                            CKFinder.setupCKEditor( editor, '/ckfinder/' );
                                        </script>

                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>
@endsection