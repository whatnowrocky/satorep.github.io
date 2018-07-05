<?php

include_once('connection.php');

$error = 0;
$sql = "SELECT * FROM tbl_tracking ORDER BY tracking_id desc LIMIT 1";
$res = mysqli_query($con, $sql);


	if (($row = mysqli_fetch_assoc($res)) == true) {
		$data[] = $row;
		echo json_encode($data);
	}else
		{
			echo json_encode($error);
		}


?>