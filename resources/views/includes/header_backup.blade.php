<!doctype html>
<html lang="en">

<!-- Mirrored from demo.g-axon.com/mouldifi-bs4/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2019 07:15:33 GMT -->
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
                <a class="site-logo" href="index.php">
                    <img src="{{url('public')}}/images/logo.png" alt="Mouldifi" title="Mouldifi">
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
                        <input class="form-control border-0" placeholder="Search in Yellow book..." value="" type="search">
                        <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i></button>
                    </div>
                </div>

                <ul class="quick-menu header-notifications ml-auto">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Advertising Info</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Submit</a></li>
                </ul>
            </div>
        </header>
        <!-- /main header -->