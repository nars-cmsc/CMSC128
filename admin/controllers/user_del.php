<?php

session_start();

require ('config/connection.php');

$query = mysqli_query($db_conn, "SELECT * FROM users");

if (isset($_GET['delete'])) {
	mysqli_query($db_conn, "DELETE FROM users WHERE user_id='".$_GET['delete']."'");
	$_SESSION['message'] = "User record has been deleted!";
	
	header('location: index.php');
	exit();
}



?>