
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Food Dashboard</title>
       <!-- Tell the browser to be responsive to screen width -->
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
<div class="container-fluid page-body-wrapper">
<?php include 'SIDEBAR.php'; ?>



            <!-- Content Wrapper. Contains page content -->
            <div class="main-panel">
        <div class="content-wrapper">

                <!-- Main content -->
                <div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="box-header with-border">
                  <h4 class="card-title"Manage Admin</h4>
                  <div class="table-responsive">
                    <div class="col-md-12">
                                            <!--form start--> 
                                            <?php echo $pesan; ?>
                                    <form role="form" action="<?php echo base_url(); ?>index.php/manageresto/editDataLogin" method="POST">
                                    <?php echo "$pesan"; ?>
                                    <div class="box-body">
                                        <div class="row">

                                            <!-- form start -->

                                            <!--FORM KANAN-->
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <h4 class="box-title text-center">information Data</h4>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">ID No</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$id"; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$email"; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Old Password</label>
                                                        <input name="passlama" type="password" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">New Password</label>
                                                        <input name="passbaru" type="password" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Re Enter New Password</label>
                                                        <input name="repassbaru" type="password" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <button type="submit" class="col-md-12 btn btn-primary">Edit</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                                        </div>
              
                  </div>
				  </div>
				</div>
            </div>
          
        </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <?php
    include 'application/views/footer.php'
?>

            

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->

         <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
        <script>
            $(function () {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();
            });
        </script>

    </body>
</html>
