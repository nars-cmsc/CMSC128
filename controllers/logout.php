<?php

// if user clicks logout button
if (isset($_GET['logout'])) {
	session_start();			   // get ongoing session
	session_destroy(); 			   // end the session
	unset($_SESSION['id']);
	unset($_SESSION['email']);
	session_unset();			   // remove values of session variables
	header('location: login.php'); // redirect to login
	exit();
} // end of logout btn

?>
