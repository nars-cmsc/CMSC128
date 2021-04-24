<?php

session_start();

require ('config/connection.php');

$errors = array();
$error;

if(isset($_POST["submit-contactemp"]))
{
	?>
	<script type="text/javascript">
	window.location="thankyou.php";
	</script>

<?php
}


//EMPLOYER CONTACT INFORMATION

// use $_POST['<name>'] to get info from survey form
// if user clicks submit button in contactemp
if (isset($_POST['submit-contactemp']) && $_POST['submitted'] == '1') {
	$id = mysqli_real_escape_string($db_conn, $_POST['user_id']);

	$user_check_query = "SELECT * FROM contactemp_ques WHERE user_id='$id' LIMIT 1";
  	$result = mysqli_query($db_conn, $user_check_query);
  	$user = mysqli_fetch_assoc($result);

 	// if user already answered the survey
	if($user){ 
	    if ($user['user_id'] == $id) {
		    $errors['user'] = "Feedback from user already exists";
		    $error = true;
		    $user_exist = true;
	    }
	}else {
		$error = false;
		$user_exist = false;
	} 
	// end of else user does not exist
	
	// variables for each question
	//Contact Information
	if (isset($_POST['emp1'])) {
		$companyname = $_POST['emp1'];
	}
	if (isset($_POST['emp2'])) {
		$contactperson = $_POST['emp2'];
	}
	if (isset($_POST['emp3'])) {
		$contactnumber = $_POST['emp3'];
	}
	if (isset($_POST['emp4'])) {
		$contactemail = $_POST['emp4'];
	}
	
	// VALIDATION / ERROR HANDLING

	// ERROR: required fields are empty or only white spaces
	
	if (empty($companyname) && $user_exist == false) {
		$errors['es_emp1'] = "Need to answer company name. Field cannot be empty.";
		$error = true;
	}
		if (empty($contactperson) && $user_exist == false) {
		$errors['es_emp2'] = "Need to answer contact person. Field cannot be empty.";
		$error = true;
	}
		if (empty($contactnumber) && $user_exist == false) {
		$errors['es_emp3'] = "Need to answer contact number. Field cannot be empty.";
		$error = true;
	}
		if (empty($contactemail) && $user_exist == false) {
		$errors['es_emp4'] = "Need to answer contact email. Field cannot be empty.";
		$error = true;
	}
	
	// if there are no errors store answers to db
	if ($error == false) {
	// EMPLOYER CONTACT INFO 1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['companyname']);
		$companyname = mysqli_real_escape_string($db_conn, $_POST['emp1']);

		// store to db
	    $sql = "INSERT INTO contactemp_ques (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$companyname')";
		mysqli_query($db_conn, $sql);
		
		// EMPLOYER CONTACT INFO 2
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['contactperson']);
		$contactperson = mysqli_real_escape_string($db_conn, $_POST['emp2']);

		// store to db
	    $sql = "INSERT INTO contactemp_ques (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$contactperson')";
		mysqli_query($db_conn, $sql);
		
		// EMPLOYER CONTACT INFO 3
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['contactnumber']);
		$contactnumber = mysqli_real_escape_string($db_conn, $_POST['emp3']);

		// store to db
	    $sql = "INSERT INTO contactemp_ques (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$contactnumber')";
		mysqli_query($db_conn, $sql);
		
		// EMPLOYER CONTACT INFO 4
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['contactemail']);
		$contactemail = mysqli_real_escape_string($db_conn, $_POST['emp4']);

		// store to db
	    $sql = "INSERT INTO contactemp_ques (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$contactemail')";
		mysqli_query($db_conn, $sql);
	}
}//end of submit-contactemp

?>