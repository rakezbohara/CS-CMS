@extends('admin_home.layout')

@section('page_name','Create Downlaod')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DOWNLOAD > CREATE</h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>CREATE NEW DOWNLOAD</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="{{ url('createdownload') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" required minlength="8" autofocus>
                                    <label class="form-label">Title</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <h6>Description</h6>
                                    <textarea id="ckeditor" name="ckeditor" class="ckeditor"></textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace( 'ckeditor' );
                                        CKFinder.setupCKEditor( editor, '/ckfinder/' );
                                    </script>

                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select class="form-control" name="type" id="sel1">
                                        <option value="Electronic Help">Electronic Help</option>
                                        <option value="Budget">Budget tatha Karyakram</option>
                                        <option value="Yojana">Yojana Pariyojana</option>
                                        <option value="Pratibedan">Pratibedan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="xFilePath"  name="filepath" type="text" size="60" required />
                                    <input type="button"  class="btn bg-teal waves-effect" value="Browse Server" onclick="BrowseServerDownload();" />
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