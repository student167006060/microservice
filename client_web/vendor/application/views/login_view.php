<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html style="background-color: #3a5068">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Food Dashboard</title>
        <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
    <body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
                    <!-- /.box-header -->
                    <!-- form start -->
					<form action="<?php echo base_url(); ?>index.php/login/pengecekan" method="post">
                <div class="form-group">
				<?php echo "<p style=\"color:red\" class=\"text-center\">$pesan</p> <br>" ?>
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="label">Password</label>
                  <div class="input-group">
                    <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                </div>
              </form>
                    
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
<!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
    </body>
</html>