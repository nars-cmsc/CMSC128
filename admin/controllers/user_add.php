<?php

session_start();

<<<<<<< HEAD
use PHPMailer\PHPMailer\PHPMailer;

require ('config/connection.php');

require_once ('phpmailer/Exception.php');
require_once ('phpmailer/PHPMailer.php');
require_once ('phpmailer/SMTP.php');

=======
require ('config/connection.php');

>>>>>>> a6c22e9bfd0faa917178551838d485839dd9bac0
$query = mysqli_query($db_conn, "SELECT * FROM users");
$errors = array();
$error;
$email = "";
$role  = "";
<<<<<<< HEAD
$mail = new PHPMailer(true);
=======
>>>>>>> a6c22e9bfd0faa917178551838d485839dd9bac0

function password_generate($chars) {
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

// for registering
if (isset($_POST['reg-btn'])) {

<<<<<<< HEAD
	// check value of variables
=======
>>>>>>> a6c22e9bfd0faa917178551838d485839dd9bac0
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

<<<<<<< HEAD
	// error checking
=======
>>>>>>> a6c22e9bfd0faa917178551838d485839dd9bac0
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

<<<<<<< HEAD
	// no errors, proceed create new user
=======
>>>>>>> a6c22e9bfd0faa917178551838d485839dd9bac0
	if (count($errors) === 0) {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));


		$sql = "INSERT INTO users (email, token, password, pass, role_id) VALUES ('$email', '$token', '$password', '$pass', '$role_id')";
		mysqli_query($db_conn, $sql);
		$_SESSION['message'] = "User successfully added to the database!";

<<<<<<< HEAD
		// sending email to newly registered users
		// try {
		// 	$mail->isSMTP();
		// 	$mail->Host = 'smtp.gmail.com';
		// 	$mail->SMTPAuth = true;
		// 	$mail->Username = 'dmcs.survey.test1@gmail.com'; // gmail address used as SMTP server
		// 	$mail->Password = 'dmcssurveytest1'; // password of gmail address
		// 	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		// 	$mail->Port = '587';

		// 	$mail->setFrom('dmcs.survey.test1@gmail.com');
		// 	$mail->addAddress($email); // email receiver

		// 	$mail->isHTML(true);
		// 	$mail->Subject = 'DMCS Survey Credentials';
		// 	$mail->Body = "Please use the following credentials for logging in.<br><b>Email : </b>$email <br><b>Password : </b>$pass";

		// 	$mail->send();
		// } catch (Exception $e) {
		// 	$errors = $e->getMessage();
		// }

=======
>>>>>>> a6c22e9bfd0faa917178551838d485839dd9bac0
		header('location: index.php');
	 	exit();
	} else {
		$errors['db_error'] = "Database error: failed to register";
	}

}
?>