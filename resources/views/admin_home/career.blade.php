@extends('admin_home.layout')

@section('page_name','Career')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BLOG</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>E-MAIL/PHONE</th>
                                    <th>MESSAGE</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                ?>

                                @foreach ($jobapply as $jobitem)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{$jobitem['name']}}</td>
                                        <td>{{$jobitem['email']}}/{{$jobitem['phone']}}</td>
                                        <td>{{$jobitem['message']}}</td>
                                        <td><a href="uploads/cv/{{$jobitem['cvname']}} " target="_blank"><button type="button" class="btn btn-warning waves-effect">VIEW</button></a>
                                            <a href="{{url('deletecv',$jobitem['id']) }}"><button type="button" class="btn btn-danger waves-effect">DELETE</button></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
        </div>
    </section>
@endsection