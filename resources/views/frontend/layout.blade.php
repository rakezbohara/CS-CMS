<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ward 13 | @yield('page_name')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">
    <link href="../asset/admin/plugins/morrisjs/morris.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../asset/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Light Gallery Plugin Css -->
    <link href="../asset/admin/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
    <link href="../asset/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../footercss/footer.css" rel="stylesheet">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="right lang">
    <a href="{{ url('en') }}">English</a> || <a href="{{ url('np') }}">नेपाली</a>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="custom-head">
            <img class="left" height="90 " width="105"
                 src="../asset/images/govlogo.png">
            <h1>@lang('welcome.orgname')</h1>
            <h3>@lang('welcome.orgplace')</h3>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="custom-head">
            <img class="right" height="90 " width="105"
                 src="../asset/images/np-flag.gif">
            <div class="date">
                <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                        allowtransparency="true"
                        src="http://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=009688&aj_time=yes&font_size=15&line_brake=1&api=540162h016"
                        width="195" height="45"></iframe>
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
                    @if($view_name== 'frontend-index')
                        <li class="active">
                    @else
                        <li>
                            @endif
                            <a href="{{ url('/') }}"> @lang('welcome.menu1')</a>
                        </li>
                        @if($view_name== 'frontend-aboutus' || $view_name== 'frontend-orgchart' || $view_name== 'frontend-staff')
                            <li class="dropdown active">
                        @else
                            <li class="dropdown">
                                @endif
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('welcome.menu2')
                                        <span class="caret"></span></a>
                                <ul class="dropdown-menu blue white">
                                    <li><a href="{{url('aboutus')}}">@lang('welcome.menu2-1')</a></li>
                                    <li><a href="{{url('orgchart')}}">@lang('welcome.menu2-2')</a></li>
                                    <li><a href="{{url('staff')}}">@lang('welcome.menu2-3')</a></li>
                                </ul>
                            </li>
                            @if($view_name== 'frontend-budget' || $view_name== 'frontend-plan' || $view_name== 'frontend-reports')
                                <li class="dropdown active">
                            @else
                                <li class="dropdown">
                                    @endif
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('welcome.menu3')
                                            <span class="caret"></span></a>
                                    <ul class="dropdown-menu blue white">
                                        <li><a href="{{url('budget')}}">@lang('welcome.menu3-1')</a></li>
                                        <li><a href="{{url('plans')}}">@lang('welcome.menu3-2')</a></li>
                                        <li><a href="{{url('reports')}}">@lang('welcome.menu3-3')</a></li>
                                    </ul>
                                </li>
                                @if($view_name== 'frontend-downloads')
                                    <li class="active">
                                @else
                                    <li>
                                        @endif
                                        <a href="{{ url('download') }}">@lang('welcome.menu4')</a>
                                    </li>
                                    @if($view_name== 'frontend-blog' || $view_name== 'frontend-blogitem')
                                        <li class="active">
                                    @else
                                        <li>
                                            @endif
                                            <a href="{{ url('blog') }}">@lang('welcome.menu5')</a>
                                        </li>
                                        @if($view_name== 'frontend-gallery')
                                            <li class="active">
                                        @else
                                            <li>
                                                @endif
                                                <a href="{{ url('gallery') }}">@lang('welcome.menu6')</a>
                                            </li>
                                            @if($view_name== 'frontend-career')
                                                <li class="active">
                                            @else
                                                <li>
                                                    @endif
                                                    <a href="{{ url('suggestion') }}">@lang('welcome.menu7')</a>
                                                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">

    @yield('content')


</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footerleft ">
                <div class="logofooter">  <img class="left" height="90 " width="105"
                                               src="http://ddcsyangja.gov.np/wp-content/themes/ddc/img/ddc-demo.png"></div>
                    <h4 style="color: white">@lang('welcome.orgname')</h4><br><br>
                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the--}}
                    {{--industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>--}}
                <p><i class="fa fa-map-pin"></i> @lang('welcome.orgplace')</p>
                <p><i class="fa fa-phone"></i> @lang('welcome.telephone') : @lang('welcome.phone')</p>
                <p><i class="fa fa-envelope"></i> @lang('welcome.e-mail') : info@ward13.com</p>

            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">@lang('welcome.impPhones')</h6>
                <div class="table-resposive phonetable">
                    <table class="table table">

                        @if(Session::get('applocale')=='en')
                            <thead>
                            <tr>
                                <th style="color: white">#</th>
                                <th style="color: white">Name</th>
                                <th style="color: white">Phone Number</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($impPhones as $key=>$impPhone)

                                <tr>
                                    <td style="color: white">{{ ++$key }}</td>
                                    <td style="color: white">{{ $impPhone->name_en }}</td>
                                    <td style="color: white">{{ $impPhone->phone_en }}</td>
                                </tr>

                            @endforeach
                        @else
                            <thead>
                            <tr>
                                <th style="color: white">#</th>
                                <th style="color: white">नाम</th>
                                <th style="color: white">टेलिफोन नुम्बर</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($impPhones as $key=>$impPhone)
                                <tr>
                                    <td style="color: white">{{ ++$key }}</td>
                                    <td style="color: white">{{ $impPhone->name_np }}</td>
                                    <td style="color: white">{{ $impPhone->phone_np }}</td>
                                </tr>
                            @endforeach
                            @endif


                            </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">@lang('welcome.implinks')</h6>
                <ul class="footer-ul">
                    @if(Session::get('applocale')=='en')
                        @foreach($implinks as $implinkitem)

                            <li><a href="{!! $implinkitem['link'] !!}"
                                   target="_blank"> {{ $implinkitem['name_en'] }}</a></li>

                        @endforeach
                    @else
                        @foreach($implinks as $implinkitem)
                            <li><a href="{!! $implinkitem['link'] !!}"
                                   target="_blank"> {{ $implinkitem['name_np'] }}</a></li>
                        @endforeach
                    @endif

                </ul>
            </div>

            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">@lang('welcome.menu4')</h6>

                <ul class="footer-ul">

                    @foreach($download as $downloaditem)

                        <li><a href="{{ $downloaditem['filepath'] }}" target="_blank"> {{ $downloaditem['title'] }}</a>
                        </li>
                        <span class="pubdate">{{ $downloaditem['pubdate'] }}</span>

                    @endforeach
                        <hr/>
                        <div class="item">
                            <span ><a class="seemore" href="{{ url('download') }}">See More</a></span><br/>
                        </div>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!--footer start from here-->

<div class="copyright">
    <div class="container">
        <div class="col-md-9">
            <p>© 2017 @lang('welcome.orgname')</p>
        </div>

        <div class="col-md-3">
            <p>Developed by <a class="white" href="#">Code Sastra</a></p>
        </div>
    </div>
</div>

{{--<div class="bkg">--}}
{{--<div class="row">--}}

{{--<div class="col-sm-4">--}}
{{--<div class="notice1">--}}
{{--<span class="topic1">@lang('welcome.impPhones')</span>--}}
{{--<br>--}}
{{--<br>--}}
{{--<div class="table-resposive">--}}
{{--<table class="table table">--}}

{{--@if(Session::get('applocale')=='en')--}}
{{--<thead>--}}
{{--<tr>--}}
{{--<th>#</th>--}}
{{--<th>Name</th>--}}
{{--<th>Phone Number</th>--}}
{{--</tr>--}}
{{--</thead>--}}
{{--<tbody>--}}

{{--@foreach($impPhones as $key=>$impPhone)--}}

{{--<tr>--}}
{{--<td>{{ ++$key }}</td>--}}
{{--<td>{{ $impPhone->name_en }}</td>--}}
{{--<td>{{ $impPhone->phone_en }}</td>--}}
{{--</tr>--}}

{{--@endforeach--}}
{{--@else--}}
{{--<thead>--}}
{{--<tr>--}}
{{--<th>#</th>--}}
{{--<th>नाम</th>--}}
{{--<th>टेलिफोन नुम्बर</th>--}}
{{--</tr>--}}
{{--</thead>--}}
{{--<tbody>--}}

{{--@foreach($impPhones as $key=>$impPhone)--}}
{{--<tr>--}}
{{--<td>{{ ++$key }}</td>--}}
{{--<td>{{ $impPhone->name_np }}</td>--}}
{{--<td>{{ $impPhone->phone_np }}</td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--@endif--}}


{{--</tbody>--}}
{{--</table>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}

{{--<div class="col-sm-4">--}}
{{--<div class="notice1">--}}
{{--<span class="topic1">@lang('welcome.implinks')</span>--}}
{{--@if(Session::get('applocale')=='en')--}}
{{--@foreach($implinks as $implinkitem)--}}
{{--<hr/>--}}
{{--<div class="item">--}}
{{--<span class="title"><i class="fa fa-hand-o-right"></i><a style="color: white" href="{!! $implinkitem['link'] !!}" target="_blank"> {{ $implinkitem['name_en'] }}</a></span><br/>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--@else--}}
{{--@foreach($implinks as $implinkitem)--}}
{{--<hr/>--}}
{{--<div class="item">--}}
{{--<span class="title"><i class="fa fa-hand-o-right"> </i><a style="color: white" href="{!! $implinkitem['link'] !!}" target="_blank"> {{ $implinkitem['name_np'] }}</a></span><br/>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-4">--}}
{{--<div class="notice">--}}
{{--<span class="topic1">@lang('welcome.menu4')</span>--}}
{{--@foreach($download as $downloaditem)--}}
{{--<hr/>--}}
{{--<div class="item">--}}
{{--<span class="title"><i class="fa fa-hand-o-right"></i><a style="color: white" href="{{ $downloaditem['filepath'] }}"> {{ $downloaditem['title'] }}</a></span><br/>--}}
{{--<span class="pubdate">{{ $downloaditem['pubdate'] }}</span>--}}
{{--</div>--}}
{{--@endforeach--}}

{{--<hr/>--}}
{{--<div class="item">--}}
{{--<span ><a class="seemore" href="{{ url('download') }}">See More<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a></span><br/>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<br>--}}

{{--<div class="row">--}}
{{--<div class="col-sm-4">--}}
{{--<span>© 2017 @lang('welcome.orgname')</span>--}}
{{--</div>--}}
{{--<div class="col-sm-4">--}}
{{--<span>Contact: 061-526589,061-526489</span>--}}
{{--</div>--}}
{{--<div class="col-sm-4">--}}
{{--<span>Developed by <a class="white" href="#">Code Sastra</a></span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<script src="../asset/admin/plugins/raphael/raphael.min.js"></script>
<script src="../asset/admin/plugins/morrisjs/morris.js"></script>
<!-- Light Gallery Plugin Js -->
<script src="../asset/admin/plugins/light-gallery/js/lightgallery-all.js"></script>
<!-- Custom Js -->
<script src="../asset/admin/js/pages/medias/image-gallery.js"></script>
<script src="../asset/admin/js/morris.js"></script>
</body>
</html>
