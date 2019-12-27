@extends('admin_home.layout')

@section('page_name','Admin Dashboard')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <a href="{{ url('blogpost') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">view_headline</i>
                            </div>
                            <div class="content">
                                <div class="text">BLOG</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{  url('slide') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">slideshow</i>
                            </div>
                            <div class="content">
                                <div class="text">SLIDE SHOW</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{  url('orghead') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">ORG. HEAD</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{  url('orgtechhead') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">ORG. TECHNICAL HEAD</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{  url('marquee') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">low_priority</i>
                            </div>
                            <div class="content">
                                <div class="text">MARQUEE</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{  url('homecontent') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">home</i>
                            </div>
                            <div class="content">
                                <div class="text">HOME CONTENT</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{  url('implink') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">link</i>
                            </div>
                            <div class="content">
                                <div class="text">IMPORTANT LINKS</div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{  url('impPhone') }}">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-light-blue hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">link</i>
                            </div>
                            <div class="content">
                                <div class="text">IMPORTANT PHONE NUMBERS</div>
                            </div>
                        </div>
                    </div>
                </a>


            <!-- #END# Widgets -->




        </div>
    </section>
@endsection