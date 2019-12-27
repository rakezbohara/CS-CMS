@extends('frontend.layout')

@section('page_name','Reports')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="panel-heading">
                <div class="topic">@lang('welcome.menu3-3')</div>
            </div>
            @foreach($downloads as $downloaditem)
                <div class="articlethumb">
                    <div class="desc">
                        <div class="row">
                            <div class="col-sm-8">
                                <span class="topic">{{ $downloaditem['title'] }}</span><span class="right blue">{{ $downloaditem['pubdate'] }}</span>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ $downloaditem['filepath'] }}"><button type="submit" class="btn btn-default blue right">Download</button></a>
                            </div>

                        </div>
                        <div class="downloadcontent">
                            <span>{!! $downloaditem['desc'] !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach


            <div align="center">
                <ul class="pagination">
                    {{ $downloads->links() }}
                </ul>
            </div>

        </div>
        <div class="col-sm-4 right">
            <!--notice section staet-->
            <div class="col-sm-12 notice">
                <span class="topic">@lang('welcome.news')</span>
                @foreach($blogpost as $blogitem)
                    <hr/>
                    <div class="item">
                        <span class="title"><i class="fa fa-hand-o-right"></i><a href="">{{ $blogitem['title'] }}</a></span><br/>
                        <span class="pubdate">{{ $blogitem['pubdate'] }}</span>
                    </div>
                @endforeach
                <hr/>
                <div class="item">
                    <span ><a class="seemore1" href="#">See More<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a></span><br/>
                </div>
            </div>
            <!--notice section ends-->

        </div>
        <hr/>
        <hr/>
    </div>
    <br>
@endsection