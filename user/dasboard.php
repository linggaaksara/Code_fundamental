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
	<title>Dashboard User</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	
</head>
<?php 
include"../config/database.php";
$data = mysqli_query($con, "SELECT * FROM user_info WHERE username = '$_SESSION[username]'");
$r=mysqli_fetch_array($data);
$username = $_SESSION['username'];
$nama = $r['nama'];
 ?>
<body>
	<div class="container">
		<div class="sidebar">
			<div class="profile">
			<div class="nama"><a href="#"><img class="lg" src="https://demos.creative-tim.com/material-dashboard-pro-angular2/assets/img/angular2-logo-white.png"><?php echo $r['departmen']; ?></a></div><hr>
			<div class="nm"><a href="#"><img class="lg" src="https://demos.creative-tim.com/material-dashboard-pro-angular2/assets/img/faces/avatar.jpg"> <?php echo $nama; ?></a></div><hr>
			</div>

			<form>
			<div class="dsh" ><a name="dashboard.php"> <i class="material-icons">
			dashboard</i>Dashboard</a></div>
			<div class="menu" ><a href="laporan.php"><i class="material-icons" id="micon">
			message</i>Laporan</a></div>
			<div class="menu"><a href="history.php"><i class="material-icons" id="micon">
			watch_later</i>Riwayat</a></div>
			</div>

			</form>
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
					<li><a href="../index.php"><i class="material-icons" id="ipt">
					input</i></a></li>
					<ul>
						<li><a href="#"><i></i></a></li>
					</ul>
					</div>
				</ul>
			</div>
			<!-- isi -->
			<div class="main-conten">
			</div> 
		</div>
	</div>
</body>
<style type="text/css">
	.iptsend{
		background-color: white;
		float: left;
		border-radius: 5px solid black;
	}
</style>
</html>