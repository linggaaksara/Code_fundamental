<?php 
include"../config/database.php";
include"library/controllers.php";
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Dashboard User</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<style type="text/css">
		#micon{
			margin-left: 10px;
		}
		.navbar{
			margin-top: 20px;
			margin-left: 35px;
			grid-row: 3/4;
			float: left;
		}

		.but{
			background-color: white;
			float: left;
			cursor: pointer;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			border:none;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		
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
			<div class="dsh" ><a href="dasboard.php"> <i class="material-icons">
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
					more_vert</i></div><a href="#">History</a></li>
					<div class="input-group">
					<input type="type" name="search" placeholder="search..." style="font-weight: white;">
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
				<table class="table">
		    <thead>
		      <tr>
		        <th width="15%">Tanggal</th>
		        <th width="20%">Jenis Kerusakan</th>
		        <th>Kerusakan</th>
		      </tr>
		   	</thead>
		   	<?php 
		include"../config/database.php";
		$dt = mysqli_query($con,"SELECT * FROM user_info");
		$res = mysqli_fetch_array($dt);
	?>
<?php
	$sqli = "SELECT * FROM user_info";
	$querry = mysqli_query($con,$sqli);
	$has = mysqli_fetch_array($querry); 

    $no = 0;
    $sql = "SELECT * FROM report";
    $query = mysqli_query($con, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek == "") {
    echo "<tr><td align='center' colspan='8'>NO RECORD</td></tr>";
    } 

    else {
    while($r= mysqli_fetch_array($query)){
    $no++;
                
?>
	
		    <tbody>			
		      <tr>
		        <td><?php echo $r['tgl'];  ?></td>
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

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
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
	.iptsend{
		background-color: white;
		float: left;
		border-radius: 5px solid black;
	}
</style>
</html>