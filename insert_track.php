<?php

include_once('connection.php');

$tracking = $_GET['tracking'];
$name = $_GET['name'];
$pos = $_GET['pos'];
$count = $_GET['count'];
$bags = $_GET['bags'];
$total = $_GET['total'];
$code = $_GET['code'];

$error = 0;
$sql = "INSERT INTO tbl_tracking (tracking_id, ass_pos, item_count, bags, total, code, user) VALUES ('$tracking', $pos, $count, $bags, $total, '$code', '$name')";

if(mysqli_query($con, $sql)){
	echo "saved";
}else{
	echo "error " . mysqli_error($con);
}
?>