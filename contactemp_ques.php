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
	<title>Employer Contact Information - UPB DMCS</title>
</head>
	<!-- for header/ navbar    -->
	<?php include('header.php'); ?>
	<!-- label class = option; radio bttn class = options -->

	<div class="content-contactemp">
		<div class="content-survey">
		<form class="contactemp-form" action="contactemp_ques.php" method="post">
		<!-- error alert -->
		<?php if (count($errors) > 0): ?>
			<div class="alert">
				<?php foreach ($errors as $error): ?>
					<?php echo $error; ?><br>
				<?php endforeach; ?>	
			</div>
		<?php endif;?>
		
		<p> Thank you for your feedback! We greatly appreciate your time.</p>
		
		<p>Please spare a few more minutes to provide us with contact information regarding your employer for the Employer Satisfaction Survey. This will be additional help to further improve feedback regarding our degree programs. You can wish to opt out from this part of the survey. </p>

		
		<h2>CONTACT INFORMATION OF EMPLOYER</h2>
		
		<div class="entry">
				<input type="hidden" name="companyname" value="companyname">
				<p class="ques_title">Company Name:</p>
			</div>
						<textarea id="" name="emp1" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
		<div class="entry">
				<input type="hidden" name="contactperson" value="contactperson">
				<p class="ques_title">Contact Person:</p>
			</div>
						<textarea id="" name="emp2" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
		<div class="entry">
				<input type="hidden" name="contactnumber" value="contactnumber">
				<p class="ques_title">Contact Number:</p>
			</div>
						<textarea id="" name="emp3" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
		<div class="entry">
				<input type="hidden" name="contactemail" value="contactemail">
				<p class="ques_title">Email:</p>
			</div>
						<textarea id="" name="emp4" rows="3" cols="40" style="resize: none;" 
						placeholder="Type here... (Use letters only)"
						onkeyup="this.value = this.value.replace(/[^\w .]/g, '')"></textarea>
		
		
<!-- submit button -->
			<a href = "thankyou.php">
			<input type="submit" name="submit-contactemp" value="Submit"/>
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
			<input type="hidden" name="submitted" value="1"/> 
			</a>
			</form>
				
	</div>
</body>
</html>

