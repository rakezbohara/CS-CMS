<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome Admin To CMS</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="asset/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="asset/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="asset/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="asset/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="asset/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="asset/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">ContentManagementSystem - v 1.0</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->

                <li><a href="{{ url('logout') }}" class="js-right-sidebar"><i class="material-icons">input</i></a> </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('adminaboutus') }}">
                        <i class="material-icons">group</i>
                        <span>About Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admingallery') }}">
                        <i class="material-icons">collections</i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admincareer') }}">
                        <i class="material-icons">business_center</i>
                        <span>Career</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admindownloads') }}">
                        <i class="material-icons">cloud_download</i>
                        <span>Downloads</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('jobapply') }}">
                        <i class="material-icons">group_work</i>
                        <span>Career Application</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017 <a href="javascript:void(0);">CodeSastra</a>.
            </div>
            <div class="version">
                <b>ContentManagementSystem </b>v 1.0.4
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <a href="{{ url('blogpost') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">view_headline</i>
                        </div>
                        <div class="content">
                            <div class="text">BLOG</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{  url('slide') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">slideshow</i>
                        </div>
                        <div class="content">
                            <div class="text">SLIDE SHOW</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{  url('orghead') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ORG. HEAD</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{  url('orgtechhead') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ORG. TECHNICAL HEAD</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{  url('marquee') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">low_priority</i>
                        </div>
                        <div class="content">
                            <div class="text">MARQUEE</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{  url('homecontent') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">home</i>
                        </div>
                        <div class="content">
                            <div class="text">HOME CONTENT</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{  url('implink') }}">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">link</i>
                        </div>
                        <div class="content">
                            <div class="text">IMPORTANT LINKS</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- #END# Widgets -->




    </div>
</section>

<!-- Jquery Core Js -->
<script src="asset/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="asset/admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="asset/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="asset/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="asset/admin/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="asset/admin/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="asset/admin/plugins/raphael/raphael.min.js"></script>
<script src="asset/admin/plugins/morrisjs/morris.js"></script>


<!-- Sparkline Chart Plugin Js -->
<script src="asset/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="asset/admin/js/admin.js"></script>
<script src="asset/admin/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="asset/admin/js/demo.js"></script>
</body>

</html>