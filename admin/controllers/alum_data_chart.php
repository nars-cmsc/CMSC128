<?php
session_start();

// connect to db
require ('config/connection.php');

###################### QUESTION # 1 ######################
	
	$ct_fmale = 0;
	$ct_male = 0;
	
	// get data from table (female)
	$query = "SELECT user_id FROM alum_survey_q1 WHERE answer_body='Female'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_fmale++;
	}

	// get data from table (male)
	$query = "SELECT user_id FROM alum_survey_q1 WHERE answer_body='Male'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_male++;
	}

###################### QUESTION # 2 ######################

	$string2 = '';
	$country = '';

	// get data from table
	$query = "SELECT answer_body FROM alum_survey_q2";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$string2 = $string2 . ', ' . $row['answer_body'];
		$country = ltrim($string2, ', ');
	}

###################### QUESTION # 3 ######################

	$ct_vd3 = 0;
	$ct_gd3 = 0;
	$ct_gs3 = 0;
	$ct_vs3 = 0;

	// get data from table (very dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Very Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vd3++;
	}

	// get data from table (generally dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Generally Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gd3++;
	}

	// get data from table (generally satisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Generally Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gs3++;
	}

	// get data from table (very satisfied)
	$query = "SELECT user_id FROM alum_survey_q3 WHERE answer_body='Very Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vs3++;
	}

###################### QUESTION # 4 ######################

	$ct_coll = 0;
	$ct_2mos = 0;
	$ct_6mos = 0;
	$ct_7mos = 0;
	$ct_1yr = 0;
	$ct_2yrs = 0;
	$ct_nots = 0;

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='I got a job while still in college'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_coll++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='2 months or less'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_2mos++;
	}

	// get data from table (option3)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='3 to 6 months'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_6mos++;
	}

	// get data from table (option4)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='7 months to 1 year'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_7mos++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='1 to 2 years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_1yr++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='More than 2 years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_2yrs++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q4 WHERE answer_body='I am not sure'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_nots++;
	}

###################### QUESTION # 5 (skipped first) ######################

###################### QUESTION # 6 ######################

	$ct_hs6 = 0;
	$ct_coll6 = 0;
	$ct_ad6 = 0;
	$ct_bd6 = 0;
	$ct_md6 = 0;
	$ct_dd6 = 0;
	$ct_other6 = 0;
	$ct_other6txt = '';
	$string6 = '';

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='High school'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_hs6++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Some college'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_coll6++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Associate’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ad6++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Bachelor’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_bd6++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Master’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_md6++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Doctoral degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_dd6++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q6 WHERE Level='Other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other6++;
	}

###################### QUESTION # 7 ######################

	$ct_hs7 = 0;
	$ct_coll7 = 0;
	$ct_ad7 = 0;
	$ct_bd7 = 0;
	$ct_md7 = 0;
	$ct_dd7 = 0;
	$ct_other7 = 0;
	$ct_other7txt = '';
	$string7 = '';

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='High school'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_hs7++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Some college'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_coll7++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Associate’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ad7++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Bachelor’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_bd7++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Master’s degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_md7++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Doctoral degree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_dd7++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q7 WHERE Level='Other'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_other7++;
	}

###################### QUESTION # 8 ######################

	$ques8_arr = array (
		"Armed Forces Occupations", "Clerical Support Workers", 
		"Craft and Related Trade Workers", "Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)", 
		"Managers", "Plant and Machine Operators, and Assemblers", "Professionals", "Service and Sales Workers",
		"Skilled Agricultural, Forestry and Fishery Workers", "Technicians and Associate Professionals"
	);

	$ct_occ1 = 0;
	$ct_occ2 = 0;
	$ct_occ3 = 0;
	$ct_occ4 = 0;
	$ct_occ5 = 0;
	$ct_occ6 = 0;
	$ct_occ7 = 0;
	$ct_occ8 = 0;
	$ct_occ9 = 0;
	$ct_occ10 = 0;

	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Armed Forces Occupations'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ1++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Clerical Support Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ2++;
	}

	// get data from table (option5)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Craft and Related Trade Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ3++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ4++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Managers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ5++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Plant and Machine Operators, and Assemblers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ6++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Professionals'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ7++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Service and Sales Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ8++;
	}

	// get data from table (option6)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Skilled Agricultural, Forestry and Fishery Workers'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ9++;
	}

	// get data from table (option7)
	$query = "SELECT user_id FROM alum_survey_q8 WHERE answer_body='Technicians and Associate Professionals'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_occ10++;
	}

###################### QUESTION # 9 ######################
	
	$ct_sf = 0;
	$ct_rf = 0;
	$ct_nr = 0;
	
	// get data from table (option1)
	$query = "SELECT user_id FROM alum_survey_q9 WHERE answer_body='Yes, it is the same field as my major/s'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sf++;
	}

	// get data from table (option2)
	$query = "SELECT user_id FROM alum_survey_q9 WHERE answer_body='Yes, it is related to my major/s'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_rf++;
	}

	// get data from table (option3)
	$query = "SELECT user_id FROM alum_survey_q9 WHERE answer_body='No, it is not related'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_nr++;
	}

###################### QUESTION # 10 (skipped first) ######################

###################### QUESTION # 11 ######################
	
	$ct_yes11 = 0; $ct_yes11_full = 0; $ct_yes11_part = 0;
	$ct_no11 = 0;
	
	// get data from table (Yes)
	$query = "SELECT user_id FROM alum_survey_q11 WHERE Volunteer='Yes'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_yes11++;
	}
		// get data from table (parttime)
		$query = "SELECT user_id FROM alum_survey_q11 WHERE Characterized='Part time'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes11_part++;
		}
		// get data from table (full)
		$query = "SELECT user_id FROM alum_survey_q11 WHERE Characterized='Full time (40 hours/week)'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_yes11_full++;
		}

	// get data from table (no)
	$query = "SELECT user_id FROM alum_survey_q11 WHERE Volunteer='No'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_no11++;
	}

###################### QUESTION # 12 ######################
	
	$ct_noex = 0; $ct_3to6 = 0; 
	$ct_less1 = 0; $ct_more6 = 0;
	$ct_1to3 = 0;
	
	// get data from table (No experience)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='No experience'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_noex++;
	}

	// get data from table (Less than one (1) year)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='Less than one (1) year'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_less1++;
	}

	// get data from table (One (1) to three (3) years)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='One (1) to three (3) years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_1to3++;
	}

	// get data from table (Three (3) to six (6) years)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='Three (3) to six (6) years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_3to6++;
	}

	// get data from table (More than six (6+) years)
	$query = "SELECT user_id FROM alum_survey_q12 WHERE Experience='More than six (6+) years'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_more6++;
	}

###################### QUESTION # 13 ######################

	$ct_vp13 = 0;
	$ct_la13 = 0;
	$ct_ma13 = 0;
	$ct_vw13 = 0;

	// get data from table (very poorly)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='Very Poorly'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vp13++;
	}

	// get data from table (Less than adequately)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='Less than adequately'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_la13++;
	}

	// get data from table (More than adequately)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='More than adequately'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ma13++;
	}

	// get data from table (very well)
	$query = "SELECT user_id FROM alum_survey_q13 WHERE answer_body='Very well'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vw13++;
	}

###################### QUESTION # 14 ######################

	$ct_entry14 = 0;
	$ct_sup14 = 0;
	$ct_exec14 = 0;
	$ct_chief14 = 0;

	// get data from table (Entry-level)
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Entry-level'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_entry14++;
	}

	// get data from table (Supervisory)
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Supervisory'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sup14++;
	}

	// get data from table (Executive level (except Chief Executive))
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Executive level (except Chief Executive)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_exec14++;
	}

	// get data from table (Chief Executive)
	$query = "SELECT user_id FROM alum_survey_q14 WHERE answer_body='Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_chief14++;
	}

###################### QUESTION # 15 ######################

	$ct_non15 = 0;
	$ct_som15 = 0;
	$ct_half15 = 0;
	$ct_most15 = 0;

	// get data from table (None at all)
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='None at all'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_non15++;
	}

	// get data from table (Some of my time (up to 25% of my time))
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='Some of my time (up to 25% of my time)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_som15++;
	}

	// get data from table (Half my time (50%))
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='Half my time (50%)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_half15++;
	}

	// get data from table (Most of my time (75% of my time))
	$query = "SELECT user_id FROM alum_survey_q15 WHERE answer_body='Most of my time (75% of my time)'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_most15++;
	}

###################### QUESTION # 16 ######################

	$ct_non16 = 0;
	$ct_lim16 = 0;
	$ct_dir16 = 0;
	$ct_unit16 = 0;

	// get data from table (No supervisory or lead responsibilities.)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='No supervisory or lead responsibilities.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_non16++;
	}

	// get data from table (limited)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_lim16++;
	}

	// get data from table (direct)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='Direct supervision of one or more people.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_dir16++;
	}

	// get data from table (direct2)
	$query = "SELECT user_id FROM alum_survey_q16 WHERE answer_body='Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_unit16++;
	}

###################### QUESTION # 17 ######################

	$ct_vd17 = 0;
	$ct_gd17 = 0;
	$ct_gs17 = 0;
	$ct_vs17 = 0;

	// get data from table (very dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Very Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vd17++;
	}

	// get data from table (generally dissatisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Generally Dissatisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gd17++;
	}

	// get data from table (generally satisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Generally Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_gs17++;
	}

	// get data from table (very satisfied)
	$query = "SELECT user_id FROM alum_survey_q17 WHERE answer_body='Very Satisfied'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_vs17++;
	}

###################### QUESTION # 18 ######################

	$ques18_arr = array(
		"Possess the skills and mindset to improve human life", 
		"Commit to the freedom and welfare of all",
		"Demonstrate mastery of knowledge in your specific discipline",
		"Possess breadth of mind",
		"Possess strength of character",
		"Possess generosity of spirit",
		"Inclusively engage with society and the world at large",
		"Be mindful of the needs and capabilities of people",
		"Be sensitive to the challenges and opportunities of national development and global change",
		"Think critically",
		"Demonstrate discernment"
	);

	// counters/containers for preparation
		$ct_dmcs1_vp = 0; $ct_dmcs1_la = 0; $ct_dmcs1_ma = 0; $ct_dmcs1_vw = 0;
		$ct_dmcs2_vp = 0; $ct_dmcs2_la = 0; $ct_dmcs2_ma = 0; $ct_dmcs2_vw = 0;
		$ct_dmcs3_vp = 0; $ct_dmcs3_la = 0; $ct_dmcs3_ma = 0; $ct_dmcs3_vw = 0;
		$ct_dmcs4_vp = 0; $ct_dmcs4_la = 0; $ct_dmcs4_ma = 0; $ct_dmcs4_vw = 0;
		$ct_dmcs5_vp = 0; $ct_dmcs5_la = 0; $ct_dmcs5_ma = 0; $ct_dmcs5_vw = 0;
		$ct_dmcs6_vp = 0; $ct_dmcs6_la = 0; $ct_dmcs6_ma = 0; $ct_dmcs6_vw = 0;
		$ct_dmcs7_vp = 0; $ct_dmcs7_la = 0; $ct_dmcs7_ma = 0; $ct_dmcs7_vw = 0;
		$ct_dmcs8_vp = 0; $ct_dmcs8_la = 0; $ct_dmcs8_ma = 0; $ct_dmcs8_vw = 0;
		$ct_dmcs9_vp = 0; $ct_dmcs9_la = 0; $ct_dmcs9_ma = 0; $ct_dmcs9_vw = 0;
		$ct_dmcs10_vp = 0; $ct_dmcs10_la = 0; $ct_dmcs10_ma = 0; $ct_dmcs10_vw = 0;
		$ct_dmcs11_vp = 0; $ct_dmcs11_la = 0; $ct_dmcs11_ma = 0; $ct_dmcs11_vw = 0;

	// get data from table (DMCS 1)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess the skills and mindset to improve human life' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs1_vw++;
		}

	// get data from table (DMCS 2)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Commit to the freedom and welfare of all' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs2_vw++;
		}

	// get data from table (DMCS 3)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate mastery of knowledge in your specific discipline' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs3_vw++;
		}

	// get data from table (DMCS 4)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess breadth of mind' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs4_vw++;
		}

	// get data from table (DMCS 5)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess strength of character' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs5_vw++;
		}

	// get data from table (DMCS 6)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Possess generosity of spirit' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs6_vw++;
		}

	// get data from table (DMCS 7)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Inclusively engage with society and the world at large' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs7_vw++;
		}

	// get data from table (DMCS 8)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be mindful of the needs and capabilities of people' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs8_vw++;
		}

	// get data from table (DMCS 9)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Be sensitive to the challenges and opportunities of national development and global change' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs9_vw++;
		}

	// get data from table (DMCS 10)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Effective and efficient in accomplishing tasks' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Think critically' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Think critically' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Think critically' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs10_vw++;
		}

	// get data from table (DMCS 11)
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='Very Poorly'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vp++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='Less than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_la++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='More than adequately'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_ma++;
		}
		$query = "SELECT user_id FROM alum_survey_q18 WHERE ques18_arr='Demonstrate discernment' AND answer_body='Very well'";
		// execute query
		$result = mysqli_query($db_conn, $query);
		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_dmcs11_vw++;
		}

###################### QUESTION # 19 ######################

	// counters/containers for comments
	$ct_yes19 = '';
	$string19 = '';

	// get data from table
	$query = "SELECT answer_body FROM alum_survey_q19";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$string19 = $string19 . ', ' . $row['answer_body'];
		$ct_yes19 = ltrim($string19, ', ');
	}








?>