@extends('admin_home.layout')

@section('page_name','Edit Downloads')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DOWNLOAD > EDIT</h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>EDIT DOWNLOAD</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="{{ url('editdownload',$download['id']) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{ $download['title'] }}" name="title" required minlength="20" autofocus>
                                    <label class="form-label">Title</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <h6>Description</h6>
                                    <textarea id="ckeditor" name="ckeditor" class="ckeditor"></textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace( 'ckeditor' );
                                        CKEDITOR.instances.ckeditor.setData( ' {!! $download['desc'] !!} ');
                                        CKFinder.setupCKEditor( editor, '/ckfinder/' );
                                    </script>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select class="form-control" name="type" id="sel1">
                                        @if($download['type']=="Electronic Help")
                                            <option value="Electronic Help" selected>Electronic Help</option>
                                        @else
                                            <option value="Electronic Help">Electronic Help</option>
                                        @endif
                                        @if($download['type']=="Budget")
                                            <option value="Budget" selected>Budget tatha Karyakram</option>
                                        @else
                                            <option value="Budget">Budget tatha Karyakram</option>
                                        @endif
                                        @if($download['type']=="Yojana")
                                            <option value="Yojana" selected>Yojana Pariyojana</option>
                                        @else
                                            <option value="Yojana">Yojana Pariyojana</option>
                                        @endif
                                        @if($download['type']=="Pratibedan")
                                            <option value="Pratibedan" selected>Pratibedan</option>
                                        @else
                                            <option value="Pratibedan">Pratibedan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="xFilePath" value="{{ $download['filepath'] }}"  name="filepath" type="text" size="60" required />
                                    <input type="button"  class="btn bg-teal waves-effect" value="Browse Server" onclick="BrowseServerDownload();" />
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{ $download['pubdate'] }}" name="pubdate" required>
                                    <label class="form-label">Pub-date</label>
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