@extends('admin_home.layout')

@section('page_name','Org Head')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ORGANIZATION HEAD</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DETAILS</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('orghead') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$staff['name_en']}}" name="name_en" required >
                                                <label class="form-label">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$staff['name_np']}}" name="name_np" required >
                                                <label class="form-label">नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="position_en" value="{{$staff['position_en']}}" required minlength="5">
                                                    <label class="form-label">Post</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="position_np" value="{{$staff['position_np']}}" required minlength="5">
                                                <label class="form-label">पद</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="phoneno" value="{{$staff['phone_no']}}">
                                                <label class="form-label">Phone No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="phoneno_np" value="{{$staff['phone_no_np']}}">
                                                <label class="form-label">फोन नम्बर</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                            <img id="staffimg" src="{{ $staff['imgpath'] }}"  width="300px" height="300px">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group form-float">
                                                <input id="xFilePath"  name="imgpath" value="{{ $staff['imgpath'] }}" type="text" size="60" required />
                                                <input type="button"  class="btn bg-teal waves-effect" value="Browse Server" onclick="BrowseServerStaff();" />
                                        </div>
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