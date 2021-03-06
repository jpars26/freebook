<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Bootstrap Admin Template : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="/views/res/admin/assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="/views/res/admin/assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="/views/res/admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="/views/res/admin/assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
  <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Binary admin</a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="/admin/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
  </nav>
  <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
        <li class="text-center">
          <img src="/views/res/admin/assets/img/find_user.png" class="user-image img-responsive"/>
        </li>


        <li>
          <a class="active-menu"  href="/views/res/admin/index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
        </li>
        <li>
          <a  href="/views/res/admin/ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
        </li>
        <li>
          <a  href="/views/res/admin/tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
        </li>
        <li  >
          <a   href="/views/res/admin/chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
        </li>
        <li  >
          <a  href="/views/res/admin/table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
        </li>
        <li  >
          <a  href="/views/res/admin/form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
        </li>
        <li  >
          <a   href="/views/res/admin/login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
        </li>
        <li  >
          <a   href="/views/res/admin/registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
        </li>

        <li>
          <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="#">Second Level Link</a>
            </li>
            <li>
              <a href="#">Second Level Link</a>
            </li>
            <li>
              <a href="#">Second Level Link<span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <li>
                  <a href="#">Third Level Link</a>
                </li>
                <li>
                  <a href="#">Third Level Link</a>
                </li>
                <li>
                  <a href="#">Third Level Link</a>
                </li>

              </ul>

            </li>
          </ul>
        </li>
        <li  >
          <a  href="/views/res/admin/blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
        </li>
      </ul>

    </div>

  </nav>
  <!-- /. NAV SIDE  -->