<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<!-- Akhir Fonts -->

	<!-- My icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/petugas.css"> 
</head>
<body>
	
<!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-dark static-top">
    
    <a href="#" class="navbar-brand mr-0 mr-md-2">Petugas</a>
    
    
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <a href="#" class="nav-link p-2"><i class="fa fa-bell"></i></a>
        <li class="nav-item dropdown no-arrow">
          <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a href="#" class="dropdown-item">Settings</a>
            <a href="#" class="dropdown-item">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo site_url('user/logout')?>" class="dropdown-item">Logout</a>
          </div>
        </li>
    </ul>
  </nav>
  <!-- Akhr Navbar -->
  
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

      <div class="logo">
          <img src="<?php echo base_url()?>assets/img/logo.png" alt="Logo" height="30px">
      </div>
      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-fw fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link" data-toggle="collapse" data-target="#sub-menu-berita">
          <i class="fa fa-file"></i>
          <span>Berita</span>
        </a>
      </li>
      <div class="collapse" id="sub-menu-berita">
          <li class="nav-item">
            <a href="<?php echo site_url('petugas/index')?>" class="nav-link">
              <i class="fa fa-eye"></i>
              <span>Lihat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('petugas/tambah_berita')?>" class="nav-link">
              <i class="fa fa-plus"></i>
              <span>Buat Baru</span>
            </a>
          </li>
      </div>
      <li class="nav-item">
        <a href="<?php echo site_url('petugas/verifikasi_donatur')?>" class="nav-link">
          <i class="fa fa-list-ul"></i>
          <span>Verifikasi Donatur</span>
        </a>
      </li>

    </ul>

    <div id="content-wrapper">

            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Dashboard
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                
                <?php echo $petugas?>
                
            </div>

        </div>

  </div>

	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>