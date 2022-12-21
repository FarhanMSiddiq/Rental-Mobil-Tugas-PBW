<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rental Mobil - Tugas Website - Farhan Maulana S. - Adila Syahputra - Universitas Trilogi">
    <meta name="keywords" content="Rental Mobil - Tugas Website">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url() ?>/assets/new_assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/new_assets/images/favicon.png" type="image/x-icon">
    <title>Rental Mobil</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url() ?>/assets/new_assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/new_assets/css/responsive.css">
  </head>
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
          </div>
          <?php if($this->session->userdata('nama')) { ?>
          <div class="left-menu-header col">
            <ul>
              <li>
                Selamat Datang , <?php echo $this->session->userdata('nama') ?>
              </li>
            </ul>
          </div>
          <?php } ?>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url('customer/data_mobil') ?>"><i class="fa fa-car"></i>&nbsp; Mobil</a></button>
              </li>
              <?php if($this->session->userdata('nama')) { ?>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url('customer/transaksi') ?>"><i class="fa fa-money"></i>&nbsp; Transaksi</a></button>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url('auth/ganti_password') ?>"><i class="fa fa-unlock-alt"></i>&nbsp; Ganti Password</a></button>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url('auth/logout') ?>"><i data-feather="log-out"></i>&nbsp; Log out</a></button>
              </li>
              <?php }else{ ?>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url('register') ?>"><i class="fa fa-book"></i>&nbsp; Register</a></button>
                </li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button"><a href="<?php echo base_url('auth/login') ?>"><i class="fa fa-sign-in"></i>&nbsp; Login</a></button>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends -->                   