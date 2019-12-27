@extends('admin_home.layout')

@section('page_name','Setting')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Admin Setting</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Change Password</h2>
                            <hr>
                            @if (Session::has('success'))
                                <div class="alert alert-success">{!! Session::get('success') !!}</div>
                            @endif
                            @if (Session::has('failure'))
                                <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                            @endif
                            <hr>

                            <form id="form_validation" method="POST" action="{{ url('setting') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="old" required minlength="5">
                                                <label class="form-label">Old Password</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password" required minlength="5">
                                                <label class="form-label">New Password</label>
                                            </div>
                                        </div>
                                <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                            </form>

                        </div>
                        <div class="body">

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>
@endsection