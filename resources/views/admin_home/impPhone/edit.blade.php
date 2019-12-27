@extends('admin_home.layout')

@section('page_name','Edit Phone Number')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT EXISTING PHONE NUMBER</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PHONE NUMBER DETAILS</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('editPhone',$number['id']) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control"  value="{{$number['name_en']}}" name="name_en" required>
                                                <label class="form-label">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$number['name_np']}}" name="name_np" required>
                                                <label class="form-label">नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$number['phone_en']}}" name="number_en" required>
                                                <label class="form-label">Phone number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{$number['phone_np']}}" name="number_np" required>
                                                <label class="form-label">फोन नुम्बर</label>
                                            </div>
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