<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ward 13 | @yield('page_name')</title>
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

    <!-- Custom Css -->
    <link href="../asset/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../asset/admin/css/themes/all-themes.css" rel="stylesheet" />
    <script src="../ckfinder/ckfinder.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript">

        function BrowseServer()
        {
            // You can use the "CKFinder" class to render CKFinder in a page:
            var finder = new CKFinder();
            finder.basePath = '/asset/ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
            finder.rememberLastFolder = false;
            finder.startupPath = "Images:/gallery/";
            finder.popup();

            // It can also be done in a single line, calling the "static"
            // popup( basePath, width, height, selectFunction ) function:
            // CKFinder.popup( '../', null, null, SetFileField ) ;
            //
            // The "popup" function can also accept an object as the only argument.
            // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
        }
        function BrowseServerSlide()
        {
            // You can use the "CKFinder" class to render CKFinder in a page:
            var finder = new CKFinder();
            finder.basePath = '/asset/ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
            finder.rememberLastFolder = false;
            finder.startupPath = "Images:/slideshow/";
            finder.selectActionFunction = SetFileField1;
            finder.popup();

            // It can also be done in a single line, calling the "static"
            // popup( basePath, width, height, selectFunction ) function:
            // CKFinder.popup( '../', null, null, SetFileField ) ;
            //
            // The "popup" function can also accept an object as the only argument.
            // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
        }
        function BrowseServerStaff()
        {
            // You can use the "CKFinder" class to render CKFinder in a page:
            var finder = new CKFinder();
            finder.basePath = '/asset/ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
            finder.rememberLastFolder = false;
            finder.startupPath = "Images:/staff/";
            finder.selectActionFunction = SetFileField;
            finder.popup();

            // It can also be done in a single line, calling the "static"
            // popup( basePath, width, height, selectFunction ) function:
            // CKFinder.popup( '../', null, null, SetFileField ) ;
            //
            // The "popup" function can also accept an object as the only argument.
            // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
        }
        function BrowseServerDownload()
        {
            // You can use the "CKFinder" class to render CKFinder in a page:
            var finder = new CKFinder();
            finder.basePath = '/asset/ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
            finder.rememberLastFolder = false;
            finder.startupPath = "Files:/downloads/";
            finder.selectActionFunction = SetFileField1;
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
            document.getElementById( 'staffimg' ).src = fileUrl;

        }
        function SetFileField1( fileUrl )
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
            <h3 style="color:#fff">Pokhara Lekhnath Metropolitian City</h3>
            <h5 style="color:#fff">Ward No. 8, Nepal Government</h5>
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
                @if($view_name == 'admin_home-dashboard' || $view_name == 'admin_home-blog-blogpost' || $view_name == 'admin_home-blog-create' ||
                    $view_name == 'admin_home-blog-edit' || $view_name == 'admin_home-slideshow-slideshow' || $view_name == 'admin_home-slideshow-create' ||
                    $view_name == 'admin_home-slideshow-edit' || $view_name == 'admin_home-staff-orghead' || $view_name == 'admin_home-staff-orgtechhead' ||
                    $view_name == 'admin_home-marquee-marquee'|| $view_name == 'admin_home-homecontent-homecontent' || $view_name == 'admin_home-implink-implink')
                    <li class="active">
                @else
                    <li>
                @endif
                    <a href="{{ url('admin') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                @if($view_name== 'admin_home-aboutus')
                    <li class="active">
                @else
                   <li>
                @endif
                    <a href="{{ url('adminaboutus') }}">
                        <i class="material-icons">group</i>
                        <span>About Us</span>
                    </a>
                </li>
                @if($view_name== 'admin_home-gallery')
                     <li class="active">
                @else
                     <li>
                @endif
                    <a href="{{ url('admingallery') }}">
                        <i class="material-icons">collections</i>
                        <span>Gallery</span>
                    </a>
                </li>
                            {{--@if($view_name== 'admin_home-career-career' || $view_name== 'admin_home-career-create' || $view_name== 'admin_home-career-edit')
                                <li class="active">
                            @else
                                <li>
                            @endif
                    <a href="{{ url('admincareer') }}">
                        <i class="material-icons">business_center</i>
                        <span>Career</span>
                    </a>
                </li>--}}
                                @if($view_name== 'admin_home-downloads-create' || $view_name== 'admin_home-downloads-downloads' || $view_name== 'admin_home-downloads-edit')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                    <a href="{{ url('admindownloads') }}">
                        <i class="material-icons">cloud_download</i>
                        <span>Downloads</span>
                    </a>
                </li>
                                    @if($view_name== 'admin_home-career')
                                        <li class="active">
                                    @else
                                        <li>
                                    @endif
                    <a href="{{ url('suggestionreceived') }}">
                        <i class="material-icons">group_work</i>
                        <span>Suggeestion|Complaints</span>
                    </a>
                </li>
                @if($view_name== 'admin_home-ostaff-staff' || $view_name== 'admin_home-ostaff-create' || $view_name== 'admin_home-ostaff-edit')
                     <li class="active">
                @else
                     <li>
                @endif
                     <a href="{{ url('adminstaff') }}">
                         <i class="material-icons">person_pin</i>
                         <span>Staff</span>
                     </a>
                     </li>
                @if($view_name== 'admin_home-waste')
                    <li class="active">
                @else
                    <li>
                @endif
                    <a href="{{ url('adminwaste') }}">
                        <i class="material-icons">date_range</i>
                        <span>Waste Routine</span>
                    </a>
                    </li>
                @if($view_name== 'admin_home-setting')
                    <li class="active">
                @else
                    <li>
                @endif
                    <a href="{{ url('setting') }}">
                    <i class="material-icons">settings</i>
                        <span>Setting</span>
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

@yield('content')

<!-- Jquery Core Js -->
<script src="../asset/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../asset/admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../asset/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../asset/admin/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="../asset/admin/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Custom Js -->
<script src="../asset/admin/js/script.js"></script>
<script src="../asset/admin/js/admin.js"></script>
<script src="../asset/admin/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="../asset/admin/js/demo.js"></script>
</body>

</html>