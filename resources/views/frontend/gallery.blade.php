@extends('frontend.layout')

@section('page_name','Gallery')

@section('content')
<div class="body">
    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
        @foreach($images as $image)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="ckfinder/userfiles/images/gallery/{{$image}}" data-sub-html="">
                    <img class="img-responsive thumbnail" src="ckfinder/userfiles/_thumbs/Images/gallery/{{$image}}">
                </a>
            </div>
        @endforeach

    </div>
</div>
<br>
@endsection