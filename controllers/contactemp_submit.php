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
	
	if (isset($_POST['contactemp_yon'])) {
		$contactemp = $_POST['contactemp_yon'];
		if ($contactemp == 'Yes') {
			$companyname = $_POST['emp1'];
			$contactperson = $_POST['emp2'];
			$contactnumber = $_POST['emp3'];
			$contactemail = $_POST['emp4'];
		}
	}
	
	
	// VALIDATION / ERROR HANDLING

	// ERROR: required fields are empty or only white spaces
	
	if (isset($_POST['contactemp_yon']) && $contactemp == 'Yes' && (empty($companyname) || strlen(trim($companyname)) <= 0) && (empty($contactperson) || strlen(trim($contactperson)) <= 0) && (empty($contactnumber) || strlen(trim($contactnumber)) <= 0) && (empty($contactemail) || strlen(trim($contactemail)) <= 0) && $user_exist == false) {
		$errors['es_emp1'] = "Need to answer company name. Field cannot be empty.";
		$errors['es_emp2'] = "Need to answer contact person. Field cannot be empty.";
		$errors['es_emp3'] = "Need to answer contact number. Field cannot be empty.";
		$errors['es_emp4'] = "Need to answer contact email. Field cannot be empty.";		
		$error = true;
	}
	
	// if there are no errors store answers to db

		
	if ($error == false) {
		
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['contactemp']);
		$contactemp = mysqli_real_escape_string($db_conn, $_POST['contactemp_yon']);

		// if other is selected
		if ($contactemp == 'Yes') {
			$companyname = mysqli_real_escape_string($db_conn, $_POST['emp1']);
			$contactperson = mysqli_real_escape_string($db_conn, $_POST['emp2']);
			$contactnumber = mysqli_real_escape_string($db_conn, $_POST['emp3']);
			$contactemail = mysqli_real_escape_string($db_conn, $_POST['emp4']);
			
		// store to db
	    $sql = "INSERT INTO contactemp_ques (user_id, companyname, contactperson, contactnumber, contactemail, date_response, contacted) VALUES ('$id', '$companyname', '$contactperson', '$contactnumber', '$contactemail', now(), 'No')";
		mysqli_query($db_conn, $sql);		
		} else {
			$companyname = $contactemp;
			$contactperson = $contactemp;
			$contactnumber = $contactemp;
			$contactemail = $contactemp;
			
		}
	}
}//end of submit-contactemp

?>