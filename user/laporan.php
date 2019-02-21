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
	<title>Laporan User</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<style type="text/css">
		
	</style>
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
			<div class="dsh" ><a href="dasboard.php" "> <i class="material-icons">
			dashboard</i>Dashboard</a></div>
			<div class="menu" ><a href="laporan.php"><i class="material-icons" id="micon">
			message</i>Laporan</a></div>
			<div class="menu"><a href="history.php"><i class="material-icons" id="micon">
			watch_later</i>History</a></div>
			</div>

			</form>
		<div class="content">
			<div class="navbar">
				<ul>
					<li><div class="dshmn"><i class="material-icons" id="more">
					more_vert</i></div><a href="#">Laporan</a></li>
					<div class="input-group">
					<input class="inputt" type="type" name="search" placeholder="search...">
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

<?php 
	$quer = mysqli_query($con,"SELECT * FROM user_info");
	$nama = mysqli_fetch_array($quer);
	
	if (isset($_POST['kirim'])) {
		$tgl = $_POST['tanggal'];
		$nama = $r['nama'];
		$tipe = $_POST['tipe'];
		$crewsakan = $_POST['kerusakan'];

		$sql = "INSERT INTO report(tgl,nama,jenis_kerusakan,kerusakan,id_report) VALUES 
			('$tgl', '$nama', '$tipe', '$crewsakan', '')";
		$query = mysqli_query($con, $sql);

		echo "<script>alert('berhasil!')</script>";
	}
 ?>

		<form method="post">
			<h3>Silahkan masukan keluhan anda</h3>
				<input type="date" name="tanggal" class="date">
				
				<div class="kls">
				
				<select name="tipe" class="tipe">
					<option value="Hardware">Hardware</option>
					<option value="Software">Softwares</option>
				</select>
				</div>
				<input type="text" name="kerusakan" placeholder="Kerusakan" class="Kerusakan">
				<input type="submit" name="kirim" value="kirim" class="kirim">
			</form>
			</div> 
		</div>	
	</div>
</body>
<style type="text/css">
	.kls{
		display: block;
	}
	.date{
		width: 200px;
		height: 40px;
		margin-left: 40px;
		margin-top: 30px;
		margin-bottom: 10px;
	}
	.kirim{
		margin-left: 40px;
		height: 40px;
		margin-top: 20px;
		border: 1px solid  #49a035;
		background-color: white;
		color:  #49a035;
		cursor: pointer;
		width: 100px;
		border-radius: 5px;
	}
	.kirim:hover{
		background-color:  #49a035;
		color: white;	
	}
	h3{
		font-family: helvatica;
		font-weight: 200;
	}
	
	.Kerusakan{
		border: 1px solid grey;
		background-color: #e9f8e6;
		color: black;
		width: 300px;
		height: 35px;
		margin-top: 10px;
		margin-left: 40px;
		margin-right: 550px;
	}
	.tipe{
		float: left;
		grid-column: 1/2;
	}
	select{
		margin-left: 40px;
		width: 300px;
		background-color:  #e9f8e6;
		height: 40px;
	}
</style>
</html>
