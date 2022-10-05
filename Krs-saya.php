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
<body>
	<div class="container">
		<div class="row">
		<div class="col-lg-12">
			<div class="panel-body">
			
				<div class="table-responsive">
					<?php
						include 'connection.php';
						if (isset($_GET['id_del'])) {
							$iddel = $_GET['id_del'];

							$del = "DELETE FROM jadwal WHERE id_jadwal = '".$iddel."'";
							$img = "SELECT * FROM jadwal WHERE id_jadwal = '".$iddel."'";
							$ambil = mysqli_query($conn, $img);

						

							$msql = mysqli_query($conn, $del);

						}
					?>
					<table class="table table-striped table-bordered table-hover" id="saya">
						<thead>
							<tr>
								<th>Id Jadwal</th>
								<th>Nama Matkul</th>
								<th>Kode Dosen</th>
								<th>Sks</th>
								<th>Semester</th>
								<th>Jam</th>
								<th>Hari</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							<?php

								include 'connection.php';

								$view = mysqli_query($conn, "SELECT * FROM jadwal");

								while ($rows = mysqli_fetch_array($view)) { ?>
									
									<tr>
										<td><?php echo $rows['id_jadwal'] ;?></td>
										<td><?php echo $rows['nama_matkul'] ;?></td>
										<td><?php echo $rows['kode_dosen'] ;?></td>
										<td><?php echo $rows['sks'] ;?></td>
										<td><?php echo $rows['semester'] ;?></td>
										<td><?php echo $rows['Jam'] ;?></td>
										<td><?php echo $rows['Hari'] ;?></td>
										<td>
											<a href="?id_del=<?php echo $rows['id_jadwal']?>" onclick="return confirm('Yakin kamu ingin menghapus Product?')">DELETE</a>
										</td>
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