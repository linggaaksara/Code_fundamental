<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<style type="text/css">
	
	</style>
</head>

<?php 

include"../config/database.php";
$data = mysqli_query($con,"SELECT * FROM admin");
$r = mysqli_fetch_array($data);
$username = $_SESSION['username'];

 ?>

<body>

	<div class="container">
		<div class="sidebar">
			<div class="profile">
			<div class="nama"><a href="#"><img class="lg" src="https://demos.creative-tim.com/material-dashboard-pro-angular2/assets/img/angular2-logo-white.png">IT</a></div><hr>
			<div class="nm"><a href="#"><img class="lg" src="https://demos.creative-tim.com/material-dashboard-pro-angular2/assets/img/faces/avatar.jpg"><?php echo $username; ?></a></div><hr>
			</div>
			<div class="dsh" ><a href="#"> <i class="material-icons">
			dashboard</i>Dashboard</a></div>
			<div class="menu"><a href="#"><i class="material-icons" id="micon">
			assignment</i>Laporan</a></div>
			<div class="menu"><a href="riwayat.php"><i class="material-icons" id="micon">
			watch_later</i>Riwayat</a></div>
			<div class="menu"><a href="input.php"><i class="material-icons" id="micon">
			library_add</i>Insert</a></div>
			</div>

		<div class="content">
			<div class="navbar">
				<ul>
					<li><div class="dshmn"><i class="material-icons" id="more">
					more_vert</i></div><a href="#">Dashboard</a></li>
					<div class="input-group">
					<input type="type" name="search" placeholder="search...">
					<button class="but" type="submit"><i class="material-icons" id="sch">
					search</i></button>
					<li><a href="#"><i class="material-icons" id="ipt">
					dashboard</i></a></li>
					<li><a href="#"><i class="material-icons" id="ipt">
					notifications</i></a></li>
					<li><a href="../index.php" name="logout" type="submit"><i class="material-icons" id="ipt">
					input</i></a></li>
					<ul>
						<li><a href="#"><i></i></a></li>
					</ul>
					</div>
				</ul>
			</div>
			<!-- isi -->
			<div class="main-conten">
				<div class="card1">
					<h3>satu</h3>
				</div>
				
				<div class="card2">
					<h3>dua</h3>
				</div>

				<div class="card3">
					<h3>Tiga</h3>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
<style type="text/css">
	.main-conten{
		display: grid;
	}
	.card1{
		border-radius: 5px;
		margin-left: 30px;
		grid-column: 1;
		background:linear-gradient(90deg,#2193b0,#6dd5ed);
		margin-top: 10px;
		height: 100px;
		width: 150px;
		padding: 10px;
		color: white;
	}
	.card2{
		grid-column: 2;
		border-radius: 5px;
		margin-left: -100px;
		background:linear-gradient(90deg,#2193b0,#6dd5ed);
		margin-top: 10px;
		height: 100px;
		width: 150px;
		padding: 10px;
		color: white;
	}
	.card3{
		grid-column: 3;
	}
</style>
</html>