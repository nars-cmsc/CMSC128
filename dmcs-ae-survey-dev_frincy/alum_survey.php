<?php
include 'connection.php'; // Add connection file

$query = "SELECT * FROM survey_questions";
$result = mysqli_query($db_conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey</title>
</head>
<body>
	<div class="header">HEADER</div> <!-- for header/ navbar -->

	<div class="content">
		<h1>University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey</h1>
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
						<input class="options" type="radio" name="sex" value="female">Female
						<input class="options" type="radio" name="sex" value="male">Male
					';// refer to old codes for name and id to connect to answers table
				}
				if ($ques_id == 2) {
					echo '
						<textarea id="" name="ques2" rows="4" cols="50"></textarea>
					';
				}
				if ($ques_id == 3) {
					echo '
						<input class="options" type="radio" name="satisfaction" value="">Very Dissatisfied
						<input class="options" type="radio" name="satisfaction" value="">Generally Dissatisfied
						<input class="options" type="radio" name="satisfaction" value="">Generally Satisfied
						<input class="options" type="radio" name="satisfaction" value="">Very Satisfied
					';
				}
				if ($ques_id == 4) {
					echo '
						<input class="options" type="radio" name="time" value="">I got a job while still in college
						<input class="options" type="radio" name="time" value="">2 months or less
						<input class="options" type="radio" name="time" value="">3 to 6 months
						<input class="options" type="radio" name="time" value="">7 months to 1 year
						<input class="options" type="radio" name="time" value="">1 to 2 years
						<input class="options" type="radio" name="time" value="">More than 2 years
						<input class="options" type="radio" name="time" value="">I am not sure.
					';
				}
				if ($ques_id == 5) {
					echo '
						<input class="options" type="radio" name="currentemployment" value="">Yes
						<input class="options" type="radio" name="currentemployment" value="">No
					';
				}
				if ($ques_id == 6) {
					echo '
						<input class="options" type="radio" name="charemployment" value="">Full time (40 hours/week)
						<input class="options" type="radio" name="charemployment" value="">Part time
						<input class="options" type="radio" name="charemployment" value="">Self-employed

					';
				}
				if ($ques_id == 7) {
					echo '
						<input class="options" type="radio" name="employmentnow" value="">Yes
						<input class="options" type="radio" name="employmentnow" value="">No
					';
				}
				if ($ques_id == 8) {
					echo '
						<select name="description" id="description">
							<option value=""></option>
							<option value="">Hotel/Accommodation, and Restaurant and Food Service</option>
							<option value="">Activities of International Organizations and Bodies</option>
							<option value="">Arts, Entertainment and Recreation</option>
							<option value="">Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use</option>
							<option value="">Administrative and Support Service Activities</option>
							<option value="">Agriculture, Forestry and Fishing</option>
							<option value="">Professional, Scientific and Technical Activities</option>
							<option value="">Public Administration and Defense; Compulsory Social Security</option>
							<option value="">Real Estate Activities</option>
							<option value="">Transportation and Storage</option>
							<option value="">Construction</option>
							<option value="">Education</option>
							<option value="">Electricity, Gas, Steam and Air Conditioning</option>
							<option value="">Finance, Banks, and Insurance</option>
							<option value="">Human Health and Social Work Activities</option>
							<option value="">Information Technology</option>
							<option value="">Manufacturing</option>
							<option value="">Media and Communication</option>
							<option value="">Mining and Quarrying</option>
							<option value="">Other Service Activities</option>
							<option value="">Water Supply; Sewerage, Waste Management and Remediation Activities</option>
							<option value="">Wholesale and Retail Trade</option>
							<option value="">Others, please specify:</option>
						</select><br>
						<textarea id="" name="description" rows="4" cols="50"></textarea><br>
					';
				}
				if ($ques_id == 9) {
					echo '
						<input class="options" type="radio" name="minlevel" value="">High school
						<input class="options" type="radio" name="minlevel" value="">Some college
						<input class="options" type="radio" name="minlevel" value="">Associate’s degree
						<input class="options" type="radio" name="minlevel" value="">Bachelor’s degree
						<input class="options" type="radio" name="minlevel" value="">Master’s degree
						<input class="options" type="radio" name="minlevel" value="">Doctoral degree <br>
						<input class="options" type="radio" name="minlevel" value="">Academic Field (enter academic field if degree selected): <br>
						<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
						<input class="options" type="radio" name="minlevel" value="">Others (e,g. training, certifications):<br>
						<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
					';
				}
				if ($ques_id == 10) {
					echo '
						<input class="options" type="radio" name="preflevel" value="">High school
						<input class="options" type="radio" name="preflevel" value="">Some college
						<input class="options" type="radio" name="preflevel" value="">Associate’s degree
						<input class="options" type="radio" name="preflevel" value="">Bachelor’s degree
						<input class="options" type="radio" name="preflevel" value="">Master’s degree
						<input class="options" type="radio" name="preflevel" value="">Doctoral degree <br>
						<input class="options" type="radio" name="preflevel" value="">Academic Field (enter academic field if degree selected): <br>
						<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
						<input class="options" type="radio" name="preflevel" value="">Others (e,g. training, certifications):<br>
						<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
					';
				}
				if ($ques_id == 11) {
					echo '
						<select name="prinocc" id="prinocc">
							<option value=""></option>
							<option value="">Armed Forces Occupations</option>
							<option value="">Clerical Support Workers</option>
							<option value="">Craft and Related Trade Workers</option>
							<option value="">Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)</option>
							<option value="">Managers</option>
							<option value="">Plant and Machine Operators, and Assemblers</option>
							<option value="">Professionals</option>
							<option value="">Service and Sales Workers</option>
							<option value="">Skilled Agricultural, Forestry and Fishery Workers</option>
							<option value="">Technicians and Associate Professionals</option>
						</select>
					';
				}
				if ($ques_id == 12) {
					echo '
						<input class="options" type="radio" name="currentpos" value="">Yes, it is the same field as my major/s
						<input class="options" type="radio" name="currentpos" value="">Yes, it is related to my major/s
						<input class="options" type="radio" name="currentpos" value="">No, it is not related
					';
				}
				if ($ques_id == 13) { 
					echo '
						<table>
						<tr>
							<td>Alfreds Futterkiste</td>
							<td>Maria Anders</td>
							<td>Germany</td>
							</tr>
						</table>
					';
				}
				if ($ques_id == 14) {
					echo '
						<input class="options" type="radio" name="ques14" value="">Yes
						<input class="options" type="radio" name="ques14" value="">No
					';
				}
				if ($ques_id == 15) {
					echo '
						<input class="options" type="radio" name="ques15" value="">Full time (40 hours/week) 
						<input class="options" type="radio" name="ques15" value="">Part time
					';
				}
				if ($ques_id == 16) {
					echo '
						<input class="options" type="radio" name="totnum" value="">No experience
						<input class="options" type="radio" name="totnum" value="">Less than one (1) year
						<input class="options" type="radio" name="totnum" value="">One (1) to three (3) years
						<input class="options" type="radio" name="totnum" value="">Three (3) to six (6) years
						<input class="options" type="radio" name="totnum" value="">More than six (6+) years						
					';
				}
				if ($ques_id == 17) {
					echo '
						<textarea id="" name="ques17" rows="4" cols="50"></textarea>
					';
				}
				if ($ques_id == 18) {
					echo '
						<input class="options" type="radio" name="preparation" value="">Very Poorly
						<input class="options" type="radio" name="preparation" value="">Less than adequately
						<input class="options" type="radio" name="preparation" value="">More than adequately
						<input class="options" type="radio" name="preparation" value="">Very well
					';
				}
				if ($ques_id == 19) {
					echo '
						<input class="options" type="radio" name="ques19" value="">Entry-level
						<input class="options" type="radio" name="ques19" value="">Supervisory 
						<input class="options" type="radio" name="ques19" value="">Executive level (except Chief Executive)
						<input class="options" type="radio" name="ques19" value="">Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)
					';
				}
				if ($ques_id == 20) {
					echo '
						<input class="options" type="radio" name="manage" value="">None at all   
						<input class="options" type="radio" name="manage" value="">Some of my time (up to 25% of my time)
						<input class="options" type="radio" name="manage" value="">Half my time (50%)
						<input class="options" type="radio" name="manage" value="">Most of my time (75% of my time)
					';
				}
				if ($ques_id == 21) {
					echo '
						<input class="options" type="radio" name="ques21" value="">No supervisory or lead responsibilities. <br>
						<input class="options" type="radio" name="ques21" value="">Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions. <br>
						<input class="options" type="radio" name="ques21" value="">Direct supervision of one or more people. <br>
						<input class="options" type="radio" name="ques21" value="">Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues. 
					';
				}
				if ($ques_id == 22) {
					echo '
						<input class="options" type="radio" name="satisfy" value="">Very dissatisfied  
						<input class="options" type="radio" name="satisfy" value="">Generally dissatisfied
						<input class="options" type="radio" name="satisfy" value="">Generally satisfied
						<input class="options" type="radio" name="satisfy" value="">Very satisfied
					';
				}
				if ($ques_id == 23) { //Alam nating dalawa na may mali rito, Celyn. Pero website pa lang naman.
					echo '
					
					1. Possess the skills and mindset to improve human life<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well <br>
					2. Commit to the freedom and welfare of all <br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					3. Demonstrate mastery of knowledge in your specific discipline<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					4. Possess breadth of mind<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					5. Possess strength of character<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					6. Possess generosity of spirit<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					7. Inclusively engage with society and the world at large<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					8. Be mindful of the needs and capabilities of people<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					9. Be sensitive to the challenges and opportunities of national development and global change<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					10. Think critically<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					11. Demonstrate discernment<br>
						<input class="options" type="radio" name="satisfy" value="">Very poorly 
						<input class="options" type="radio" name="satisfy" value="">Less than adequately
						<input class="options" type="radio" name="satisfy" value="">More than adequately
						<input class="options" type="radio" name="satisfy" value="">Very well<br>
					';
				}
				if ($ques_id == 24) {
					echo '
						<textarea id="" name="ques24" rows="10" cols="50"></textarea>
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
						