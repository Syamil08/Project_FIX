<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donasi</title>
	
	<!-- My Fonts -->
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>application/views/disaster/style.css">
	<!-- Akhir My Css -->

</head>
<body>	

		<br><br>


		
		<div class="container">
			<h2><b>Rumah roboh, akibat Gunung Meletus</b></h2><br>
			<dic class="row">
				<div class="col-8" style="background-color: ">
					<div class="card-img-top img-responsive" style="width: 100%;">
						  <img src="<?php echo base_url()?>assets/images/gunung.jpg" alt="" class="img-responsive"><br><br>
						  <h5><b>Rumah roboh, akibat Gunung Meletus</b></h5><br>

						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta perferendis, repellendus reprehenderit a ex labore nemo sunt mollitia quibusdam cupiditate atque officiis tempora, consectetur eligendi quia, molestias aspernatur quidem iste? Odit, inventore. Placeat sint, sit nesciunt deserunt! Fugit assumenda, minima velit voluptatibus est. Ut quasi, a iste suscipit perspiciatis quas!</p>
			</div>
				</div>

				<div class="col-4" style="background-color: ">
					<h3 class="text-center"><b>Bantuan Terkumpul</b></h3>
					
					<div class="col btn-warning text-center" style="padding:2%; background-color: #F1F3F4;" ><b>455 </b> Barang</div>

					<br>
					<?php echo anchor(site_url('donasi/doDonasi'),'Mulai Donasi', 'class="btn btn-primary"'); ?>


				</div>
			</dic>
		</div>
			<br><br>
		

		
			<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
			<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>	
	

</body>
</html>