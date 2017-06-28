<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="right lang">
    <a href="{{ url('en') }}">English</a> || <a href="{{ url('np') }}">नेपाली</a>
</div>
<div class="row">
    <div class = "col-sm-6">
        <div class="custom-head">
            <img class="left" height="90 "width="105" src="http://ddcsyangja.gov.np/wp-content/themes/ddc/img/ddc-demo.png">
            <h1>फेदीखोला गाउपालिका कार्यालय</h1>
            <h3>स्याङ्जा, नेपाल</h3>
        </div>
    </div>

    <div class = "col-sm-6">
        <div class="custom-head">
            <img class="right" height="90 "width="105" src="http://ddcsyangja.gov.np/wp-content/themes/ddc/img/np-flag1-ss.gif">
            <div class="date">
                <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="http://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=009688&aj_time=yes&font_size=15&line_brake=1&api=540162h016" width="195" height="45"></iframe>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-default gap">
    <div class="container-fluid blue">
        <div class="cont">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav white">
                    <li><a href="{{ url('/') }}"> @lang('welcome.menu1')</a></li>
                    <li><a href="{{ url('aboutus') }}">@lang('welcome.menu2')</a></li>
                    <li><a href="{{ url('gallery') }}">@lang('welcome.menu3')</a></li>
                    <li><a href="{{ url('services') }}">@lang('welcome.menu4')</a></li>
                    <li><a href="{{ url('career') }}">@lang('welcome.menu5')</a></li>
                    <li class="active"><a href="{{ url('blog') }}">@lang('welcome.menu6')</a></li>
                    <li><a href="{{ url('download') }}">@lang('welcome.menu7')</a></li>
                    <li><a href="{{ url('contact') }}">@lang('welcome.menu8')</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    @foreach($blogpost as $blogpostitem)
    <div class="articlethumb">
        <div class="topic">
            <a href="{{ url('blogitem',$blogpostitem['id']) }}"> {{ $blogpostitem['title'] }} </a>

            <span class="right">{{ $blogpostitem['pubdate'] }}</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    {{ substr(strip_tags($blogpostitem['content']),0,300) }}<a href="{{ url('blogitem',$blogpostitem['id']) }}">See More</a>
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

    <hr/>
    <div class="row">
        <div class="col-sm-4">
            <div class="notice twit">
                <a class="twitter-timeline twit" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a> <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="notice">
                <span class="topic">Important Links</span>
                @if(Session::get('applocale')=='en')
                    @foreach($implinks as $implinkitem)
                        <hr/>
                        <div class="item">
                            <span class="title"><i class="fa fa-hand-o-right"></i><a href="{!! $implinkitem['link'] !!}" target="_blank">{{ $implinkitem['name_en'] }}</a></span><br/>
                        </div>
                    @endforeach
                @else
                    @foreach($implinks as $implinkitem)
                        <hr/>
                        <div class="item">
                            <span class="title"><i class="fa fa-hand-o-right"></i><a href="{!! $implinkitem['link'] !!}" target="_blank">{{ $implinkitem['name_np'] }}</a></span><br/>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-sm-4">
            <div class="notice">
                <span class="topic">Downloads</span>
                @foreach($download as $downloaditem)
                    <hr/>
                    <div class="item">
                        <span class="title"><i class="fa fa-hand-o-right"></i><a href="{{ $downloaditem['filepath'] }}">{{ $downloaditem['title'] }}</a></span><br/>
                        <span class="pubdate">{{ $downloaditem['pubdate'] }}</span>
                    </div>
                @endforeach

                <hr/>
                <div class="item">
                    <span ><a class="seemore" href="{{ url('download') }}">See More<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a></span><br/>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="bkg">
    <div class="row">
        <div class="col-sm-4">
            <span>© 2014-2017 क्षेत्रीय कृषि तालिम केन्द्र-सुन्दरपुर, कन्चनपुर</span>
        </div>
        <div class="col-sm-4">
            <span>Contact: 061-526589,061-526489</span>
        </div>
        <div class="col-sm-4">
            <span>Developed by <a class="white" href="#">Code Sastra</a></span>
        </div>
    </div>
</div>
</body>
</html>