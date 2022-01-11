<?php
include"../../db.php";
$tanggal = $_POST['tanggal'];
$nama_cus = $_POST['nama_cus'];
$pesan = $_POST['pesan'];

	mysqli_query("INSERT INTO bantuan (tanggal='$tanggal',nama_cus='$nama_cus',pesan='$pesan')");
	header("location:home.php");

?>