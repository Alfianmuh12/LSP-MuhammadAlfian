
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Home </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script></head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
		<div class="container-fluid">
			<a href="#" class="navbar-brand mr-3">Sistem/a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
					<a href="home.php" class="nav-item nav-link active">Beranda</a>
					<a href="matkulView.php" class="nav-item nav-link">Mata Kuliah</a>
					<a href="dosenView.php" class="nav-item nav-link">Dosen</a>
					<a href="ambil-krs.php" class="nav-item nav-link">Ambil KRS</a>
					<a href="Krs-saya.php" class="nav-item nav-link">KRS Saya</a>
				</div>
			
			</div>
		</div>    
	</nav>

	<div class="container">
		<div class="row">
		<div class="col-lg-12">
			<div class="panel-body">
			
				<div class="table-responsive">
					<?php
						include 'connection.php';
						if (isset($_GET['id_del'])) {
							$iddel = $_GET['id_del'];

							$del = "DELETE FROM mata_kuliah WHERE kode_matkul = '".$iddel."'";
							$img = "SELECT * FROM mata_kuliah WHERE kode_matkul = '".$iddel."'";
							$ambil = mysqli_query($conn, $img);

						

							$msql = mysqli_query($conn, $del);

						}
					?>
					<table class="table table-striped table-bordered table-hover" id="saya">
						<thead>
							<tr>
								<th>Kode Matkul</th>
								<th>Nama Matkul</th>
								<th>Kode Dosen</th>
								<th>Sks</th>
								<th>Semester</th>
								<th>Jam</th>
								<th>Hari</th>
							</tr>
						</thead>
						<tbody>
							<?php

								include 'connection.php';

								$view = mysqli_query($conn, "SELECT * FROM mata_kuliah");

								while ($rows = mysqli_fetch_array($view)) { ?>
									
									<tr>
									<td><?php echo $rows['kode_matkul'] ;?></td>
										<td><?php echo $rows['nama_matkul'] ;?></td>
										<td><?php echo $rows['kode_dosen'] ;?></td>
										<td><?php echo $rows['sks'] ;?></td>
										<td><?php echo $rows['semester'] ;?></td>
										<td><?php echo $rows['Jam'] ;?></td>
										<td><?php echo $rows['Hari'] ;?></td>
										
									</tr>

								<?php }
							?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
<?php


include 'connection.php';

if (isset($_POST['submit'])) {

    $id = $_POST['id_jadwal'];
    $nama = $_POST['nama_matkul'];
    $kode_dosen = $_POST['kode_dosen'];
    $jam = $_POST['Jam'];
	$hari = $_POST['hari'];


    $query = "INSERT INTO jadwal (id_jadwal, nama_matkul, kode_dosen, jam, hari) VALUES ('".$id."', '".$nama."', '".$kode_dosen."', '".$jam."', '".$hari."')";

    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Matakuliah</title>
	<style>



	input[type=text], select {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	input[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}
	body{
		width: 100%;
		margin: 10;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	
	</style>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="id" placeholder="Id"></br>
		<input type="text" name="nama_matkul" placeholder="Nama MataKuliah"></br>
		<input type="text" name="kode_dosen" placeholder="kode_dosen">
        <input type="text" name="Jam" placeholder="Jam"></br>
		<input type="text" name="hari" placeholder="Hari"></br>
        <input type="submit" name="submit">
	</form>
</body>
</html>