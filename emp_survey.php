
<!-- Employer Satisfaction Survey Web Page-->
<?php 
include_once ('controller.php');

if (!isset($_SESSION['email'])) {
	header('location:login.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="images/png" href="images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/survey_fcn.js"></script>
	<title>Employer Satisfaction Survey - UPB DMCS</title>
</head>
	<!-- for header/ navbar -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->

	<div class="content-emp">
		<div class="content-survey">
		<h1>Employer Satisfaction Survey</h1>
		<h2>Please make sure to fill in answers to all the questions.</h2>
		<!-- QUESTION # 1 -->
			<div class="entry">
				<h3 class="ques_title">1. Which sector of economy does your company/organization belong to?</h3>
			</div>
				<input class="options" type="radio" name="ques1" value="public" id="public">
					<label for="public" class="option">Public</label> 
				<input class="options" type="radio" name="ques1" value="private" id="private">
					<label for="private" class="option">Private</label> 
				<input class="options" type="radio" name="ques1" value="other" id="others"><label for="others" class="option">Others, please specify:</label>
					<input type="text" name="q1_other" id="q1_other" style="display:none;">
					
		<!-- QUESTION # 2 -->
			<div class="entry">
				<h3 class="ques_title">2. Where is your company/organization located?</h3>
			</div>
				<input class="options" type="radio" name="locale" value="philippines" id="phil"><label for="phil" class="option">Philippines</label>
				<input class="options" type="radio" name="locale" value="abroad" id="abroad"><label for="abroad" class="option">Abroad</label>
		<!-- QUESTION # 2.1 -->
			<div id="q2_1" style="display: none;">
				<div class="entry">
					<h3 class="ques_title">2.1. If you answered “Abroad”, please specify the region and sub-region based on the United Nations Geographic Regions:</h3>
				</div>
					<label for="region">Region: </label>
					<select name="region" id="region" onchange="make_subreg(this.value);">
						<option value="" selected disabled >
							Select a region
						</option>
						<option>Africa</option>
						<option>America</option>
						<option>Antarctica</option>
						<option>Asia</option>
						<option>Europe</option>
						<option>Oceania</option>
					</select>
					<label for="subregion">Sub region: </label>
					<select name="subregion" id="subregion">
						<option value="" selected disabled >
							Select a subregion
						</option>
					</select>
			</div>
			
		<!-- QUESTION # 3 -->
			<div class="entry">
				<h3 class="ques_title">3. Which industry and business does your company/organization belong to?</h3>
			</div>
				<select name="industry" id="industry" onchange="other_txt();">
					<option value="none" selected disabled >
						Select industry and business
					</option>
					<option value="">Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use</option>
					<option value="">Activities of International Organizations and Bodies</option>
					<option value="">Administrative and Support Service Activities</option>
					<option value="">Agriculture, Forestry and Fishing</option>
					<option value="">Arts, Entertainment and Recreation</option>
					<option value="">Construction</option>
					<option value="">Education</option>
					<option value="">Electricity, Gas, Steam and Air Conditioning Supply</option>
					<option value="">Finance, Banks, and Insurance</option>
					<option value="">Hotel/Accommodation, and Restaurant and Food Service</option>
					<option value="">Human Health and Social Work Activities</option>
					<option value=""> Information Technology</option>
					<option value="">Manufacturing</option>
					<option value="">Media and Communication</option>
					<option value="">Mining and Quarrying</option>
					<option value="">Other Service Activities</option>
					<option value="">Professional, Scientific and Technical Activities</option>
					<option value="">Public Administration and Defense; Compulsory Social Security</option>
					<option value="">Real Estate Activities</option>
					<option value="">Transportation and Storage</option>
					<option value="">Water Supply; Sewerage, Waste Management and Remediation Activities</option>
					<option value="">Wholesale and Retail Trade</option>
					<option value="other">Others, please specify:</option>
				</select>
				<input type="text" name="q3_other" id="q3_other" style="display:none;">
		<!-- QUESTION # 4 -->
			<div class="entry">
				<h3 class="ques_title">4. What is your position in your company/organization?</h3>
			</div>
				<input class="options" type="radio" name="position" value="" id="chief"><label for="chief" class="option">Chief level – General Manager/President/CEO</label><br>
				<input class="options" type="radio" name="position" value="" id="supe"><label for="supe" class="option">Supervisory – Director/Managing Director/Supervisor</label><br>
				<input class="options" type="radio" name="position" value="" id="rank"><label for="rank" class="option">Rank and file</label>
		<!-- QUESTION # 5 -->
			<div class="entry">
				<h3 class="ques_title">5. How many UP graduates are employed in your company/organization?</h3>
			</div>
				<input type="text" name="num_grad" id="">
		<!-- QUESTION # 6 -->
			<div class="entry">
				<h3 class="ques_title">6. How much do you agree or disagree with this statement: “UP graduates recruited in the last three to five years have the skills to work in my company/organization.”?</h3>
			</div>
				<input class="options" type="radio" name="workskill" value="" id="a7_1"><label for="a7_1" class="option">Strongly Disagree</label>
				<input class="options" type="radio" name="workskill" value="" id="a7_2"><label for="a7_2" class="option">Disagree</label>
				<input class="options" type="radio" name="workskill" value="" id="a7_3"><label for="a7_3" class="option">Agree</label>
				<input class="options" type="radio" name="workskill" value="" id="a7_4"><label for="a7_4" class="option">Strongly Agree</label>
		<!-- QUESTION # 7 -->
			<div class="entry">
				<h3 class="ques_title">7. Rate the importance of each skill when hiring new staff. Kindly select your ratings.</h3>
			</div>
				<table border="0">
					<tr>
						<th>SKILLS</th>
						<th>Unimportant</th>
						<th>Of Little Importance</th>
						<th>Important</th>
						<th>Very Important</th>
					</tr>
					<tr>
						<td>Reading Comprehension</td>
						<td>
							<input class="options" type="radio" name="ques7_1" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_1" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_1" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_1" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Active Listening</td>
						<td>
							<input class="options" type="radio" name="ques7_2" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_2" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_2" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_2" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Writing Skills</td>
						<td>
							<input class="options" type="radio" name="ques7_3" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_3" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_3" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_3" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Verbal Communication</td>
						<td>
							<input class="options" type="radio" name="ques7_4" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_4" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_4" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_4" value="" id="">
					</tr>
					<tr>
						<td>Mathematics Skills</td>
						<td>
							<input class="options" type="radio" name="ques7_5" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_5" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_5" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_5" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Scientific Literacy</td>
						<td>
							<input class="options" type="radio" name="ques7_6" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_6" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_6" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_6" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Digital Literacy</td>
						<td>
							<input class="options" type="radio" name="ques7_7" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_7" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_7" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_7" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Critical Thinking</td>
						<td>
							<input class="options" type="radio" name="ques7_8" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_8" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_8" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_8" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Participatory Learning</td>
						<td>
							<input class="options" type="radio" name="ques7_9" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_9" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_9" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_9" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Creative and Innovation</td>
						<td>
							<input class="options" type="radio" name="ques7_10" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_10" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_10" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_10" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Leadership Skills</td>
						<td>
							<input class="options" type="radio" name="ques7_11" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_11" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_11" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_11" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Social Awareness</td>
						<td>
							<input class="options" type="radio" name="ques7_12" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_12" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_12" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_12" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Service Orientation</td>
						<td>
							<input class="options" type="radio" name="ques7_13" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_13" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_13" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_13" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Time Management</td>
						<td>
							<input class="options" type="radio" name="ques7_14" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_14" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_14" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_14" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Complex Problem Solving Skills</td>
						<td>
							<input class="options" type="radio" name="ques7_15" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_15" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_15" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_15" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Judgment and Decision Making</td>
						<td>
							<input class="options" type="radio" name="ques7_16" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_16" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_16" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_16" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Systems Analysis and Evaluation</td>
						<td>
							<input class="options" type="radio" name="ques7_17" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_17" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_17" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques7_17" value="" id="">
						</td>
					</tr>
				</table>
				<br/>
				<!-- Others, please specify: <input type="text" name="others7"> -->
		<!-- QUESTION # 8 -->
			<div class="entry">
				<h3 class="ques_title">8. Rate your satisfaction on how well each skill is demonstrated by your staff who are UP graduates. Kindly select your ratings.</h3>
			</div>
				<table border="0">
					<tr>
						<th>SKILLS</th>
						<th>Very Unsatisfied</th>
						<th>Unsatisfied</th>
						<th>Satisfied</th>
						<th>Very Satisfied</th>
					</tr>
					<tr>
						<td>Reading Comprehension</td>
						<td>
							<input class="options" type="radio" name="ques8_1" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_1" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_1" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_1" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Active Listening</td>
						<td>
							<input class="options" type="radio" name="ques8_2" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_2" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_2" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_2" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Writing Skills</td>
						<td>
							<input class="options" type="radio" name="ques8_3" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_3" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_3" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_3" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Verbal Communication</td>
						<td>
							<input class="options" type="radio" name="ques8_4" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_4" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_4" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_4" value="" id="">
					</tr>
					<tr>
						<td>Mathematics Skills</td>
						<td>
							<input class="options" type="radio" name="ques8_5" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_5" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_5" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_5" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Scientific Literacy</td>
						<td>
							<input class="options" type="radio" name="ques8_6" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_6" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_6" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_6" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Digital Literacy</td>
						<td>
							<input class="options" type="radio" name="ques8_7" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_7" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_7" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_7" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Critical Thinking</td>
						<td>
							<input class="options" type="radio" name="ques8_8" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_8" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_8" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_8" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Participatory Learning</td>
						<td>
							<input class="options" type="radio" name="ques8_9" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_9" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_9" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_9" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Creative and Innovation</td>
						<td>
							<input class="options" type="radio" name="ques8_10" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_10" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_10" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_10" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Leadership Skills</td>
						<td>
							<input class="options" type="radio" name="ques8_11" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_11" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_11" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_11" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Social Awareness</td>
						<td>
							<input class="options" type="radio" name="ques8_12" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_12" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_12" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_12" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Service Orientation</td>
						<td>
							<input class="options" type="radio" name="ques8_13" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_13" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_13" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_13" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Time Management</td>
						<td>
							<input class="options" type="radio" name="ques8_14" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_14" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_14" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_14" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Complex Problem Solving Skills</td>
						<td>
							<input class="options" type="radio" name="ques8_15" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_15" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_15" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_15" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Judgment and Decision Making</td>
						<td>
							<input class="options" type="radio" name="ques8_16" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_16" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_16" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_16" value="" id="">
						</td>
					</tr>
					<tr>
						<td>Systems Analysis and Evaluation</td>
						<td>
							<input class="options" type="radio" name="ques8_17" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_17" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_17" value="" id="">
						</td>
						<td>
							<input class="options" type="radio" name="ques8_17" value="" id="">
						</td>
					</tr>
				</table>
				<br/>
				<!-- Others, please specify: <input type="text" name="others7"> -->
		<!-- QUESTION # 9 -->
			<div class="entry">
				<h3 class="ques_title">9. Based on your experience with the staff, how LIKELY are you to hire other graduates of UP?</h3>
			</div>
				<input class="options" type="radio" name="ques9" value="" id="a9_1"><label for="a9_1" class="option">Very Unlikely</label>
				<input class="options" type="radio" name="ques9" value="" id="a9_2"><label for="a9_2" class="option">Unlikely</label>
				<input class="options" type="radio" name="ques9" value="" id="a9_3"><label for="a9_3" class="option">Likely</label>
				<input class="options" type="radio" name="ques9" value="" id="a9_4"><label for="a9_4" class="option">Very Likely</label>
		<!-- QUESTION # 10 -->		
			<div class="entry">
				<h3 class="ques_title">10. Based on your experience with the staff how likely are you going to keep the UP graduates in your company/organization?</h3>
			</div>
				<input class="options" type="radio" name="ques10" value="" id="a9_1"><label for="a10_1" class="option">Very Unlikely</label>
				<input class="options" type="radio" name="ques10" value="" id="a9_2"><label for="a10_2" class="option">Unlikely</label>
				<input class="options" type="radio" name="ques10" value="" id="a9_3"><label for="a10_3" class="option">Likely</label>
				<input class="options" type="radio" name="ques10" value="" id="a9_4"><label for="a10_4" class="option">Very Likely</label>
		<!-- QUESTION # 11 -->
			<div class="entry">
				<h3 class="ques_title">11. Rate the importance of each item to the successful performance of the job for which your staff, who are UP graduates, were hired. Then, rate your satisfaction on how well these are demonstrated.</h3>
			</div>
			<table border="0">
				<tr>
					<th>SKILLS</th>
					<th>Unimportant</th>
					<th>Of Little Importance</th>
					<th>Important</th>
					<th>Very Important</th>
				</tr>
				<tr>
					<td>Willing to undergo training and/or further education</td>
					<td>
						<input class="options" type="radio" name="ques11_1" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_1" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_1" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_1" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Has strong and professional work ethic</td>
					<td>
						<input class="options" type="radio" name="ques11_2" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_2" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_2" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_2" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Willing to share knowledge and expertise within the company and/or community</td>
					<td>
						<input class="options" type="radio" name="ques11_3" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_3" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_3" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_3" value="" id="a8_4">
					</td>
				</tr>
				<tr>
					<td>Willing and has a positive attitude towards working with others</td>
					<td>
						<input class="options" type="radio" name="ques11_4" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_4" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_4" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_4" value="" id="">
				</tr>
				<tr>
					<td>Is able to learn quickly the basic company operations</td>
					<td>
						<input class="options" type="radio" name="ques11_5" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_5" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_5" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_5" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Is able to provide solutions and contribute to the growth of the company</td>
					<td>
						<input class="options" type="radio" name="ques11_6" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_6" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_6" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_6" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Is able to master company operations</td>
					<td>
						<input class="options" type="radio" name="ques11_7" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_7" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_7" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_7" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Effective in both oral and written communication</td>
					<td>
						<input class="options" type="radio" name="ques11_8" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_8" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_8" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_8" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Computer and Technical Literate</td>
					<td>
						<input class="options" type="radio" name="ques11_9" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_9" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_9" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_9" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Effective and efficient in accomplishing tasks</td>
					<td>
						<input class="options" type="radio" name="ques11_10" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_10" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_10" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_10" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Able to provide innovative ideas to the company</td>
					<td>
						<input class="options" type="radio" name="ques11_11" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_11" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_11" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques11_11" value="" id="">
					</td>
				</tr>
			</table>
			<br/>
			<!-- Others, please specify: <input type="text" name="others7"> -->
		<!-- QUESTION # 12 -->
			<div class="entry">
				<h3 class="ques_title">12. Rate your satisfaction on how well each item was demonstrated by your hired UP graduates.</h3>
			</div>
			<table border="0">
				<tr>
					<th>SKILLS</th>
					<th>Very Unsatisfied</th>
					<th>Unsatisfied</th>
					<th>Satisfied</th>
					<th>Very Satisfied</th>
				</tr>
				<tr>
					<td>Willing to undergo training and/or further education</td>
					<td>
						<input class="options" type="radio" name="ques12_1" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_1" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_1" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_1" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Has strong and professional work ethic</td>
					<td>
						<input class="options" type="radio" name="ques12_2" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_2" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_2" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_2" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Willing to share knowledge and expertise within the company and/or community</td>
					<td>
						<input class="options" type="radio" name="ques12_3" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_3" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_3" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_3" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Willing and has a positive attitude towards working with others</td>
					<td>
						<input class="options" type="radio" name="ques12_4" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_4" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_4" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_4" value="" id="a_4">
				</tr>
				<tr>
					<td>Is able to learn quickly the basic company operations</td>
					<td>
						<input class="options" type="radio" name="ques12_5" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_5" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_5" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_5" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Is able to provide solutions and contribute to the growth of the company</td>
					<td>
						<input class="options" type="radio" name="ques12_6" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_6" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_6" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_6" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Is able to master company operations</td>
					<td>
						<input class="options" type="radio" name="ques12_7" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_7" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_7" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_7" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Effective in both oral and written communication</td>
					<td>
						<input class="options" type="radio" name="ques12_8" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_8" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_8" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_8" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Computer and Technical Literate</td>
					<td>
						<input class="options" type="radio" name="ques12_9" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_9" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_9" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_9" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Effective and efficient in accomplishing tasks</td>
					<td>
						<input class="options" type="radio" name="ques12_10" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_10" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_10" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_10" value="" id="">
					</td>
				</tr>
				<tr>
					<td>Able to provide innovative ideas to the company</td>
					<td>
						<input class="options" type="radio" name="ques12_11" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_11" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_11" value="" id="">
					</td>
					<td>
						<input class="options" type="radio" name="ques12_11" value="" id="">
					</td>
				</tr>
			</table>
			<br/>
			<!-- Others, please specify: <input type="text" name="others7"> -->
		<!-- QUESTION # 13 -->
			<div class="entry">
				<h3 class="ques_title">13. Which actions should UP take in order to improve the skill and competency set of its graduates? Check all that apply.</h3>
			</div>
				<input type="checkbox" id="q12ans1" name="" value="">Design courses that are more relevant to the needs of employers<br>
				<input type="checkbox" id="q12ans2" name="" value="">Include practical experience as part of the academic programs<br>
				<input type="checkbox" id="q12ans3" name="" value="">Include sector specific job placements as an integral part of the degree program<br>
				<input type="checkbox" id="q12ans4" name="" value="">Provide better post-graduation support (facilitate relations between graduates and companies/organizations)<br>
				<input type="checkbox" id="other" name="" value="" onclick="show_hide(this);">Others, please specify
				<input type="text" name="q11_other" id="q11_other" style="display:none;">
		<!-- QUESTION # 14 -->
			<div class="entry">
				<h3 class="ques_title">14. How important is UP cooperation for your company/organization? Please rate the importance of cooperating with UP in the design of curricula and study programs.</h3>
			</div>
				<input class="options" type="radio" name="ques13" value="" id="a13_1"><label for="a13_1" class="option">Unimportant</label>
				<input class="options" type="radio" name="ques13" value="" id="a13_2"><label for="a13_2" class="option">Of Little Importance</label>
				<input class="options" type="radio" name="ques13" value="" id="a13_3"><label for="a13_3" class="option">Moderately part Important</label>
				<input class="options" type="radio" name="ques13" value="" id="a13_4"><label for="a13_4" class="option">Important</label>
		<!-- QUESTION # 15 -->
			<div class="entry">
				<h3 class="ques_title">15. Do you have any other comments or suggestions as to how UP can improve the skill and competency set of its graduates?(Write "None" if none)</h3>
			</div>
				<textarea id="" name="ques14" rows="4" cols="50" style="resize: none;"></textarea>
		<!-- QUESTION # 16 -->
			<div class="entry">
				<h3 class="ques_title">16. If any, what are specific complaints about the graduates? (Write "NA" if not applicable)</h3>
			</div>
				<textarea id="" name="ques15" rows="4" cols="50" style="resize: none;"></textarea>
		<!-- QUESTION # 17 -->
			<div class="entry">
				<h3 class="ques_title">17. Are specific strengths of the graduates appreciated? If yes, what are these strengths? (Write "NA" if not applicable)</h3>
			</div>
				<textarea id="" name="ques16" rows="4" cols="50" style="resize: none;"></textarea>
		<!-- QUESTION # 18 -->
			<div class="entry">
				<h3 class="ques_title">18. Would you like to elaborate on any of your answers/ratings above? Please indicate the numbers or items you are discussing. (Write "None" if you don't want to elaborate any.)</h3>
			</div>
				<textarea id="" name="ques17" rows="4" cols="50" style="resize: none;"></textarea>
			<!-- submit button -->
			<form class="submit-button" action="emp_survey.php" method="post">
				<input type="submit" name="submit" value="Submit"/>
		<!-- DON'T MIND THIS FOR FUTURE STUFF PA DIS -->
		<!-- 	<input type="hidden" name="question_id" value="question_id"/>
				<input type="hidden" name="submitted" value="1"/> -->
			</form>	
	</div>
		<!-- for footer/ contact details -->
	<?php include('footer.php'); ?>
	</div>

	
</body>
</html>
						
