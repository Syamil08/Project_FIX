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


		
		<h2 style="margin-top:0px">Donate Read</h2>
        <table class="table">
	    <tr><td>User Id</td><td><?php echo $user_id; ?></td></tr>
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Qty</td><td><?php echo $qty; ?></td></tr>
	    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Disaster Id</td><td><?php echo $disaster_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('donasi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
			<br><br>
		

		
			<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
			<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>	
	

</body>
</html>