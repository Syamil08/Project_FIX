<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beranda</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/donatur.css">
	<!-- Akhir My Css -->
</head>
<body>
	
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
			    <li class="nav-item dropdown no-arrow">
		          <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
		            <i class="fa fa-user-circle fa-fw"></i>
		          </a>
		          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		            <a href="#" class="dropdown-item"><?php echo $login->username?></a>
		            <a href="#" class="dropdown-item">Activity Log</a>
		            <div class="dropdown-divider"></div>
		            <a href="<?php echo site_url('user/logout')?>" class="dropdown-item">Logout</a>
		          </div>
		        </li>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->

	<!-- Slider -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url()?>assets/img/sawah.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, nesciunt!</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/img/sawah.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, cumque.</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/img/sawah.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, mollitia.</p>
		  </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<!-- Akhir Slider -->

	<!-- Card -->

	<div class="album py-5">
		<div class="container">
			<div class="row">
				<?php for($i=0; $i<3; $i++):?>
					<?php if (is_array($disaster) && array_key_exists($i, $disaster)): ?>
					<?php $d = $disaster[$i]?>
						<div class="col-md-4">
							<div class="card mb-4 shadow-sm">
								<!-- <img class="card-img-top" src="<?php echo base_url().'assets/img/'.$d->file_name?>" alt="" height="300px"> -->
								<img src="<?php echo base_url()?>assets/img/gunung.jpg" class="img-fluid">
								<div class="card-body">
									<h5 class="card-text">
										<?php echo $d->title?>
									</h5>
									<p class="card-text">
										<?php echo $d->description?>
									</p>
									<div class="d-flex justify-content-between align-items-center footer">
										<span class="text-muted"><i class="fa fa-user"></i><?php echo $d->nn?></span>
										<!-- <small class="text-muted"><?php echo $d->created_at?></small> -->
									</div>
								</div>
							</div>
						</div>
					<?php endif ?>
				<?php endfor ?>
			</div>
		</div>
	</div>
	
	<!-- Akhir Card -->
	
	<!-- Card 2 -->
	
	<div class="album">
		<div class="container">
			<div class="row">
				<?php for($i=3; $i<count($disaster); $i++): 
					$d = $disaster[$i];
				?>
				<div class="col-md-3">
					<div class="card mb-4 shadow-sm">
						<img src="<?php echo base_url()?>assets/img/gunung.jpg" class="img-fluid">
							<div class="card-body">
								<div class="caption">
									<h6 class="card-text" style="font-size: 16px;">
									<?php echo $d->title?>
									</h6>
									<p class="card-text" style="font-size: 14px;">
									<?php echo $d->description?>
									</p>
								</div>
								<div class="d-flex justify-content-between align-items-center footer">
									<span class="text-muted size"><i class="fa fa-user"></i><?php echo $d->nn?></span>
									<small class="text-muted"></small>
							</div>
						</div>
					</div>
				</div>
				<?php endfor ?>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center">
		<p>
			<a href="#" class="btn btn-primary-custom my-2">Lihat Lainnya</a>
		</p>
	</div>

	<footer class="mainfooter" role="contentinfo">
	  <div class="footer-middle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-3 offset-md-2 col-sm-6">
	        <!--Column1-->
	        <div class="footer-pad">
	          <h4>Alamat</h4>
	          <address>
				<ul class="list-unstyled">
					<li>
    					Jakal Km 14.5
						<br>
						Sleman<br>
						Yogyakarta<br>
					</li>
				</ul>
			</address>
	        </div>
	      </div>
	      <div class="col-md-3 col-sm-6">
	        <!--Column1-->
	        <div class="footer-pad">
	          <h4>Layanan</h4>
	          <ul class="list-unstyled">
	            <li><a href="#"></a></li>
	            <li><a href="#">Beranda</a></li>
	            <li><a href="#">Donasi</a></li>
	            <li><a href="#">Tentang Kami</a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="col-md-3 col-sm-6">
	        <!--Column1-->
	        <div class="footer-pad">
	          <h4>Kontak Developer</h4>
	          <ul class="list-unstyled">
	            <li><a href="#">SyamilBisyir@gmail.com</a></li>
	            <li><a href="#">NasutionUchiha@gmail.com</a></li>
	            <li><a href="#">MuhammadAlifa@gmail.com</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  </div>
	  <div class="footer-bottom">
	    <div class="container">
	      <div class="row">
	        <div class="col-xs-12">
	          <!--Footer Bottom-->
	          <p class="text-xs-center">&copy; Copyright 2018 - MOSDEV.COM</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>
	
	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>