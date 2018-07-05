<?php

include_once('connection.php');
$upc = $_GET['upc'];
$error = 0;
$sql = "SELECT * FROM tbl_products WHERE upc = '{$upc}'";
$res = mysqli_query($con, $sql);


	if (($row = mysqli_fetch_assoc($res)) == true) {
		$data[] = $row;
		echo json_encode($data);
	}else
		{
			echo json_encode($error);
		}

?>