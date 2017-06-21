<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
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
            <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->


                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
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
                    <a href="index.html">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="pages/typography.html">
                        <i class="material-icons">text_fields</i>
                        <span>Typography</span>
                    </a>
                </li>
                <li>
                    <a href="pages/helper-classes.html">
                        <i class="material-icons">layers</i>
                        <span>Helper Classes</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Widgets</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Cards</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/widgets/cards/basic.html">Basic</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/cards/colored.html">Colored</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/cards/no-header.html">No Header</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Infobox</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Animations</a>
                        </li>
                        <li>
                            <a href="pages/ui/badges.html">Badges</a>
                        </li>

                        <li>
                            <a href="pages/ui/breadcrumbs.html">Breadcrumbs</a>
                        </li>
                        <li>
                            <a href="pages/ui/buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="pages/ui/collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="pages/ui/colors.html">Colors</a>
                        </li>
                        <li>
                            <a href="pages/ui/dialogs.html">Dialogs</a>
                        </li>
                        <li>
                            <a href="pages/ui/icons.html">Icons</a>
                        </li>
                        <li>
                            <a href="pages/ui/labels.html">Labels</a>
                        </li>
                        <li>
                            <a href="pages/ui/list-group.html">List Group</a>
                        </li>
                        <li>
                            <a href="pages/ui/media-object.html">Media Object</a>
                        </li>
                        <li>
                            <a href="pages/ui/modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="pages/ui/notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="pages/ui/pagination.html">Pagination</a>
                        </li>
                        <li>
                            <a href="pages/ui/preloaders.html">Preloaders</a>
                        </li>
                        <li>
                            <a href="pages/ui/progressbars.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="pages/ui/range-sliders.html">Range Sliders</a>
                        </li>
                        <li>
                            <a href="pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                        </li>
                        <li>
                            <a href="pages/ui/tabs.html">Tabs</a>
                        </li>
                        <li>
                            <a href="pages/ui/thumbnails.html">Thumbnails</a>
                        </li>
                        <li>
                            <a href="pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                        </li>
                        <li>
                            <a href="pages/ui/waves.html">Waves</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-examples.html">Form Examples</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="pages/forms/editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tables/normal-tables.html">Normal Tables</a>
                        </li>
                        <li>
                            <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                        </li>
                        <li>
                            <a href="pages/tables/editable-table.html">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/medias/image-gallery.html">Image Gallery</a>
                        </li>
                        <li>
                            <a href="pages/medias/carousel.html">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/charts/morris.html">Morris</a>
                        </li>
                        <li>
                            <a href="pages/charts/flot.html">Flot</a>
                        </li>
                        <li>
                            <a href="pages/charts/chartjs.html">ChartJS</a>
                        </li>
                        <li>
                            <a href="pages/charts/sparkline.html">Sparkline</a>
                        </li>
                        <li>
                            <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/examples/sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="pages/examples/forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                            <a href="pages/examples/blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="pages/examples/404.html">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="pages/examples/500.html">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/maps/google.html">Google Map</a>
                        </li>
                        <li>
                            <a href="pages/maps/yandex.html">YandexMap</a>
                        </li>
                        <li>
                            <a href="pages/maps/jvectormap.html">jVectorMap</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">update</i>
                        <span>Changelogs</span>
                    </a>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.4
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BLOG > EDIT</h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>EDIT BLOG POST</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="post" action="{{url('saveblog',$blogpost['id'])}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" value="{{ $blogpost['title'] }}" required minlength="20">
                                    <label class="form-label">Title</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <h6>Content</h6>
                                    <textarea id="ckeditor" name="ckeditor" class="ckeditor"></textarea>
                                    <script type="text/javascript">
                                        {{--alert("{{$blogpost['content']}}");--}}

                                        var editor = CKEDITOR.replace( 'ckeditor' );
                                        CKEDITOR.instances.ckeditor.setData( ' {!! $blogpost['content'] !!} ');
                                        CKFinder.setupCKEditor( editor, '/ckfinder/' );
                                    </script>

                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{ date("y-m-d") }}" value="{{ $blogpost['pubdate'] }}" name="pubdate" required>
                                    <label class="form-label">Pub-date</label>
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