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

    <link rel="shortcut icon" href="<?php echo BASEURL; ?>//assets/images/favicon.ico" />

    <title>Halaman <?php echo $data['admin']; ?></title>

    <!-- App css -->
    <link
      href="<?php echo BASEURL; ?>//assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?php echo BASEURL; ?>//assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEURL; ?>//assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo BASEURL; ?>//assets/js/modernizr.min.js"></script>
  </head>

  <body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
      <div class="m-t-40 card-box">
        <div class="text-center">
          <h4 class="text-uppercase font-bold m-b-0">Selamat Datang</h4>
          <h5>Masukkan Username dan Password Anda</h5>
        </div>
        <div class="p-20">
        <?php Flasher::login(); ?>
          <form class="form-horizontal m-t-20" action="<?php echo BASEURL ?>/Login/masuk" method="POST">
            <div class="form-group">
              <div class="col-xs-12">
                <input
                  class="form-control"
                  type="text"
                  name="username"
                  required=""
                  placeholder="Username"
                />
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12">
                <input
                  class="form-control"
                  type="password"
                  name="password"
                  required=""
                  placeholder="Password"
                />
              </div>
            </div>

            <div class="form-group text-center m-t-30">
              <div class="col-xs-12">
                <button
                  class="btn btn-custom btn-bordred btn-block waves-effect waves-light"
                  type="submit" value="Login" name="login" id="submit"
                >
                  Log In
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- end card-box-->

      <!-- <div class="row">
        <div class="col-sm-12 text-center">
          <p class="text-muted">
            Don't have an account?
            <a href="page-register.html" class="text-primary m-l-5"
              ><b>Sign Up</b></a
            >
          </p>
        </div>
      </div>
    </div> -->
    <!-- end wrapper page -->

    <!-- jQuery  -->
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.min.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/popper.min.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/detect.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/fastclick.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.blockUI.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/waves.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.nicescroll.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.core.js"></script>
    <script src="<?php echo BASEURL; ?>//assets/js/jquery.app.js"></script>
  </body>
</html>