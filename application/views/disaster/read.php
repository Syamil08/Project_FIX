<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Donasi</title>
	
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
<body>		<!-- Navbar -->
	
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
			<?php if (userdata()): ?>
				<li class="nav-item dropdown no-arrow">
		          <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
		            <i class="fa fa-user-circle fa-fw"></i>
		          </a>
		          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		            <a href="#" class="dropdown-item"><?php echo userdata()->username?></a>
		            <a href="<?php echo site_url('donatur/index')?>" class="dropdown-item">Dashboard</a>
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
<?php 
					
		foreach ($asal as $value) {
			 echo $value->title;
			 echo $value->description; 

		}
		?>
		
		
		
		

		<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>