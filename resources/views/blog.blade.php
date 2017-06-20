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
                    <li><a href="/"> @lang('welcome.menu1')</a></li>
                    <li><a href="/aboutus">@lang('welcome.menu2')</a></li>
                    <li><a href="#">@lang('welcome.menu3')</a></li>
                    <li><a href="#">@lang('welcome.menu4')</a></li>
                    <li><a href="#">@lang('welcome.menu5')</a></li>
                    <li class="active"><a href="#">@lang('welcome.menu6')</a></li>
                    <li><a href="#">@lang('welcome.menu7')</a></li>
                    <li><a href="/sample">@lang('welcome.menu8')</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="articlethumb">
        <div class="topic">
            This is the article title which will be the sample article of the post<span class="right">2072-12-52</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    Article sample template isn tinisnd kjabsdb ihhsd hus ugus hggsdf ui agsdf iuagsd iusg ihsjdfjlua hf8asdifuadsiuhoa8ysdhaius joiasjdf jiasjdf ujoiasjdf jisajdf jisdfoj jsdif iyousid fyha fidsy asify ashdfuyukahsd foyaidyfu ayiylisiduf hausydfuah yisdfisah 8yoisafha bh gus hjhsi jgsbs'hbhasbf hjudia hufubfi hif ijihdiasdf hbios hifjsinb ihdh fhisjla ifjdojda jlkiahia...<a href="#">See More</a>
                </div>
                <div class="col-sm-2">
                    <img class="image right" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="articlethumb">
        <div class="topic">
            This is the article title which will be the sample article of the post<span class="right">2072-12-52</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    Article sample template isn tinisnd kjabsdb ihhsd hus ugus hggsdf ui agsdf iuagsd iusg ihsjdfjlua hf8asdifuadsiuhoa8ysdhaius joiasjdf jiasjdf ujoiasjdf jisajdf jisdfoj jsdif iyousid fyha fidsy asify ashdfuyukahsd foyaidyfu ayiylisiduf hausydfuah yisdfisah 8yoisafha bh gus hjhsi jgsbs'hbhasbf hjudia hufubfi hif ijihdiasdf hbios hifjsinb ihdh fhisjla ifjdojda jlkiahia...<a href="#">See More</a>
                </div>
                <div class="col-sm-2">
                    <img class="image right" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="articlethumb">
        <div class="topic">
            This is the article title which will be the sample article of the post<span class="right">2072-12-52</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    Article sample template isn tinisnd kjabsdb ihhsd hus ugus hggsdf ui agsdf iuagsd iusg ihsjdfjlua hf8asdifuadsiuhoa8ysdhaius joiasjdf jiasjdf ujoiasjdf jisajdf jisdfoj jsdif iyousid fyha fidsy asify ashdfuyukahsd foyaidyfu ayiylisiduf hausydfuah yisdfisah 8yoisafha bh gus hjhsi jgsbs'hbhasbf hjudia hufubfi hif ijihdiasdf hbios hifjsinb ihdh fhisjla ifjdojda jlkiahia...<a href="#">See More</a>
                </div>
                <div class="col-sm-2">
                    <img class="image right" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="articlethumb">
        <div class="topic">
            This is the article title which will be the sample article of the post<span class="right">2072-12-52</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    Article sample template isn tinisnd kjabsdb ihhsd hus ugus hggsdf ui agsdf iuagsd iusg ihsjdfjlua hf8asdifuadsiuhoa8ysdhaius joiasjdf jiasjdf ujoiasjdf jisajdf jisdfoj jsdif iyousid fyha fidsy asify ashdfuyukahsd foyaidyfu ayiylisiduf hausydfuah yisdfisah 8yoisafha bh gus hjhsi jgsbs'hbhasbf hjudia hufubfi hif ijihdiasdf hbios hifjsinb ihdh fhisjla ifjdojda jlkiahia...<a href="#">See More</a>
                </div>
                <div class="col-sm-2">
                    <img class="image right" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="articlethumb">
        <div class="topic">
            This is the article title which will be the sample article of the post<span class="right">2072-12-52</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    Article sample template isn tinisnd kjabsdb ihhsd hus ugus hggsdf ui agsdf iuagsd iusg ihsjdfjlua hf8asdifuadsiuhoa8ysdhaius joiasjdf jiasjdf ujoiasjdf jisajdf jisdfoj jsdif iyousid fyha fidsy asify ashdfuyukahsd foyaidyfu ayiylisiduf hausydfuah yisdfisah 8yoisafha bh gus hjhsi jgsbs'hbhasbf hjudia hufubfi hif ijihdiasdf hbios hifjsinb ihdh fhisjla ifjdojda jlkiahia...<a href="#">See More</a>
                </div>
                <div class="col-sm-2">
                    <img class="image right" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="articlethumb">
        <div class="topic">
            This is the article title which will be the sample article of the post<span class="right">2072-12-52</span>
        </div>
        <div class="desc">
            <div class="row">
                <div class="col-sm-10">
                    Article sample template isn tinisnd kjabsdb ihhsd hus ugus hggsdf ui agsdf iuagsd iusg ihsjdfjlua hf8asdifuadsiuhoa8ysdhaius joiasjdf jiasjdf ujoiasjdf jisajdf jisdfoj jsdif iyousid fyha fidsy asify ashdfuyukahsd foyaidyfu ayiylisiduf hausydfuah yisdfisah 8yoisafha bh gus hjhsi jgsbs'hbhasbf hjudia hufubfi hif ijihdiasdf hbios hifjsinb ihdh fhisjla ifjdojda jlkiahia...<a href="#">See More</a>
                </div>
                <div class="col-sm-2">
                    <img class="image right" src="http://ratcfw.gov.np/upload/downloadimages/profile/Bir%20Bahadur%20Chand%204.jpg">
                </div>
            </div>
        </div>
    </div>

    <div align="center">
        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
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
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="">Title of the news goes here</a></span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="">Title of the news goes here</a></span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="">Title of the news goes here</a></span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="">Title of the news goes here</a></span><br/>
                    <span class="pubdate">2072-12-12</span>
                </div>
                <hr/>
                <div class="item">
                    <span class="title"><i class="fa fa-hand-o-right"></i><a href="">Title of the news goes here</a></span><br/>
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