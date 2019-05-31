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
                                    <form role="form" action="<?php echo base_url(); ?>index.php/Tambahmenumakanan/tambahMenuMakanan" method="POST">
                                                    <div class="row">
													<div class="col-md-10 form-group">
                                                            <label for="exampleInputEmail1">Add Category</label>
                                                            <input name="menumakanan" type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="">
                                                        </div>
														<div class="col-md-2 form-group">
                                                            <button type="submit" class="btn btn-primary" style="margin-top: 25px">Tambah</button>
                                                        </div>
                                                    </div>
                                                </form>
												<br><hr><br>
												
												<table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Category</th>
                                                            <th class="text-center">Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($menumakanan as $row) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "$row->menu_makanan"; ?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url(); ?>index.php/Tambahmenumakanan/hapusMenuMakanan/<?php echo "$row->id"; ?>">
                                                                        <button type="button" class="btn btn-danger btn-sm center-block" onclick="return confirm('Apakah anda yakin menghapus menu makanan tersebut ?')">
                                                                            Delete
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
//                                                                echo '<option value="' . $row->id . '">' . $row->kategori . '</option>';
                                                        }
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
            <!--                                            <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>-->
                                                    </tfoot>
                                                </table>
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
