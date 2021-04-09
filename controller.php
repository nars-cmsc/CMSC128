<?php

session_start();

require ('config/connection.php');

$errors = array();
$email = "";

// if user clicks log in button
if (isset($_POST['login-btn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];


	// validation/ error handling
	// if email field is empty
	if (empty($email)) {
		$errors['email'] = "Email is required";
	}
	// if password field is empty
	if (empty($password)) {
		$errors['password'] = "Password is required";
	}

	// add these two once there is admin control to add new users
	// admin page
	#$password = password_hash($password, PASSWORD_DEFAULT);
	#$token = bin2hex(random_bytes(50));

	if (count($errors) == 0) {
		$sql = "SELECT * FROM users WHERE email=? LIMIT 1";
		$stmt = $db_conn->prepare($sql);
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_assoc();

		if (password_verify($password, $user['password'])) {
			// successful login
			$_SESSION['id'] = $user['user_id'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['role'] = $user['role_id'];

			if ($user['role_id'] === 0) {
				header('location: alum_survey.php');
				exit();
			}
			elseif ($user['role_id'] === 1) {
				header('location: emp_survey.php');
				exit();
			}
			
			
		}
		else {
			$errors['login_fail'] = "Wrong credentials";
		}
	}	
}// end of login-btn


// if user clicks logout button
if (isset($_GET['logout'])) {
	session_destroy(); 
	unset($_SESSION['id']);
	unset($_SESSION['email']);
	session_unset();
	header('location: login.php');
	exit();
}
?>

<!-- EMAIL: jane@gmail.com PASSWORD: 12345 (ALUMNI)
	 EMAIL: john@gmail.com PASSWORD: 12345 (EMPLOYER) -->

<!-- for registering -->
<!-- $query = "SELECT * FROM users WHERE email=? LIMIT 1";
	$stmt = $db_conn->prepare($query);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$user_count = $result->num_rows;
	$stmt->close();

	if ($user_count > 0) {
		$errors['email'] = "Email already exits";
	}

	if (count($errors) === 0) {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));
	}

	$sql = "INSERT INTO users (email, token, password) VALUES (?, ?, ?)";
	$stmt = $db_conn->prepare($sql);
	$stmt->bind_param('sss', $email, $token, $password);
	
	if ($stmt->execute()){
		$user_id = $db_conn->insert_id;
		$_SESSION['id'] = $user_id;		
		$_SESSION['email'] = $email;	

		$_SESSION['message'] = "You have successfully logged in!";
		header('location: alum_survey.php');
	 	exit();

	} else {
		$errors['db_error'] = "Database error: failed to register";
	} -->