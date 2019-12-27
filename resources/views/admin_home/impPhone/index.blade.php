@extends('admin_home.layout')

@section('page_name','Phone Number')

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
                            {{--<a href="{{ url('createslide') }}"> <button type="button" class="btn btn-primary waves-effect"><i class="material-icons">event_note</i> CREATE NEW SLIDE</button></a>--}}
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                                    data-target="#myModal">
                                ADD NEW PHONE NUMBER
                            </button>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>PHONE NUMBER</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                ?>

                                @foreach ($numbers as $number)
                                <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{$number['name_en']}}</td>
                                <td>{{$number['phone_en']}}</td>
                                <td><a href="{{url('editPhone',$number['id'])}}"><button type="button" class="btn btn-warning waves-effect">EDIT</button></a>
                                <a href="{{url('deletePhone',$number['id']) }}"><button type="button" class="btn btn-danger waves-effect">DELETE</button></a>
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">PHONE NUMBER</h4>
                </div>
                <div class="modal-body">
                    <div class="body">
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <form id="form_validation" method="POST" action="{{ url('createPhone') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name_en" required>
                                            <label class="form-label">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name_np" required>
                                            <label class="form-label">नाम</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="number_en" required>
                                            <label class="form-label">Phone number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="number_np" required>
                                            <label class="form-label">फोन नुम्बर</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection