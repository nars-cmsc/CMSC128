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
	<script type="text/javascript">
		$(document).ready(function(){
			
			var html = '<tr><td><input class="form-control" type="text" name="jobduties[]"></td><td><input class="form-control" type="text" name="percentage[]"></td><td><input class="btn btn-danger" type="button" name="remove" id="remove" value="Remove"></td></tr>';
			
			var max = 4;
			var x = 1;

			$("#add").click(function(){
				if (x <= max){
				$("#table_field_10").append(html);
				x++;
				}
			});
			$("#table_field_10").on('click', '#remove',function(){
				$(this).closest('tr').remove();
				x--;
			});
				
				
		});
	</script>
	<title>Alumni Survey - UPB DMCS</title>
</head>
	<!-- for header/ navbar    -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->

<section>
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

			<br>
			<!--<div class="dot-navigation">
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
			</div>-->

			<div class="questions-container">

					<!-- QUESTION # 1 -->
					<div class="entry">
						<input type="hidden" name="one" value="1">
						<h3 class="ques_title">Sex at birth: </h3>
					</div>

						<label class="option">Female
							<input class="options" type="radio" name="ques1" id="one1" value="Female">
							<span class="checkbttn"></span>
						</label>
						<label class="option">Male
							<input class="options" type="radio" name="ques1" id="one2" value="Male">
							<span class="checkbttn"></span>
						</label>

					<!-- <input class="options" type="radio" name="ques1" id="one1" value="Female">
						<label class="option" for="one1">Female</label>
					<input class="options" type="radio" name="ques1" id="one2" value="Male">
						<label class="option" for="one2">Male</label>	 -->
						
					<!-- QUESTION # 2 -->
					<div class="entry">
						<input type="hidden" name="two" value="2">
						<h3 class="ques_title">In which country do you presently reside or work for most of the year (more than 6 months)? </h3>
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

		<!-- QUESTION # 3 -->
			<div class="entry">
				<input type="hidden" name="three" value="3">
				<h3 class="ques_title">Overall, how satisfied are you with your undergraduate education at UP?</h3>
			</div>

				<label class="option">Very Dissatisfied
					<input class="options" type="radio" name="ques3" id="three1" value="Very Dissatisfied">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Generally Dissatisfied
					<input class="options" type="radio" name="ques3" id="three2" value="Generally Dissatisfied">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">Generally Satisfied
					<input class="options" type="radio" name="ques3" id="three3" value="Generally Satisfied">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Very Satisfied
					<input class="options" type="radio" name="ques3" id="three4" value="Very Satisfied">
					<span class="checkbttn"></span>
				</label><br>	

						<!-- <input class="options" type="radio" name="ques3" id="three1" value="Very Dissatisfied">
							<label class="option" for="three1">Very Dissatisfied</label><br>
						<input class="options" type="radio" name="ques3" id="three2" value="Generally Dissatisfied">
							<label class="option" for="three2">Generally Dissatisfied</label><br>
						<input class="options" type="radio" name="ques3" id="three3" value="Generally Satisfied">
							<label class="option" for="three3">Generally Satisfied</label><br>
						<input class="options" type="radio" name="ques3" id="three4" value="Very Satisfied">
							<label class="option" for="three4">Very Satisfied</label><br> -->


		<!-- QUESTION # 5 -->
			<div class="entry">
				<input type="hidden" name="five" value="5">
				<h3 class="ques_title">Are you employed right now? </h3>
			</div>

				<label class="option">Yes
					<input class="options" type="radio" name="ques5" id="five1" onclick="$('#five_a, #five_c, #four, #six, #seven, #eight, #nine, #ten, #eleven, #twelve, #thirteen, #fourteen, #fifteen, #sixteen, #seventeen, #eighteen, #nineteen').show(); $('#five_b').hide();" value="Yes">
					<span class="checkbttn"></span>
				</label>
				<label class="option">No
					<input class="options" type="radio" name="ques5" id="five2" onclick="$('#five_b, #eight, #eleven, #thirteen, #seventeen, #eighteen, #nineteen').show(); $('#five_a, #five_c, #four, #six, #seven, #nine, #ten, #twelve, #fourteen, #fifteen, #sixteen').hide();" value="No">
					<span class="checkbttn"></span>
				</label>

						<!-- <input class="options" type="radio" name="ques5" id="five1" onclick="$('#five_a, #five_c').show(); $('#five_b').hide();" value="Yes">
							<label class="option" for="five1">Yes</label>
						<input class="options" type="radio" name="ques5" id="five2" onclick="$('#five_b').show(); $('#five_a, #five_c').hide();" value="No">
							<label class="option" for="five2">No</label> -->
				<br>
			
		<!-- QUESTION # 5.a -->
						<div id="five_a" style="display: none;">
						<input type="hidden" name="five_a" value="5.1">
						<h3 class="ques_title">If you answered Yes, how would you characterize your employment?</h3>

						<label class="option">Full time (40 hours/week)
							<input class="options" type="radio" name="ques5_1" id="fivea1" value="Full time (40 hours/week)">
							<span class="checkbttn"></span>
						</label>
						<label class="option">Part time
							<input class="options" type="radio" name="ques5_1" id="fivea2" value="Part time">
							<span class="checkbttn"></span>
						</label>
						<label class="option">Self-employed
							<input class="options" type="radio" name="ques5_1" id="fivea3" value="Self-employed">
							<span class="checkbttn"></span>
						</label><br>

						<!-- <input class="options" type="radio" name="ques5_1" id="fivea1" value="Full time (40 hours/week)">
							<label class="option" for="fivea1">Full time (40 hours/week)</label>
						<input class="options" type="radio" name="ques5_1" id="fivea2" value="Part time">
							<label class="option" for="fivea2">Part time</label>
						<input class="options" type="radio" name="ques5_1" id="fivea3" value="Self-employed">
							<label class="option" for="fivea3">Self-employed</label> -->
						</div>
		<!-- QUESTION # 5.b -->
						<div id="five_b" style="display: none;">
						<input type="hidden" name="five_b" value="5.2">
						<h3 class="ques_title">If you answered No, are you looking for employment at this time?</h3>

						<label class="option">Yes
							<input class="options" type="radio" name="ques5_2" id="fiveb1" value="Yes">
							<span class="checkbttn"></span>
						</label>
						<label class="option">No
							<input class="options" type="radio" name="ques5_2" id="fiveb2" value="No">
							<span class="checkbttn"></span>
						</label>

						<!-- <input class="options" type="radio" name="ques5_2" id="fiveb1" value="Yes">
							<label class="option" for="fiveb1">Yes</label>
						<input class="options" type="radio" name="ques5_2" id="fiveb2" value="No">
							<label class="option" for="fiveb2">No</label> -->
						</div>
		<!-- QUESTION # 5.c --> 
			<div id="five_c" style="display: none;">
			<input type="hidden" name="five_c" value="5.3">
			<h3 class="ques_title">Which industry best describes your employer or occupation? Drop-down menu of the following choices	</h3>
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
				
			<!-- QUESTION # 4 -->
			<div id="four" style="display: none;">
				<input type="hidden" name="four" value="4">
				<h3 class="ques_title">How long after graduation were you able to get your first job?</h3>

				<label class="option">I got a job while still in college
					<input class="options" type="radio" name="ques4" id="four1" value="I got a job while still in college">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">2 months or less
					<input class="options" type="radio" name="ques4" id="four2" value="2 months or less">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">3 to 6 months
					<input class="options" type="radio" name="ques4" id="four3" value="3 to 6 months">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">7 months to 1 year
					<input class="options" type="radio" name="ques4" id="four4" value="7 months to 1 year">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">1 to 2 years
					<input class="options" type="radio" name="ques4" id="four5" value="1 to 2 years">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">More than 2 years
					<input class="options" type="radio" name="ques4" id="four6" value="More than 2 years">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">I am not sure
					<input class="options" type="radio" name="ques4" id="four7" value="I am not sure">
					<span class="checkbttn"></span>
				</label><br>	

						<!-- <input class="options" type="radio" name="ques4" id="four1" value="I got a job while still in college">
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
							<label class="option" for="four7">I am not sure</label><br> -->
							
			</div>

		<!-- QUESTION # 6 -->
			<div id="six" style="display: none;">
				<input type="hidden" name="six" value="6">
				<h3 class="ques_title">Select the minimum level of education required to perform your job (not necessarily your education level)	</h3>
			

				<label class="option">High school
					<input class="options" type="radio" name="ques6" id="six1" onclick="$('#sixothers').hide(); $('#sixacademicfield').hide();" value="High school">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Some college
					<input class="options" type="radio" name="ques6" id="six2" onclick="$('#sixothers').hide(); $('#sixacademicfield').hide();" value="Some college">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">Associate’s degree
					<input class="options" type="radio" name="ques6" id="six3" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Associate’s degree">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Bachelor’s degree
					<input class="options" type="radio" name="ques6" id="six4" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Bachelor’s degree">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Master’s degree
					<input class="options" type="radio" name="ques6" id="six5" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Master’s degree">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">Doctoral degree
					<input class="options" type="radio" name="ques6" id="six6" onclick="$('#sixothers').hide(); $('#sixacademicfield').show();" value="Doctoral degree">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Others (e,g. training, certifications):
					<input class="options" type="radio" name="ques6" id="six7" onclick="$('#sixothers').show(); $('#sixacademicfield').hide();" value="Other"> <!-- Kung ano mang value nito. Search it. -->
					<span class="checkbttn"></span>
				</label><br>

						<!-- <input class="options" type="radio" name="ques6" id="six1" onclick="$('#sixothers').hide(); $('#sixacademicfield').hide();" value="High school">
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
						<input class="options" type="radio" name="ques6" id="six7" onclick="$('#sixothers').show(); $('#sixacademicfield').hide();" value="Other">
							<label class="option" for="six7">Others (e,g. training, certifications):</label> <br> -->
								
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

		<!-- QUESTION # 7 -->
			<div id="seven" style="display: none;">
				<input type="hidden" name="seven" value="7">
				<h3 class="ques_title">Select the preferred (but not required) level of education or training</h3>
			

				<label class="option">High school
					<input class="options" type="radio" name="ques7" id="seven1" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').hide();" value="High school">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Some college
					<input class="options" type="radio" name="ques7" id="seven2" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').hide();" value="Some college">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">Associate’s degree
					<input class="options" type="radio" name="ques7" id="seven3" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Associate’s degree">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Bachelor’s degree
					<input class="options" type="radio" name="ques7" id="seven4" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Bachelor’s degree">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Master’s degree
					<input class="options" type="radio" name="ques7" id="seven5" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Master’s degree">
					<span class="checkbttn"></span>
				</label><br>			
				<label class="option">Doctoral degree
					<input class="options" type="radio" name="ques7" id="seven6" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').show();" value="Doctoral degree">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Others (e,g. training, certifications):
					<input class="options" type="radio" name="ques7" id="seven7" onclick="$('#sevenothers').show(); $('#sevenacademicfield').hide();" value="Other"> <!-- Kung ano mang value nito. Search it. -->
					<span class="checkbttn"></span>
				</label><br>

						<!-- <input class="options" type="radio" name="ques7" id="seven1" onclick="$('#sevenothers').hide(); $('#sevenacademicfield').hide();" value="High school">
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
						<input class="options" type="radio" name="ques7" id="seven7" onclick="$('#sevenothers').show(); $('#sevenacademicfield').hide();" value="Other">
							<label class="option" for="seven7">Others (e,g. training, certifications):</label><br> -->
						
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

		<!-- QUESTION # 8 -->
			<div id="eight" style="display: none;">
				<input type="hidden" name="eight" value="8">
				<h3 class="ques_title">Whether or not you are currently employed, what is your principal occupation category?</h3>
					
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
			</div>
		<!-- QUESTION # 9 -->
			<div id="nine" style="display: none;">
				<input type="hidden" name="nine" value="9">
				<h3 class="ques_title">Is your current position related to your undergraduate field(s) of study?</h3>


				<label class="option">Yes, it is the same field as my major/s
					<input class="options" type="radio" name="ques9" id="nine1" value="Yes, it is the same field as my major/s">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Yes, it is related to my major/s
					<input class="options" type="radio" name="ques9" id="nine2" value="Yes, it is related to my major/s">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">No, it is not related
					<input class="options" type="radio" name="ques9" id="nine3" value="No, it is not related">
					<span class="checkbttn"></span>
				</label><br>

						<!-- <input class="options" type="radio" name="ques9" id="nine1" value="Yes, it is the same field as my major/s">
							<label class="option" for="nine1">Yes, it is the same field as my major/s</label><br>
						<input class="options" type="radio" name="ques9" id="nine2" value="Yes, it is related to my major/s">
							<label class="option" for="nine2">Yes, it is related to my major/s</label><br>
						<input class="options" type="radio" name="ques9" id="nine3" value="No, it is not related">
							<label class="option" for="nine3">No, it is not related</label><br> -->
			</div>

		<!-- QUESTION # 10 --> 
			<div id="ten" style="display: none;">
				<input type="hidden" name="ten" value="10">
				<h3 class="ques_title">In the order of importance, list your major job duties and the percentage of time you spend on each. Think back on the past 12 months to make sure you capture all key responsibilities. The total percentage of time spent must not exceed 100 but may be less since you are not to list all duties.</h3>
			
				<table class="a-q10" border="0" id="table_field_10">
					<tr>
						<th>Major Job Duties</th>
						<th>Percentage of Time</th>
						<th>Add or Remove</th>
					</tr>

					<tr>
						<td><input class="form-control" type="text" name="jobduties[]"></td>
						<td><input class="form-control" type="text" name="percentage[]"></td>
						<td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
					</tr>
				</table>
			</div>

		<!-- QUESTION # 11 -->
			<div id="eleven" style="display: none;">
				<input type="hidden" name="eleven" value="11">
				<h3 class="ques_title">Do you currently work for a national or local NGO or civic organization, as a paid volunteer for more than 10 hours per week?	</h3>
			

				<label class="option">Yes
					<input class="options" type="radio" name="ques11" id="eleven1" onclick="$('#eleven_a').show();" value="Yes">
					<span class="checkbttn"></span>
				</label>
				<label class="option">No
					<input class="options" type="radio" name="ques11" id="eleven2" onclick="$('#eleven_a').hide();"value="No">
					<span class="checkbttn"></span>
				</label><br>
</div>
						<!-- <input class="options" type="radio" name="ques11" id="eleven1" onclick="$('#eleven_a').show();" value="Yes">
							<label class="option" for="eleven1">Yes</label>
						<input class="options" type="radio" name="ques11" id="eleven2" onclick="$('#eleven_a').hide();"value="No">
							<label class="option" for="eleven2">No</label> -->
		<!-- QUESTION # 11.a -->
			<div id="eleven_a" style="display: none;">
				<input type="hidden" name="eleven_a" value="11.1">
				<h3 class="ques_title">How would you characterize this service of volunteer work?</h3>

				<label class="option">Full time (40 hours/week)
					<input class="options" type="radio" name="ques11_1" id="elevena1" value="Full time (40 hours/week)">
					<span class="checkbttn"></span>
				</label>
				<label class="option">Part time
					<input class="options" type="radio" name="ques11_1" id="elevena2" value="Part time">
					<span class="checkbttn"></span>
				</label><br>
			
						<!-- <input class="options" type="radio" name="ques11_1" id="elevena1" value="Full time (40 hours/week)">
							<label class="option" for="elevena1">Full time (40 hours/week)</label>
						<input class="options" type="radio" name="ques11_1" id="elevena2" value="Part time">
							<label class="option" for="elevena2">Part time</label> -->
			</div>
		<!-- QUESTION # 12 -->
			<div id="twelve" style="display: none;">
				<input type="hidden" name="twelve" value="12">
				<h3 class="ques_title">Select the minimum total number of years of experience in your field that is required to do your job.Your selection may or may not equate to your personal experience level.</h3>

				<label class="option">No experience
					<input class="options" type="radio" name="ques12" id="twelve1" onclick="$('#twelve_a').show();" value="No experience">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Less than one (1) year
					<input class="options" type="radio" name="ques12" id="twelve2" onclick="$('#twelve_a').show();" value="Less than one (1) year">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">One (1) to three (3) years
					<input class="options" type="radio" name="ques12" id="twelve3" onclick="$('#twelve_a').show();" value="One (1) to three (3) years">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Three (3) to six (6) years
					<input class="options" type="radio" name="ques12" id="twelve4" onclick="$('#twelve_a').show();" value="Three (3) to six (6) years">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">More than six (6+) years
					<input class="options" type="radio" name="ques12" id="twelve5" onclick="$('#twelve_a').show();" value="More than six (6+) years">
					<span class="checkbttn"></span>
				</label><br>
</div>
						<!-- <input class="options" type="radio" name="ques12" id="twelve1" onclick="$('#twelve_a').show();" value="No experience">
							<label class="option" for="twelve1">No experience</label><br>
						<input class="options" type="radio" name="ques12" id="twelve2" onclick="$('#twelve_a').show();" value="Less than one (1) year">
							<label class="option" for="twelve2">Less than one (1) year</label><br>
						<input class="options" type="radio" name="ques12" id="twelve3" onclick="$('#twelve_a').show();" value="One (1) to three (3) years">
							<label class="option" for="twelve3">One (1) to three (3) years</label><br>
						<input class="options" type="radio" name="ques12" id="twelve4" onclick="$('#twelve_a').show();" value="Three (3) to six (6) years">
							<label class="option" for="twelve4">Three (3) to six (6) years</label><br>
						<input class="options" type="radio" name="ques12" id="twelve5" onclick="$('#twelve_a').show();" value="More than six (6+) years">
							<label class="option" for="twelve5">More than six (6+) years</label><br>	 -->			
		<!-- QUESTION # 12.a -->
				<div id="twelve_a" style="display: none;">
				<input type="hidden" name="twelve_a" value="12.1">
				<h3 class="ques_title">Why do you feel this level of experience is necessary to perform your job?</h3>
				
						<textarea id="" name="ques12_1" rows="4" cols="50" style="resize: none;" 
						placeholder="Type your thoughts here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea> <!-- can still accept underscore and numbers -->
				</div>

		<!-- QUESTION # 13 -->
			<div id="thirteen" style="display: none;">
				<input type="hidden" name="thirteen" value="13">
				<h3 class="ques_title">How well did UP prepare for your current career?</h3>
			

				<label class="option">Very Poorly
					<input class="options" type="radio" name="ques13" id="thirteen1" value="Very Poorly">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Less than adequately
					<input class="options" type="radio" name="ques13" id="thirteen2" value="Less than adequately">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">More than adequately
					<input class="options" type="radio" name="ques13" id="thirteen3" value="More than adequately">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Very well
					<input class="options" type="radio" name="ques13" id="thirteen4" value="Very well">
					<span class="checkbttn"></span>
				</label><br>
			</div>

						<!-- <input class="options" type="radio" name="ques13" id="thirteen1" value="Very Poorly">
							<label class="option" for="thirteen1">Very Poorly</label><br>
						<input class="options" type="radio" name="ques13" id="thirteen2" value="Less than adequately">
							<label class="option" for="thirteen2">Less than adequately</label><br>
						<input class="options" type="radio" name="ques13" id="thirteen3" value="More than adequately">
							<label class="option" for="thirteen3">More than adequately</label><br>
						<input class="options" type="radio" name="ques13" id="thirteen4" value="Very well">
							<label class="option" for="thirteen4">Very well</label><br> -->
		<!-- QUESTION # 14 -->
			<div id="fourteen" style="display: none;">
				<input type="hidden" name="fourteen" value="14">
				<h3 class="ques_title">Which of the following best describes your current position?</h3>
			

				<label class="option">Entry-level
					<input class="options" type="radio" name="ques14" id="fourteen1"  value="Entry-level">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Supervisory
					<input class="options" type="radio" name="ques14" id="fourteen2" value="Supervisory">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Executive level (except Chief Executive)
					<input class="options" type="radio" name="ques14" id="fourteen3" value="Executive level (except Chief Executive)">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)
					<input class="options" type="radio" name="ques14" id="fourteen4" value="Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)">
					<span class="checkbttn"></span>
				</label><br>
</div>
						<!-- <input class="options" type="radio" name="ques14" id="fourteen1"  value="Entry-level">
							<label class="option" for="fourteen1">Entry-level</label><br>
						<input class="options" type="radio" name="ques14" id="fourteen2" value="Supervisory">
							<label class="option" for="fourteen2">Supervisory</label><br>
						<input class="options" type="radio" name="ques14" id="fourteen3" value="Executive level (except Chief Executive)">
							<label class="option" for="fourteen3">Executive level (except Chief Executive)</label><br>
						<input class="options" type="radio" name="ques14" id="fourteen4" value="Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)">
							<label class="option" for="fourteen4">Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)</label><br> -->

		<!-- QUESTION # 15 -->
		<div id="fifteen" style="display: none;">
				<input type="hidden" name="fifteen" value="15">
				<h3 class="ques_title">How much does your current job involve supervising or managing the work of others?</h3>


				<label class="option">Most of my time (75% of my time)
					<input class="options" type="radio" name="ques15" id="fifteen4" value="Most of my time (75% of my time)">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Half my time (50%)
					<input class="options" type="radio" name="ques15" id="fifteen3" value="Half my time (50%)">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Some of my time (up to 25% of my time)
					<input class="options" type="radio" name="ques15" id="fifteen2" value="Some of my time (up to 25% of my time)">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">None at all
					<input class="options" type="radio" name="ques15" id="fifteen1" value="None at all">
					<span class="checkbttn"></span>
				</label><br>
		</div>
						<!-- <input class="options" type="radio" name="ques15" id="fifteen1" value="None at all">
							<label class="option" for="fifteen1">None at all</label><br>
						<input class="options" type="radio" name="ques15" id="fifteen2" value="Some of my time (up to 25% of my time)">
							<label class="option" for="fifteen2">Some of my time (up to 25% of my time)</label><br>
						<input class="options" type="radio" name="ques15" id="fifteen3" value="Half my time (50%)">
							<label class="option" for="fifteen3">Half my time (50%)</label><br>
						<input class="options" type="radio" name="ques15" id="fifteen4" value="Most of my time (75% of my time)">
							<label class="option" for="fifteen4">Most of my time (75% of my time)</label><br> -->
		<!-- QUESTION # 16 -->
			<div id="sixteen" style="display: none;">
				<input type="hidden" name="sixteen" value="16">
				<h3 class="ques_title">This question measures the managerial responsibility (direct and indirect) for achieving results through people. Select the single statement that best describes your job.</h3>
			

				<label class="option">Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.
					<input class="options" type="radio" name="ques16" id="sixteen4" value="Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Direct supervision of one or more people.
					<input class="options" type="radio" name="ques16" id="sixteen3" value="Direct supervision of one or more people.">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.
					<input class="options" type="radio" name="ques16" id="sixteen2" value="Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">No supervisory or lead responsibilities.
					<input class="options" type="radio" name="ques16" id="sixteen1" value="No supervisory or lead responsibilities.">
					<span class="checkbttn"></span>
				</label><br>
</div>
						<!-- <input class="options" type="radio" name="ques16" id="sixteen1" value="No supervisory or lead responsibilities.">
							<label class="option" for="sixteen1">No supervisory or lead responsibilities.</label><br>
						<input class="options" type="radio" name="ques16" id="sixteen2" value="Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.">
							<label class="option" for="sixteen2">Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions. </label><br>
						<input class="options" type="radio" name="ques16" id="sixteen3" value="Direct supervision of one or more people.">
							<label class="option" for="sixteen3">Direct supervision of one or more people. </label><br>
						<input class="options" type="radio" name="ques16" id="sixteen4" value="Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.">
							<label class="option" for="sixteen4">Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues. </label>	 -->
		<!-- QUESTION # 17 -->
			<div id="seventeen" style="display: none;">
				<input type="hidden" name="seventeen" value="17">
				<h3 class="ques_title">Overall, how satisfied are you with your career thus far?</h3>


				<label class="option">Very satisfied
					<input class="options" type="radio" name="ques17" id="seventeen4" value="Very satisfied">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Generally satisfied
					<input class="options" type="radio" name="ques17" id="seventeen3" value="Generally satisfied">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Generally dissatisfied
					<input class="options" type="radio" name="ques17" id="seventeen2" value="Generally dissatisfied">
					<span class="checkbttn"></span>
				</label><br>
				<label class="option">Very dissatisfied
					<input class="options" type="radio" name="ques17" id="seventeen1" value="Very dissatisfied ">
					<span class="checkbttn"></span>
				</label><br>

						<!-- <input class="options" type="radio" name="ques17" id="seventeen1" value="Very dissatisfied ">
							<label class="option" for="seventeen1">Very dissatisfied </label><br>
						<input class="options" type="radio" name="ques17" id="seventeen2" value="Generally dissatisfied">
							<label class="option" for="seventeen2">Generally dissatisfied</label><br>
						<input class="options" type="radio" name="ques17" id="seventeen3" value="Generally satisfied">
							<label class="option" for="seventeen3">Generally satisfied</label><br>
						<input class="options" type="radio" name="ques17" id="seventeen4" value="Very satisfied">
							<label class="option" for="seventeen4">Very satisfied</label><br> -->
			</div>

		<!-- QUESTION # 18 -->
			<div id="eighteen" style="display: none;">
				<input type="hidden" name="eighteen" value="18">
				<h3 class="ques_title">Based on what you know now, how well do you think your undergraduate experience at UP DMCS prepared you to…</h3>
			
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
						<td style="text-align:left;;width:40%; padding-left:1rem;">
							<?php echo $ques18_to; ?>
						</td>

						<td>
							<label class="skill_option">
								<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'Very poorly';?>" id=""/>
								<span class="skill-checkbttn"></span>
							</label>
							<!-- <input class="options" type="radio" name="<?php //echo 'ques18_'.$i; ?>" value="<?php //echo 'Very poorly';?>" id=""/> -->
						</td>

						<td>
							<label class="skill_option">
								<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'Less than adequately';?>" id=""/>
								<span class="skill-checkbttn"></span>
							</label>
							<!-- <input class="options" type="radio" name="<?php //echo 'ques18_'.$i; ?>" value="<?php //echo 'Less than adequately';?>" id=""/> -->
						</td>

						<td>
							<label class="skill_option">
								<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'More than adequately';?>" id=""/>
								<span class="skill-checkbttn"></span>
							</label>
							<!-- <input class="options" type="radio" name="<?php //echo 'ques18_'.$i; ?>" value="<?php //echo 'More than adequately';?>" id=""/> -->
						</td>

						<td>
							<label class="skill_option">
								<input class="options" type="radio" name="<?php echo 'ques18_'.$i; ?>" value="<?php echo 'Very well';?>" id=""/>
								<span class="skill-checkbttn"></span>
							</label>
							<!-- <input class="options" type="radio" name="<?php //echo 'ques18_'.$i; ?>" value="<?php// echo 'Very well';?>" id=""/> -->
						</td>
					<tr>
					<?php endforeach; ?>
				</table>
	</div>		

		<!-- QUESTION # 19 -->
			<div id="nineteen" style="display: none;">
				<input type="hidden" name="nineteen" value="19">
				<h3 class="ques_title">Would you like to elaborate on how UP DMCS helped you acquire the competencies you needed?</h3>

				<label class="option">Yes
					<input class="options" type="radio" name="ques19" id="eleven1" onclick="$('#nineteen_txt').show();" value="Yes">
					<span class="checkbttn"></span>
				</label>
				<label class="option">No
					<input class="options" type="radio" name="ques19" id="eleven2" onclick="$('#nineteen_txt').hide();"value="No">
					<span class="checkbttn"></span>
				</label><br>

						<!-- <input class="options" type="radio" name="ques19" id="eleven1" onclick="$('#nineteen_txt').show();" value="Yes">
							<label class="option" for="nineteen1">Yes</label>
						<input class="options" type="radio" name="ques19" id="eleven2" onclick="$('#nineteen_txt').hide();"value="No">
							<label class="option" for="nineteen2">No</label> -->
							
				<div id="nineteen_txt" style="display: none;">
						<textarea id="" name="ques19_ytxt" rows="4" cols="50" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea> <!-- can still accept underscore and numbers -->
						</div>

				<div class="submit-survey">
					<input type="button" id="reviewBtn" name="review-alum" value="Review Answers"/>
					<!--<input type="submit" id="reviewBtn" name="submit-emp" value="Submit"/>-->
				</div>
</div>

			<!--<div class="previous" onclick="plusSlides(-1)">
				<div class="prev">
					&#10094;
				</div>
			</div>
			<div class="next" onclick="plusSlides(1)">
				<div class="nxt">
					&#10095;
				</div>
			</div>-->

		</div>
		
	
		<div id="reviewModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="closeBtn">&times;</span>
					<h4 style="color:#840038; text-transform:uppercase;">Are you sure you want to submit?</h4>
					<h5 style="color:black; font-size:16pt;">Here are your answers from the survey:</h5>
				</div>
				<div class="modal-body">
					<p>Sex at birth:</p><br>
						<?php if (isset($_POST['ques1'])){  echo $_POST['ques1'];  } ?>
					<p>In which country do you presently reside or work for most of the year (more than 6 months)?</p><br>
						<?php if (isset($_POST['ques2'])){  echo $_POST['ques2'];  } ?>
					<p>Overall, how satisfied are you with your undergraduate education at UP?</p><br>
						<?php if (isset($_POST['ques3'])){  echo $_POST['ques3'];  } ?>
					<p>Are you employed right now?</p><br>
						<?php if (isset($_POST['ques4'])){  echo $_POST['ques4'];  } ?>
				</div>
				<div class="modal-footer">		
					<div class="submit-survey">
						<input type="submit" name="submit-alum" value="Submit"/>
					</div>
				</div>
			</div>
		</div>
		
				
			<!-- submit button -->
			<!--a href="contactemp_ques.php"-->
			
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
			<input type="hidden" name="submitted" value="1"/> 
			<!--/a-->
			
		</form>		
			
	</div>
</section>
<!-- for footer/ contact details  -->
<?php include('footer.php'); ?>

	<script type="text/javascript" src="js/review.js"></script>

</body>
</html>
						