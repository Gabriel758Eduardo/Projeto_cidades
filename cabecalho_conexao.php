<?php
	$con = mysqli_connect("localhost", "gabriel", "senha");
	mysqli_set_charset($con,"utf8");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "cadastro");
	if(!$db) {
		echo mysqli_error($con);
	}
?>
