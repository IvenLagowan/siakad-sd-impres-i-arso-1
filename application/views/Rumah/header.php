<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $judul ?></title>
  <script src="<?php echo base_url('assets/ckeditor/'); ?>ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ckeditor/'); ?>style.css">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/admin/'); ?>css/sb-admin.css" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    </button>
    <img src="<?php echo base_url('assets/admin/'); ?>images/logo1.png" alt="AVATAR">
  <a class="navbar-brand mr-1" href="<?php echo base_url('index.php/admin'); ?>">SDN MADE 1 SURABAYA</a>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    
   <ul class="navbar-nav ml-auto ml-md-0">
      
     <?php if($this->session->userdata('ID_PENGAJAR')){ ?>
      <li>
      <div>selamat datang <?php echo $this->session->userdata('STATUS'); ?></div>
      </li>
      
      <li class="nav-item dropdown no-arrow ml-2">
      <i class="fas fa-user-circle fa-fw"></i>
      </li>
      <li class="ml-2"><?php echo anchor('Login/logout', 'Logout'); ?>
      </li>
      <?php } else { ?>
      <li class="ml-2"><?php echo anchor('Login/login', 'Login'); ?>
      </li>
      <?php } ?>  
    </ul>
  </nav>
  <div id="wrapper">