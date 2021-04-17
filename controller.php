<?php

session_start();

require ('config/connection.php');

$ADMIN_ROLE_ID = 0;
$ALUMNI_ROLE_ID = 1;
$EMPLOYER_ROLE_ID = 2;
$ALUM_EMP_ROLE_ID = 3;

$errors = array();
$error;
$email = "";
$ques3_arr = array(
	"Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use",
	"Activities of International Organizations and Bodies",
	"Administrative and Support Service Activities", "Agriculture, Forestry and Fishing", "Arts, Entertainment and Recreation",
	"Construction", "Education", "Electricity, Gas, Steam and Air Conditioning Supply", "Finance, Banks, and Insurance", 
	"Hotel/Accommodation, and Restaurant and Food Service", "Human Health and Social Work Activities", "Information Technology", 
	"Manufacturing", "Media and Communication", "Mining and Quarrying", "Other Service Activities", 
	"Professional, Scientific and Technical Activities", "Public Administration and Defense; Compulsory Social Security", 
	"Real Estate Activities", "Transportation and Storage", "Water Supply; Sewerage, Waste Management and Remediation Activities", 
	"Wholesale and Retail Trade"
);
$skills_arr = array(
	"Reading Comprehension", "Active Listening", "Writing Skills", 
	"Verbal Communication", "Mathematics Skills", "Scientific Literacy", 
	"Digital Literacy", "Critical Thinking", "Participatory Learning", 
	"Creative and Innovation", "Leadership Skills", "Social Awareness", 
	"Service Orientation", "Time Management", "Complex Problem Solving Skills", 
	"Judgment and Decision Making", "Systems Analysis and Evaluation"
);
$dmcs_skills_arr = array(
	"Willing to undergo training and/or further education", 
	"Has strong and professional work ethic", 
	"Willing to share knowledge and expertise within the company and/or community", 
	"Willing and has a positive attitude towards working with others", 
	"Is able to learn quickly the basic company operations", 
	"Is able to provide solutions and contribute to the growth of the company", 
	"Is able to master company operations", 
	"Effective in both oral and written communication", 
	"Computer and Technical Literate", 
	"Effective and efficient in accomplishing tasks", 
	"Able to provide innovative ideas to the company"
);


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

			// check role of the user
			if ($user['role_id'] === $ALUMNI_ROLE_ID) {
				header('location: alum_survey.php');
				exit();
			}
			elseif ($user['role_id'] === $EMPLOYER_ROLE_ID) {
				header('location: emp_survey.php');
				exit();
			}
			elseif ($user['role_id'] === $ALUM_EMP_ROLE_ID) {
				header('location: alum_emp.php');
				exit();
			}
			// elseif ($user['role_id'] === $ADMIN_ROLE_ID) {
			// 	header('location: admin.php');
			// 	exit();
			// }
			
		}
		else {
			$errors['login_fail'] = "Email and password do not match!";
		}
	}	
}// end of login-btn


// use $_POST['<name>'] to get info from survey form
// if user clicks submit button in emp_survey
if (isset($_POST['submit-emp']) && $_POST['submitted'] == '1') {
	$id = mysqli_real_escape_string($db_conn, $_POST['user_id']);

	$user_check_query = "SELECT * FROM emp_survey WHERE user_id='$id' LIMIT 1";
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
	} // end of else user does not exist

	// variables for each question
	if (isset($_POST['ques1'])){
	    $one = $_POST['ques1'];
	    if ($one == 'other') {
			$one_other = $_POST['ques1_otxt'];
		}
	}
	if (isset($_POST['ques2'])) {
		$two = $_POST['ques2'];
		if ($two == 'abroad') {
			$region = $_POST['ques2_1_1'];
		}
	}
	if (isset($_POST['ques3'])) {
		$three = $_POST['ques3'];
		if ($three == 'other') {
			$three_other = $_POST['ques3_other'];
		}
	}
	if (isset($_POST['ques4'])) {
		$four = $_POST['ques4'];
	}

	if (isset($_POST['ques5'])) {
		$five = $_POST['ques5'];
	}

	if (isset($_POST['ques6'])) {
		$six = $_POST['ques6'];
	}

	if (isset($_POST['ques7_1'])) {
		$skill7_1 = $_POST['ques7_1'];
	}
	if (isset($_POST['ques7_2'])) {
		$skill7_2 = $_POST['ques7_2'];
	}
	if (isset($_POST['ques7_3'])) {
		$skill7_3 = $_POST['ques7_3'];
	}
	if (isset($_POST['ques7_4'])) {
		$skill7_4 = $_POST['ques7_4'];
	}
	if (isset($_POST['ques7_5'])) {
		$skill7_5 = $_POST['ques7_5'];
	}
	if (isset($_POST['ques7_6'])) {
		$skill7_6 = $_POST['ques7_6'];
	}
	if (isset($_POST['ques7_7'])) {
		$skill7_7 = $_POST['ques7_7'];
	}
	if (isset($_POST['ques7_8'])) {
		$skill7_8 = $_POST['ques7_8'];
	}
	if (isset($_POST['ques7_9'])) {
		$skill7_9 = $_POST['ques7_9'];
	}
	if (isset($_POST['ques7_10'])) {
		$skill7_10 = $_POST['ques7_10'];
	}
	if (isset($_POST['ques7_11'])) {
		$skill7_11 = $_POST['ques7_11'];
	}
	if (isset($_POST['ques7_12'])) {
		$skill7_12 = $_POST['ques7_12'];
	}
	if (isset($_POST['ques7_13'])) {
		$skill7_13 = $_POST['ques7_13'];
	}
	if (isset($_POST['ques7_14'])) {
		$skill7_14 = $_POST['ques7_14'];
	}
	if (isset($_POST['ques7_15'])) {
		$skill7_15 = $_POST['ques7_15'];
	}
	if (isset($_POST['ques7_16'])) {
		$skill7_16 = $_POST['ques7_16'];
	}
	if (isset($_POST['ques7_17'])) {
		$skill7_17 = $_POST['ques7_17'];
	}

	if (isset($_POST['ques8_1'])) {
		$skill8_1 = $_POST['ques8_1'];
	}
	if (isset($_POST['ques8_2'])) {
		$skill8_2 = $_POST['ques8_2'];
	}
	if (isset($_POST['ques8_3'])) {
		$skill8_3 = $_POST['ques8_3'];
	}
	if (isset($_POST['ques8_4'])) {
		$skill8_4 = $_POST['ques8_4'];
	}
	if (isset($_POST['ques8_5'])) {
		$skill8_5 = $_POST['ques8_5'];
	}
	if (isset($_POST['ques8_6'])) {
		$skill8_6 = $_POST['ques8_6'];
	}
	if (isset($_POST['ques8_7'])) {
		$skill8_7 = $_POST['ques8_7'];
	}
	if (isset($_POST['ques8_8'])) {
		$skill8_8 = $_POST['ques8_8'];
	}
	if (isset($_POST['ques8_9'])) {
		$skill8_9 = $_POST['ques8_9'];
	}
	if (isset($_POST['ques8_10'])) {
		$skill8_10 = $_POST['ques8_10'];
	}
	if (isset($_POST['ques8_11'])) {
		$skill8_11 = $_POST['ques8_11'];
	}
	if (isset($_POST['ques8_12'])) {
		$skill8_12 = $_POST['ques8_12'];
	}
	if (isset($_POST['ques8_13'])) {
		$skill8_13 = $_POST['ques8_13'];
	}
	if (isset($_POST['ques8_14'])) {
		$skill8_14 = $_POST['ques8_14'];
	}
	if (isset($_POST['ques8_15'])) {
		$skill8_15 = $_POST['ques8_15'];
	}
	if (isset($_POST['ques8_16'])) {
		$skill8_16 = $_POST['ques8_16'];
	}
	if (isset($_POST['ques8_17'])) {
		$skill8_17 = $_POST['ques8_17'];
	}

	if (isset($_POST['ques9'])) {
		$nine = $_POST['ques9'];
	}

	if (isset($_POST['ques10'])) {
		$ten = $_POST['ques10'];
	}

	if (isset($_POST['ques11_1'])) {
		$skill11_1 = $_POST['ques11_1'];
	}
	if (isset($_POST['ques11_2'])) {
		$skill11_2 = $_POST['ques11_2'];
	}
	if (isset($_POST['ques11_3'])) {
		$skill11_3 = $_POST['ques11_3'];
	}
	if (isset($_POST['ques11_4'])) {
		$skill11_4 = $_POST['ques11_4'];
	}
	if (isset($_POST['ques11_5'])) {
		$skill11_5 = $_POST['ques11_5'];
	}
	if (isset($_POST['ques11_6'])) {
		$skill11_6 = $_POST['ques11_6'];
	}
	if (isset($_POST['ques11_7'])) {
		$skill11_7 = $_POST['ques11_7'];
	}
	if (isset($_POST['ques11_8'])) {
		$skill11_8 = $_POST['ques11_8'];
	}
	if (isset($_POST['ques11_9'])) {
		$skill11_9 = $_POST['ques11_9'];
	}
	if (isset($_POST['ques11_10'])) {
		$skill11_10 = $_POST['ques11_10'];
	}
	if (isset($_POST['ques11_11'])) {
		$skill11_11 = $_POST['ques11_11'];
	}

	if (isset($_POST['ques12_1'])) {
		$skill12_1 = $_POST['ques12_1'];
	}
	if (isset($_POST['ques12_2'])) {
		$skill12_2 = $_POST['ques12_2'];
	}
	if (isset($_POST['ques12_3'])) {
		$skill12_3 = $_POST['ques12_3'];
	}
	if (isset($_POST['ques12_4'])) {
		$skill12_4 = $_POST['ques12_4'];
	}
	if (isset($_POST['ques12_5'])) {
		$skill12_5 = $_POST['ques12_5'];
	}
	if (isset($_POST['ques12_6'])) {
		$skill12_6 = $_POST['ques12_6'];
	}
	if (isset($_POST['ques12_7'])) {
		$skill12_7 = $_POST['ques12_7'];
	}
	if (isset($_POST['ques12_8'])) {
		$skill12_8 = $_POST['ques12_8'];
	}
	if (isset($_POST['ques12_9'])) {
		$skill12_9 = $_POST['ques12_9'];
	}
	if (isset($_POST['ques12_10'])) {
		$skill12_10 = $_POST['ques12_10'];
	}
	if (isset($_POST['ques12_11'])) {
		$skill12_11 = $_POST['ques12_11'];
	}

	if (isset($_POST['ques13'])) {
		$check13 = $_POST['ques13'];
		$chk13;
		foreach ($check13 as $chk) {
			if ($chk == 'other') {
				$check13_other = $_POST['ques13_otxt'];
				$chk13 = true;
			}
		}
	}

	if (isset($_POST['ques14'])) {
		$fourteen = $_POST['ques14'];
	}

	if (isset($_POST['ques15'])) {
		$fifteen = $_POST['ques15'];
		if ($fifteen == 'Yes') {
			$fifteen_txt = $_POST['ques15_ytxt'];
		}
	}

	if (isset($_POST['ques16'])) {
		$sixteen = $_POST['ques16'];
		if ($sixteen == 'Yes') {
			$sixteen_txt = $_POST['ques16_ytxt'];
		}
	}

	if (isset($_POST['ques17'])) {
		$seventeen = $_POST['ques17'];
		if ($seventeen == 'Yes') {
			$seventeen_txt = $_POST['ques17_ytxt'];
		}
	}



	// VALIDATION / ERROR HANDLING

	// ERROR: required fields are empty or only white spaces
	if (empty($one) && $user_exist == false) {
		$errors['es_q1'] = "Need to answer #1. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques1']) && $one == 'other' && (empty($one_other) || strlen(trim($one_other)) <= 0) && $user_exist == false) {
		$errors['es_q1'] = "Need to answer #1. 'Others' field cannot be empty.";
		$error = true;
	}

	if (empty($two) && $user_exist == false) {
		$errors['es_q2'] = "Need to answer #2. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques2']) && $two == 'abroad' && empty($region) && $user_exist == false) {
		$errors['es_q2'] = "Need to answer #2.1. Field cannot be empty.";
		$error = true;
	}
		
	if (empty($three) && $user_exist == false) {
		$errors['es_q3'] = "Need to answer #3. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques3']) && $three == 'other' && (empty($three_other) || strlen(trim($three_other)) <= 0) && $user_exist == false) {
		$errors['es_q3'] = "Need to answer #3. 'Others' field cannot be empty.";
		$error = true;
	}

	if (empty($four) && $user_exist == false) {
		$errors['es_q4'] = "Need to answer #4. Field cannot be empty.";
		$error = true;
	}

	if ((empty($five) || strlen(trim($five)) <= 0) && $user_exist == false) {
		$errors['es_q5'] = "Need to answer #5. Field cannot be empty.";
		$error = true;
	}

	if (empty($six) && $user_exist == false) {
		$errors['es_q6'] = "Need to answer #6. Field cannot be empty.";
		$error = true;
	}

	if ((empty($skill7_1) || empty($skill7_2) || empty($skill7_3) ||
		empty($skill7_4) || empty($skill7_5) || empty($skill7_6) ||
		empty($skill7_7) || empty($skill7_8) || empty($skill7_9) ||
		empty($skill7_10) || empty($skill7_11) || empty($skill7_12) ||
		empty($skill7_13) || empty($skill7_14) || empty($skill7_15) ||
		empty($skill7_16) || empty($skill7_17)) && $user_exist == false) {
		$errors['es_q7'] = "There are items in #7 that were not answered.";
		$error = true;
	}

	if ((empty($skill8_1) || empty($skill8_2) || empty($skill8_3) ||
		empty($skill8_4) || empty($skill8_5) || empty($skill8_6) ||
		empty($skill8_7) || empty($skill8_8) || empty($skill8_9) ||
		empty($skill8_10) || empty($skill8_11) || empty($skill8_12) ||
		empty($skill8_13) || empty($skill8_14) || empty($skill8_15) ||
		empty($skill8_16) || empty($skill8_17)) && $user_exist == false) {
		$errors['es_q8'] = "There are items in #8 that were not answered.";
		$error = true;
	}

	if (empty($nine) && $user_exist == false) {
		$errors['es_q9'] = "Need to answer #9. Field cannot be empty.";
		$error = true;
	}

	if (empty($ten) && $user_exist == false) {
		$errors['es_q10'] = "Need to answer #10. Field cannot be empty.";
		$error = true;
	}

	if ((empty($skill11_1) || empty($skill11_2) || empty($skill11_3) ||
		empty($skill11_4) || empty($skill11_5) || empty($skill11_6) ||
		empty($skill11_7) || empty($skill11_8) || empty($skill11_9) ||
		empty($skill11_10) || empty($skill11_11)) && $user_exist == false) {
		$errors['es_q11'] = "There are items in #11 that were not answered.";
		$error = true;
	}

	if ((empty($skill12_1) || empty($skill12_2) || empty($skill12_3) ||
		empty($skill12_4) || empty($skill12_5) || empty($skill12_6) ||
		empty($skill12_7) || empty($skill12_8) || empty($skill12_9) ||
		empty($skill12_10) || empty($skill12_11)) && $user_exist == false) {
		$errors['es_q12'] = "There are items in #12 that were not answered.";
		$error = true;
	}

	if (empty($check13) && $user_exist == false) {
		$errors['es_q13'] = "Need to answer #13. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques13']) && $chk13 == true && (empty($check13_other) || strlen(trim($check13_other)) <= 0) && $user_exist == false) {
		$errors['es_q13'] = "Need to answer #13. 'Others' field cannot be empty.";
		$error = true;
	}

	if (empty($fourteen) && $user_exist == false) {
		$errors['es_q14'] = "Need to answer #14. Field cannot be empty.";
		$error = true;
	}

	if (empty($fifteen) && $user_exist == false) {
		$errors['es_q15'] = "Need to answer #15. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques15']) && $fifteen == 'Yes' && (empty($fifteen_txt) || strlen(trim($fifteen_txt)) <= 0) && $user_exist == false) {
		$errors['es_q15'] = "Need to answer #15. 'Yes' field cannot be empty.";
		$error = true;
	}

	if (empty($sixteen) && $user_exist == false) {
		$errors['es_q16'] = "Need to answer #16. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques16']) && $sixteen == 'Yes' && (empty($sixteen_txt) || strlen(trim($sixteen_txt)) <= 0) && $user_exist == false) {
		$errors['es_q16'] = "Need to answer #16. 'Yes' field cannot be empty.";
		$error = true;
	}

	if (empty($seventeen) && $user_exist == false) {
		$errors['es_q17'] = "Need to answer #17. Field cannot be empty.";
		$error = true;
	}
	if (isset($_POST['ques17']) && $seventeen == 'Yes' && (empty($seventeen_txt) || strlen(trim($seventeen_txt)) <= 0) && $user_exist == false) {
		$errors['es_q17'] = "Need to answer #17. 'Yes' field cannot be empty.";
		$error = true;
	}



	// if there are no errors store answers to db
	if ($error == false) {
		// QUESTION NUMBER 1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['one']);
		$one = mysqli_real_escape_string($db_conn, $_POST['ques1']);	
		// if other is selected
		if ($one == 'other') {
			$one_field = "other_" . mysqli_real_escape_string($db_conn, $one_other);
		} else {
			$one_field = $one;
		}

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$one_field')";
	    mysqli_query($db_conn, $sql);
		
		

		// QUESTION NUMBER 2
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['two']);
		$two = mysqli_real_escape_string($db_conn, $_POST['ques2']);
		
		// store to db		
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$two')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 2.1
		if ($two == 'abroad') {
			$ques_num = mysqli_real_escape_string($db_conn, $_POST['twopone']);
			$region = mysqli_real_escape_string($db_conn, $_POST['ques2_1_1']);
			$subregion = mysqli_real_escape_string($db_conn, $_POST['ques2_1_2']);

			if ($region == 'Antarctica') {
				$reg_sub = mysqli_real_escape_string($db_conn, $region);
			}
			else {
				$reg_sub = mysqli_real_escape_string($db_conn, $region.'_'.$subregion);
			}

			// store to db
		    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$reg_sub')";
		    mysqli_query($db_conn, $sql);
		}



		// QUESTION NUMBER 3
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['three']);
		$three = mysqli_real_escape_string($db_conn, $_POST['ques3']);
		$three_other = mysqli_real_escape_string($db_conn, $_POST['ques3_other']);
		
		if ($three == 'other') {
			$industry = "other_" . mysqli_real_escape_string($db_conn, $three_other);
		}
		else {
			$industry = mysqli_real_escape_string($db_conn, $three);
		}

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$industry')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 4
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['four']);
		$four = mysqli_real_escape_string($db_conn, $_POST['ques4']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$four')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 5
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['five']);
		$five = mysqli_real_escape_string($db_conn, $_POST['ques5']);
		
		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$five')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 6
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['six']);
		$six = mysqli_real_escape_string($db_conn, $_POST['ques6']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$six')";
	    mysqli_query($db_conn, $sql);
		


		// QUESTION NUMBER 7
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seven']);
		$skill7_1 = mysqli_real_escape_string($db_conn, $_POST['ques7_1']);
		$skill7_2 = mysqli_real_escape_string($db_conn, $_POST['ques7_2']);
		$skill7_3 = mysqli_real_escape_string($db_conn, $_POST['ques7_3']);
		$skill7_4 = mysqli_real_escape_string($db_conn, $_POST['ques7_4']);
		$skill7_5 = mysqli_real_escape_string($db_conn, $_POST['ques7_5']);
		$skill7_6 = mysqli_real_escape_string($db_conn, $_POST['ques7_6']);
		$skill7_7 = mysqli_real_escape_string($db_conn, $_POST['ques7_7']);
		$skill7_8 = mysqli_real_escape_string($db_conn, $_POST['ques7_8']);
		$skill7_9 = mysqli_real_escape_string($db_conn, $_POST['ques7_9']);
		$skill7_10 = mysqli_real_escape_string($db_conn, $_POST['ques7_10']);
		$skill7_11 = mysqli_real_escape_string($db_conn, $_POST['ques7_11']);
		$skill7_12 = mysqli_real_escape_string($db_conn, $_POST['ques7_12']);
		$skill7_13 = mysqli_real_escape_string($db_conn, $_POST['ques7_13']);
		$skill7_14 = mysqli_real_escape_string($db_conn, $_POST['ques7_14']);
		$skill7_15 = mysqli_real_escape_string($db_conn, $_POST['ques7_15']);
		$skill7_16 = mysqli_real_escape_string($db_conn, $_POST['ques7_16']);
		$skill7_17 = mysqli_real_escape_string($db_conn, $_POST['ques7_17']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_1')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_2')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_3')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_4')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_5')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_6')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_7')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_8')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_9')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_10')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_11')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_12')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_13')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_14')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_15')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_16')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill7_17')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 8
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eight']);
		$skill8_1 = mysqli_real_escape_string($db_conn, $_POST['ques8_1']);
		$skill8_2 = mysqli_real_escape_string($db_conn, $_POST['ques8_2']);
		$skill8_3 = mysqli_real_escape_string($db_conn, $_POST['ques8_3']);
		$skill8_4 = mysqli_real_escape_string($db_conn, $_POST['ques8_4']);
		$skill8_5 = mysqli_real_escape_string($db_conn, $_POST['ques8_5']);
		$skill8_6 = mysqli_real_escape_string($db_conn, $_POST['ques8_6']);
		$skill8_7 = mysqli_real_escape_string($db_conn, $_POST['ques8_7']);
		$skill8_8 = mysqli_real_escape_string($db_conn, $_POST['ques8_8']);
		$skill8_9 = mysqli_real_escape_string($db_conn, $_POST['ques8_9']);
		$skill8_10 = mysqli_real_escape_string($db_conn, $_POST['ques8_10']);
		$skill8_11 = mysqli_real_escape_string($db_conn, $_POST['ques8_11']);
		$skill8_12 = mysqli_real_escape_string($db_conn, $_POST['ques8_12']);
		$skill8_13 = mysqli_real_escape_string($db_conn, $_POST['ques8_13']);
		$skill8_14 = mysqli_real_escape_string($db_conn, $_POST['ques8_14']);
		$skill8_15 = mysqli_real_escape_string($db_conn, $_POST['ques8_15']);
		$skill8_16 = mysqli_real_escape_string($db_conn, $_POST['ques8_16']);
		$skill8_17 = mysqli_real_escape_string($db_conn, $_POST['ques8_17']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_1')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_2')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_3')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_4')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_5')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_6')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_7')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_8')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_9')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_10')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_11')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_12')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_13')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_14')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_15')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_16')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill8_17')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 9
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['nine']);
		$nine = mysqli_real_escape_string($db_conn, $_POST['ques9']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$nine')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 10
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['ten']);
		$ten = mysqli_real_escape_string($db_conn, $_POST['ques10']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$ten')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 11
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eleven']);
		$skill11_1 = mysqli_real_escape_string($db_conn, $_POST['ques11_1']);
		$skill11_2 = mysqli_real_escape_string($db_conn, $_POST['ques11_2']);
		$skill11_3 = mysqli_real_escape_string($db_conn, $_POST['ques11_3']);
		$skill11_4 = mysqli_real_escape_string($db_conn, $_POST['ques11_4']);
		$skill11_5 = mysqli_real_escape_string($db_conn, $_POST['ques11_5']);
		$skill11_6 = mysqli_real_escape_string($db_conn, $_POST['ques11_6']);
		$skill11_7 = mysqli_real_escape_string($db_conn, $_POST['ques11_7']);
		$skill11_8 = mysqli_real_escape_string($db_conn, $_POST['ques11_8']);
		$skill11_9 = mysqli_real_escape_string($db_conn, $_POST['ques11_9']);
		$skill11_10 = mysqli_real_escape_string($db_conn, $_POST['ques11_10']);
		$skill11_11 = mysqli_real_escape_string($db_conn, $_POST['ques11_11']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_1')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_2')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_3')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_4')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_5')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_6')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_7')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_8')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_9')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_10')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill11_11')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 12
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['twelve']);
		$skill12_1 = mysqli_real_escape_string($db_conn, $_POST['ques12_1']);
		$skill12_2 = mysqli_real_escape_string($db_conn, $_POST['ques12_2']);
		$skill12_3 = mysqli_real_escape_string($db_conn, $_POST['ques12_3']);
		$skill12_4 = mysqli_real_escape_string($db_conn, $_POST['ques12_4']);
		$skill12_5 = mysqli_real_escape_string($db_conn, $_POST['ques12_5']);
		$skill12_6 = mysqli_real_escape_string($db_conn, $_POST['ques12_6']);
		$skill12_7 = mysqli_real_escape_string($db_conn, $_POST['ques12_7']);
		$skill12_8 = mysqli_real_escape_string($db_conn, $_POST['ques12_8']);
		$skill12_9 = mysqli_real_escape_string($db_conn, $_POST['ques12_9']);
		$skill12_10 = mysqli_real_escape_string($db_conn, $_POST['ques12_10']);
		$skill12_11 = mysqli_real_escape_string($db_conn, $_POST['ques12_11']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_1')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_2')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_3')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_4')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_5')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_6')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_7')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_8')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_9')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_10')";
	    mysqli_query($db_conn, $sql);
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$skill12_11')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 13
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['thirteen']);
		$check13 = $_POST['ques13'];
		$check13_other = mysqli_real_escape_string($db_conn, 'ques13_otxt');
		
		foreach ($check13 as $chk) {
			if ($chk == 'other') {
				$thirteen = implode('; ', $check13).'_'.$check13_other;
			}
			else {
				$thirteen = implode('; ', $check13);
			}
		}

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$thirteen')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 14
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['fourteen']);
		$fourteen = mysqli_real_escape_string($db_conn, $_POST['ques14']);

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$fourteen')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 15
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['fifteen']);
		$fifteen = mysqli_real_escape_string($db_conn, $_POST['ques15']);
		$fifteen_txt = mysqli_real_escape_string($db_conn, $_POST['ques15_ytxt']);

		// if other is selected
		if ($fifteen == 'Yes') {
			$fifteen_field = mysqli_real_escape_string($db_conn, $fifteen_txt);
		} else {
			$fifteen_field = $fifteen;
		}

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$fifteen_field')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 16
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['sixteen']);
		$sixteen = mysqli_real_escape_string($db_conn, $_POST['ques16']);
		$sixteen_txt = mysqli_real_escape_string($db_conn, $_POST['ques16_ytxt']);
		
		// if other is selected
		if ($sixteen == 'Yes') {
			$sixteen_field = mysqli_real_escape_string($db_conn, $sixteen_txt);
		} else {
			$sixteen_field = $sixteen;
		}

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$sixteen_field')";
	    mysqli_query($db_conn, $sql);



		// QUESTION NUMBER 17
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seventeen']);
		$seventeen = mysqli_real_escape_string($db_conn, $_POST['ques17']);
		$seventeen_txt = mysqli_real_escape_string($db_conn, $_POST['ques17_ytxt']);

		// if other is selected
		if ($seventeen == 'Yes') {
			$seventeen_field = mysqli_real_escape_string($db_conn, $seventeen_txt);
		} else {
			$seventeen_field = $seventeen;
		}

		// store to db
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$seventeen_field')";
	    mysqli_query($db_conn, $sql);


		if ($_SESSION['role'] == $EMPLOYER_ROLE_ID) {
			header('location: emp_survey.php');
			echo '<script> alert("Thank you for completing the survey!"); </script>';
		}
		elseif ($_SESSION['role'] == $ALUM_EMP_ROLE_ID) {
			header('location: alum_emp.php');
		}
	    

	} // end of if no errors

}// end of submit-emp


// if user clicks logout button
if (isset($_GET['logout'])) {
	session_destroy(); 
	unset($_SESSION['id']);
	unset($_SESSION['email']);
	session_unset();
	header('location: login.php');
	exit();
} // end of logout btn

?>

<!-- EMAIL: jane@gmail.com PASSWORD: 12345 (ALUMNI)
	 EMAIL: john@gmail.com PASSWORD: 12345 (EMPLOYER)
	 EMAIL: juan@gmail.com PASSWORD: 12345 (ALUMNI and EMPLOYER)
	 EMAIL: admin@gmail.com PASSWORD: 12345 (ADMIN)
 -->

<!-- for registering -->
<!-- if (isset($_POST['login-btn'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

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

	if (empty($password)) {
		$errors['password'] = "Password is required";
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
	}

} -->

<!-- for retaining answers of users no need to enter answers again
if (isset($_POST['ques1']) && $_POST['ques1'] == "public") {
	echo 'checked="checked"';
} -->