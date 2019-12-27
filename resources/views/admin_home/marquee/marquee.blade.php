@extends('admin_home.layout')

@section('page_name','Marquee')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MARQUEE SECTION</h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT MARQUEES</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ url('marquee') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee1['title_en']}}" name="marquee1_en" >
                                        <label class="form-label">Marquee1 EN</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee1['title_np']}}" name="marquee1_np" >
                                        <label class="form-label">Marquee1 NP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee2['title_en']}}" name="marquee2_en"  >
                                        <label class="form-label">Marquee2 EN</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee2['title_np']}}" name="marquee2_np"  >
                                        <label class="form-label">Marquee2 NP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee3['title_en']}}" name="marquee3_en"  >
                                        <label class="form-label">Marquee3 EN</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee3['title_np']}}" name="marquee3_np"  >
                                        <label class="form-label">Marquee3 NP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee4['title_en']}}" name="marquee4_en"  >
                                        <label class="form-label">Marquee4 EN</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$marquee4['title_np']}}" name="marquee4_np"  >
                                        <label class="form-label">Marquee4 NP</label>
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