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
    @foreach(View::getFinder()->views as $view=>$viewpath )

    @endforeach
    <a href="/en/{{$view}}">English</a> || <a href="/np/{{$view}}">नेपाली</a>
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
                    <li class="active"><a href="#"> @lang('welcome.menu1')</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('welcome.menu2') <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">@lang('welcome.menu2-1')</a></li>
                            <li><a href="#">@lang('welcome.menu2-2')</a></li>
                            <li><a href="#">@lang('welcome.menu2-3')</a></li>
                        </ul>
                    </li>
                    <li><a href="#">@lang('welcome.menu3')</a></li>
                    <li><a href="#">@lang('welcome.menu4')</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('welcome.menu5')<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">@lang('welcome.menu5-1')</a></li>
                            <li><a href="#">@lang('welcome.menu5-2')</a></li>
                        </ul>
                    </li>
                    <li><a href="/sample">@lang('welcome.menu6')</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <!--slide starts-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://www.w3schools.com/bootstrap/img_flower2.jpg" alt="Chania">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="https://www.w3schools.com/bootstrap/img_flower2.jpg" alt="Chania">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="https://www.w3schools.com/bootstrap/img_flower2.jpg" alt="Flower">
                        <div class="carousel-caption">
                            <h3>Flowers</h3>
                            <p>Beautiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="https://www.w3schools.com/bootstrap/img_flower2.jpg" alt="Flower">
                        <div class="carousel-caption">
                            <h3>Flowers</h3>
                            <p>Beautiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
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
        <div class="col-sm-6">
            <!--notice section staet-->
            <div class="col-sm-6 notice">
                <span class="topic">News</span>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span ><a class="seemore" href="#">See More<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a></span><br/>
                </div>
            </div>
            <!--notice section ends-->
            <!--person info starts-->
            <div class="col-sm-6  notice">
                <div class="person">
                    <img alt="Image" class="image img-responsive img-rounded left" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">

                    <span class="person-name">Name of person</span><br/>
                    <span class="person-name">Post of person</span>
                </div>
                <hr/>
                <div class="person">
                    <img alt="Image" class="image img-responsive img-rounded left" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                    <span class="person-name">Name of person</span><br/>
                    <span class="person-name">Post of person</span>
                </div>
            </div>
            <!--person info ends-->
        </div>
        <hr/>
        <hr/>
    </div>

    <div class="body">
        <div class="panel-heading">
            <h3 class="topic">Hamro barema kei kura</h3>
        </div>
        <div class="panel-body">
            alksndknsdhcj sgdgjfgusgd cgsjdgfugs gkugshkdjfh haskjdhf hs idhf sdgufghlsaifhasdifou asiudgfhaolihlaihl8hf uhgsydfgiahsdiegiy gasugdfoau iugsagf asoyfgia sudhf gajsgdifu aohkhf7yw egjao9ugfe8ygfbadtf uyhsudgfi7asoeu gyueiasyefoh gasidgfalhi8h9kabfkuhlqkwhefj yfuewhjbfsia uiyfhaiuh8hjafuashhf iaushdfali gfugs gkugshkdjfh haskjdhf hs idhf sdgufghlsaifhasdifou asiudgfhaolihlaihl8hf uhgsydfgiahsdiegiy gasugdfoau iugsagf asoyfgia sudhf gajsgdifu aohkhf7yw egjao9ugfe8ygfbadtf uyhsudgfi7asoeu gyueiasyefoh gasidgfalhi8h9kabfkuhlqkwhefj yfuewhjbfsia uiyfhaiuh8hjafuashhf iaushdfali gfugs gkugshkdjfh haskjdhf hs idhf sdgufghlsaifhasdifou asiudgfhaolihlaihl8hf uhgsydfgiahsdiegiy gasugdfoau iugsagf asoyfgia sudhf gajsgdifu aohkhf7yw egjao9ugfe8ygfbadtf uyhsudgfi7asoeu gyueiasyefoh gasidgfalhi8h9kabfkuhlqkwhefj yfuewhjbfsia uiyfhaiuh8hjafuashhf iaushdfali gfugs gkugshkdjfh haskjdhf hs idhf sdgufghlsaifhasdifou asiudgfhaolihlaihl8hf uhgsydfgiahsdiegiy gasugdfoau iugsagf asoyfgia sudhf gajsgdifu aohkhf7yw egjao9ugfe8ygfbadtf uyhsudgfi7asoeu gyueiasyefoh gasidgfalhi8h9kabfkuhlqkwhefj yfuewhjbfsia uiyfhaiuh8hjafuashhf iaushdfali
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="notice twit">
                <a class="twitter-timeline twit" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a> <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="notice">
                <span class="topic">Important Links</span>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i>Title od the news goes here</span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>




            </div>
        </div>
        <div class="col-sm-4">
            <div class="notice">

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
