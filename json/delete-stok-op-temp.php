<?php
	error_reporting(E_ERROR);
	include 'koneksi.php';
	$username = $_GET["usname"];	
	$query="DELETE from tbl_stok_opn_temp where OLEH='$username'";
	
	if (mysqli_query($koneksi, $query)) {
		$response["success"] = "1";
		$response["message"] = "Data sukses dihapus";
		echo json_encode($response);
	} else {
		$response["success"] = "0";
		$response["message"] = "Maaf , terjadi kesalahan";
		echo json_encode($response);
	}
?>