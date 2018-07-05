<?php
$db_name = "pos";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$con = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name) or die('Server' . mysql_error());
?>