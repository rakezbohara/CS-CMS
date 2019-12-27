@extends('admin_home.layout')

@section('page_name','Waste')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>WASTE ROUTINES</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT ROUTINES</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('adminwaste') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>SUNDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine1['path'] }}" name="routine1">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>MONDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine2['path'] }}" name="routine2">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>TUESDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine3['path'] }}" name="routine3">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>WEDNESDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine4['path'] }}" name="routine4">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>THURSDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine5['path'] }}" name="routine5">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>FRIDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine6['path'] }}" name="routine6">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-2">
                                        <h5>SATURDAY</h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $routine7['path'] }}" name="routine7">
                                                <label class="form-label">Routine</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <hr/>

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