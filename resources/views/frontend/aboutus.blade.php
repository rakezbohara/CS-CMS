@extends('frontend.layout')

@section('page_name','About Us')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="body">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                @if(Session::get('applocale')=='en')
                    {!! $aboutus['content_en'] !!}
                @else
                    {!! $aboutus['content_np'] !!}
                @endif
            </div>
        </div>

    </div>
    <div class="col-sm-4 right">
        <!--notice section staet-->
        <div class="col-sm-12 notice">
            <span class="topic">@lang('welcome.news')</span>
            @foreach($blogpost as $blogitem)
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="{{ url('blogitem',$blogitem['id']) }}">{{ $blogitem['title'] }}</a></span><br/>
                    <span class="pubdate">{{ $blogitem['pubdate'] }}</span>
                </div>
            @endforeach
            <hr/>
            <div class="item">
                <span ><a class="seemore1" href="{{ url('blog') }}">See More<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a></span><br/>
            </div>
        </div>
        <!--notice section ends-->

    </div>
    <hr/>
    <hr/>
</div>
<br>
@endsection