@extends('admin_home.layout')

@section('page_name','Slideshow')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SLIDE SHOW</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <a href="{{ url('createslide') }}"> <button type="button" class="btn btn-primary waves-effect"><i class="material-icons">event_note</i> CREATE NEW SLIDE</button></a>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                ?>

                                @foreach ($slideshow as $slide)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{$slide['title']}}</td>
                                        <td>{{$slide['desc']}}</td>
                                        <td><a href="{{url('editslide',$slide['id'])}}"><button type="button" class="btn btn-warning waves-effect">EDIT</button></a>
                                            <a href="{{url('deleteslide',$slide['id']) }}"><button type="button" class="btn btn-danger waves-effect">DELETE</button></a>
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