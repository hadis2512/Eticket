<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('') ?>assets/styles/all.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url('assets/') ?>styles/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>styles/sb-admin.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>styles/sb-admin.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>styles/sb-admin-2.min.css" rel="stylesheet">
  </head>

  <body style="background: #a3d5d3">
  <div class="container">

    <!-- Outer Row -->
    <?php
            $user = $this->session->userdata('name');
            ?>
   <h1><marquee>Testing</marquee></h1>
   <h1><?php echo $user;?></h1>
  </div>
   
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('')?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('')?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
