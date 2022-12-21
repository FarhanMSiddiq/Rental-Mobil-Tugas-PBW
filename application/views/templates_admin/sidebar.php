<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="<?php echo base_url(); ?>"><img class="img-fluid" src="<?php echo base_url() ?>assets/new_assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="<?php echo base_url(); ?>"><img class="img-fluid" src="<?php echo base_url() ?>assets/new_assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <h4>Admin Panel</h4>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0">
                <button onclick="if(confirm(`Apakah kamu yakin ingin keluar akun ini?`)) window.location.href=`<?php echo base_url('auth/logout') ?>`;" class="btn btn-primary-light" type="button"><a><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
        <div class="sidebar-user text-center">
            <img class="img-90 rounded-circle" src="<?php echo base_url() ?>assets/new_assets/images/dashboard/1.png" alt="">
            <a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Halo , <?php echo $this->session->userdata('nama') ?></h6>
            </a>
          </div>
          <nav>
            <div class="main-navbar">
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/dashboard") !== false) ? "bg-success text-white" : ""?> link-nav" href="<?php echo base_url('admin/dashboard') ?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/data_mobil") !== false) ? "bg-success text-white" : ""?> link-nav " href="<?php echo base_url('admin/data_mobil') ?>" ><i data-feather="cpu"></i><span>Data Mobil</span></a></li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/data_type") !== false) ? "bg-success text-white" : ""?> link-nav" href="<?php echo base_url('admin/data_type') ?>" ><i data-feather="briefcase"></i><span>Data Tipe</span></a></li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/data_customer") !== false) ? "bg-success text-white" : ""?> link-nav" href="<?php echo base_url('admin/data_customer') ?>" ><i data-feather="users"></i><span>Data Customer</span></a></li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/transaksi") !== false) ? "bg-success text-white" : ""?> link-nav" href="<?php echo base_url('admin/transaksi') ?>" ><i data-feather="database"></i><span>Transaksi</span></a></li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/laporan") !== false) ? "bg-success text-white" : ""?> link-nav" href="<?php echo base_url('admin/laporan') ?>" ><i data-feather="list"></i><span>Laporan</span></a></li>
                  <li class="dropdown mb-2"><a class="nav-link menu-title <?php echo (strpos(current_url(), "admin/ganti_password") !== false) ? "bg-success text-white" : ""?> link-nav" href="<?php echo base_url('auth/ganti_password') ?>" ><i data-feather="unlock"></i><span>Ganti Password</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" onclick="if(confirm(`Apakah kamu yakin ingin keluar akun ini?`)) window.location.href=`<?php echo base_url('auth/logout') ?>`;"  ><i data-feather="log-out"></i><span>Logout</span></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <!-- Page Sidebar Ends-->
        <div class="page-body">