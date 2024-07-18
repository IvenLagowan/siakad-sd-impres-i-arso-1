<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $judul ?></title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/admin/'); ?>css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?php echo base_url('Login/login') ?>" >
            <div class="form-avatar">
                <img src="<?php echo base_url('assets/admin/'); ?>images/logo.PNG" alt="AVATAR">
              </div>
          <div class="form-group">
            <label for="USERNAME">Username</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="Username" autofocus="autofocus" name="USERNAME">             
              <?php echo form_error('USERNAME','<div class="text-danger small ml-2">','</div>'); ?>
          </div>
          <div class="form-group">
            <label for="PASSWORD">Password</label>
              <input type="text" id="inputPassword" class="form-control" placeholder="Password" name="PASSWORD">
              <?php echo form_error('PASSWORD','<div class="text-danger small ml-2">','</div>'); ?>
          </div>
          <button type="submit" class="btn btn-primary form-control">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="<?php echo base_url('admin/Login/lupa'); ?>">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
