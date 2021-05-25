<?php
// display alum survey raw data from db
session_start();

require ('config/connection.php');

$result = mysqli_query($db_conn, "SELECT contact_info_ques, answer_body, user_id FROM contactemp_ques");

$contact_array = array();

while ($row = mysqli_fetch_array($result)) {
	$contact_array[] = $row;

	$first_user = $row['user_id'];
}

# ask frincy to change contact emp db format alot columns for comp name, email, etc separately...

?>