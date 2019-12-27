@extends('admin_home.layout')

@section('page_name','Important Links')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>IMPORTANT LINKS</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT LINKS</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('implink') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h5>LINK 1</h5>
                                <hr/>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink1['name_en'] }}" name="1name_en"  >
                                                <label class="form-label">Link Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink1['name_np'] }}" name="1name_np"  >
                                                <label class="form-label">लिंक नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $implink1['link'] }}" name="1link"  >
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                                <hr/>
                                <h5>LINK 2</h5>
                                <hr/>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink2['name_en'] }}" name="2name_en"  >
                                                <label class="form-label">Link Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink2['name_np'] }}" name="2name_np"  >
                                                <label class="form-label">लिंक नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $implink2['link'] }}" name="2link"  >
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                                <hr/>
                                <h5>LINK 3</h5>
                                <hr/>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink3['name_en'] }}" name="3name_en"  >
                                                <label class="form-label">Link Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink3['name_np'] }}" name="3name_np"  >
                                                <label class="form-label">लिंक नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $implink3['link'] }}" name="3link"  >
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                                <hr/>
                                <h5>LINK 4</h5>
                                <hr/>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink4['name_en'] }}" name="4name_en"  >
                                                <label class="form-label">Link Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink4['name_np'] }}" name="4name_np"  >
                                                <label class="form-label">लिंक नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $implink4['link'] }}" name="4link"  >
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                                <hr/>
                                <h5>LINK 5</h5>
                                <hr/>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink5['name_en'] }}" name="5name_en"  >
                                                <label class="form-label">Link Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" value="{{ $implink5['name_np'] }}" name="5name_np"  >
                                                <label class="form-label">लिंक नाम</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $implink5['link'] }}" name="5link"  >
                                        <label class="form-label">Link</label>
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