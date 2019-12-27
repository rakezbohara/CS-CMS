@extends('frontend.layout')
@section('page_name','Home')
@section('content')
    <div class="row">
        <div class="col-sm-8">
            <!--slide starts-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @for($j=1;$j<count($slideshow);$j++)
                        <li data-target="#myCarousel" data-slide-to="{{ $j }}"></li>
                    @endfor
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ $slideshow[0]['imgpath'] }}" alt="Chania">
                        <div class="carousel-caption">
                            <h3>{{ $slideshow[0]['title'] }}</h3>
                            <p>{{ $slideshow[0]['desc'] }}</p>
                        </div>
                    </div>
                    @for($i = 1 ; $i<count($slideshow);$i++)
                        <div class="item">
                            <img src="{{ $slideshow[$i]['imgpath'] }}" alt="Chania">
                            <div class="carousel-caption">
                                <h3>{{  $slideshow[$i]['title'] }}</h3>
                                <p>{{  $slideshow[$i]['desc'] }}</p>
                            </div>
                        </div>
                    @endfor

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--slide ends-->
        </div>
        <div class="col-sm-4">
            <div class="col-sm-  notice1">
                <div class="person">
                    <img alt="Image" class="image img-rounded left" src="{{ $orghead['imgpath'] }}">
                    @if(Session::get('applocale')=='en')
                        <span class="person-name">{{ $orghead['name_en'] }}</span><br/>
                        <span class="person-name person-detail">{{ $orghead['position_en'] }}</span>
                    @else
                        <span class="person-name" >{{ $orghead['name_np'] }}</span><br/>
                        <span class="person-name person-detail">{{ $orghead['position_np'] }}</span>
                    @endif
                    <br/>
                    <span class="person-name person-detail">chairman@pole13.org</span>
                </div>
                <hr/>
                <div class="person">
                    <img alt="Image" class="image img-rounded left" src="{{ $orgtechhead['imgpath'] }}">
                    @if(Session::get('applocale')=='en')
                        <span class="person-name">{{ $orgtechhead['name_en'] }}</span><br/>
                        <span class="person-name  person-detail">{{ $orgtechhead['position_en'] }}</span>
                    @else
                        <span class="person-name">{{ $orgtechhead['name_np'] }}</span><br/>
                        <span class="person-name person-detail">{{ $orgtechhead['position_np'] }}</span>
                    @endif
                    <br/>
                    <span class="person-name person-detail">secretary@pole13.org</span>
                </div>
            </div>
            <!--person info ends-->
        </div>
        <div class="marq col-sm-12 right">
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction="left" behavior="scroll">
                @if(Session::get('applocale')=='en')
                    @foreach($marquee as $marqueeitem)
                        @if($marqueeitem['title_en']!="")
                            <a href="#">&#8226; {{ $marqueeitem['title_en'] }}</a>
                        @endif
                    @endforeach
                @else
                    @foreach($marquee as $marqueeitem)
                        @if($marqueeitem['title_np']!="")
                            <a href="#">&#8226; {{ $marqueeitem['title_np'] }}</a>
                        @endif
                    @endforeach
                @endif
            </marquee>
        </div>
        <hr/>
        <hr/>
    </div>

    <div class="body">
        <div class="panel-heading">
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="panel-body">
                    @if(Session::get('applocale')=='en')
                        {!! $homecontent['content_en'] !!}
                    @else
                        {!! $homecontent['content_np'] !!}
                    @endif
                </div>
            </div>
            <div class="col-sm-4">
                <!--notice section staet-->
                <div class="notice">
                    <span class="topic">@lang('welcome.news')</span>
                    @foreach($blogpost as $blogitem)
                        <hr/>
                        <div class="item">
                            <span class="title"><i class="fa fa-hand-o-right"></i><a
                                        href="{{ url('blogitem',$blogitem['id']) }}">{{ $blogitem['title'] }}</a></span><br/>
                            <span class="pubdate">{{ $blogitem['pubdate'] }}</span>
                        </div>
                    @endforeach
                    <hr/>
                    <div class="item">
                        <span><a class="seemore" href="{{ url('blog') }}">See More<i
                                        class="fa fa-angle-double-right"></i><i
                                        class="fa fa-angle-double-right"></i></a></span><br/>
                    </div>
                </div>
                <!--notice section ends-->
                <!--person info starts-->
                <br>
                <div class="notice2">
                    <span class="topic">@lang('welcome.waste')</span>
                    @foreach($wasteroutine as $routine)
                        <hr/>
                        <div class="item">
                            <span class="skyblue"><b>{{ $routine['day'] }} <i
                                            class="fa fa-hand-o-right"> </i></b></span>
                            <span>{{ $routine['path'] }}</span><br/>
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4429.639796178023!2d83.96296997921537!3d28.213169878837146!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1501397552180"
                            width="360" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>
@endsection
