<?php

	include_once("conexionDados.php");

	if($_REQUEST['dadid']) {

		$sql = "SELECT id, nombre, finalx, finaly, cabenx,cabeny, GapIntx, GapInty, NoGapsx, NoGapsy, GapExtx, GapExty FROM dados WHERE id='".$_REQUEST['dadid']."'";

		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
		$data = array();

		while( $rows = mysqli_fetch_assoc($resultset) ) {

			$data = $rows;
		}

		echo json_encode($data);

	} else {

		echo 0;	

	}
	
?>
