<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gorideme</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
</head>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo">
          <img src="<?php echo base_url(); ?>assets/images/logo500.png" alt="logo"/>
        </a>
        <a class="navbar-brand brand-logo-mini">
          <img src="<?php echo base_url(); ?>assets/images/ic_launcher.png" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        <ul class="navbar-nav navbar-nav-right">
          
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, <?php echo "$namaresto"; ?></span>
              <img class="img-xs rounded-circle" src="<?php echo base_url(); ?>assets/images/character_driver.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a href="<?php echo base_url(); ?>index.php/manageresto" class="dropdown-item mt-2">
                Manage Resto
              </a>
              <a href="<?php echo base_url(); ?>index.php/signout" class="dropdown-item ">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
	
	

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url(); ?>assets/images/character_driver.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo "$namaresto"; ?></p>
                  <div>
                    <small class="designation text-muted">Vendor Food</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/dashboard">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
			
			<li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/transaksi">
              <i class="menu-icon fa fa-dollar"></i>
              <span class="menu-title">Transaction</span>
            </a>
			</li>
			
			<li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/listmakanan">
              <i class="menu-icon fa fa-cutlery"></i>
              <span class="menu-title">List Food</span>
            </a>
			</li>
			
			<li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/tambahmenumakanan">
              <i class="menu-icon fa fa-cutlery"></i>
              <span class="menu-title">Add Category Food</span>
            </a>
			</li>
			
			<li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/tambahmakanan">
              <i class="menu-icon fa fa-cutlery"></i>
              <span class="menu-title">Add Food</span>
            </a>
          </li>
          
      </nav>


<!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url(); ?>plugins/chartjs/Chart.min.js"></script>
