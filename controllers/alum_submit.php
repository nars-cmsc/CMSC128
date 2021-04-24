<<?php

session_start();

require ('config/connection.php');

$errors = array();
$error;

if(isset($_POST["submit-alum"]))
{
	?>
	<script type="text/javascript">
	window.location="contactemp_ques.php";
	</script>

<?php
}

// ALUMNI SURVEY

// use $_POST['<name>'] to get info from survey form
// if user clicks submit button in alum_survey
if (isset($_POST['submit-alum']) && $_POST['submitted'] == '1') {
	$id = mysqli_real_escape_string($db_conn, $_POST['user_id']);

	$user_check_query = "SELECT * FROM alum_survey WHERE user_id='$id' LIMIT 1";
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
	
	if (isset($_POST['ques1'])) {
		$one = $_POST['ques1'];
	}
	if (isset($_POST['ques2'])) {
		$two = $_POST['ques2'];
	}
	if (isset($_POST['ques3'])) {
		$three = $_POST['ques3'];
	}
	if (isset($_POST['ques4'])) {
		$four = $_POST['ques4'];
	}
	if (isset($_POST['ques5'])) {
		$five = $_POST['ques5'];
	}
	if (isset($_POST['ques5_1'])) {
		$five_a = $_POST['ques5_1'];
	}
	if (isset($_POST['ques5_2'])) {
		$five_b = $_POST['ques5_2'];
	}
	if (isset($_POST['ques5_3'])) {
		$five_c = $_POST['ques5_3'];
	}
	if (isset($_POST['ques6'])) {
		$six = $_POST['ques6'];
	}
	if (isset($_POST['ques7'])) {
		$seven = $_POST['ques7'];
	}
	if (isset($_POST['ques8'])) {
		$eight = $_POST['ques8'];
	}
	if (isset($_POST['ques9'])) {
		$nine = $_POST['ques9'];
	}
	//if (isset($_POST['ques10'])) {
	//	$ten = $_POST['ques10'];
	//}
	if (isset($_POST['ques11'])) {
		$eleven = $_POST['ques11'];
	}
	if (isset($_POST['ques11_1'])) {
		$eleven_a = $_POST['ques11_1'];
	}
	if (isset($_POST['ques12'])) {
		$twelve = $_POST['ques12'];
	}
	if (isset($_POST['ques12_1'])) {
		$twelve_a = $_POST['ques12_1'];
	}
	if (isset($_POST['ques13'])) {
		$thirteen = $_POST['ques13'];
	}
	if (isset($_POST['ques14'])) {
		$fourteen = $_POST['ques14'];
	}
	if (isset($_POST['ques15'])) {
		$fifteen = $_POST['ques15'];
	}
	if (isset($_POST['ques16'])) {
		$sixteen = $_POST['ques16'];
	}
	if (isset($_POST['ques17'])) {
		$seventeen = $_POST['ques17'];
	}
	if (isset($_POST['ques18_1'])) {
		$eighteen_a = $_POST['ques18_1'];
	}
	if (isset($_POST['ques18_2'])) {
		$eighteen_b = $_POST['ques18_2'];
	}
	if (isset($_POST['ques18_3'])) {
		$eighteen_c = $_POST['ques18_3'];
	}
	if (isset($_POST['ques18_4'])) {
		$eighteen_d = $_POST['ques18_4'];
	}
	if (isset($_POST['ques18_5'])) {
		$eighteen_e = $_POST['ques18_5'];
	}
	if (isset($_POST['ques18_6'])) {
		$eighteen_f = $_POST['ques18_6'];
	}
	if (isset($_POST['ques18_7'])) {
		$eighteen_g = $_POST['ques18_7'];
	}
	if (isset($_POST['ques18_8'])) {
		$eighteen_h = $_POST['ques18_8'];
	}
	if (isset($_POST['ques18_9'])) {
		$eighteen_i = $_POST['ques18_9'];
	}
	if (isset($_POST['ques18_10'])) {
		$eighteen_j = $_POST['ques18_10'];
	}
	if (isset($_POST['ques18_11'])) {
		$eighteen_k = $_POST['ques18_11'];
	}
	if (isset($_POST['ques19'])) {
		$nineteen = $_POST['ques19'];
	}
	
	
	// VALIDATION / ERROR HANDLING

	// ERROR: required fields are empty or only white spaces
	
		if (empty($one) && $user_exist == false) {
		$errors['es_q1'] = "Need to answer #1. Field cannot be empty.";
		$error = true;
	}
		if (empty($two) && $user_exist == false) {
		$errors['es_q2'] = "Need to answer #2. Field cannot be empty.";
		$error = true;
	}	
		if (empty($three) && $user_exist == false) {
		$errors['es_q3'] = "Need to answer #3. Field cannot be empty.";
		$error = true;
	}
		if (empty($four) && $user_exist == false) {
		$errors['es_q4'] = "Need to answer #4. Field cannot be empty.";
		$error = true;
	}
		if (empty($five) && $user_exist == false) {
		$errors['es_q5'] = "Need to answer #5. Field cannot be empty.";
		$error = true;
	}
			if (empty($five_a) && $user_exist == false) {
			$errors['es_q5.1'] = "Need to answer #5.1. Field cannot be empty.";
			$error = true;
		}
		if (empty($five_b) && $user_exist == false) {
			$errors['es_q5.2'] = "Need to answer #5.2. Field cannot be empty.";
			$error = true;
		}
		if (empty($five_c) && $user_exist == false) {
			$errors['es_q5.3'] = "Need to answer #5.3. Field cannot be empty.";
			$error = true;
		}
		if (empty($six) && $user_exist == false) {
		$errors['es_q6'] = "Need to answer #6. Field cannot be empty.";
		$error = true;
	}
		if (empty($seven) && $user_exist == false) {
		$errors['es_q7'] = "Need to answer #7. Field cannot be empty.";
		$error = true;
	}
		if (empty($eight) && $user_exist == false) {
		$errors['es_q8'] = "Need to answer #8. Field cannot be empty.";
		$error = true;
	}
		if (empty($nine) && $user_exist == false) {
		$errors['es_q9'] = "Need to answer #9. Field cannot be empty.";
		$error = true;
	}
	//	if (empty($ten) && $user_exist == false) {
	//	$errors['es_q10'] = "Need to answer #10. Field cannot be empty.";
	//	$error = true;
	//}
		if (empty($eleven) && $user_exist == false) {
		$errors['es_q11'] = "Need to answer #11. Field cannot be empty.";
		$error = true;
	}
		if (empty($eleven_a) && $user_exist == false) {
		$errors['es_q11.1'] = "Need to answer #11.1. Field cannot be empty.";
		$error = true;
	}
		if (empty($twelve) && $user_exist == false) {
		$errors['es_q12'] = "Need to answer #12. Field cannot be empty.";
		$error = true;
	}
		if (empty($twelve_a) && $user_exist == false) {
		$errors['es_q12.1'] = "Need to answer #12.1. Field cannot be empty.";
		$error = true;
	}
		if (empty($thirteen) && $user_exist == false) {
		$errors['es_q13'] = "Need to answer #13. Field cannot be empty.";
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
		if (empty($sixteen) && $user_exist == false) {
		$errors['es_q16'] = "Need to answer #16. Field cannot be empty.";
		$error = true;
	}
		if (empty($seventeen) && $user_exist == false) {
		$errors['es_q17'] = "Need to answer #17. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_a) && $user_exist == false) {
		$errors['es_q18.1'] = "Need to answer #18.1. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_b) && $user_exist == false) {
		$errors['es_q18.2'] = "Need to answer #18.2. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_c) && $user_exist == false) {
		$errors['es_q18.3'] = "Need to answer #18.3. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_d) && $user_exist == false) {
		$errors['es_q18.4'] = "Need to answer #18.4. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_e) && $user_exist == false) {
		$errors['es_q18.5'] = "Need to answer #18.5. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_f) && $user_exist == false) {
		$errors['es_q18.6'] = "Need to answer #18.6. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_g) && $user_exist == false) {
		$errors['es_q18.7'] = "Need to answer #18.7. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_h) && $user_exist == false) {
		$errors['es_q18.8'] = "Need to answer #18.8. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_i) && $user_exist == false) {
		$errors['es_q18.9'] = "Need to answer #18.9. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_j) && $user_exist == false) {
		$errors['es_q18.10'] = "Need to answer #18.10. Field cannot be empty.";
		$error = true;
	}
		if (empty($eighteen_k) && $user_exist == false) {
		$errors['es_q18.11'] = "Need to answer #18.11. Field cannot be empty.";
		$error = true;
	}
		if (empty($nineteen) && $user_exist == false) {
		$errors['es_q19'] = "Need to answer #19. Field cannot be empty.";
		$error = true;
	}
	
		
	
	// if there are no errors store answers to db
	if ($error == false) {
		// QUESTION NUMBER 1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['one']);
		$one = mysqli_real_escape_string($db_conn, $_POST['ques1']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$one')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 2
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['two']);
		$two = mysqli_real_escape_string($db_conn, $_POST['ques2']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$two')";
	    mysqli_query($db_conn, $sql);
	
		// QUESTION NUMBER 3
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['three']);
		$three = mysqli_real_escape_string($db_conn, $_POST['ques3']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$three')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 4
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['four']);
		$four = mysqli_real_escape_string($db_conn, $_POST['ques4']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$four')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 5
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['five']);
		$five = mysqli_real_escape_string($db_conn, $_POST['ques5']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$five')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 5.a
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['five_a']);
		$five_a = mysqli_real_escape_string($db_conn, $_POST['ques5_1']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$five_a')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 5.b
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['five_b']);
		$five_b = mysqli_real_escape_string($db_conn, $_POST['ques5_2']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$five_b')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 5.c
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['five_c']);
		$five_c = mysqli_real_escape_string($db_conn, $_POST['ques5_3']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$five_c')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 6
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['six']);
		$six = mysqli_real_escape_string($db_conn, $_POST['ques6']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$six')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 7
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seven']);
		$seven = mysqli_real_escape_string($db_conn, $_POST['ques7']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$seven')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 8
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eight']);
		$eight = mysqli_real_escape_string($db_conn, $_POST['ques8']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eight')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 9
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['nine']);
		$nine = mysqli_real_escape_string($db_conn, $_POST['ques9']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$nine')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 10
		//$ques_num = mysqli_real_escape_string($db_conn, $_POST['ten']);
		//$ten = mysqli_real_escape_string($db_conn, $_POST['ques10']);

		// store to db
	    //$sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$ten')";
	    //mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 11
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eleven']);
		$eleven = mysqli_real_escape_string($db_conn, $_POST['ques11']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eleven')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 11.1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eleven_a']);
		$eleven_a = mysqli_real_escape_string($db_conn, $_POST['ques11_1']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eleven_a')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 12
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['twelve']);
		$twelve = mysqli_real_escape_string($db_conn, $_POST['ques12']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$twelve')";
	    mysqli_query($db_conn, $sql);
	
		// QUESTION NUMBER 12.1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['twelve_a']);
		$twelve_a = mysqli_real_escape_string($db_conn, $_POST['ques12_1']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$twelve_a')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 13
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['thirteen']);
		$thirteen = mysqli_real_escape_string($db_conn, $_POST['ques13']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$thirteen')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 14
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['fourteen']);
		$fourteen = mysqli_real_escape_string($db_conn, $_POST['ques14']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$fourteen')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 15
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['fifteen']);
		$fifteen = mysqli_real_escape_string($db_conn, $_POST['ques15']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$fifteen')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 16
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['sixteen']);
		$sixteen = mysqli_real_escape_string($db_conn, $_POST['ques16']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$sixteen')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 17
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['seventeen']);
		$seventeen = mysqli_real_escape_string($db_conn, $_POST['ques17']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$seventeen')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18.1
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_a']);
		$eighteen_a = mysqli_real_escape_string($db_conn, $_POST['ques18_1']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_a')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18.2
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_b']);
		$eighteen_b = mysqli_real_escape_string($db_conn, $_POST['ques18_2']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_b')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_c']);
		$eighteen_c = mysqli_real_escape_string($db_conn, $_POST['ques18.3']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_c')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_d']);
		$eighteen_d = mysqli_real_escape_string($db_conn, $_POST['ques18_4']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_d')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_e']);
		$eighteen_e = mysqli_real_escape_string($db_conn, $_POST['ques18_5']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_e')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_f']);
		$eighteen_f = mysqli_real_escape_string($db_conn, $_POST['ques18_6']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_f')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_g']);
		$eighteen_g = mysqli_real_escape_string($db_conn, $_POST['ques18_7']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_g')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_h']);
		$eighteen_h = mysqli_real_escape_string($db_conn, $_POST['ques18_8']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_h')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_i']);
		$eighteen_i = mysqli_real_escape_string($db_conn, $_POST['ques18_9']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_i')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_j']);
		$eighteen_j = mysqli_real_escape_string($db_conn, $_POST['ques18_10']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_j')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 18
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['eighteen_k']);
		$eighteen_k = mysqli_real_escape_string($db_conn, $_POST['ques18_11']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$eighteen_k')";
	    mysqli_query($db_conn, $sql);
		
		// QUESTION NUMBER 19
		$ques_num = mysqli_real_escape_string($db_conn, $_POST['nineteen']);
		$nineteen = mysqli_real_escape_string($db_conn, $_POST['ques19']);

		// store to db
	    $sql = "INSERT INTO alum_survey (question_num, user_id, answer_body) VALUES ('$ques_num', '$id', '$nineteen')";
	    mysqli_query($db_conn, $sql);
		
	}
}//end of submit-alum

?>