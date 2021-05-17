<?php

session_start();

require ('config/connection.php');

$query = mysqli_query($db_conn, "SELECT * FROM users");
$errors = array();
$error;
$email = "";
$role  = "";

function password_generate($chars) {
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

// for registering
if (isset($_POST['reg-btn'])) {

	if (isset($_POST['email'])) {
		$email = mysqli_real_escape_string($db_conn, $_POST['email']);
	}
	if (isset($_POST['password'])) {
		$password = mysqli_real_escape_string($db_conn, $_POST['password']);
	}
	if (isset($_POST['roles'])) {
		$role = mysqli_real_escape_string($db_conn, $_POST['roles']);
		if ($role == 'admin') {
			$role_id = 0;
		}
		elseif ($role == 'alum') {
			$role_id = 1;
		}
		elseif ($role == 'emp') {
			$role_id = 2;
		}
		elseif ($role == 'alum_emp') {
			$role_id = 3;
		}
	}
	$pass = $password;

	$query = "SELECT * FROM users WHERE email=? LIMIT 1";
	$stmt = $db_conn->prepare($query);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$user_count = $result->num_rows;
	$stmt->close();

	if ($user_count > 0) {
		$errors['email'] = "Email already exits";
	}
	if (empty($email)) {
		$errors['email_emp'] = "Email is required";
	}

	if (empty($password)) {
		$errors['password'] = "Password is required";
	}

	if (empty($role)) {
		$errors['role'] = "Role is required";
	}

	if (count($errors) === 0) {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));


		$sql = "INSERT INTO users (email, token, password, pass, role_id) VALUES ('$email', '$token', '$password', '$pass', '$role_id')";
		mysqli_query($db_conn, $sql);
		$_SESSION['message'] = "User successfully added to the database!";

		header('location: index.php');
	 	exit();
	} else {
		$errors['db_error'] = "Database error: failed to register";
	}

}
?>