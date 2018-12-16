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
    <?php 
      $this->load->view('template/nav');
     ?>
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
                      <p class="text-center">Anda Akan Mendonasikan <span class="btn btn-warning"><b>{{qty}}</b></span> Barang </p>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                <button type="submit" class="btn btn-primary" style="width: 100%; color: #000; background-color: transparent; border: none;">Kirim Donasi</button> 
          </form>
      </div>
    </div>
  </div> 

  <div id='map' style='width: 400px; height: 300px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibmFzdXRpb24iLCJhIjoiY2pwcDFtYXN4MGp2NTN3czRvbm5tYjEyeSJ9.Ubaep2uCNt-I0Hr6bMWjvQ';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v10'
});
</script>

    <?php 
        $this->load->view('template/footer');
     ?>


   <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/angular/angular.min.js"></script>


</body>
</html>