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
    <link href="../asset/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../asset/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../asset/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../asset/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../asset/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../asset/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../asset/admin/css/themes/all-themes.css" rel="stylesheet" />


    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../ckfinder/ckfinder.js"></script>
    <script type="text/javascript">

        function BrowseServer()
        {
            // You can use the "CKFinder" class to render CKFinder in a page:
            var finder = new CKFinder();
            finder.basePath = '/asset/ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
            finder.rememberLastFolder = false;
            finder.startupPath = "Images:/slideshow/";
            finder.selectActionFunction = SetFileField;
            finder.popup();

            // It can also be done in a single line, calling the "static"
            // popup( basePath, width, height, selectFunction ) function:
            // CKFinder.popup( '../', null, null, SetFileField ) ;
            //
            // The "popup" function can also accept an object as the only argument.
            // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
        }

        // This is a sample function which is called when a file is selected in CKFinder.
        function SetFileField( fileUrl )
        {
            document.getElementById( 'xFilePath' ).value = fileUrl;
        }

    </script>
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
            <h2>SLIDE > EDIT</h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>EDIT SLIDE</h2>

                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="{{ url('editslide',$slideshow['id']) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{ $slideshow['title'] }}" name="title" required >
                                    <label class="form-label">Title</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="desc" value="{{ $slideshow['desc'] }}" required minlength="5">
                                    <label class="form-label">Description</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="xFilePath"  name="imgpath" type="text" value="{{ $slideshow['imgpath'] }}" size="60" required />
                                    <input type="button"  class="btn bg-teal waves-effect" value="Browse Server" onclick="BrowseServer();" />
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Validation -->
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../asset/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../asset/admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../asset/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../asset/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../asset/admin/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="../asset/admin/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Jquery Validation Plugin Css -->
<script src="../asset/admin/plugins/jquery-validation/jquery.validate.js"></script>

<!-- JQuery Steps Plugin Js -->
<script src="../asset/admin/plugins/jquery-steps/jquery.steps.js"></script>

<!-- Sweet Alert Plugin Js -->
<script src="../asset/admin/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Morris Plugin Js -->
<script src="../asset/admin/plugins/raphael/raphael.min.js"></script>
<script src="../asset/admin/plugins/morrisjs/morris.js"></script>


<!-- Sparkline Chart Plugin Js -->
<script src="../asset/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="../asset/admin/js/admin.js"></script>
<script src="../asset/admin/js/pages/index.js"></script>
<script src="../asset/admin/js/pages/forms/form-validation.js"></script>

<!-- Demo Js -->
<script src="../asset/admin/js/demo.js"></script>
</body>

</html>