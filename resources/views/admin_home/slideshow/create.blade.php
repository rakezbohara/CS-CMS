@extends('admin_home.layout')

@section('page_name','Create Slideshow')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SLIDE > CREATE</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CREATE NEW SLIDE</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('createslide') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title"  >
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="desc">
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="xFilePath"  name="imgpath" type="text" size="60" required />
                                        <input type="button"  class="btn bg-teal waves-effect" value="Browse Server" onclick="BrowseServerSlide();" />
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