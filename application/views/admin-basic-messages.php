<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:51 GMT -->
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>myAdmin - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/summernote/summernote.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="basic-messages">


<!-- Body Wrap -->
<div id="main">

    <!-- Header  -->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-logo-wrapper dark bg-dark">
            <a class="navbar-logo-image" href="<?php echo base_url(); ?>index-2.html">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="sb-l-o-logo">
                <img src="<?php echo base_url(); ?>assets/img/logo_small.png" alt="" class="sb-l-m-logo">
            </a>
        </div>
        <span id="sidebar_left_toggle" class="ad ad-lines navbar-nav navbar-left"></span>
        <form class="navbar-form navbar-left search-form square" role="search">
            <div class="input-group add-on">

                <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder=''"
                       onblur="this.placeholder='Search'">

                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>

            </div>
        </form>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu w230" role="menu">
                    <li><a href="<?php echo base_url(); ?>#">Action</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Another action</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Something else</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>#">Separated link</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-fuse">
                <a href="<?php echo base_url(); ?>#" class="dropdown-toggle mln" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm"><span class="name">John Iverson</span></span>
                    <span class="fa fa-caret-down hidden-xs hidden-sm"></span>
                    <span class="profile-online">
                        <img src="<?php echo base_url(); ?>assets/img/avatars/profile_avatar.jpg" alt="avatar">
                    </span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w190" role="menu">
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Profile
                            <span class="fa fa-user"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Settings
                            <span class="fa fa-cog"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            My Calendar
                            <span class="fa fa-calendar-o"></span> 
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Help
                            <span class="fa fa-question-circle"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Logout
                            <span class="fa fa-sign-out"></span> 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr25">
            <li class="dropdown dropdown-fuse ml20">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-envelope fs16"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle bg-color-1 fs10 visible-xl">
                        3
                    </button>
                    <div class="dropdown-menu keep-dropdown w370 animated animated-shorter activity-container fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="activity-content">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                        <a href="<?php echo base_url(); ?>#nav-tab1" data-toggle="tab" class="btn active">Notifications</a>
                                        <a href="<?php echo base_url(); ?>#nav-tab2" data-toggle="tab" class="btn br-l-n br-r-n">Messages</a>
                                        <a href="<?php echo base_url(); ?>#nav-tab3" data-toggle="tab" class="btn ">Activity</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane scroller-navbar alerts-widget active" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left bg-success" href="<?php echo base_url(); ?>#"> 
                                                    <span class="imoon imoon-user2"></span> 
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        New Registration
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-system" href="<?php echo base_url(); ?>#"> 
                                                    <span class="imoon imoon-tag"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        New Order
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-system">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-info" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-info">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-warning" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-warning">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-system" href="<?php echo base_url(); ?>#"> 
                                                    <span class="imoon imoon-tag"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        New Order
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-system">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-info" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-info">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-warning" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-warning">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane scroller-navbar chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Lorem ipsum dolor sit amet, nonummy nibh euismod tinc consectetuer
                                                    adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Euismod sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Corem ipsum dolor sit amet, nonummy nibh euismod tinc co.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Ubh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane scroller-navbar activity-widget" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/4.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/3.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/4.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/3.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="<?php echo base_url(); ?>#" class="btn fw600"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-bell fs16"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs10 bg-color-2 visible-xl">
                        8
                    </button>
                    <div class="dropdown-menu keep-dropdown w370 animated animated-shorter fadeIn activity-container timeline-container" role="menu">
                        <div class="panel activity-content mbn">
                            <div class="panel-menu">
                                <span class="panel-title fw600"> Activity reports</span>
                            </div>
                            <div class="panel-body scroller-navbar pn">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b> 
                                            Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">9:59am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPhone 6s</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b> 
                                            Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">9:59am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPhone 6s</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                </ol>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="<?php echo base_url(); ?>#" class="btn"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr5">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">English
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>#">English</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Spanish</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Turkish</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- /Header  -->

    <!-- Sidebar  -->
        <?php require_once ("admin-sidebar.php") ;?>
    <!-- /Sidebar  -->

        

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="<?php echo base_url(); ?>index-2.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="<?php echo base_url(); ?>index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Messages</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Left -->
            <aside class="chute chute-left chute-icon-style chute290 bg-info" data-chute-height="match">
                <div class="chute-icon"></div>
                <div class="chute-container">
                    <!-- New Message -->
                    <button id="quick-compose" type="button" class="btn btn-dark light btn-block fw600">New message
                    </button>

                    <!-- Message Menu -->
                    <div class="list-group list-group-links in-bg-chute mt20">
                        <div class="list-group-header"> Mail</div>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-envelope-o"></i>
                            Inbox
                            <span class="label badge-success">4</span>
                        </a>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-save"></i>
                            Drafts
                        </a>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-file-o"></i>
                            Sent Items
                        </a>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-times-circle-o"></i>
                            Spam
                        </a>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-trash-o"></i>
                            Trash
                        </a>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-spinner"></i>
                            Email Settings
                        </a>
                        <a href="<?php echo base_url(); ?>#" class="list-group-item">
                            <i class="fa fa-smile-o"></i>
                            Contacts
                            <span class="label badge-dark">3</span>
                        </a>
                    </div>
                </div>

            </aside>
            <!-- /Column Left -->

            <!-- Column Center -->
            <div class="chute chute-center pn bg-light">

                <div class="panel m40">

                    <!-- Message Menu -->
                    <div class="panel-menu br-n hidden">
                        <div class="row table-layout">

                            <!-- Left Button Group -->
                            <div class="hidden-xs hidden-sm col-md-3 va-m pln">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Right Button Group -->
                            <div class="col-xs-12 col-md-9 text-right prn">
                                <button type="button" class="btn btn-dark light visible-xs-inline-block mr10">
                                    Compose
                                </button>
            	                <span class="hidden-xs va-m text-muted mr15"> <strong>9</strong> messages
            	                </span>

                                <div class="btn-group mr10">
                                    <button type="button" class="btn btn-default light hidden-xs">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light hidden-xs">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="btn-group mr10">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default light dropdown-toggle ph8"
                                                data-toggle="dropdown">
                                            <span class="fa fa-tags"></span>
                                            <span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button"
                                                class="btn btn-default light dropdown-toggle ph8 br-tp-left"
                                                data-toggle="dropdown">
                                            <span class="fa fa-folder"></span>
                                            <span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Toolbar Header -->
                    <div class="panel-menu br-n pn mtn">
                        <div class="row">
                            <div class="hidden-xs hidden-sm col-md-3">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-9 text-right ta-l-xs">
                                <button type="button" class="btn btn-dark light visible-xs-inline-block mr10">
                                    Compose
                                </button>
                                <span class="hidden-xs va-m text-muted mr15"> <strong>9</strong> messages
                                </span>

                                <div class="btn-group mr10">
                                    <button type="button" class="btn btn-default light hidden-xs">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light hidden-xs">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="btn-group mr10">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default light dropdown-toggle ph8"
                                                data-toggle="dropdown">
                                            <span class="fa fa-tags"></span>
                                            <span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #3</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">
                                                    <span class="fa fa-plus pr5"></span> Create New</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button"
                                                class="btn btn-default light dropdown-toggle ph8 br-tp-left"
                                                data-toggle="dropdown">
                                            <span class="fa fa-folder"></span>
                                            <span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">Submenu #3</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#">
                                                    <span class="fa fa-plus pr5"></span> Create New</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default light">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Message Body -->
                    <div class="table-responsive">
                        <table id="message-table" class="table tc-checkbox-1 allcp-form theme-warning br-t">
                            <thead>
                            <tr class="">
                                <th class="text-center hidden-xs">Select</th>
                                <th class="hidden-xs">Star</th>
                                <th>Sender</th>
                                <th>Subject</th>
                                <th class="hidden-xs">Attachement</th>
                                <th class="text-center">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="message-unread">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r1" type="radio" name="custom">
	                    <label class="rating-star" for="r1">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Digital worm</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"></td>
                                <td class="text-center fw600">October 20</td>
                            </tr>
                            <tr class="message-unread">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r2" type="radio" name="custom">
	                    <label class="rating-star" for="r2">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">All Stars</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs">
                                    <i class="fa fa-paperclip fs15 text-muted va-b"></i>
                                </td>
                                <td class="text-center">October 20</td>
                            </tr>
                            <tr class="message-unread">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r3" type="radio" name="custom">
	                    <label class="rating-star" for="r3">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Rich Eritas</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"></td>
                                <td class="text-center">October 20</td>
                            </tr>
                            <tr class="message-unread">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r4" type="radio" name="custom">
	                    <label class="rating-star" for="r4">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Somnabula</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"><i class="fa fa-paperclip fs15 text-muted va-b"></i></td>
                                <td class="text-center">October 20</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r5" type="radio" name="custom">
	                    <label class="rating-star" for="r5">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Chilik</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r6" type="radio" name="custom">
	                    <label class="rating-star" for="r6">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Rane Andwre</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"><i class="fa fa-paperclip fs15 text-muted va-b"></i></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r7" type="radio" name="custom">
	                    <label class="rating-star" for="r7">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">John Doe</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r8" type="radio" name="custom">
	                    <label class="rating-star" for="r8">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Sack Bane</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"><i class="fa fa-paperclip fs15 text-muted va-b"></i></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r9" type="radio" name="custom">
	                    <label class="rating-star" for="r9">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Ban Zai</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r10" type="radio" name="custom">
	                    <label class="rating-star" for="r10">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Tin Tin</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"><i class="fa fa-paperclip fs15 text-muted va-b"></i></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            <tr class="message-read">
                                <td class="hidden-xs">
                                    <label class="option block mn">
                                        <input type="checkbox" name="inputname" value="FR">
                                        <span class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="hidden-xs">
	                  <span class="rating block mn pull-left">
	                    <input class="rating-input" id="r11" type="radio" name="custom">
	                    <label class="rating-star" for="r11">
                            <i class="fa fa-star va-m"></i>
                        </label>
	                  </span>
                                </td>
                                <td class="">Rock For</td>
                                <td class="">Claritas est etiam processus dynamicus, qui sequitur.</td>
                                <td class="hidden-xs"></td>
                                <td class="text-center">October 19</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->

    </section>


</div>
<!-- /Body Wrap  -->

<!-- Quick Compose -->
<div class="quick-compose-form">
    <form>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        <input type="text" class="form-control" id="inputSubject" placeholder="Subject">

        <div class="summernote-quick">Compose your message here...</div>
    </form>
</div>

<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/js/plugins/summernote/summernote.min.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/basic-messages.js"></script>
<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:53 GMT -->
</html>
