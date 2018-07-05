<?php

include_once('connection.php');

$error = 0;
$sql = "SELECT * FROM tbl_tracking ORDER BY tracking_id DESC";
$res = mysqli_query($con, $sql);
$data;

while ($row = mysqli_fetch_assoc($res)) {
	$data[] = $row;

}
	echo json_encode($data);

?>