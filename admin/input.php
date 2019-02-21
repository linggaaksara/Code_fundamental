<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	
</head>
<?php 
include"../config/database.php";
include"../config/conf.php";
$data = mysqli_query($con,"SELECT * FROM admin");
$r = mysqli_fetch_array($data);
 ?>
<body>
	<div class="container">
		<div class="sidebar">
			<div class="profile">
			<div class="nama"><a href="#"><img class="lg" src="https://demos.creative-tim.com/material-dashboard-pro-angular2/assets/img/angular2-logo-white.png">IT</a></div><hr>
			<div class="nm"><a href="#"><img class="lg" src="https://demos.creative-tim.com/material-dashboard-pro-angular2/assets/img/faces/avatar.jpg"><?php echo $r['username']; ?></a></div><hr>
			</div>
			<div class="dsh" ><a href="dasboard.php"> <i class="material-icons">
			dashboard</i>Dashboard</a></div>
			<div class="menu"><a href="#"><i class="material-icons" id="micon">
			assignment</i>Laporan</a></div>
			<div class="menu"><a href="#"><i class="material-icons" id="micon">
			watch_later</i>Riwayat</a></div>
			<div class="menu"><a href="#"><i class="material-icons" id="micon">
			library_add</i>Insert</a></div>
			</div>
		<div class="content">
			<div class="navbar">
				<ul>
					<li><div class="dshmn"><i class="material-icons" id="more">
					more_vert</i></div><a href="#">Insert</a></li>
					<div class="input-group">
					<input type="type" name="search" placeholder="search..." class="search-input">
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

<?php 

	if (isset($_POST['simpan'])) {
		
		$nama = $_POST['nama'];
		$departmen = $_POST['departmen'];
		$jk = $_POST['jk'];
		$username = $_POST['user'];
		$password = $_POST['pass'];

		$sql = "INSERT INTO user_info(nama,departmen,jk,id_user,username,password) VALUES 
			('$nama', '$departmen', '$jk', '', '$username','$password')";
		$query = mysqli_query($con, $sql);

	
	}
 ?>

					<form method="post">


						<input type="text" name="nama" placeholder="Nama" class="user-input">
						<input type="text" name="departmen" placeholder="Departmen" class="user-input">

						<select name="jk" class="user-input">
							<option value="Jenis Kelamin">Jenis Kelamin</option>
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>
						<input type="text" name="user" placeholder="Username" class="user-input">
						<input type="password" name="pass" placeholder="Password" class="user-input">
						<input type="submit" name="simpan" value="Simpan">

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<style type="text/css">
	.user-input{
		color: black;
		border: 1px solid black;
		background-color: white;
		padding: 5px;	
		margin: 20px;
		width: 300px;
		height: 40px;
	}
	.npgw{
		line-height: 2;
		margin-top: -3px;
		margin-left: 30px;
		grid-column: 1;
	}
	.dprtm{
		grid-column: 2;
	}
	.report{
		grid-column: 3;
	}
</style>
</html>