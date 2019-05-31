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
                                    <form role="form" action="<?php echo base_url(); ?>index.php/Tambahmakanan/tambahMakanan" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="row">

                                            <!-- form start -->

                                            <!--FORM KIRI-->
                                            <div class="col-md-12">
                                                <?php echo "$pesan"; ?>
                                                <h4 class="box-title text-center">Input detail</h4>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Menu Name</label>
                                                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <!--option di database-->
                                                        <label for="sel1">Category</label>
                                                        <select name="kategori" class="form-control" name="kategoriresto">
                                                            <?php
                                                            foreach ($kategori_makanan as $row) {
                                                                echo '<option value="' . $row->id . '">' . $row->menu_makanan . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Price ($)</label>
                                                        <input name="harga" type="number" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Description</label>
                                                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
						<div class="form-group">
                        <div class="input-group">
                          <input type="file" name="userfile" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="colored-addon1" required>
                        </div>
                      </div>
<!--                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Foto Menu</label><br>
                                                        <input name="userfile" type="file">
                                                    </div>
                                                </div><br>-->

                                            </div>

                                        </div>

                                        <div class="box-footer">
                                            <button type="submit" class="col-md-12 btn btn-primary">Add</button>
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
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>

    </body>
</html>
