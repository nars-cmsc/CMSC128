<?php
// display alum survey raw data from db
session_start();

require ('config/connection.php');

$result = mysqli_query($db_conn, "SELECT * FROM contactemp_ques");

?>