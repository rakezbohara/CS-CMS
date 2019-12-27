@extends('frontend.layout')

@section('page_name','Staff')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="body">
                <div class="panel-heading">
                    <div class="topic">@lang('welcome.menu2-3')</div>
                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('welcome.name')</th>
                            <th>@lang('welcome.post')</th>
                            <th>@lang('welcome.contact')</th>
                            <th>@lang('welcome.photo')</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach($staffs as $staff)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                @if(Session::get('applocale')=='en')
                                    <td>{{ $staff['name_en'] }}</td>
                                    <td>{{ $staff['position_en'] }}</td>
                                    <td>{{ $staff['phone_no'] }}</td>
                                @else
                                    <td>{{ $staff['name_np'] }}</td>
                                    <td>{{ $staff['position_np'] }}</td>
                                    <td>{{ $staff['phone_no_np'] }}</td>
                                @endif

                                <td><img class="staffphoto" src="{{ $staff['imgpath'] }}" height="90px" width="80px"/></td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr/>
        <hr/>
    </div>
    <br>
@endsection