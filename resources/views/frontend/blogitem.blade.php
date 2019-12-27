@extends('frontend.layout')

@section('page_name','Blog Item')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="articlethumb">
            <div class="topic">
                {{ $postitem['title'] }}<span class="right">{{ $postitem['pubdate'] }}</span>
            </div>
            <br/>
            <br/>
            <div class="desc">
                <div class="row">
                    <div class="col-sm-10">
                        {!! $postitem['content'] !!}
                    </div>
                    <div class="col-sm-2">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4 right">
        <!--notice section staet-->
        <div class="col-sm-12 notice">
            <span class="topic">News</span>
            @foreach($blogpost as $blogitem)
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="">{{ $blogitem['title'] }}</a></span><br/>
                    <span class="pubdate">{{ $blogitem['pubdate'] }}</span>
                </div>
            @endforeach
            <hr/>
            <div class="item">
                <span ><a class="seemore" href="#">See More<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a></span><br/>
            </div>
        </div>
        <!--notice section ends-->

    </div>
    <hr/>
    <hr/>
</div>
@endsection