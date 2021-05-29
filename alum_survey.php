<!-- University of the Philippines Baguio Department of Mathematics and Computer Science Alumni Survey-->
<?php 
include_once  ('controllers/alum_submit.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
	header('location:login.php');
	exit();
}

// if user is not an alum but an employer
if ($_SESSION['role'] == 2) {
    header('location: emp_survey.php');
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
	<script type="text/javascript" src="js/slideshow.js"></script>
	<title>Alumni Survey - UPB DMCS</title>
</head>
	<!-- for header/ navbar    -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->

	<div class="content-alum">
		<form class="alum-form" action="alum_survey.php" method="post">
			<h1>Alumni Survey</h1>
			<h2>Please make sure to fill in answers to all the questions.</h2>
			<!-- error alert -->
			<?php if (count($errors) > 0): ?>
				<div class="alert">
					<?php foreach ($errors as $error): ?>
						<?php echo $error; ?><br>
					<?php endforeach; ?>	
				</div>
			<?php endif;?>

			<div class="questions-container">
				<div class="dot-navigation">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
					<span class="dot" onclick="currentSlide(6)"></span>
					<span class="dot" onclick="currentSlide(7)"></span>
					<span class="dot" onclick="currentSlide(8)"></span>
					<span class="dot" onclick="currentSlide(9)"></span>
					<span class="dot" onclick="currentSlide(10)"></span>
					<span class="dot" onclick="currentSlide(11)"></span>
					<span class="dot" onclick="currentSlide(12)"></span>
				</div>

				<div class="Slides" style="display:block;">
					<div class="numbertext">1 / 12</div>
					<!-- QUESTION # 1 -->
					<div class="entry">
						<input type="hidden" name="one" value="1">
						<h3 class="ques_title">1. Sex at birth: </h3>
					</div>
					<input class="options" type="radio" name="ques1" id="one1" value="Female">
						<label class="option" for="one1">Female</label>
					<input class="options" type="radio" name="ques1" id="one2" value="Male">
						<label class="option" for="one2">Male</label>	
						
					<!-- QUESTION # 2 -->
					<div class="entry">
						<input type="hidden" name="two" value="2">
						<h3 class="ques_title">2. In which country do you presently reside or work for most of the year (more than 6 months)? </h3>
					</div>						
					<select name="ques2" id="ques2">
					<option value="none" selected disabled >
						Select country
					</option>
					<?php foreach ($ques2_arr as $ques2_el): ?>
								<option value="<?php echo $ques2_el; ?>">
									<?php echo $ques2_el; ?>
							</option><br>
							<?php endforeach; ?>
					</select>
				</div>
			
		
	<div class="Slides">
		<div class="numbertext">2 / 12</div>	
		<!-- QUESTION # 3 -->
			<div class="entry">
				<input type="hidden" name="three" value="3">
				<h3 class="ques_title">3. Overall, how satisfied are you with your undergraduate education at UP?</h3>
			</div>					
						<input class="options" type="radio" name="ques3" id="three1" value="Very Dissatisfied">
							<label class="option" for="three1">Very Dissatisfied</label><br>
						<input class="options" type="radio" name="ques3" id="three2" value="Generally Dissatisfied">
							<label class="option" for="three2">Generally Dissatisfied</label><br>
						<input class="options" type="radio" name="ques3" id="three3" value="Generally Satisfied">
							<label class="option" for="three3">Generally Satisfied</label><br>
						<input class="options" type="radio" name="ques3" id="three4" value="Very Satisfied">
							<label class="option" for="three4">Very Satisfied</label><br>
	</div>	


	<div class="Slides">
		<div class="numbertext">3 / 12</div>
		<!-- QUESTION # 4 -->
			<div class="entry">
				<input type="hidden" name="four" value="4">
				<h3 class="ques_title">4. How long after graduation were you able to get your first job?</h3>
			</div>
						<input class="options" type="radio" name="ques4" id="four1" value="I got a job while still in college">
							<label class="option" for="four1">I got a job while still in college</label><br>
						<input class="options" type="radio" name="ques4" id="four2" value="2 months or less">
							<label class="option" for="four2">2 months or less</label><br>
						<input class="options" type="radio" name="ques4" id="four3" value="3 to 6 months">
							<label class="option" for="four3">3 to 6 months</label><br>
						<input class="options" type="radio" name="ques4" id="four4" value="7 months to 1 year">
							<label class="option" for="four4">7 months to 1 year</label><br>
						<input class="options" type="radio" name="ques4" id="four5" value="1 to 2 years">
							<label class="option" for="four5">1 to 2 years</label><br>
						<input class="options" type="radio" name="ques4" id="four6" value="More than 2 years">
							<label class="option" for="four6">More than 2 years</label><br>
						<input class="options" type="radio" name="ques4" id="four7" value="I am not sure">
							<label class="option" for="four7">I am not sure</label><br>
		<!-- QUESTION # 5 -->
			<div class="entry">
				<input type="hidden" name="five" value="5">
				<h3 class="ques_title">5. Are you employed right now? </h3>
			</div>
						<input class="options" type="radio" name="ques5" id="five1" onclick="$('#five_a, #five_c').show(); $('#five_b').hide();" value="Yes">
							<label class="option" for="five1">Yes</label>
						<input class="options" type="radio" name="ques5" id="five2" onclick="$('#five_b').show(); $('#five_a, #five_c').hide();" value="No">
							<label class="option" for="five2">No</label>
				<br>
			
		<!-- QUESTION # 5.a -->
						<div id="five_a" style="display: none;">
						<h3 class="ques_title">5.a If you answered Yes, how would you characterize your employment?</h3>
						<input class="options" type="radio" name="ques5_1" id="fivea1" value="Full time (40 hours/week)">
							<label class="option" for="fivea1">Full time (40 hours/week)</label>
						<input class="options" type="radio" name="ques5_1" id="fivea2" value="Part time">
							<label class="option" for="fivea2">Part time</label>
						<input class="options" type="radio" name="ques5_1" id="fivea3" value="Self-employed">
							<label class="option" for="fivea3">Self-employed</label>
						</div>
		<!-- QUESTION # 5.b -->
						<div id="five_b" style="display: none;">
						<h3 class="ques_title">5.b If you answered No, are you looking for employment at this time?</h3>
						<input class="options" type="radio" name="ques5_2" id="fiveb1" value="Yes">
							<label class="option" for="fiveb1">Yes</label>
						<input class="options" type="radio" name="ques5_2" id="fiveb2" value="No">
							<label class="option" for="fiveb2">No</label>
						</div>
		<!-- QUESTION # 5.c --> 
			<div id="five_c" style="display: none;">
			<h3 class="ques_title">If you answered 5.a., which industry best describes your employer or occupation? Drop-down menu of the following choices	</h3>
				<select name="ques5c" id="ques5c" onchange="other_txt5();">
					<option value="none" selected disabled >
						Select industry and business
					</option>
					<?php foreach ($ques5c_arr as $ques5c_el): ?>
								<option value="<?php echo $ques5c_el; ?>">
									<?php echo $ques5c_el; ?>
							</option><br>
							<?php endforeach; ?>
				<option value="other">Others, please specify:</option>
				</select>
				<input type="text" name="ques5c_other" id="ques5c_other" style="display:none;"
				placeholder="Type other industry and business here..." pattern="[a-zA-Z\s]+" title="Letters only (A-Z) or (a-z)"
				minlength="7" />
				</div>
	</div>


	<div class="Slides">
		<div class="numbertext">4 / 12</div>
		<!-- QUESTION # 6 -->
			<div class="entry">
				<input type="hidden" name="six" value="6">
				<h3 class="ques_title">6. Select the minimum level of education required to perform your job (not necessarily your education level)	</h3>
			</div>
						<input class="options" type="radio" name="ques6" id="six1" onclick="$('#sixothers').hide(); $('#sixacademicfield').hide();" value="High school">
							<label class="option" for="six1">High school</label><br>
						<input class="options" type="radio" name="ques6" id="six2" onclick="$('#sixothers').hide(); $('#sixacademicfield').hide();" value="Some college">
							<label class="option" for="six2">Some college</label><br>
						<input class="options" type="radio" name="ques6" id="six3" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Associate’s degree">
							<label class="option" for="six3">Associate’s degree</label><br>
						<input class="options" type="radio" name="ques6" id="six4" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Bachelor’s degree">
							<label class="option" for="six4">Bachelor’s degree</label><br>
						<input class="options" type="radio" name="ques6" id="six5" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Master’s degree">
							<label class="option" for="six5">Master’s degree</label><br>
						<input class="options" type="radio" name="ques6" id="six6" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Doctoral degree">
							<label class="option" for="six6">Doctoral degree </label><br>
						<input class="options" type="radio" name="ques6" id="six7" onclick="$('#sixothers').show(); $('#sixacademicfield').hide();" value="Other"> <!-- Kung ano mang value nito. Search it. -->
							<label class="option" for="six7">Others (e,g. training, certifications):</label> <br>
								
						<div id="sixacademicfield" style="display: none;">
						<p class="ques_title">Academic Field:</p>
						<textarea id="" name="ques6_acadfield" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"></textarea>
						</div>
						
						<div id="sixothers" style="display: none;">
						<textarea id="" name="ques6_others" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"></textarea>
						</div>
	</div>
				
	
	<div class="Slides">
		<div class="numbertext">5 / 12</div>
		<!-- QUESTION # 7 -->
			<div class="entry">
				<input type="hidden" name="seven" value="7">
				<h3 class="ques_title">7. Select the preferred (but not required) level of education or training</h3>
			</div>
						<input class="options" type="radio" name="ques7" id="seven1" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').hide();" value="High school">
							<label class="option" for="seven1">High school</label><br>
						<input class="options" type="radio" name="ques7" id="seven2" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').hide();" value="Some college">
							<label class="option" for="seven2">Some college</label><br>
						<input class="options" type="radio" name="ques7" id="seven3" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Associate’s degree">
							<label class="option" for="seven3">Associate’s degree</label><br>
						<input class="options" type="radio" name="ques7" id="seven4" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Bachelor’s degree">
							<label class="option" for="seven4">Bachelor’s degree</label><br>
						<input class="options" type="radio" name="ques7" id="seven5" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Master’s degree">
							<label class="option" for="seven5">Master’s degree</label><br>
						<input class="options" type="radio" name="ques7" id="seven6" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Doctoral degree">
							<label class="option" for="seven6">Doctoral degree</label><br>
						<input class="options" type="radio" name="ques7" id="seven7" onclick="$('#sevenothers').show(); $('#sevenacademicfield').hide();" value="Other"> <!-- Kung ano mang value nito. Search it. -->
							<label class="option" for="seven7">Others (e,g. training, certifications):</label><br>
						
						<div id="sevenacademicfield" style="display: none;">
						<p class="ques_title">Academic Field:</p>
						<textarea id="" name="ques7_acadfield" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"></textarea>
						</div>
						
						<div id="sevenothers" style="display: none;">
						<textarea id="" name="ques7_others" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"></textarea>
						</div>
	</div>
		
	
	<div class="Slides">
		<div class="numbertext">6 / 12</div>
		<!-- QUESTION # 8 -->
			<div class="entry">
				<input type="hidden" name="eight" value="8">
				<h3 class="ques_title">8. Whether or not you are currently employed, what is your principal occupation category?</h3>
			</div>						
					<select name="ques8" id="ques8">
					<option value="none" selected disabled >
						Select principal occupation category
					</option>
					<?php foreach ($ques8_arr as $ques8_el): ?>
								<option value="<?php echo $ques8_el; ?>">
									<?php echo $ques8_el; ?>
							</option><br>
							<?php endforeach; ?>
					</select>
		<!-- QUESTION # 9 -->
			<div class="entry">
				<input type="hidden" name="nine" value="9">
				<h3 class="ques_title">9. Is your current position related to your undergraduate field(s) of study?</h3>
			</div>
						<input class="options" type="radio" name="ques9" id="nine1" value="Yes, it is the same field as my major/s">
							<label class="option" for="nine1">Yes, it is the same field as my major/s</label><br>
						<input class="options" type="radio" name="ques9" id="nine2" value="Yes, it is related to my major/s">
							<label class="option" for="nine2">Yes, it is related to my major/s</label><br>
						<input class="options" type="radio" name="ques9" id="nine3" value="No, it is not related">
							<label class="option" for="nine3">No, it is not related</label><br>
	</div>


	<div class="Slides">
				<div class="numbertext">7 / 12</div>
		<!-- QUESTION # 10 Fucked up pa number 10--> 
			<div class="entry">
				<input type="hidden" name="ten" value="10">
				<h3 class="ques_title">10. In the order of importance, list 5 of your major job duties and the percentage of time you spend on each. Think back on the past 12 months to make sure you capture all key responsibilities. The total percentage of time spent must not exceed 100 but may be less since you are not to list all duties.</h3>
			</div>
				<table class="a-q10" border="0">
					
					<tr>
						<td>
									<input type="text" name="ques10_a" placeholder="Type your major job duties here"/><br>
						</td>
						<td>
									<input type="number" min="0" step="1" name="ques10_1" placeholder="Input must not exceed to 100 %"/><br>
						</td>
					</tr>
					<tr>
						<td>
									<input type="text" name="ques10_b" placeholder="Type your major job duties here"/><br>
						</td>
						<td>
									<input type="number" min="0" step="1" name="ques10_2" placeholder="Input must not exceed to 100 %"/><br>
						</td>
					</tr>
					<tr>
						<td>
									<input type="text" name="ques10_c" placeholder="Type your major job duties here"/><br>
						</td>
						<td>
									<input type="number" min="0" step="1" name="ques10_3" placeholder="Input must not exceed to 100 %"/><br>
						</td>
					</tr>
					<tr>
						<td>
									<input type="text" name="ques10_d" placeholder="Type your major job duties here"/><br>
						</td>
						<td>
									<input type="number" min="0" step="1" name="ques10_4" placeholder="Input must not exceed to 100 %"/><br>
						</td>
					</tr>
					<tr>
						<td>
									<input type="text" name="ques10_e" placeholder="Type your major job duties here"/><br>
						</td>
						<td>
									<input type="number" min="0" step="1" name="ques10_5" placeholder="Input must not exceed to 100 %"/><br>
						</td>
					</tr>
				</table>
	</div>


	<div class="Slides">
		<div class="numbertext">8 / 12</div>
		<!-- QUESTION # 11 -->
			<div class="entry">
				<input type="hidden" name="eleven" value="11">
				<h3 class="ques_title">11. Do you currently work for a national or local NGO or civic organization, as a paid volunteer for more than 10 hours per week?	</h3>
			</div>
						<input class="options" type="radio" name="ques11" id="eleven1" onclick="$('#eleven_a').show();" value="Yes">
							<label class="option" for="eleven1">Yes</label>
						<input class="options" type="radio" name="ques11" id="eleven2" onclick="$('#eleven_a').hide();"value="No">
							<label class="option" for="eleven2">No</label>
		<!-- QUESTION # 11.a -->
			<div id="eleven_a" style="display: none;">
				<h3 class="ques_title">11.a How would you characterize this service of volunteer work?</h3>
			
						<input class="options" type="radio" name="ques11_1" id="elevena1" value="Full time (40 hours/week)">
							<label class="option" for="elevena1">Full time (40 hours/week)</label>
						<input class="options" type="radio" name="ques11_1" id="elevena2" value="Part time">
							<label class="option" for="elevena2">Part time</label>
			</div>
		<!-- QUESTION # 12 -->
			<div class="entry">
				<input type="hidden" name="twelve" value="12">
				<h3 class="ques_title">12. Select the minimum total number of years of experience in your field that is required to do your job.Your selection may or may not equate to your personal experience level.</h3>
			</div>
						<input class="options" type="radio" name="ques12" id="twelve1" onclick="$('#twelve_a').show();" value="No experience">
							<label class="option" for="twelve1">No experience</label><br>
						<input class="options" type="radio" name="ques12" id="twelve2" onclick="$('#twelve_a').show();" value="Less than one (1) year">
							<label class="option" for="twelve2">Less than one (1) year</label><br>
						<input class="options" type="radio" name="ques12" id="twelve3" onclick="$('#twelve_a').show();" value="One (1) to three (3) years">
							<label class="option" for="twelve3">One (1) to three (3) years</label><br>
						<input class="options" type="radio" name="ques12" id="twelve4" onclick="$('#twelve_a').show();" value="Three (3) to six (6) years">
							<label class="option" for="twelve4">Three (3) to six (6) years</label><br>
						<input class="options" type="radio" name="ques12" id="twelve5" onclick="$('#twelve_a').show();" value="More than six (6+) years">
							<label class="option" for="twelve5">More than six (6+) years</label><br>				
		<!-- QUESTION # 12.a -->
				<div id="twelve_a" style="display: none;">
				<h3 class="ques_title">12.a Why do you feel this level of experience is necessary to perform your job?</h3>
				
						<textarea id="" name="ques12_1" rows="4" cols="50" style="resize: none;" 
						placeholder="Type your thoughts here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea> <!-- can still accept underscore and numbers -->
				</div>
	</div>


	<div class="Slides">
		<div class="numbertext">9 / 12</div>
		<!-- QUESTION # 13 -->
			<div class="entry">
				<input type="hidden" name="thirteen" value="13">
				<h3 class="ques_title">13. How well did UP prepare for your current career?</h3>
			</div>
						<input class="options" type="radio" name="ques13" id="thirteen1" value="Very Poorly">
							<label class="option" for="thirteen1">Very Poorly</label><br>
						<input class="options" type="radio" name="ques13" id="thirteen2" value="Less than adequately">
							<label class="option" for="thirteen2">Less than adequately</label><br>
						<input class="options" type="radio" name="ques13" id="thirteen3" value="More than adequately">
							<label class="option" for="thirteen3">More than adequately</label><br>
						<input class="options" type="radio" name="ques13" id="thirteen4" value="Very well">
							<label class="option" for="thirteen4">Very well</label><br>
		<!-- QUESTION # 14 -->
			<div class="entry">
				<input type="hidden" name="fourteen" value="14">
				<h3 class="ques_title">14. Which of the following best describes your current position?</h3>
			</div>
						<input class="options" type="radio" name="ques14" id="fourteen1"  value="Entry-level">
							<label class="option" for="fourteen1">Entry-level</label><br>
						<input class="options" type="radio" name="ques14" id="fourteen2" value="Supervisory">
							<label class="option" for="fourteen2">Supervisory</label><br>
						<input class="options" type="radio" name="ques14" id="fourteen3" value="Executive level (except Chief Executive)">
							<label class="option" for="fourteen3">Executive level (except Chief Executive)</label><br>
						<input class="options" type="radio" name="ques14" id="fourteen4" value="Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)">
							<label class="option" for="fourteen4">Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)</label><br>
	</div>
		
		
	<div class="Slides">
				<div class="numbertext">10 / 12</div>
		<!-- QUESTION # 15 -->
			<div class="entry">
				<input type="hidden" name="fifteen" value="15">
				<h3 class="ques_title">15. How much does your current job involve supervising or managing the work of others?</h3>
			</div>
						<input class="options" type="radio" name="ques15" id="fifteen1" value="None at all">
							<label class="option" for="fifteen1">None at all</label><br>
						<input class="options" type="radio" name="ques15" id="fifteen2" value="Some of my time (up to 25% of my time)">
							<label class="option" for="fifteen2">Some of my time (up to 25% of my time)</label><br>
						<input class="options" type="radio" name="ques15" id="fifteen3" value="Half my time (50%)">
							<label class="option" for="fifteen3">Half my time (50%)</label><br>
						<input class="options" type="radio" name="ques15" id="fifteen4" value="Most of my time (75% of my time)">
							<label class="option" for="fifteen4">Most of my time (75% of my time)</label><br>
		<!-- QUESTION # 16 -->
			<div class="entry">
				<input type="hidden" name="sixteen" value="16">
				<h3 class="ques_title">16. This question measures the managerial responsibility (direct and indirect) for achieving results through people. Select the single statement that best describes your job.</h3>
			</div>
						<input class="options" type="radio" name="ques16" id="sixteen1" value="No supervisory or lead responsibilities.">
							<label class="option" for="sixteen1">No supervisory or lead responsibilities.</label><br>
						<input class="options" type="radio" name="ques16" id="sixteen2" value="Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.">
							<label class="option" for="sixteen2">Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions. </label><br>
						<input class="options" type="radio" name="ques16" id="sixteen3" value="Direct supervision of one or more people.">
							<label class="option" for="sixteen3">Direct supervision of one or more people. </label><br>
						<input class="options" type="radio" name="ques16" id="sixteen4" value="Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.">
							<label class="option" for="sixteen4">Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues. </label>	
		<!-- QUESTION # 17 -->
			<div class="entry">
				<input type="hidden" name="seventeen" value="17">
				<h3 class="ques_title">17. Overall, how satisfied are you with your career thus far?</h3>
			</div>
						<input class="options" type="radio" name="ques17" id="seventeen1" value="Very dissatisfied ">
							<label class="option" for="seventeen1">Very dissatisfied </label><br>
						<input class="options" type="radio" name="ques17" id="seventeen2" value="Generally dissatisfied">
							<label class="option" for="seventeen2">Generally dissatisfied</label><br>
						<input class="options" type="radio" name="ques17" id="seventeen3" value="Generally satisfied">
							<label class="option" for="seventeen3">Generally satisfied</label><br>
						<input class="options" type="radio" name="ques17" id="seventeen4" value="Very satisfied">
							<label class="option" for="seventeen4">Very satisfied</label><br>
	</div>


<div class="Slides">
		<div class="numbertext">11 / 12</div>
		<!-- QUESTION # 18 -->
			<div class="entry">
				<input type="hidden" name="eighteen" value="18">
				<h3 class="ques_title">18. Based on what you know now, how well do you think your undergraduate experience at UP DMCS prepared you to…</h3>
			</div>
			<table class="a-q18" border="0">
					<tr>
						<th></th>
						<th>Very poorly</th>
						<th>Less than adequately</th>
						<th>More than adequately</th>
						<th>Very well</th>
					</tr>
					<?php $i = 0; foreach ($ques18_arr as $ques18_to): ?>
					<tr>
						<?php $i++; ?>
						<td style="text-align:left;width:40%;">
							<?php echo $ques18_to; ?>
						</td>

						<td style="width:10%;">
							<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'Very poorly';?>" id=""/>
						</td>

						<td style="width:10%;">
							<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'Less than adequately';?>" id=""/>
						</td>

						<td style="width:10%;">
							<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'More than adequately';?>" id=""/>
						</td>

						<td style="width:10%;">
							<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'Very well';?>" id=""/>
						</td>
					<tr>
					<?php endforeach; ?>
				</table>
	</div>		
	
	
	<div class="Slides">
		<div class="numbertext">12 / 12</div>
		<!-- QUESTION # 19 -->
			<div class="entry">
				<input type="hidden" name="nineteen" value="19">
				<h3 class="ques_title">19. Would you like to elaborate on how UP DMCS helped you acquire the competencies you needed?</h3>
			</div>
						<input class="options" type="radio" name="ques19" id="eleven1" onclick="$('#nineteen_txt').show();" value="Yes">
							<label class="option" for="nineteen1">Yes</label>
						<input class="options" type="radio" name="ques19" id="eleven2" onclick="$('#nineteen_txt').hide();"value="No">
							<label class="option" for="nineteen2">No</label>
							
				<div id="nineteen_txt" style="display: none;">
						<textarea id="" name="ques19_ytxt" rows="4" cols="50" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea> <!-- can still accept underscore and numbers -->
						</div>
		</div>

			<a class="previous" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
				
			<!-- submit button -->
			<!--a href="contactemp_ques.php"-->
			<input type="submit" name="submit-alum" value="Submit"/>
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
			<input type="hidden" name="submitted" value="1"/> 
			<!--/a-->
			
		</form>		
			<!-- for footer/ contact details -->
			<?php include('footer.php'); ?>
	</div>


</body>
</html>
						