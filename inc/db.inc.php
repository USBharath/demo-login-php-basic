<?php 
	$db_server_name = "localhost";
	$db_username = "root";
	$db_passwd = "";
	$db_name = "phpbasic_test";

	$conn = mysqli_connect($db_server_name, $db_username, $db_passwd, $db_name);
	mysqli_set_charset($conn, 'UTF8');
	date_default_timezone_set("Asia/Ho_Chi_Minh");
 ?>