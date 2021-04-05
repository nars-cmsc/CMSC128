<?php
include 'connection.php'; // Add connection file

$query = "SELECT * FROM survey_questions";
$result = mysqli_query($db_conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employer Satisfaction Survey</title>
</head>
<body>
	<div class="header">HEADER</div> <!-- for header/ navbar -->

	<div class="content">
		<h1>Employer Satisfaction Survey</h1>
		<?php 
		if ($result) {
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				$ques_body = $row['question_body'];
				$ques_id = $row['question_id'];

				echo '
				<div class="entry">
					<h3 class="ques_title">'.$ques_body.'</h3>
				</div>
				';
				if ($ques_id == 1) {
					echo '
						<input class="options" type="radio" name="sector" value="public">Public
						<input class="options" type="radio" name="sector" value="private">Private
						<input class="options" type="radio" name="sector" value="other">Others, please specify:
					';// refer to old codes for name and id to connect to answers table
				}
				if ($ques_id == 2) {
					echo '
						<input class="options" type="radio" name="locale" value="philippines">Philippines
						<input class="options" type="radio" name="locale" value="abroad">Abroad
					';// refer to old codes for name and id to connect to answers table
				}
				if ($ques_id == 3) {
					echo '
						<label for="region">Region: </label>
						<select name="region" id="region">
							<option value=""></option>
							<option value="">Africa</option>
							<option value="">America</option>
							<option value="">Antarctica</option>
							<option value="">Asia</option>
							<option value="">Europe</option>
							<option value="">Oceania</option>
						</select>
						<label for="subregion">Sub region: </label>
						<select name="subregion" id="subregion">
							<option value=""></option>
							<option value="">Northern Africa</option>
							<option value="">Eastern Africa</option>
							<option value="">Middle Africa</option>
							<option value="">Southern Africa</option>
							<option value="">Western Africa</option>
							<option value="">Central America</option>
							<option value="">South America</option>
							<option value="">North America</option>
							<option value="">Central Asia</option>
							<option value="">Eastern Asia</option>
							<option value="">Southeast Asia</option>
							<option value="">South Asia</option>
							<option value="">West Asia</option>
							<option value="">Eastern Europe</option>
							<option value="">Northern Europe</option>
							<option value="">Southern Europe</option>
							<option value="">Western Europe</option>
							<option value="">Australia and New Zealand</option>
							<option value="">Melanesia, Micronesia, Polynesia</option>
						</select>
					';// refer to old codes for name and id to connect to answers table
				}
				if ($ques_id == 4) {
					echo '
						<select name="industry" id="industry">
							<option value=""></option>
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
							<option value="">Others, please specify:</option>
						</select>
					';// refer to old codes for name and id to connect to answers table
				}
				if ($ques_id == 5) {
					echo '
						<input class="options" type="radio" name="position" value="">Chief level – General Manager/President/CEO
						<input class="options" type="radio" name="position" value="">Supervisory – Director/Managing Director/Supervisor
						<input class="options" type="radio" name="position" value="">Rank and file
					';
				}
				if ($ques_id == 6) {
					echo '
						<input type="text" name="num_grad" id="">
					';
				}
				if ($ques_id == 7) {
					echo '
						<input class="options" type="radio" name="workskill" value="">Strongly Disagree
						<input class="options" type="radio" name="workskill" value="">Disagree
						<input class="options" type="radio" name="workskill" value="">Agree
						<input class="options" type="radio" name="workskill" value="">Strongly Agree
					';
				}
				if ($ques_id == 8) {
					echo '
						Reading Comprehension
						<br/>
						Active Listening
						<br/>
						Writing Skills
						<br/>
						Verbal Communication
						<br/>
						Mathematics Skills
						<br/>
						Scientific Literacy
						<br/>
						Digital Literacy
						<br/>
						Critical Thinking
						<br/>
						Participatory Learning
						<br/>
						Creative and Innovation
						<br/>
						Leadership Skills
						<br/>
						Social Awareness
						<br/>
						Service Orientation
						<br/>
						Time Management
						<br/>
						Complex Problem Solving Skills
						<br/>
						Judgment and Decision Making
						<br/>
						Systems Analysis and Evaluation
						<br/>
						Others, please specify: <input type="text" name="others7">
					';
				}
				if ($ques_id == 9) {
					echo '
						<input class="options" type="radio" name="ques9" value="">Very Unlikely
						<input class="options" type="radio" name="ques9" value="">Unlikely
						<input class="options" type="radio" name="ques9" value="">Likely
						<input class="options" type="radio" name="ques9" value="">Very Likely
					';
				}
				if ($ques_id == 10) {
					echo '
						<input class="options" type="radio" name="ques10" value="">Very Unlikely
						<input class="options" type="radio" name="ques10" value="">Unlikely
						<input class="options" type="radio" name="ques10" value="">Likely
						<input class="options" type="radio" name="ques10" value="">Very Likely
					';
				}
				if ($ques_id == 11) {// insert specialized skills
					echo '
						INSERT LIST OF SPECIALIZED DMCS SKILLS
					';
				}
				if ($ques_id == 12) {
					echo '
						<input type="checkbox" id="" name="" value="">Design courses that are more relevant to the needs of employers<br>
						<input type="checkbox" id="" name="" value="">Include practical experience as part of the academic programs<br>
						<input type="checkbox" id="" name="" value="">Include sector specific job placements as an integral part of the degree program<br>
						<input type="checkbox" id="" name="" value="">Provide better post-graduation support (facilitate relations between graduates and companies/organizations)<br>
						<input type="checkbox" id="" name="" value="">Others, please specify
						<input type="text" id="" name="">
					';
				}
				if ($ques_id == 13) {
					echo '
						<input class="options" type="radio" name="ques13" value="">Unimportant
						<input class="options" type="radio" name="ques13" value="">Of Little Importance
						<input class="options" type="radio" name="ques13" value="">Moderately part Important
						<input class="options" type="radio" name="ques13" value="">Important
					';
				}
				if ($ques_id == 14) {
					echo '
						<textarea id="" name="ques14" rows="4" cols="50"></textarea>
					';
				}
				if ($ques_id == 15) {
					echo '
						<textarea id="" name="ques15" rows="4" cols="50"></textarea>
					';
				}
				if ($ques_id == 16) {
					echo '
						<textarea id="" name="ques16" rows="4" cols="50"></textarea>
					';
				}
				if ($ques_id == 17) {
					echo '
						<textarea id="" name="ques17" rows="4" cols="50"></textarea>
					';
				}

			}
		}
		?>

		<form action="emp_survey.php" method="post">
			<input type="submit" name="submit" value="Submit"/>

			<input type="hidden" name="question_id" value="question_id"/>
			<input type="hidden" name="submitted" value="1"/>
		</form>
	</div>

	<div class="footer">FOOTER</div> <!-- for footer/ contact details -->

</body>
</html>
						