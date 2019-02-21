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
			<div class="menu"><a href="#"><i class="material-icons" id="micon">
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
				<table class="table">
		    <thead>
		      <tr>
		        <th width="5%">No</th>
		        <th width="15%">Tanggal</th>
		        <th width="20%">Nama</th>
		        <th width="15%">Department</th>
		        <th width="10%">Jenis Kerusakan</th>
		        <th>Kerusakan</th>
		      </tr>
		   	</thead>		
	<?php 
		include"../config/database.php";
		$dt = mysqli_query($con,"SELECT * FROM user_info");
		$res = mysqli_fetch_array($dt);
	?>
<?php
	$sqli = "SELECT * FROM user_info WHERE username = '$_SESSION[username]'";
	$querry = mysqli_query($con,$sqli);
	$has = mysqli_fetch_array($querry); 
	$nama = $has['nama'];

    $no = 0;
    $sql = "SELECT * FROM report";
    $query = mysqli_query($con, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek == "") {
    echo "<tr><td align='center' colspan='8'>TIDAK ADA DATA</td></tr>";
    } 

    else {
    while($r= mysqli_fetch_array($query)){
    $no++;
                
?>
	
		    <tbody>			
		      <tr>
		        <td style="text-align: center;"><?php echo $no; ?></td>
		        <td><?php echo $r['tgl'];  ?></td>
		        <td><?php echo $nama;?></td>
		        <td><?php  echo $has['departmen'];?></td>
		        <td><?php echo $r['jenis_kerusakan']; ?></td>
		        <td><?php echo $r['kerusakan']; ?></td>
		      </tr>
		<?php }} ?>
		    </tbody>
  		</table>		
				</div>
			</div>
		</div>
	</div>
</body>
<style type="text/css">
	.table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}
	.table td{
		background-color: #DFECD0;
		height: 30px;
		margin-left: 5px;
	}
	.table > td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	.table tr:nth-child(even) {
	  background-color: #dddddd;
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