
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
                                    <form role="form" action="<?php echo base_url(); ?>index.php/manageresto/editDataResto" method="POST" enctype="multipart/form-data">
                                    <?php echo "$pesan"; ?>
                                    <div class="box-body">
                                        <div class="row">

                                            <!-- form start -->

                                            <!--FORM KIRI-->
                                            <div class="col-md-6">
                                                <h4 class="box-title text-center">information Data Resto</h4>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Resto Name</label>
                                                        <input name="namaresto" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$nama_resto"; ?>">
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <!--option di database-->
                                                        <label for="sel1">Category</label>
                                                        <select class="form-control" name="kategoriresto">
                                                            <?php
                                                            foreach ($kategori as $row) {
                                                                echo '<option value="' . $row->id . '">' . $row->kategori . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Address</label>
                                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$alamat"; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Open</label>
                                                        <input name="jambuka" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$jam_buka"; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Closed</label>
                                                        <input name="jamtutup" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$jam_tutup"; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Phone</label>
                                                        <input name="kontaktelepon" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo "$kontak_telepon"; ?>">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea name="deskripsiresto" class="form-control" rows="3"><?php echo "$deskripsi_resto"; ?></textarea>
                                                    </div>
                                                </div>
                                                

                                            </div>
											<br>
                                            <div class="col-md-6">
                                                <br><br><br><img class="img-responsive img-thumbnail" style="width: 500px; height: 250;" src="<?php echo base_url(); ?>/asset/berkas_mmart_mfood/foto_restoran/<?php echo "$foto"; ?>">
                                                <input name="foto" type="hidden" value="<?php echo $foto; ?>">
                                                <br><br><label>Edit Photo Resto</label>
												<br><input type="file" name="userfile">
												
                                            </div>
											
											</div>
											<br><br><div class="box-footer">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                    <button class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/manageresto/dataLogin">Edit Detil Login</a></button>
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
