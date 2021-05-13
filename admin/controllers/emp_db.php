<?php
// display emp survey raw data from db
session_start();

require ('config/connection.php');

$query = mysqli_query($db_conn, "SELECT * FROM emp_survey");
$errors = array();
$error;
$email = "";


?>