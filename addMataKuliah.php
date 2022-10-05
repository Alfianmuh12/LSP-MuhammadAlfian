<?php


include 'connection.php';

if (isset($_POST['submit'])) {

    $kdMK = $_POST['kode_matkul'];
    $nmMk = $_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];


    $query = "INSERT INTO mata_kuliah (kode_matkul, nama_matkul, sks, semester) VALUES ('".$kdMK."', '".$nmMk."', '".$sks."', '".$semester."')";

    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Matakuliah</title>
	<style>

	body{
		width: 50%;
		margin: 0 auto;
	}

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

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	div {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
	</style>
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="kode_matkul" placeholder="Kode Matakuliah"></br>
		<input type="text" name="nama_matkul" placeholder="Nama MataKuliah"></br>
		<input type="text" name="sks" placeholder="SKS">
        <input type="text" name="semester" placeholder="semester"></br>

        <input type="submit" name="submit">
	</form>
	<a href="matkulVIew.php" class="GFG"> back
    </a>
</body>

</html>