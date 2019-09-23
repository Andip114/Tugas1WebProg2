<?php

$koneksi = mysqli_connect("localhost","root","","crudnupe");

// Check koneksi ggl/tdk
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
	
}

?>