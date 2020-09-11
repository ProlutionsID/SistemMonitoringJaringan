<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
    />
    <meta name="author" content="Coderthemes" />

    <link rel="shortcut icon" href="<?php echo BASEURL; ?>/assets/images/favicon.ico" />

    <title>Halaman <?php echo $data['judul']; ?></title>

     <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/assets/plugins/morris/morris.css">
    
    <!-- App css -->
    <link
      href="<?php echo BASEURL; ?>/assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?php echo BASEURL; ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEURL; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo BASEURL; ?>/assets/js/modernizr.min.js"></script>
  </head>

  <body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

      <!-- Top Bar Start -->
      <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
          <!-- <a href="index.html" class=""
            ><span>Sistem Informasi Perangkat Jaringan</span
            ><i class="mdi mdi-layers"></i
          ></a> -->
          <h3>Sistem Informasi Perangkat Jaringan</h3>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Page title -->
            <ul class="nav navbar-nav list-inline navbar-left">
              <li class="list-inline-item">
                <button class="button-menu-mobile open-left">
                  <i class="mdi mdi-menu"></i>
                </button>
              </li>
              <li class="list-inline-item">
                <h4 class="page-title">Sistem Informasi Perangkat Jaringan</h4>
              </li>
            </ul>

            <nav class="navbar-custom">
              <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li>
                  <!-- Notification -->
                  <div class="notification-box">
                    <ul class="list-inline mb-0">
                      <li>
                        <a href="javascript:void(0);" class="right-bar-toggle">
                          <i class="mdi mdi-bell-outline noti-icon"></i>
                        </a>
                        <div class="noti-dot">
                          <span class="dot"></span>
                          <span class="pulse"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- End Notification bar -->
                </li>

                <li class="hide-phone">
                  <form class="app-search">
                    <input
                      type="text"
                      placeholder="Search..."
                      class="form-control"
                    />
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </li>
                 <li class="navbar-custom">
              <a href="<?php echo BASEURL; ?>/Logout/keluar" class="page-title" style="color: black">Logout</a>  
            </li>
              </ul>
            </nav>
          </div>
          <!-- end container -->
        </div>
        <!-- end navbar -->
      </div>
      <!-- Top Bar End -->

      <!-- ========== Left Sidebar Start ========== -->
      <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
          <!-- User -->
          <div class="user-box">
            <div class="user-img">
              <img
                src="<?php echo BASEURL; ?>/assets/images/users/avatar-1.jpg"
                alt="user-img"
                title="Admin"
                class="rounded-circle img-thumbnail img-responsive"
              />
              <div class="user-status offline">
                <i class="mdi mdi-adjust"></i>
              </div>
            </div>
            <h5><a href="#">Admin</a></h5>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="mdi mdi-settings"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a href="#" class="text-custom">
                  <i class="mdi mdi-power"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- End User -->

          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <ul>
              <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="<?php echo BASEURL; ?>/Home/index" class="waves-effect"
                    ><i class="mdi mdi-view-dashboard"></i>
                    <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL; ?>/Laporan/index" class="waves-effect"
                    ><i class="mdi mdi-view-dashboard"></i>
                    <span> Laporan </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL; ?>/Gedung/index" class="waves-effect"
                    ><i class="mdi mdi-view-dashboard"></i>
                    <span> Gedung </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL; ?>/Perangkat/index" class="waves-effect"
                    ><i class="mdi mdi-view-dashboard"></i>
                    <span> Perangkat Jaringan </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo BASEURL; ?>/User/index" class="waves-effect"
                    ><i class="mdi mdi-view-dashboard"></i>
                    <span> User </span>
                    </a>
                </li>

              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- Sidebar -->
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="content-page">
