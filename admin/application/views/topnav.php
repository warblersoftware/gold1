<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SRABON - Responsive, Touch Friendly Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<meta name="author" content="Westilian: Kamrujaman Shohel">
<!-- styles -->
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/jquery.jqplot.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/prettify.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/elfinder.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/elfinder.theme.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/fullcalendar.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="<?php echo base_url(); ?>css/themes.css" rel="stylesheet">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie/ie8.css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie/ie9.css" />
<![endif]-->
<!--fav and touch icons -->
<link rel="shortcut icon" href="ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner top-nav">
    <div class="container-fluid">
      <div class="branding">
        <div class="logo"> <a href="index"><img src="<?php echo base_url(); ?>img/logo.png" width="168" height="40" alt="Logo"></a> </div>
      </div>
      <ul class="nav pull-right">
        <li class="dropdown search-responsive"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="nav-icon magnifying_glass"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="top-search">
              <form action="#" method="get">
                <div class="input-prepend"> <span class="add-on"><i class="icon-search"></i></span>
                  <input type="text" id="searchIcon">
                </div>
              </form>
            </li>
          </ul>
        </li>
        <!-- <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="lang-icons"><img src="img/flag-icons/us.png" width="16" height="11" alt="language"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/gb.png" width="16" height="11" alt="language"></i> English UK</a></li>
            <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/fr.png" width="16" height="11" alt="language"></i> French</a></li>
            <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/sa.png" width="16" height="11" alt="language"></i> Arabic</a></li>
            <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/it.png" width="16" height="11" alt="language"></i> Italian</a></li>
          </ul>
        </li> -->
        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Anthony <span class="alert-noty">25</span><i class="white-icons admin_user"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon-inbox"></i> Inbox <span class="alert-noty">10</span></a></li>
            <li><a href="#"><i class="icon-envelope"></i> Notifications <span class="alert-noty">15</span></a></li>
            <li><a href="#"><i class="icon-briefcase"></i> My Account</a></li>
            <li><a href="#"><i class="icon-file"></i> View Profile</a></li>
            <li><a href="#"><i class="icon-pencil"></i> Edit Profile</a></li>
            <li><a href="#"><i class="icon-cog"></i> Account Settings</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="icon-off"></i><strong> Logout</strong></a></li>
          </ul>
        </li>
      </ul>
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <div class="nav-collapse collapse">
        <ul class="nav">
          
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="nav-icon cog_3"></i> Themes Settings<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <!-- <li class="nav-header">Colors</li>
              <li class=" clearfix color-block"><span class="theme-color theme-blue" title="theme-blue"></span><span class="theme-color theme-light-blue" title="theme-light-blue"></span><span class="theme-color theme-dark" title="theme-dark"></span><span class="theme-color theme-chrome" title="theme-chrome"></span><span class="theme-color theme-chayam" title="theme-chayam"></span><span class="theme-color theme-default" title="theme-default"></span></li>
              <li class=" divider hidden-phone hidden-tablet"></li> -->
              <li class="nav-header hidden-phone hidden-tablet">Sidebar</li>
              <li class="theme-settings clearfix hidden-phone hidden-tablet">
                <div class="btn-group">
                  <button id="sidebar-on" disabled="disabled" class="btn btn-success">On</button>
                  <button id="sidebar-off" class="btn btn-inverse">Off</button>
                </div>
              </li>
              <li class=" divider"></li>
              <li class="nav-header hidden-phone hidden-tablet">Sidebar Placement</li>
              <li class="theme-settings clearfix hidden-phone hidden-tablet">
                <div class="btn-group">
                  <button disabled="disabled" id="left-sidebar" class="btn btn-inverse">Left</button>
                  <button id="right-sidebar" class="btn btn-info">Right</button>
                </div>
              </li>
             <!--  <li class="nav-header">Layout</li>
              
              <li><a href="../fixed-layout/index.html">Fixed Layout</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>