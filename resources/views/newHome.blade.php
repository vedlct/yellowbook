<!doctype html>
<html lang="en">

<!-- Mirrored from demo.g-axon.com/mouldifi-bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2019 07:17:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <title>Yellow Book</title>

    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="{{url('public')}}/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!-- sprite-flags-master stylesheet -->
    <link rel="stylesheet" href="{{url('public')}}/fonts/sprite-flags-master/sprite-flags-32x32.css">
    <!-- /sprite-flags-master stylesheet -->

    <!--Weather stylesheet -->
    <link rel="stylesheet" href="{{url('public')}}/fonts/weather-icons-master/css/weather-icons.min.css">
    <!--/Weather stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="{{url('public')}}/css/mouldifi-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="{{url('public')}}/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- c3 Chart's css file -->
    <link href="{{url('public')}}/node_modules/c3/c3.min.css" rel="stylesheet">
    <!-- /c3 chart stylesheet -->

    <!-- Chartists Chart's css file -->
    <link href="{{url('public')}}/node_modules/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- /chartists chart stylesheet -->

    <!-- Mouldifi-core stylesheet -->
    <link href="{{url('public')}}/css/mouldifi-core.css" rel="stylesheet">
    <!-- /mouldifi-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="{{url('public')}}/css/theme-indigo.min.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

</head>

<body id="body" data-theme="indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
    <div id="menu" class="side-nav gx-sidebar">
        <div class="navbar-expand-lg">
            <!-- Sidebar header  -->
            <div class="sidebar-header">
                <a class="site-logo" href="index-2.html">
                    <img src="public/images/logo.png" alt="Mouldifi" title="Mouldifi">
                </a>
            </div>
            <!-- /sidebar header -->

            <!-- Main navigation -->
            <div id="main-menu" class="main-menu navbar-collapse collapse">
                <ul class="nav-menu">
                    <li class="nav-header">CATEGORIES</li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Agricultural Products & Services</span>
                            <span class="ml-2 mb-0 badge badge-primary">187</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Business & Services</span>
                            <span class="ml-2 mb-0 badge badge-primary">1305</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Computer & Internet</span>
                            <span class="ml-2 mb-0 badge badge-primary">865</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Education & Career</span>
                            <span class="ml-2 mb-0 badge badge-primary">376</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Fashion & Jewelry</span>
                            <span class="ml-2 mb-0 badge badge-primary">77</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Health & Medicine</span>
                            <span class="ml-2 mb-0 badge badge-primary">268</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="#">
                            <span class="nav-text">Leather & Leather Goods</span>
                            <span class="ml-2 mb-0 badge badge-primary">113</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">News & Media</span>
                            <span class="ml-2 mb-0 badge badge-primary">168</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Real Estate</span>
                            <span class="ml-2 mb-0 badge badge-primary">191</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Telecommunication</span>
                            <span class="ml-2 mb-0 badge badge-primary">82</span>
                        </a>
                    </li>
                    <li class="menu no-arrow">
                        <a href="category.php">
                            <span class="nav-text">Tour & Travel</span>
                            <span class="ml-2 mb-0 badge badge-primary">332</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
        <header class="main-header">
            <div class="gx-toolbar">
                <div class="sidebar-mobile-menu">
                    <a class="gx-menu-icon menu-toggle" href="#menu">
                        <span class="menu-icon icon-grey"></span>
                    </a>
                </div>

                <div class="search-bar right-side-icon bg-transparent d-none d-sm-block">
                    <div class="form-group">
                        <input class="form-control border-0" placeholder="Search in app..." value="" type="search">
                        <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i></button>
                    </div>
                </div>

                <ul class="quick-menu header-notifications ml-auto">
                    <li class="dropdown language-menu">


                        <div role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <div class="messages-list">

                            </div>
                        </div>
                    </li>


                    <li class="dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" class="d-inline-block" aria-expanded="true">
                            <i class="zmdi zmdi-notifications-active icons-alert animated infinite wobble"></i>
                        </a>

                        <div role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">


                            <div class="dropdown-menu-perfectscrollbar">
                                <div class="messages-list">
                                    <ul class="list-unstyled">
                                        {{--<li class="media">--}}
                                            {{--<img alt="stella-johnson" src="public/images/userAvatar/stella-johnson.jpg"--}}
                                                 {{--class="size-40 mr-2 user-avatar">--}}
                                            {{--<div class="media-body align-self-center">--}}
                                                {{--<p class="sub-heading mb-0">Stella Johnson has recently posted an--}}
                                                    {{--album</p>--}}
                                                {{--<a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs mb-0">--}}
                                                    {{--<i class="zmdi zmdi-thumb-up text-blue zmdi-hc-fw"></i>--}}
                                                {{--</a>--}}
                                                {{--<span class="meta-date"><small>4:10 PM</small></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}

                                        {{--<li class="media">--}}
                                            {{--<img alt="domnic-harris" src="public/images/userAvatar/domnic-harris.jpg"--}}
                                                 {{--class="size-40 mr-2 user-avatar">--}}
                                            {{--<div class="media-body align-self-center">--}}
                                                {{--<p class="sub-heading mb-0">Alex Brown has shared Martin Guptil's--}}
                                                    {{--post</p>--}}
                                                {{--<a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs mb-0">--}}
                                                    {{--<i class="zmdi zmdi-comment-text text-grey zmdi-hc-fw"></i>--}}
                                                {{--</a>--}}
                                                {{--<span class="meta-date"><small>5:18 PM</small></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}

                                        {{--<li class="media">--}}
                                            {{--<img alt="domnic-brown" src="public/images/userAvatar/domnic-brown.jpg"--}}
                                                 {{--class="size-40 mr-2 user-avatar">--}}
                                            {{--<div class="media-body align-self-center">--}}
                                                {{--<p class="sub-heading mb-0">Domnic Brown has sent you a group invitation--}}
                                                    {{--for Global Health</p>--}}
                                                {{--<a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs mb-0">--}}
                                                    {{--<i class="zmdi zmdi-card-giftcard text-info zmdi-hc-fw"></i>--}}
                                                {{--</a>--}}
                                                {{--<span class="meta-date"><small>5:36 PM</small></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}

                                        {{--<li class="media">--}}
                                            {{--<img alt="john-smith" src="public/images/userAvatar/john-smith.jpg"--}}
                                                 {{--class="size-40 mr-2 user-avatar">--}}
                                            {{--<div class="media-body align-self-center">--}}
                                                {{--<p class="sub-heading mb-0">John Smith has birthday today</p>--}}
                                                {{--<a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs mb-0">--}}
                                                    {{--<i class="zmdi zmdi-cake text-warning zmdi-hc-fw"></i>--}}
                                                {{--</a>--}}
                                                {{--<span class="meta-date"><small>5:54 PM</small></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}

                                        {{--<li class="media">--}}
                                            {{--<img alt="jimmy-jo" src="public/images/userAvatar/jimmy-jo.jpg"--}}
                                                 {{--class="size-40 mr-2 user-avatar">--}}
                                            {{--<div class="media-body align-self-center">--}}
                                                {{--<p class="sub-heading mb-0">Chris has updated his profile picture</p>--}}
                                                {{--<a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs mb-0">--}}
                                                    {{--<i class="zmdi zmdi-account-box-o text-grey zmdi-hc-fw"></i>--}}
                                                {{--</a>--}}
                                                {{--<span class="meta-date"><small>5:25 PM</small></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" class="d-inline-block" aria-expanded="true">
                            <i class="zmdi zmdi-comment-alt-text icons-alert zmdi-hc-fw"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" data-placement="bottom-end" data-x-out-of-boundaries="">
                            <div class="gx-card-header d-flex align-items-center">
                                <div class="mr-auto">
                                    <h3 class="card-heading">Messages</h3>
                                </div>
                            </div>

                            <div class="dropdown-menu-perfectscrollbar1">
                                <div class="messages-list">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="Domnic Brown" src="public/images/userAvatar/domnic-brown.jpg"
                                                     class="rounded-circle size-40 user-avatar">
                                                <span class="badge badge-danger rounded-circle">5</span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">Domnic Brown</a>
                                                    </h5>
                                                    <span class="meta-date"><small>6:19 PM</small></span>
                                                </div>
                                                <p class="sub-heading">There are many variations of passages of...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="John Smith" src="public/images/userAvatar/jimmy-jo.jpg" class="rounded-circle size-40 user-avatar">
                                                <span class="badge badge-danger rounded-circle"></span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">John Smith</a>
                                                    </h5>
                                                    <span class="meta-date"><small>4:18 PM</small></span>
                                                </div>
                                                <p class="sub-heading">Lorem Ipsum is simply dummy text of the...</p>
                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="John Smith" src="public/images/userAvatar/john-smith.jpg"
                                                     class="size-40 rounded-circle user-avatar">
                                                <span class="badge badge-danger rounded-circle">8</span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">John Smith</a>
                                                    </h5>
                                                    <span class="meta-date"><small>7:10 PM</small></span>
                                                </div>
                                                <p class="sub-heading">The point of using Lorem Ipsum is that it
                                                    has...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="alex dolgove" src="public/images/userAvatar/alex-dolgove.jpg"
                                                     class="size-40 rounded-circle user-avatar">
                                                <span class="badge badge-danger rounded-circle"></span>
                                            </div>

                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">alex dolgove</a>
                                                    </h5>
                                                    <span class="meta-date"><small>5:10 PM</small></span>
                                                </div>
                                                <p class="sub-heading">It is a long established fact that a reader
                                                    will...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>

                                        </li>

                                        <li class="media">
                                            <div class="user-thumb">
                                                <img alt="Domnic Harris" src="public/images/userAvatar/domnic-harris.jpg" class="size-40 rounded-circle user-avatar">

                                                <span class="badge badge-danger rounded-circle">3</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="text-capitalize user-name mb-0">
                                                        <a href="javascript:void(0)">Domnic Harris</a>
                                                    </h5>
                                                    <span class="meta-date"><small>7:35 PM</small></span>
                                                </div>
                                                <p class="sub-heading">All the Lorem Ipsum generators on the...</p>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-mail-reply"></i>
                                                    <span>Reply</span>
                                                </a>

                                                <a href="javascript:void(0)" class="gx-btn gx-flat-btn gx-btn-xs text-muted">
                                                    <i class="zmdi zmdi-eye"></i>
                                                    <span>Read</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown user-nav">
                        <a class="dropdown-toggle no-arrow d-inline-block" href="#" role="button" id="userInfo"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar size-40" src="public/images/userAvatar/domnic-harris.jpg" alt="...">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userInfo">
                            <div class="user-profile">
                                <img class="user-avatar border-0 size-40" src="public/images/userAvatar/domnic-harris.jpg"
                                     alt="User">
                                <div class="user-detail ml-2">
                                    <h4 class="user-name mb-0">Chris Harris</h4>
                                    <small>Administrator</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="zmdi zmdi-face zmdi-hc-fw mr-1"></i>
                                Account
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="zmdi zmdi-settings zmdi-hc-fw mr-1"></i>
                                Setting
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="zmdi zmdi-sign-in zmdi-hc-fw mr-1"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="animated slideInUpTiny animation-duration-3">

                    <div class="page-heading">
                        <h2 class="title">Search Business Classifieds</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">Product/Service:</label>
                                <input class="form-control border-0" placeholder="Search in app..." value="" type="search">
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Company:</label>
                                <input class="form-control border-0" placeholder="Search in app..." value="" type="search">
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">City:</label>
                                    <select class="custom-select">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Category:</label>
                                    <select class="custom-select">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">


                            <div class="gx-card-body">
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                        <tr>
                                            <th style="background-color: green; color: yellow;">New Business Listing</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td><a style="color: green;" href="singleProduct.php">AC market Bd</a> - Air Conditioner Supplier & Servicing :: 12/06/2019</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> Copyright Company Name © 2019</p>
                    <ul class="quick-menu header-notifications ml-auto">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Advertising Info</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Submit Your Business</a></li>
                    </ul>
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->



</div>
<!-- /page container -->
<!-- Right Sidebar-->
<div id="colorSidebar" class="app-sidebar-content right-sidebar">


        <div class="color-theme-body">

        </div>
    </div>
</div>
<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<script src="public/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="public/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="public/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--chart-->
<script src="public/node_modules/d3/d3.min.js"></script>
<script src="public/node_modules/c3/c3.min.js"></script>
<script src="public/node_modules/chartist/dist/chartist.min.js"></script>
<script src="public/node_modules/chart.js/dist/Chart.bundle.min.js"></script>

<!--Custom JQuery-->
<script src="public/js/functions.js"></script>
<script src="public/js/custom/chart/dashboard-chart.js"></script>
</body>

<!-- Mirrored from demo.g-axon.com/mouldifi-bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2019 07:17:29 GMT -->
</html>