<!DOCTYPE html>
<html>
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
<div class="container-fluid page-body-wrapper">
<?php include 'SIDEBAR.php'; ?>



            <!-- Content Wrapper. Contains page content -->
            <div class="main-panel">
        <div class="content-wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Food List</h1>
				   
                  <div class="table-responsive">
				  
                    <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Food Name</th>
                                                            <th>Category</th>
                                                            <th>Price ($)</th>
                                                            <th>Description</th>
															<th>Photo</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($makanan as $row) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row->nama_menu; ?></td>
                                                                <td><?php echo $row->menu_makanan; ?></td>
                                                                <td><?php echo $row->harga; ?></td>
                                                                <td><?php echo $row->deskripsi_menu; ?></td>
																<td><img src="<?php echo base_url() . "asset/berkas_mmart_mfood/foto_makanan/" . $row->foto; ?>" class="img-responsive img-thumbnail" alt="Cinque Terre"></td>
                                                                <td>
                                                                    <a href="<?php echo base_url() ?>index.php/Listmakanan/editMakananForm/<?php echo "$row->id" ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                                
                                                                    <a href="<?php echo base_url() ?>index.php/Listmakanan/hapusMakanan/<?php echo "$row->id" ?>">
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus menu tersebut ?')">
                                                                            Delete
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php }
                                                        ?>

                                                    </tbody>
                                                    <tfoot>
                                                    </tfoot>
                                                </table>
					<div>&nbsp;</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.content-wrapper -->
             <?php
    include 'application/views/footer.php'
?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab"></div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab"></div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
		</div>
        <!-- ./wrapper -->

         <!-- container-scroller -->
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
                $("#example1").DataTable({
                    "order": [[ 1, "asc" ]]
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "order": [[ 2, "desc" ]]
                });
            });
        </script>

    </body>
</html>
