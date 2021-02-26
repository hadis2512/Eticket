<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
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
  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto ">
    <div class="card-header">Register</div>
    <div class="card-body">
      <form class="user" method="post" action="<?= base_url('Register/daftar') ?>">
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="Email" name="email" class="form-control">
            <label for="inputEmail">Email address</label>
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="first_name" name="first_name" class="form-control">
                <label for="inputfirst_name">First Name</label>
                <?= form_error('first_name', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>                
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="last_name" name="last_name" class="form-control">
                <label for="inputlast_name">Last Name</label>
                <?= form_error('last_name', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="password" id="Password" name="password" class="form-control">
                <label for="inputPassword">Password</label>
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="password" id="password1" name="password1" class="form-control">
                <label for="confirmPassword">Confirm Password</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label class="col-md-6" for="jenis_kelamin">Jenis Kelamin :</label>
            <!-- <div class="col-md-6" id="jenis_kelamin" name="jenis_kelamin" class="form-control"> -->
            <label class="radio-inline col-md-3"><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
            <label class="radio-inline col-md-3"><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            <!-- </div> -->
          </div>
            <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>        
        </div>

        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="Phone" name="phone" class="form-control">
            <label for="inputphone">Phone Number</label>
            <?= form_error('phone', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="address1" name="address1" class="form-control">
            <label for="inputaddress1">Address</label>
            <?= form_error('address1', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="city" name="city" class="form-control">
                <label for="inputcity">City</label>
                <?= form_error('city', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>                
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="zip_code" name="zip_code" class="form-control">
                <label for="inputzip_code">Zip Code</label>
                <?= form_error('zip_code', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
          </div>
        </div>


        <?= $this->session->flashdata('message'); ?>        
        <div class="form-label-group"><button class="btn btn-primary btn-block">Register</button></div>
      </form>
      <div class="text-center">
        <div class="row">
        <a class="d-block medium mt-3 col-md-6" href="<?= base_url('Login') ?>">Login</a>
        <a class="d-block medium mt-3 col-md-6" href="<?= base_url('Home')?>">Home!</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('')?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('')?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>



