@extends('frontend.layout')

@section('page_name','Blog')

@section('content')
@foreach($blogpost as $blogpostitem)
    <div class="articlethumb">
        <div class="topic">
            <a href="{{ url('blogitem',$blogpostitem['id']) }}"> {{ $blogpostitem['title'] }} </a>

            <span class="right">{{ $blogpostitem['pubdate'] }}</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    {{--{{ substr(strip_tags($blogpostitem['content']),0,300) }}--}}
                    <a href="{{ url('blogitem',$blogpostitem['id']) }}">Read News</a>
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
    </div>
@endforeach


<div align="center">
    <ul class="pagination">
        {{ $blogpost->links() }}
    </ul>
</div>
@endsection