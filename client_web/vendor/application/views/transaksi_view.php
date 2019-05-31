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
                  <h1 class="card-title">Transaction</h1>
				  <form method="post" action="<?php echo base_url(); ?>index.php/Transaksi/transaksiBlnSpesific">
                                                <div class="row">
												<select class="col-md-5 form-control" name="bulan">
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>

                                                <select class="col-md-5 form-control" name="tahun">
                                                    <?php
                                                    $tahunini = date('Y');

                                                    for ($index = 0; $index < 3; $index++) {
                                                        echo "<option value=\"$tahunini\">$tahunini</option>";
                                                        $tahunini--;
                                                    }
                                                    ?>
                                                </select>
                                                <input class="col-md-2 btn btn-primary btn-sm" type="submit" value="Submit">
                                            </form>
											</div>
											<br>
				  
				  
                  <div class="table-responsive">
				  
                    <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Date</th>
                                                            <th>Customer</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($transaksi as $row) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row->id_transaksi; ?></td>
                                                                <td><?php echo $row->waktu_order; ?></td>
                                                                <td><?php echo $row->nama_depan . " " . $row->nama_belakang; ?></td>
                                                                <!--<td><img style="width: 300px"src="<?php // echo base_url() . "/fotomenumakanan/" . $row->foto;       ?>" class="img-responsive img-thumbnail center-block"></td>-->
                                                                <td><?php echo $row->total_biaya; ?></td>
                                                            </tr>
                                                        <?php }
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
					<div>&nbsp;</div>
					<a href="<?php echo base_url(); ?>index.php/Transaksi/excelData/<?php echo "$bulan";?>/<?php echo "$tahun";?>"> <button class="col-md-12 btn btn-primary pull-right">Export Excel</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.content-wrapper -->
             <?php
    include 'application/views/footer.php'
?>

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
