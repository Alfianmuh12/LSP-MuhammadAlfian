<?php


include 'connection.php';

if (isset($_POST['submit'])) {

    $kd = $_POST['kode_dosen'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];


    $query = "INSERT INTO dosen (kode_dosen, nama, alamat) VALUES ('".$kd."', '".$nama."', '".$alamat."')";

    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Dosen</title>
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
		<input type="text" name="kode_dosen" placeholder="Kode Dosen"></br>
		<input type="text" name="nama" placeholder="Nama"></br>
		<input type="text" name="alamat" placeholder="Alamat">

        <input type="submit" name="submit">
	</form>
	<a href="dosenView.php" class="GFG"> back
    </a>
</body>

</html>