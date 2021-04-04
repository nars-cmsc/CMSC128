<!-- University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey-->

<!DOCTYPE html>
<html>
<head>
	<title>University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey</title>
</head>

	<!-- for header/ navbar  <php include('header.php'); > Lagyan ng question mark -->

	<div class="content">
		<h1>University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey</h1>
		<h2>Please make sure to fill in answers to all the questions.</h2>
		<!-- QUESTION # 1 -->
			<div class="entry">
				<h3 class="ques_title">1. Sex at birth: </h3>
			</div>
						<input class="options" type="radio" name="sex" value="female">Female
						<input class="options" type="radio" name="sex" value="male">Male
		<!-- QUESTION # 2 -->
			<div class="entry">
				<h3 class="ques_title">2. In which country do you presently reside or work for most of the year (more than 6 months)? </h3>
			</div>
						<textarea id="" name="ques2" rows="4" cols="50"></textarea>
		<!-- QUESTION # 3 -->
			<div class="entry">
				<h3 class="ques_title">3. Overall, how satisfied are you with your undergraduate education at UP?</h3>
			</div>					
						<input class="options" type="radio" name="satisfaction" value="">Very Dissatisfied
						<input class="options" type="radio" name="satisfaction" value="">Generally Dissatisfied
						<input class="options" type="radio" name="satisfaction" value="">Generally Satisfied
						<input class="options" type="radio" name="satisfaction" value="">Very Satisfied
		<!-- QUESTION # 4 -->
			<div class="entry">
				<h3 class="ques_title">4. How long after graduation were you able to get your first job?</h3>
			</div>
						<input class="options" type="radio" name="time" value="">I got a job while still in college
						<input class="options" type="radio" name="time" value="">2 months or less
						<input class="options" type="radio" name="time" value="">3 to 6 months
						<input class="options" type="radio" name="time" value="">7 months to 1 year
						<input class="options" type="radio" name="time" value="">1 to 2 years
						<input class="options" type="radio" name="time" value="">More than 2 years
						<input class="options" type="radio" name="time" value="">I am not sure.
		<!-- QUESTION # 5 -->
			<div class="entry">
				<h3 class="ques_title">5. Are you employed right now? 	</h3>
			</div>
						<input class="options" type="radio" name="currentemployment" value="">Yes
						<input class="options" type="radio" name="currentemployment" value="">No
		<!-- QUESTION # 5.a -->
			<div class="entry">
				<h3 class="ques_title">5.a If you answered Yes, how would you characterize your employment?	</h3>
			</div>
						<input class="options" type="radio" name="charemployment" value="">Full time (40 hours/week)
						<input class="options" type="radio" name="charemployment" value="">Part time
						<input class="options" type="radio" name="charemployment" value="">Self-employed
		<!-- QUESTION # 5.b -->
			<div class="entry">
				<h3 class="ques_title">5.b If you answered No, are you looking for employment at this time?	</h3>
			</div>
						<input class="options" type="radio" name="employmentnow" value="">Yes
						<input class="options" type="radio" name="employmentnow" value="">No
		<!-- QUESTION # 5.c -->
			<div class="entry">
				<h3 class="ques_title">If you answered 5.a., which industry best describes your employer or occupation? Drop-down menu of the following choices	</h3>
			</div>
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
		<!-- QUESTION # 6 -->
			<div class="entry">
				<h3 class="ques_title">6. Select the minimum level of education required to perform your job (not necessarily your education level)	</h3>
			</div>
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
		<!-- QUESTION # 7 -->
			<div class="entry">
				<h3 class="ques_title">7. Select the preferred (but not required) level of education or training</h3>
			</div>
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
		<!-- QUESTION # 8 -->
			<div class="entry">
				<h3 class="ques_title">8. Whether or not you are currently employed, what is your principal occupation category?</h3>
			</div>
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
		<!-- QUESTION # 9 -->
			<div class="entry">
				<h3 class="ques_title">9. Is your current position related to your undergraduate field(s) of study?</h3>
			</div>
						<input class="options" type="radio" name="currentpos" value="">Yes, it is the same field as my major/s
						<input class="options" type="radio" name="currentpos" value="">Yes, it is related to my major/s
						<input class="options" type="radio" name="currentpos" value="">No, it is not related
		<!-- QUESTION # 10 Temp--> 
			<div class="entry">
				<h3 class="ques_title">10. In the order of importance, list your major job duties and the percentage of time you spend on each. Think back on the past 12 months to make sure you capture all key responsibilities. The total percentage of time spent must not exceed 100 but may be less since you are not to list all duties.</h3>
			</div>
		<!-- QUESTION # 11 -->
			<div class="entry">
				<h3 class="ques_title">11. Do you currently work for a national or local NGO or civic organization, as a paid volunteer for more than 10 hours per week?	</h3>
			</div>
						<input class="options" type="radio" name="ques11" value="">Yes
						<input class="options" type="radio" name="ques11" value="">No
		<!-- QUESTION # 11.a -->
			<div class="entry">
				<h3 class="ques_title">11.a If you answered Yes, how would you characterize this service of volunteer work?</h3>
			</div>
						<input class="options" type="radio" name="ques11.1" value="">Full time (40 hours/week) 
						<input class="options" type="radio" name="ques11.1" value="">Part time
		<!-- QUESTION # 12 -->
			<div class="entry">
				<h3 class="ques_title">12. Select the minimum total number of years of experience in your field that is required to do your job.Your selection may or may not equate to your personal experience level.</h3>
			</div>
						<input class="options" type="radio" name="totnum" value="">No experience
						<input class="options" type="radio" name="totnum" value="">Less than one (1) year
						<input class="options" type="radio" name="totnum" value="">One (1) to three (3) years
						<input class="options" type="radio" name="totnum" value="">Three (3) to six (6) years
						<input class="options" type="radio" name="totnum" value="">More than six (6+) years						
		<!-- QUESTION # 12.a -->
			<div class="entry">
				<h3 class="ques_title">12.a Why do you feel this level of experience is necessary to perform your job?</h3>
			</div>
						<textarea id="" name="ques12.1" rows="4" cols="50"></textarea>
		<!-- QUESTION # 13 -->
			<div class="entry">
				<h3 class="ques_title">13. How well did UP prepare for your current career?</h3>
			</div>
						<input class="options" type="radio" name="preparation" value="">Very Poorly
						<input class="options" type="radio" name="preparation" value="">Less than adequately
						<input class="options" type="radio" name="preparation" value="">More than adequately
						<input class="options" type="radio" name="preparation" value="">Very well
		<!-- QUESTION # 14 -->
			<div class="entry">
				<h3 class="ques_title">14. Which of the following best describes your current position?</h3>
			</div>
						<input class="options" type="radio" name="ques14" value="">Entry-level
						<input class="options" type="radio" name="ques14" value="">Supervisory 
						<input class="options" type="radio" name="ques14" value="">Executive level (except Chief Executive)
						<input class="options" type="radio" name="ques14" value="">Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)
		<!-- QUESTION # 15 -->
			<div class="entry">
				<h3 class="ques_title">15. How much does your current job involve supervising or managing the work of others?</h3>
			</div>
						<input class="options" type="radio" name="manage" value="">None at all   
						<input class="options" type="radio" name="manage" value="">Some of my time (up to 25% of my time)
						<input class="options" type="radio" name="manage" value="">Half my time (50%)
						<input class="options" type="radio" name="manage" value="">Most of my time (75% of my time)
		<!-- QUESTION # 16 -->
			<div class="entry">
				<h3 class="ques_title">16. This question measures the managerial responsibility (direct and indirect) for achieving results through people. Select the single statement that best describes your job.</h3>
			</div>
						<input class="options" type="radio" name="ques16" value="">No supervisory or lead responsibilities. <br>
						<input class="options" type="radio" name="ques16" value="">Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions. <br>
						<input class="options" type="radio" name="ques16" value="">Direct supervision of one or more people. <br>
						<input class="options" type="radio" name="ques16" value="">Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues. 
		<!-- QUESTION # 17 -->
			<div class="entry">
				<h3 class="ques_title">17. Overall, how satisfied are you with your career thus far?</h3>
			</div>
						<input class="options" type="radio" name="satisfy" value="">Very dissatisfied  
						<input class="options" type="radio" name="satisfy" value="">Generally dissatisfied
						<input class="options" type="radio" name="satisfy" value="">Generally satisfied
						<input class="options" type="radio" name="satisfy" value="">Very satisfied
		<!-- QUESTION # 18 -->
			<div class="entry">
				<h3 class="ques_title">18. Based on what you know now, how well do you think your undergraduate experience at UP DMCS prepared you to…</h3>
			</div>
					
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
		<!-- QUESTION # 19 -->
			<div class="entry">
				<h3 class="ques_title">19. Would you like to elaborate on how UP DMCS helped you acquire the competencies you needed?</h3>
			</div>
						<textarea id="" name="ques19" rows="10" cols="50"></textarea>
	<!-- submit button -->
		<form action="emp_survey.php" method="post">
			<input type="submit" name="submit" value="Submit"/>
	<!-- DON'T MIND THIS FOR FUTURE STUFF PA DIS -->
	<!-- 	<input type="hidden" name="question_id" value="question_id"/>
			<input type="hidden" name="submitted" value="1"/> -->
		</form>
	</div>
<!-- for footer/ contact details -->
<!-- <?php //include('footer.php'); ?>-->
</html>
						