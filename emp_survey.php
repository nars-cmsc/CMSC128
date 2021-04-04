
<!-- Employer Satisfaction Survey Web Page-->

<!DOCTYPE html>
<html>
<head>
	<title>Employer Satisfaction Survey</title>
</head>

	<?php include('header.php'); ?><!-- for header/ navbar -->

	<div class="content">
		<h1>Employer Satisfaction Survey</h1>
		<h2>Please make sure to fill in answers to all the questions.</h2>
		<!-- QUESTION # 1 -->
			<div class="entry">
				<h3 class="ques_title">1. Which sector of economy does your company/organization belong to?</h3>
			</div>
				<input class="options" type="radio" name="sector" value="public">Public
				<input class="options" type="radio" name="sector" value="private">Private
				<input class="options" type="radio" name="sector" value="other">Others, please specify:
		<!-- QUESTION # 2 -->
			<div class="entry">
				<h3 class="ques_title">2. Where is your company/organization located?</h3>
			</div>
				<input class="options" type="radio" name="locale" value="philippines">Philippines
				<input class="options" type="radio" name="locale" value="abroad">Abroad
		<!-- QUESTION # 3 -->
			<div class="entry">
				<h3 class="ques_title">2.1. If you answered “Abroad”, please specify the region and sub-region based on the United Nations Geographic Regions:</h3>
			</div>
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
		<!-- QUESTION # 4 -->
			<div class="entry">
				<h3 class="ques_title">3. Which industry and business does your company/organization belong to?</h3>
			</div>
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
		<!-- QUESTION # 5 -->
			<div class="entry">
				<h3 class="ques_title">4. What is your position in your company/organization?</h3>
			</div>
				<input class="options" type="radio" name="position" value="">Chief level – General Manager/President/CEO<br>
				<input class="options" type="radio" name="position" value="">Supervisory – Director/Managing Director/Supervisor<br>
				<input class="options" type="radio" name="position" value="">Rank and file
		<!-- QUESTION # 6 -->
			<div class="entry">
				<h3 class="ques_title">5. How many UP graduates are employed in your company/organization?</h3>
			</div>
				<input type="text" name="num_grad" id="">
		<!-- QUESTION # 7 -->
			<div class="entry">
				<h3 class="ques_title">6. How much do you agree or disagree with this statement: “UP graduates recruited in the last three to five years have the skills to work in my company/organization.”?</h3>
			</div>
				<input class="options" type="radio" name="workskill" value="">Strongly Disagree
				<input class="options" type="radio" name="workskill" value="">Disagree
				<input class="options" type="radio" name="workskill" value="">Agree
				<input class="options" type="radio" name="workskill" value="">Strongly Agree
		<!-- QUESTION # 8 -->
			<div class="entry">
				<h3 class="ques_title">7. Rate the importance of each skill when hiring new staff. Then rate your satisfaction on how well these are demonstrated by your staff who are UP graduates. Kindly encircle your ratings.</h3>
			</div>
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
		<!-- QUESTION # 9 -->
			<div class="entry">
				<h3 class="ques_title">8. Based on your experience with the staff, how LIKELY are you to hire other graduates of UP?</h3>
			</div>
				<input class="options" type="radio" name="ques9" value="">Very Unlikely
				<input class="options" type="radio" name="ques9" value="">Unlikely
				<input class="options" type="radio" name="ques9" value="">Likely
				<input class="options" type="radio" name="ques9" value="">Very Likely
		<!-- QUESTION # 10 -->		
			<div class="entry">
				<h3 class="ques_title">9. Based on your experience with the staff how likely are you going to keep the UP graduates in your company/organization?</h3>
			</div>
				<input class="options" type="radio" name="ques10" value="">Very Unlikely
				<input class="options" type="radio" name="ques10" value="">Unlikely
				<input class="options" type="radio" name="ques10" value="">Likely
				<input class="options" type="radio" name="ques10" value="">Very Likely
		<!-- QUESTION # 11 -->
			<div class="entry">
				<h3 class="ques_title">10. Rate the importance of each item to the successful performance of the job for which your staff, who are UP graduates, were hired. Then, rate your satisfaction on how well these are demonstrated.</h3>
			</div>
				INSERT LIST OF SPECIALIZED DMCS SKILLS
		<!-- QUESTION # 12 -->
			<div class="entry">
				<h3 class="ques_title">11. Which actions should UP take in order to improve the skill and competency set of its graduates? Check all that apply.</h3>
			</div>
				<input type="checkbox" id="" name="" value="">Design courses that are more relevant to the needs of employers<br>
				<input type="checkbox" id="" name="" value="">Include practical experience as part of the academic programs<br>
				<input type="checkbox" id="" name="" value="">Include sector specific job placements as an integral part of the degree program<br>
				<input type="checkbox" id="" name="" value="">Provide better post-graduation support (facilitate relations between graduates and companies/organizations)<br>
				<input type="checkbox" id="" name="" value="">Others, please specify
				<input type="text" id="" name="">
		<!-- QUESTION # 13 -->
			<div class="entry">
				<h3 class="ques_title">12. How important is UP cooperation for your company/organization? Please rate the importance of cooperating with UP in the design of curricula and study programs.</h3>
			</div>
				<input class="options" type="radio" name="ques13" value="">Unimportant
				<input class="options" type="radio" name="ques13" value="">Of Little Importance
				<input class="options" type="radio" name="ques13" value="">Moderately part Important
				<input class="options" type="radio" name="ques13" value="">Important
		<!-- QUESTION # 14 -->
			<div class="entry">
				<h3 class="ques_title">13. Do you have any other comments or suggestions as to how UP can improve the skill and competency set of its graduates?</h3>
			</div>
				<textarea id="" name="ques14" rows="4" cols="50"></textarea>
		<!-- QUESTION # 15 -->
			<div class="entry">
				<h3 class="ques_title">14. If any, what are specific complaints about the graduates? (Write "NA" if not applicable)</h3>
			</div>
				<textarea id="" name="ques15" rows="4" cols="50"></textarea>
		<!-- QUESTION # 16 -->
			<div class="entry">
				<h3 class="ques_title">15. Are specific strengths of the graduates appreciated? If yes, what are these strengths? (Write "NA" if not applicable)</h3>
			</div>
				<textarea id="" name="ques16" rows="4" cols="50"></textarea>
		<!-- QUESTION # 17 -->
			<div class="entry">
				<h3 class="ques_title">16. Would you like to elaborate on any of your answers/ratings above? Please indicate the numbers or items you are discussing. (Write "None" if you don't want to elaborate any.)</h3>
			</div>
				<textarea id="" name="ques17" rows="4" cols="50"></textarea>
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
						