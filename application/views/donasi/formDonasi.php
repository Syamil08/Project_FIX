<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  
  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <!-- Akhir Fonts -->
  
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>application/views/disaster/style.css">
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />


  <style>
    body {
      background-color: #F2F3F4;
    }
  </style>
</head>
<body>
  
  <!-- Navbar -->
<!-- Navbar -->
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">DONASIKU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Donasi</a>
          <a class="nav-item nav-link" href="<?php echo site_url('disaster/about')?>">About</a>
      <?php if ($this->session->userdata('logged_in')): ?>
        <li class="nav-item dropdown no-arrow">
              <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
                <i class="fa fa-user-circle fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a href="#" class="dropdown-item"><?php echo $login->username?></a>
                <a href="#" class="dropdown-item">Dashboard</a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo site_url('user/logout')?>" class="dropdown-item">Logout</a>
              </div>
            </li>
            <?php else: ?>
        <a href="<?php echo site_url('user/index')?>" class="nav-item btn btn-primary tombol" href="#">Join Us</a>
      <?php endif ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <br>
  <div class="container">
    <h4 style="text-align: center">Anda Akan Berdonasi Untuk <?php //title ?></h4>

    <div class="card shadow p-3 mb-5 bg-white rounded" style="width:50%; margin: 0 auto" ng-app="">
        <div class="card-body">            
            <form action="<?php echo $action; ?>" method="post">
                <div class="form-group">
                      <label for="int">User Id <?php echo form_error('user_id') ?></label>
                      <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User Id" value="<?php echo $user_id; ?>" />
                  </div>
                <div class="form-group">
                      <label for="varchar">Name <?php echo form_error('name') ?></label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                  </div>
                <div class="form-group">
                      <label for="int">Qty <?php echo form_error('qty') ?></label>
                      <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty" value="<?php echo $qty; ?>" ng-model="qty"/>
                  </div>
                <div class="form-group">
                      <label for="int">Address <?php echo form_error('address') ?></label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>" />
                  </div>
                  <div class="form-group">
                      <label for="int">Disaster Id <?php echo form_error('disaster_id') ?></label>
                      <input type="text" class="form-control" name="disaster_id" id="disaster_id" placeholder="disaster_id" value="<?php echo $disaster_id; ?>" />
                  </div>
                      <p class="text-center">Anda Akan Mendonasikan <span class="btn btn-warning"><b>{{qty}}</b></span> Barang </p>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Donasi</button> 
          </form>
      </div>
    </div>
  </div> 




   <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/angular/angular.min.js"></script>


</body>
</html>