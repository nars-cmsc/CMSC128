<!-- University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey-->
<?php 
require_once 'controller.php';

// if user is not logged in
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
	
	<title>Alumni Survey - UPB DMCS</title>
</head>
	<!-- for header/ navbar   Lagyan ng question mark -->
	<?php include('header.php'); ?>

	<div class="content-alum">
		<div class="content-survey">
		<h1>Alumni Survey</h1>
		<h2>Please make sure to fill in answers to all the questions.</h2>
		<!-- QUESTION # 1 -->
			<div class="entry">
				<h3 class="ques_title">1. Sex at birth: </h3>
			</div>
			
					<input class="options" type="radio" name="sex" id="one1" value="female">
						<label class="option" for="one1">Female</label>
					<input class="options" type="radio" name="sex" id="one2" value="male">
						<label class="option" for="one2">Male</label>	
	
		<!-- QUESTION # 2 -->
			<div class="entry">
				<h3 class="ques_title">2. In which country do you presently reside or work for most of the year (more than 6 months)? </h3>
			</div>
						<textarea id="" name="ques2" rows="4" cols="50"></textarea>
		<!-- QUESTION # 3 -->
			<div class="entry">
				<h3 class="ques_title">3. Overall, how satisfied are you with your undergraduate education at UP?</h3>
			</div>					
						<input class="options" type="radio" name="satisfaction" id="three1" value="">
							<label class="option" for="three1">Very Dissatisfied</label>
						<input class="options" type="radio" name="satisfaction" id="three2" value="">
							<label class="option" for="three2">Generally Dissatisfied</label>
						<input class="options" type="radio" name="satisfaction" id="three3" value="">
							<label class="option" for="three3">Generally Satisfied</label>
						<input class="options" type="radio" name="satisfaction" id="three4" value="">
							<label class="option" for="three4">Very Satisfied</label>
		<!-- QUESTION # 4 -->
			<div class="entry">
				<h3 class="ques_title">4. How long after graduation were you able to get your first job?</h3>
			</div>
						<input class="options" type="radio" name="time" id="four1" value="">
							<label class="option" for="four1">I got a job while still in college</label>
						<input class="options" type="radio" name="time" id="four2" value="">
							<label class="option" for="four2">2 months or less</label>
						<input class="options" type="radio" name="time" id="four3" value="">
							<label class="option" for="four3">3 to 6 months</label>
						<input class="options" type="radio" name="time" id="four4" value="">
							<label class="option" for="four4">7 months to 1 year</label>
						<input class="options" type="radio" name="time" id="four5" value="">
							<label class="option" for="four5">1 to 2 years</label>
						<input class="options" type="radio" name="time" id="four6" value="">
							<label class="option" for="four6">More than 2 years</label>
						<input class="options" type="radio" name="time" id="four7" value="">I am not sure.
							<label class="option" for="four7">I am not sure.</label>
		<!-- QUESTION # 5 -->
			<div class="entry">
				<h3 class="ques_title">5. Are you employed right now? 	</h3>
			</div>
						<input class="options" type="radio" name="currentemployment" id="five1" value="">
							<label class="option" for="five1">Yes</label>
						<input class="options" type="radio" name="currentemployment" id="five2" value="">
							<label class="option" for="five2">No</label>
		<!-- QUESTION # 5.a -->
			<div class="entry">
				<h3 class="ques_title">5.a If you answered Yes, how would you characterize your employment?	</h3>
			</div>
						<input class="options" type="radio" name="charemployment" id="fivea1" value="">
							<label class="option" for="fivea1">Full time (40 hours/week)</label>
						<input class="options" type="radio" name="charemployment" id="fivea2" value="">
							<label class="option" for="fivea2">Part time</label>
						<input class="options" type="radio" name="charemployment" id="fivea3" value="">
							<label class="option" for="fivea3">Self-employed</label>
		<!-- QUESTION # 5.b -->
			<div class="entry">
				<h3 class="ques_title">5.b If you answered No, are you looking for employment at this time?	</h3>
			</div>
						<input class="options" type="radio" name="employmentnow" id="fiveb1" value="">
							<label class="option" for="fiveb1">Yes</label>
						<input class="options" type="radio" name="employmentnow" id="fiveb2" value="">
							<label class="option" for="fiveb2">No</label>
		<!-- QUESTION # 5.c -->
			<div class="entry">
				<h3 class="ques_title">If you answered 5.a., which industry best describes your employer or occupation? Drop-down menu of the following choices	</h3>
			</div>
						<select name="description" id="description">
							<option id="fivec1" value=""></option>
							<option id="fivec2" value="">Hotel/Accommodation, and Restaurant and Food Service</option>
							<option id="fivec3" value="">Activities of International Organizations and Bodies</option>
							<option id="fivec4" value="">Arts, Entertainment and Recreation</option>
							<option id="fivec5" value="">Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use</option>
							<option id="fivec6" value="">Administrative and Support Service Activities</option>
							<option id="fivec7" value="">Agriculture, Forestry and Fishing</option>
							<option id="fivec8" value="">Professional, Scientific and Technical Activities</option>
							<option id="fivec9" value="">Public Administration and Defense; Compulsory Social Security</option>
							<option id="fivec10" value="">Real Estate Activities</option>
							<option id="fivec11" value="">Transportation and Storage</option>
							<option id="fivec12" value="">Construction</option>
							<option id="fivec13" value="">Education</option>
							<option id="fivec14" value="">Electricity, Gas, Steam and Air Conditioning</option>
							<option id="fivec15" value="">Finance, Banks, and Insurance</option>
							<option id="fivec16" value="">Human Health and Social Work Activities</option>
							<option id="fivec17" value="">Information Technology</option>
							<option id="fivec18" value="">Manufacturing</option>
							<option id="fivec19" value="">Media and Communication</option>
							<option id="fivec20" value="">Mining and Quarrying</option>
							<option id="fivec21" value="">Other Service Activities</option>
							<option id="fivec22" value="">Water Supply; Sewerage, Waste Management and Remediation Activities</option>
							<option id="fivec23" value="">Wholesale and Retail Trade</option>
							<option id="fivec24" value="">Others, please specify:</option>
						</select><br>
						<textarea id="" name="description" rows="4" cols="50"></textarea><br>
		<!-- QUESTION # 6 -->
			<div class="entry">
				<h3 class="ques_title">6. Select the minimum level of education required to perform your job (not necessarily your education level)	</h3>
			</div>
						<input class="options" type="radio" name="minlevel" id="six1" value="">
							<label class="option" for="six1">High school</label>
						<input class="options" type="radio" name="minlevel" id="six2" value="">
							<label class="option" for="six2">Some college</label>
						<input class="options" type="radio" name="minlevel" id="six3" value="">
							<label class="option" for="six3">Associate’s degree</label>
						<input class="options" type="radio" name="minlevel" id="six4" value="">
							<label class="option" for="six4">Bachelor’s degree</label>
						<input class="options" type="radio" name="minlevel" id="six5" value="">
							<label class="option" for="six5">Master’s degree</label>
						<input class="options" type="radio" name="minlevel" id="six6" value="">
							<label class="option" for="six6">Doctoral degree </label><br>
						<input class="options" type="radio" name="minlevel" id="six7" value="">
							<label class="option" for="six7">Academic Field (enter academic field if degree selected): </label> <br>
								<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
						<input class="options" type="radio" name="minlevel" id="six8" value="">
							<label class="option" for="six8">Others (e,g. training, certifications):</label><br>
								<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
		<!-- QUESTION # 7 -->
			<div class="entry">
				<h3 class="ques_title">7. Select the preferred (but not required) level of education or training</h3>
			</div>
						<input class="options" type="radio" name="preflevel" id="seven1" value="">
							<label class="option" for="seven1">High school</label>
						<input class="options" type="radio" name="preflevel" id="seven2" value="">
							<label class="option" for="seven2">Some college</label>
						<input class="options" type="radio" name="preflevel" id="seven3" value="">
							<label class="option" for="seven3">Associate’s degree</label>
						<input class="options" type="radio" name="preflevel" id="seven4" value="">
							<label class="option" for="seven4">Bachelor’s degree</label>
						<input class="options" type="radio" name="preflevel" id="seven5" value="">
							<label class="option" for="seven5">Master’s degree</label>
						<input class="options" type="radio" name="preflevel" id="seven6" value="">
							<label class="option" for="seven6">Doctoral degree </label> <br>
						<input class="options" type="radio" name="preflevel" id="seven7" value="">
							<label class="option" for="seven7">Academic Field (enter academic field if degree selected): </label><br>
								<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
						<input class="options" type="radio" name="preflevel" id="seven8" value="">
							<label class="option" for="seven8">Others (e,g. training, certifications):</label><br>
								<textarea id="" name="minlevel" rows="4" cols="50"></textarea><br>
		<!-- QUESTION # 8 -->
			<div class="entry">
				<h3 class="ques_title">8. Whether or not you are currently employed, what is your principal occupation category?</h3>
			</div>
						<select name="prinocc" id="prinocc">
							<option id="eight1" value=""></option>
							<option id="eight2" value="">Armed Forces Occupations</option>
							<option id="eight3" value="">Clerical Support Workers</option>
							<option id="eight4" value="">Craft and Related Trade Workers</option>
							<option id="eight5" value="">Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)</option>
							<option id="eight6" value="">Managers</option>
							<option id="eight7" value="">Plant and Machine Operators, and Assemblers</option>
							<option id="eight8" value="">Professionals</option>
							<option id="eight9" value="">Service and Sales Workers</option>
							<option id="eight10" value="">Skilled Agricultural, Forestry and Fishery Workers</option>
							<option id="eight11" value="">Technicians and Associate Professionals</option>
						</select>
		<!-- QUESTION # 9 -->
			<div class="entry">
				<h3 class="ques_title">9. Is your current position related to your undergraduate field(s) of study?</h3>
			</div>
						<input class="options" type="radio" name="currentpos" id="nine1" value="">
							<label class="option" for="nine1">Yes, it is the same field as my major/s</label>
						<input class="options" type="radio" name="currentpos" id="nine2" value="">
							<label class="option" for="nine2">Yes, it is related to my major/s</label>
						<input class="options" type="radio" name="currentpos" id="nine3" value="">
							<label class="option" for="nine3">No, it is not related</label>
		<!-- QUESTION # 10 Temp--> 
			<div class="entry">
				<h3 class="ques_title">10. In the order of importance, list your major job duties and the percentage of time you spend on each. Think back on the past 12 months to make sure you capture all key responsibilities. The total percentage of time spent must not exceed 100 but may be less since you are not to list all duties.</h3>
			</div>
				<table border="0">
					
					<tr>
						<td>
							1.		<textarea id="" name="minlevel" rows="2" cols="50"></textarea><br>
						</td>
						<td>
							<textarea id="" name="minlevel" rows="2" cols="50"></textarea>		%<br>
						</td>
					</tr>
					<tr>
						<td>
							2.		<textarea id="" name="minlevel" rows="2" cols="50"></textarea><br>
						</td>
						<td>
							<textarea id="" name="minlevel" rows="2" cols="50"></textarea>		%<br>
						</td>
					</tr>
					<tr>
						<td>
							3.		<textarea id="" name="minlevel" rows="2" cols="50"></textarea><br>
						</td>
						<td>
							<textarea id="" name="minlevel" rows="2" cols="50"></textarea>		%<br>
						</td>
					</tr>
					<tr>
						<td>
							4.		<textarea id="" name="minlevel" rows="2" cols="50"></textarea><br>
						</td>
						<td>
							<textarea id="" name="minlevel" rows="2" cols="50"></textarea>		%<br>
						</td>
					</tr>
					<tr>
						<td>
							5.		<textarea id="" name="minlevel" rows="2" cols="50"></textarea><br>
						</td>
						<td>
							<textarea id="" name="minlevel" rows="2" cols="50"></textarea>		%<br>
						</td>
					</tr>
					<tr>
						<td>
							6.		<textarea id="" name="minlevel" rows="2" cols="50"></textarea><br>
						</td>
						<td>
							<textarea id="" name="minlevel" rows="2" cols="50"></textarea>		%<br>
						</td>
					</tr>
				</table>
		
		<!-- QUESTION # 11 -->
			<div class="entry">
				<h3 class="ques_title">11. Do you currently work for a national or local NGO or civic organization, as a paid volunteer for more than 10 hours per week?	</h3>
			</div>
						<input class="options" type="radio" name="ques11" id="elev1" value="">
							<label class="option" for="elev1">Yes</label>
						<input class="options" type="radio" name="ques11" id="elev2" value="">
							<label class="option" for="elev2">No</label>
		<!-- QUESTION # 11.a -->
			<div class="entry">
				<h3 class="ques_title">11.a If you answered Yes, how would you characterize this service of volunteer work?</h3>
			</div>
						<input class="options" type="radio" name="ques11.1" id="eleva1" value="">
							<label class="option" for="eleva1">Full time (40 hours/week)</label>
						<input class="options" type="radio" name="ques11.1" id="eleva2" value="">
							<label class="option" for="eleva2">Part time</label>
		<!-- QUESTION # 12 -->
			<div class="entry">
				<h3 class="ques_title">12. Select the minimum total number of years of experience in your field that is required to do your job.Your selection may or may not equate to your personal experience level.</h3>
			</div>
						<input class="options" type="radio" name="totnum" id="twelve1" value="">
							<label class="option" for="twelve1">No experience</label>
						<input class="options" type="radio" name="totnum" id="twelve2" value="">
							<label class="option" for="twelve2">Less than one (1) year</label>
						<input class="options" type="radio" name="totnum" id="twelve3" value="">
							<label class="option" for="twelve3">One (1) to three (3) years</label>
						<input class="options" type="radio" name="totnum" id="twelve4" value="">
							<label class="option" for="twelve4">Three (3) to six (6) years</label>
						<input class="options" type="radio" name="totnum" id="twelve5" value="">
							<label class="option" for="twelve5">More than six (6+) years</label>					
		<!-- QUESTION # 12.a -->
			<div class="entry">
				<h3 class="ques_title">12.a Why do you feel this level of experience is necessary to perform your job?</h3>
			</div>
						<textarea id="" name="ques12.1" rows="4" cols="50"></textarea>
		<!-- QUESTION # 13 -->
			<div class="entry">
				<h3 class="ques_title">13. How well did UP prepare for your current career?</h3>
			</div>
						<input class="options" type="radio" name="preparation" id="thirt1" value="">
							<label class="option" for="thirt1">Very Poorly</label>
						<input class="options" type="radio" name="preparation" id="thirt2" value="">
							<label class="option" for="thirt2">Less than adequately</label>
						<input class="options" type="radio" name="preparation" id="thirt3" value="">
							<label class="option" for="thirt3">More than adequately</label>
						<input class="options" type="radio" name="preparation" id="thirt4" value="">
							<label class="option" for="thirt4">Very well</label>
		<!-- QUESTION # 14 -->
			<div class="entry">
				<h3 class="ques_title">14. Which of the following best describes your current position?</h3>
			</div>
						<input class="options" type="radio" name="ques14" id="fourte1"  value="">
							<label class="option" for="fourte1">Entry-level</label>
						<input class="options" type="radio" name="ques14" id="fourte2" value="">
							<label class="option" for="fourte2">Supervisory</label>
						<input class="options" type="radio" name="ques14" id="fourte3" value="">
							<label class="option" for="fourte3">Executive level (except Chief Executive)</label>
						<input class="options" type="radio" name="ques14" id="fourte4" value="">
							<label class="option" for="fourte4">Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)</label>
		<!-- QUESTION # 15 -->
			<div class="entry">
				<h3 class="ques_title">15. How much does your current job involve supervising or managing the work of others?</h3>
			</div>
						<input class="options" type="radio" name="manage" id="fifteen1" value="">
							<label class="option" for="fifteen1">None at all</label>
						<input class="options" type="radio" name="manage" id="fifteen2" value="">
							<label class="option" for="fifteen2">Some of my time (up to 25% of my time)</label>
						<input class="options" type="radio" name="manage" id="fifteen3" value="">
							<label class="option" for="fifteen3">Half my time (50%)</label>
						<input class="options" type="radio" name="manage" id="fifteen4" value="">
							<label class="option" for="fifteen4">Most of my time (75% of my time)</label>
		<!-- QUESTION # 16 -->
			<div class="entry">
				<h3 class="ques_title">16. This question measures the managerial responsibility (direct and indirect) for achieving results through people. Select the single statement that best describes your job.</h3>
			</div>
						<input class="options" type="radio" name="ques16" id="sixte1" value="">
							<label class="option" for="sixte1">No supervisory or lead responsibilities.</label><br>
						<input class="options" type="radio" name="ques16" id="sixte2" value="">
							<label class="option" for="sixte2">Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions. </label><br>
						<input class="options" type="radio" name="ques16" id="sixte3" value="">
							<label class="option" for="sixte3">Direct supervision of one or more people. </label><br>
						<input class="options" type="radio" name="ques16" id="sixte4" value="">
							<label class="option" for="sixte4">Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues. </label>
		<!-- QUESTION # 17 -->
			<div class="entry">
				<h3 class="ques_title">17. Overall, how satisfied are you with your career thus far?</h3>
			</div>
						<input class="options" type="radio" name="satisfy" id="sevente1" value="">
							<label class="option" for="sevente1">Very dissatisfied </label>
						<input class="options" type="radio" name="satisfy" id="sevente2" value="">
							<label class="option" for="sevente2">Generally dissatisfied</label>
						<input class="options" type="radio" name="satisfy" id="sevente3" value="">
							<label class="option" for="sevente3">Generally satisfied</label>
						<input class="options" type="radio" name="satisfy" id="sevente4" value="">
							<label class="option" for="sevente4">Very satisfied</label>
		<!-- QUESTION # 18 -->
			<div class="entry">
				<h3 class="ques_title">18. Based on what you know now, how well do you think your undergraduate experience at UP DMCS prepared you to…</h3>
			</div>
					
					<div class="subques">1. Possess the skills and mindset to improve human life</div>
						<input class="options" type="radio" name="prepare1" id="eightea.1" value="">
							<label class="option" for="eightea.1">Very poorly </label>
						<input class="options" type="radio" name="prepare1" id="eightea.2" value="">
							<label class="option" for="eightea.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare1" id="eightea.3" value="">
							<label class="option" for="eightea.3">More than adequately</label>
						<input class="options" type="radio" name="prepare1" id="eightea.4" value="">
							<label class="option" for="eightea.4">Very well</label> <br>
					<div class="subques">2. Commit to the freedom and welfare of all </div>
						<input class="options" type="radio" name="prepare2" id="eighteb.1" value="">
							<label class="option" for="eighteb.1">Very poorly </label>
						<input class="options" type="radio" name="prepare2" id="eighteb.2" value="">
							<label class="option" for="eighteb.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare2" id="eighteb.3" value="">
							<label class="option" for="eighteb.3">More than adequately</label>
						<input class="options" type="radio" name="prepare2" id="eighteb.4" value="">
							<label class="option" for="eighteb.4">Very well</label><br>
					<div class="subques">3. Demonstrate mastery of knowledge in your specific discipline</div>
						<input class="options" type="radio" name="prepare3" id="eightec.1" value="">
							<label class="option" for="eightec.1">Very poorly </label>
						<input class="options" type="radio" name="prepare3" id="eightec.2" value="">
							<label class="option" for="eightec.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare3" id="eightec.3" value="">
							<label class="option" for="eightec.3">More than adequately</label>
						<input class="options" type="radio" name="prepare3" id="eightec.4" value="">
							<label class="option" for="eightec.4">Very well</label><br>
					<div class="subques">4. Possess breadth of mind</div>
						<input class="options" type="radio" name="prepare4" id="eighted.1" value="">
							<label class="option" for="eighted.1">Very poorly </label>
						<input class="options" type="radio" name="prepare4" id="eighted.2" value="">
							<label class="option" for="eighted.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare4" id="eighted.3" value="">
							<label class="option" for="eighted.3">More than adequately</label>
						<input class="options" type="radio" name="prepare4" id="eighted.4" value="">
							<label class="option" for="eighted.4">Very well</label><br>
					<div class="subques">5. Possess strength of character</div>
						<input class="options" type="radio" name="prepare5" id="eightee.1" value="">
							<label class="option" for="eightee.1">Very poorly </label>
						<input class="options" type="radio" name="prepare5" id="eightee.2" value="">
							<label class="option" for="seightee.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare5" id="eightee.3" value="">
							<label class="option" for="eightee.3">More than adequately</label>
						<input class="options" type="radio" name="prepare5" id="eightee.4" value="">
							<label class="option" for="eightee.4">Very well</label><br>
					<div class="subques">6. Possess generosity of spirit</div>
						<input class="options" type="radio" name="prepare6" id="eightef.1" value="">
							<label class="option" for="eightef.1">Very poorly </label>
						<input class="options" type="radio" name="prepare6" id="eightef.2" value="">
							<label class="option" for="eightef.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare6" id="eightef.3" value="">
							<label class="option" for="eightef.3">More than adequately</label>
						<input class="options" type="radio" name="prepare6" id="eightef.4" value="">
							<label class="option" for="eightef.4">Very well</label><br>
					<div class="subques">7. Inclusively engage with society and the world at large</div>
						<input class="options" type="radio" name="prepare7" id="eighteg.1" value="">
							<label class="option" for="eighteg.1">Very poorly </label>
						<input class="options" type="radio" name="prepare7" id="eighteg.2" value="">
							<label class="option" for="eighteg.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare7" id="eighteg.3" value="">
							<label class="option" for="eighteg.3">More than adequately</label>
						<input class="options" type="radio" name="prepare7" id="eighteg.4" value="">
							<label class="option" for="eighteg.4">Very well</label><br>
					<div class="subques">8. Be mindful of the needs and capabilities of people</div>
						<input class="options" type="radio" name="prepare8" id="eighteh.1" value="">
							<label class="option" for="eighteh.1">Very poorly</label> 
						<input class="options" type="radio" name="prepare8" id="eighteh.2" value="">
							<label class="option" for="eighteh.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare8" id="eighteh.3" value="">
							<label class="option" for="eighteh.3">More than adequately</label>
						<input class="options" type="radio" name="prepare8" id="eighteh.4" value="">
							<label class="option" for="eighteh.4">Very well</label><br>
					<div class="subques">9. Be sensitive to the challenges and opportunities of national development and global change</div>
						<input class="options" type="radio" name="prepare9" id="eightei.1" value="">
							<label class="option" for="eightei.1">Very poorly </label>
						<input class="options" type="radio" name="prepare9" id="eightei.2" value="">
							<label class="option" for="eightei.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare9" id="eightei.3" value="">
							<label class="option" for="eightei.3">More than adequately</label>
						<input class="options" type="radio" name="prepare9" id="eightei.4" value="">
							<label class="option" for="eightei.4">Very well</label><br>
					<div class="subques">10. Think critically</div>
						<input class="options" type="radio" name="prepare10" id="eightej.1" value="">
							<label class="option" for="eightej.1">Very poorly </label>
						<input class="options" type="radio" name="prepare10" id="eightej.2" value="">
							<label class="option" for="eightej.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare10" id="eightej.3" value="">
							<label class="option" for="eightej.3">More than adequately</label>
						<input class="options" type="radio" name="prepare10" id="eightej.4" value="">
							<label class="option" for="eightej.4">Very well</label><br>
					<div class="subques">11. Demonstrate discernment</div>
						<input class="options" type="radio" name="prepare11" id="eightek.1" value="">
							<label class="option" for="eightek.1">Very poorly </label>
						<input class="options" type="radio" name="prepare11" id="eightek.2" value="">
							<label class="option" for="eightek.2">Less than adequately</label>
						<input class="options" type="radio" name="prepare11" id="eightek.3" value="">
							<label class="option" for="eightek.3">More than adequately</label>
						<input class="options" type="radio" name="prepare11" id="eightek.4" value="">
							<label class="option" for="eightek.4">Very well</label><br>
		<!-- QUESTION # 19 -->
			<div class="entry">
				<h3 class="ques_title">19. Would you like to elaborate on how UP DMCS helped you acquire the competencies you needed?</h3>
			</div>
						<textarea id="" name="ques19" rows="10" cols="50"></textarea>
	<!-- submit button -->
			<form class="submit-button" action="alum_survey.php" method="post">
				<input type="submit" name="submit" value="Submit"/>
		<!-- DON'T MIND THIS FOR FUTURE STUFF PA DIS -->
		<!-- 	<input type="hidden" name="question_id" value="question_id"/>
				<input type="hidden" name="submitted" value="1"/> -->
			</form>
			
	</div>

		<!-- for footer/ contact details -->
		<?php include('footer.php'); ?>
	</div>
</html>
						