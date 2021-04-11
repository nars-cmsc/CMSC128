<?php

session_start();

require ('config/connection.php');

$errors = array();
$error;
$email = "";
$ques3_arr = array(
	"Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use",
	"Activities of International Organizations and Bodies",
	"Administrative and Support Service Activities",
	"Agriculture, Forestry and Fishing", "Arts, Entertainment and Recreation",
	"Construction", "Education", "Electricity, Gas, Steam and Air Conditioning Supply", "Finance, Banks, and Insurance", "Hotel/Accommodation, and Restaurant and Food Service", "Human Health and Social Work Activities", "Information Technology", "Manufacturing", "Media and Communication",
	"Mining and Quarrying", "Other Service Activities", "Professional, Scientific and Technical Activities", "Public Administration and Defense; Compulsory Social Security", "Real Estate Activities",
	"Transportation and Storage", "Water Supply; Sewerage, Waste Management and Remediation Activities", "Wholesale and Retail Trade"
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
	"Willing to share knowledge and expertise within the company and/or community", "Willing and has a positive attitude towards working with others", 
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


// use $_POST['<name>']
// if user clicks submit button in emp_survey
if (isset($_POST['submit-emp'])) {
	$id = mysqli_real_escape_string($db_conn, $_POST['user_id']);
	// $ques_num = $_POST['<name>'];
	// $answer = $_POST['<name>'];

	// $user_check_query = "SELECT * FROM emp_survey WHERE user_id='$id' LIMIT 1";
 //  	$result = mysqli_query($db_conn, $user_check_query);
 //  	$user = mysqli_fetch_assoc($result);

 // 	//if user already answered the survey
	// if($user){ 
	//     if ($user['user_id'] == $id) {
	// 	    $errors['user'] = "Feedback from user already exists";
	// 	    $error = true;
	// 	    // header('location: emp_survey.php');
	//     }
	// }else {
	// 	$error = false;
	// }

	// QUESTION NUMBER 1
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['one']);
	$one = mysqli_real_escape_string($db_conn, $_POST['ques1']);
	$one_other = mysqli_real_escape_string($db_conn, $_POST['ques1_otxt']);

	// if other is selected
	if ($one == 'other') {
		$one_field = mysqli_real_escape_string($db_conn, $one_other);
	} else {
		$one_field = $one;
	}

	// validation/ error handling
	// if ques 1 has no ans
	// if (empty($one) || empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }
	// // if text field is empty and other is chosen
	// if ($one == 'other' && empty($one_other)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$one_field')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}
	

	// QUESTION NUMBER 2
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['two']);
	$two = mysqli_real_escape_string($db_conn, $_POST['ques2']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$two')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}


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

		// validation/ error handling
		// if ques 2.1 has no ans
		// if (empty($region)) {
		// 	$errors['ans'] = "Answer required fields";
		// 	$error = true;
		// }

		// if ques 2.1 has no ans
		// if (empty($subregion)) {
		// 	$errors['ans'] = "Answer required fields";
		// 	$error = true;
		// }

		// if no error store to db
		if ($error == false) {
		    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$reg_sub')";
		    mysqli_query($db_conn, $sql);
		    header('location: emp_survey.php');
		}
	}

	// QUESTION NUMBER 3
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['three']);
	$ques3 = mysqli_real_escape_string($db_conn, $_POST['ques3']);
	$ques3_other = mysqli_real_escape_string($db_conn, $_POST['ques3_other']);

	if ($ques3 == 'other') {
		$industry = mysqli_real_escape_string($db_conn, $ques3_other);
	}
	else {
		$industry = mysqli_real_escape_string($db_conn, $ques3);
	}

	// validation/ error handling
	// if ques 2.1 has no ans
	// if (empty($region)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if ques 2.1 has no ans
	// if (empty($subregion)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$industry')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 4
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['four']);
	$four = mysqli_real_escape_string($db_conn, $_POST['ques4']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$four')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 5
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['five']);
	$five = mysqli_real_escape_string($db_conn, $_POST['ques5']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$five')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 6
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['six']);
	$six = mysqli_real_escape_string($db_conn, $_POST['ques6']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$six')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}
	
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

	// if no error store to db
	if ($error == false) {
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


	    header('location: emp_survey.php');
	}

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

	// if no error store to db
	if ($error == false) {
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


	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 9
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['nine']);
	$nine = mysqli_real_escape_string($db_conn, $_POST['ques9']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$nine')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 10
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['ten']);
	$ten = mysqli_real_escape_string($db_conn, $_POST['ques10']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$ten')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

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

	// if no error store to db
	if ($error == false) {
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
	   
	    header('location: emp_survey.php');
	}

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

	// if no error store to db
	if ($error == false) {
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
	   
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 13
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['thirteen']);
	$check13 = $_POST['ques13'];
	$check13_other = mysqli_real_escape_string($db_conn, $_POST['ques13_otxt']);
	
	foreach ($check13 as $chk) {
		if ($chk == 'other') {
			$thirteen = implode('; ', $check13).'_'.$check13_other;
		}
		else {
			$thirteen = implode('; ', $check13);
		}
	}

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$thirteen')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 14
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['fourteen']);
	$fourteen = mysqli_real_escape_string($db_conn, $_POST['ques14']);

	// validation/ error handling
	// if ques 2 has no ans
	// if (empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$fourteen')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

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

	// validation/ error handling
	// if ques 1 has no ans
	// if (empty($one) || empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }
	// // if text field is empty and other is chosen
	// if ($one == 'other' && empty($one_other)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$fifteen_field')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

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

	// validation/ error handling
	// if ques 1 has no ans
	// if (empty($one) || empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }
	// // if text field is empty and other is chosen
	// if ($one == 'other' && empty($one_other)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$sixteen_field')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

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

	// validation/ error handling
	// if ques 1 has no ans
	// if (empty($one) || empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }
	// // if text field is empty and other is chosen
	// if ($one == 'other' && empty($one_other)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$seventeen_field')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

	// QUESTION NUMBER 18
	$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen']);
	$eighteen = mysqli_real_escape_string($db_conn, $_POST['ques18']);
	$eighteen_txt = mysqli_real_escape_string($db_conn, $_POST['ques18_ytxt']);

	// if other is selected
	if ($eighteen == 'Yes') {
		$eighteen_field = mysqli_real_escape_string($db_conn, $eighteen_txt);
	} else {
		$eighteen_field = $eighteen;
	}

	// validation/ error handling
	// if ques 1 has no ans
	// if (empty($one) || empty($two)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }
	// // if text field is empty and other is chosen
	// if ($one == 'other' && empty($one_other)) {
	// 	$errors['ans'] = "Answer required fields";
	// 	$error = true;
	// }

	// if no error store to db
	if ($error == false) {
	    $sql = "INSERT INTO emp_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_field')";
	    mysqli_query($db_conn, $sql);
	    header('location: emp_survey.php');
	}

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