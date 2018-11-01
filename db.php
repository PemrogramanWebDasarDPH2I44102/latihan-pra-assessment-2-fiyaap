<?php
	$l 		= "localhost";
	$u		= "root";
	$p		= "";
	$d		= "db";

	$conn = mysqli_connect($l, $u, $p, $d);

	if (!$conn) {

		echo "Gagal Terhubung!!!";

	}else{

	}
?>