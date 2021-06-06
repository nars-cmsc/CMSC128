<!-- Employer Contact Information-->

<?php 
include_once  ('controllers/contactemp_submit.php');

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
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/survey_fcn.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<title>Employer Contact Information - UPB DMCS</title>


</head>

	<!-- for header/ navbar    -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->


<section>
	<div class="content-contactemp">
		<form class="contactemp-form" action="contactemp_ques.php" method="post">
		<h1>CONTACT INFORMATION OF EMPLOYER</h1>
		<h2>Please spare a few more minutes to provide us with contact information regarding your employer for the 
		Employer Satisfaction Survey. <br> This will be additional help to further improve feedback regarding our degree programs.
	 	You can wish to opt out from this part of the survey. </h2>
		
		
		<!-- error alert -->
		<?php if (count($errors) > 0): ?>
			<div class="alert">
				<?php foreach ($errors as $error): ?>
					<?php echo $error; ?><br>
				<?php endforeach; ?>	
			</div>
		<?php endif;?>
		
	<br>
		<div class="questions-container">
			<div class="Slides" style="display:block;">

		<div class="entry">
			<input type="hidden" name="contactemp" value="contactemp"/>
			<h3 class="ques_title">Do you wish to answer the employer's contact information?</h3>
		</div>

			<label class="option">Yes
				<input type="radio" name="contactemp_yon" class="options" id="contactemp_y" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').show();" value="Yes"/>
				<span class="checkbttn"></span>
			</label>
			<label class="option">No
				<input type="radio" name="contactemp_yon" class="options" id="contactemp_n" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').hide();" value="No"/>
				<span class="checkbttn"></span>
			</label><br>
			
			<!-- <input type="radio" name="contactemp_yon" class="options" id="contactemp_y" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').show();" value="Yes"/>
				<label class="option" for="contactemp_y">Yes</label>
			<input type="radio" name="contactemp_yon" class="options" id="contactemp_n" onclick="$('#companyname, #contactperson, #contactnumber, #contactemail').hide();" value="No"/>
				<label class="option" for="contactemp_n">No</label>
			<br> -->
	
	
					<div id="companyname" style="display: none;">
					<p class="ques_title">Company Name:</p>
					<textarea id="" name="emp1" value="1" rows="3" cols="40" style="resize: none;" 
					placeholder="Type here... (Use letters only)"
					onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
					</div>

					<div id="contactperson" style="display: none;">
					<p class="ques_title">Contact Person:</p>
					<textarea id="" name="emp2" value="2" rows="3" cols="40" style="resize: none;" 
					placeholder="Type here... (Use letters only)"
					onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
					</div>
					
					<div id="contactnumber" style="display: none;">
					<p class="ques_title">Contact Number:</p>
					<textarea id="" name="emp3" value="3" rows="3" cols="40" style="resize: none;" 
					placeholder="Type here... (Enter NA if the information is not available)"
					onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
					</div>
	
					<div id="contactemail" style="display: none;">
					<p class="ques_title">Email:</p>
					<textarea id="" name="emp4" value="4" rows="3" cols="40" style="resize: none;" 
					placeholder="Type here... (Enter NA if the information is not available)"
					onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
					</div>


					<!-- submit button -->

			<input type="submit" name="submit-contactemp" value="Submit"/>
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
			<input type="hidden" name="submitted" value="1"/> 
			</br>

					
			</div>
		</div>		
	</div>
		

			</form>
		
	</div>
	<!-- for footer/ contact details -->
	<?php include('footer.php'); ?>

</section>
</body>
</html>

