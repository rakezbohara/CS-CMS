@extends('admin_home.layout')

@section('page_name','Staff')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Office Staffs</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                        <a href="{{ url('createstaff') }}"> <button type="button" class="btn btn-primary waves-effect"><i class="material-icons">event_note</i> CREATE NEW STAFF</button></a>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>POSITION</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=1;
                            ?>

                            @foreach ($staffs as $staff)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$staff['name_en']}}</td>
                                <td>{{$staff['position_en']}}</td>
                                <td><a href="{{url('editstaff',$staff['id'])}}"><button type="button" class="btn btn-warning waves-effect">EDIT</button></a>
                                    <a href="{{url('deletestaff',$staff['id']) }}"><button type="button" class="btn btn-danger waves-effect">DELETE</button></a>
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