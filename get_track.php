<?php

include_once('connection.php');

$tracking = $_GET['tracking'];
$error = 0;
$sql = "SELECT * FROM tbl_tracking WHERE tracking_id = '{$tracking}'";
$res = mysqli_query($con, $sql);


	if (($row = mysqli_fetch_assoc($res)) == true) {
		$data[] = $row;
		echo json_encode($data);
	}else
		{
			echo json_encode($error);
		}


?>