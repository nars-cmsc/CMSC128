<?php
session_start();

// connect to db
require ('config/connection.php');

######## QUESTION #1 ##########

	// counters/containers for public and private
	$ct_pub = 0;
	$ct_priv = 0;

	// get data from table (public)
	$query = "SELECT user_id FROM emp_survey_q1 WHERE answer_body='Public'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_pub++;
	}

	// get data from table (private)
	$query = "SELECT user_id FROM emp_survey_q1 WHERE answer_body='Private'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_priv++;
	}

######## QUESTION #2 ##########

	// counters/containers for ph or abroad (region/subregion)
	$ct_ph = 0;
	$ct_ab = 0;
		$ct_reg_afr = 0;
			$ct_reg_afr_na = 0;
			$ct_reg_afr_ea = 0;
			$ct_reg_afr_ma = 0;
			$ct_reg_afr_sa = 0;
			$ct_reg_afr_wa = 0;
		$ct_reg_am = 0;
			$ct_reg_am_na = 0;
			$ct_reg_am_ca = 0;
			$ct_reg_am_sa = 0;
		$ct_reg_ant = 0;
		$ct_reg_asia = 0;
			$ct_reg_asia_ca = 0;
			$ct_reg_asia_ea = 0;
			$ct_reg_asia_sa = 0;
			$ct_reg_asia_sea = 0;
			$ct_reg_asia_wa = 0;
		$ct_reg_eu = 0;
			$ct_reg_eu_ee = 0;
			$ct_reg_eu_ne = 0;
			$ct_reg_eu_se = 0;
			$ct_reg_eu_we = 0;
		$ct_reg_oc = 0;
			$ct_reg_oc_aus = 0;
			$ct_reg_oc_mel = 0;

	// get data from table (philippines)
	$query = "SELECT user_id FROM emp_survey_q2 WHERE answer_body='Philippines'";
	// execute query
	$result = mysqli_query($db_conn, $query);

	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ph++;
	}

	// get data from table (abroad)
	$query = "SELECT user_id FROM emp_survey_q2 WHERE answer_body='Abroad'";
	// execute query
	$result = mysqli_query($db_conn, $query);

	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ab++;
	}

		// get data from table (region-africa)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Africa'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_afr++;
		}
			// get data from table (region-africa-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Northern Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_na++;
			}

			// get data from table (region-africa-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Eastern Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_ea++;
			}

			// get data from table (region-africa-sub-mid)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Middle Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_ma++;
			}

			// get data from table (region-africa-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Southern Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_sa++;
			}

			// get data from table (region-africa-sub-west)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Western Africa'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_afr_wa++;
			}

		// get data from table (region-america)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='America'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_am++;
		}
			// get data from table (region-america-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='North America'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_am_na++;
			}

			// get data from table (region-america-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='South America'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_am_sa++;
			}

			// get data from table (region-america-sub-west)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Central America'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_am_ca++;
			}

		// get data from table (region-antarctica)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Antarctica'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_ant++;
		}

		// get data from table (region-asia)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Asia'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_asia++;
		}
			// get data from table (region-asia-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Central Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_ca++;
			}

			// get data from table (region-asia-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Eastern Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_ea++;
			}

			// get data from table (region-asia-sub-mid)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='South Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_sa++;
			}

			// get data from table (region-asia-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Southeast Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_sea++;
			}

			// get data from table (region-asia-sub-west)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='West Asia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_asia_wa++;
			}


		// get data from table (region-europe)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Europe'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_eu++;
		}
			// get data from table (region-europe-sub-central)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Eastern Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_ee++;
			}

			// get data from table (region-europe-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Northern Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_ne++;
			}

			// get data from table (region-europe-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Southern Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_se++;
			}

			// get data from table (region-europe-sub-south)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Western Europe'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_eu_we++;
			}

		// get data from table (region-oceania)
		$query = "SELECT user_id FROM emp_survey_q2_1 WHERE region='Oceania'";
		// execute query
		$result = mysqli_query($db_conn, $query);

		// loop through returned data
		while ($row = mysqli_fetch_array($result)) {
			$ct_reg_oc++;
		}
			// get data from table (region-oceania-sub-north)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Australia and New Zealand'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_oc_aus++;
			}

			// get data from table (region-oceania-sub-east)
			$query = "SELECT user_id FROM emp_survey_q2_1 WHERE subregion='Melanesia, Micronesia, Polynesia'";
			// execute query
			$result = mysqli_query($db_conn, $query);
			// loop through returned data
			while ($row = mysqli_fetch_array($result)) {
				$ct_reg_oc_mel++;
			}

######## QUESTION #3 ##########

	// counters/containers for industries
	$ct_ind1 = 0;
	$ct_ind2 = 0;
	$ct_ind3 = 0;
	$ct_ind4 = 0;
	$ct_ind5 = 0;
	$ct_ind6 = 0;
	$ct_ind7 = 0;
	$ct_ind8 = 0;
	$ct_ind9 = 0;
	$ct_ind10 = 0;
	$ct_ind11 = 0;
	$ct_ind12 = 0;
	$ct_ind13 = 0;
	$ct_ind14 = 0;
	$ct_ind15 = 0;
	$ct_ind16 = 0;
	$ct_ind17 = 0;
	$ct_ind18 = 0;
	$ct_ind19 = 0;
	$ct_ind20 = 0;
	$ct_ind21 = 0;
	$ct_ind22 = 0;
	$ct_ind_other = '';

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind1++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Activities of International Organizations and Bodies'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind2++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Administrative and Support Service Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind3++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Agriculture, Forestry and Fishing'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind4++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Arts, Entertainment and Recreation'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind5++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Construction'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind6++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Education'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind7++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Electricity, Gas, Steam and Air Conditioning Supply'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind8++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Finance, Banks, and Insurance'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind9++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Hotel/Accommodation, and Restaurant and Food Service'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind10++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Human Health and Social Work Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind11++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Information Technology'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind12++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Manufacturing'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind13++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Media and Communication'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind14++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Mining and Quarrying'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind15++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Other Service Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind16++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Professional, Scientific and Technical Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind17++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Public Administration and Defense; Compulsory Social Security'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind18++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Real Estate Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind19++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Transportation and Storage'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind20++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Water Supply; Sewerage, Waste Management and Remediation Activities'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind21++;
	}

	// get data from table (industries)
	$query = "SELECT user_id FROM emp_survey_q3 WHERE answer_body='Wholesale and Retail Trade'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_ind22++;
	}

######## QUESTION #4 ##########

	// counters/containers for job level
	$ct_chief = 0;
	$ct_sup = 0;
	$ct_rank = 0;

	// get data from table (chief level)
	$query = "SELECT user_id FROM emp_survey_q4 WHERE answer_body='Chief level – General Manager/President/CEO'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_chief++;
	}

	// get data from table (supervisor level)
	$query = "SELECT user_id FROM emp_survey_q4 WHERE answer_body='Supervisory – Director/Managing Director/Supervisor'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sup++;
	}

	// get data from table (rank and file level)
	$query = "SELECT user_id FROM emp_survey_q4 WHERE answer_body='Rank and file'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_rank++;
	}

######## QUESTION #5 ##########

	// counters/containers for number of UP hires
	$ct_up_hire = 0;

	// get data from table
	$query = "SELECT * FROM emp_survey_q5";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_up_hire = $ct_up_hire + $row['answer_body'];
	}

######## QUESTION #6 ##########

	// counters/containers for agree/disagree
	$ct_sd = 0;
	$ct_d = 0;
	$ct_sa = 0;
	$ct_a = 0;

	// get data from table (strong disagree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Strongly Disagree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sd++;
	}

	// get data from table (disagree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Disagree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_d++;
	}

	// get data from table (agree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Agree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_a++;
	}

	// get data from table (strongly agree)
	$query = "SELECT user_id FROM emp_survey_q6 WHERE answer_body='Strongly Agree'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_sa++;
	}





######## QUESTION #9 ##########

	// counters/containers for likely/unlikely
	$ct_9vu = 0;
	$ct_9u = 0;
	$ct_9l = 0;
	$ct_9vl = 0;

	// get data from table (very unlikely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Very Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9vu++;
	}

	// get data from table (unlikely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9u++;
	}

	// get data from table (likely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9l++;
	}

	// get data from table (very likely)
	$query = "SELECT user_id FROM emp_survey_q9 WHERE answer_body='Very Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_9vl++;
	}

######## QUESTION #10 ##########

	// counters/containers for likely/unlikely
	$ct_10vu = 0;
	$ct_10u = 0;
	$ct_10l = 0;
	$ct_10vl = 0;

	// get data from table (very unlikely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Very Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10vu++;
	}

	// get data from table (unlikely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Unlikely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10u++;
	}

	// get data from table (likely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10l++;
	}

	// get data from table (very likely)
	$query = "SELECT user_id FROM emp_survey_q10 WHERE answer_body='Very Likely'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_10vl++;
	}






######## QUESTION #14 ##########

	// counters/containers for importance
	$ct_un = 0;
	$ct_of = 0;
	$ct_mod = 0;
	$ct_im = 0;

	// get data from table (very unlikely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Unimportant'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_un++;
	}

	// get data from table (unlikely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Of Little Importance'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_of++;
	}

	// get data from table (likely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Moderately part Important'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_mod++;
	}

	// get data from table (very likely)
	$query = "SELECT user_id FROM emp_survey_q14 WHERE answer_body='Important'";
	// execute query
	$result = mysqli_query($db_conn, $query);
	// loop through returned data
	while ($row = mysqli_fetch_array($result)) {
		$ct_im++;
	}



?>