<!DOCTYPE html>
<html lang="en">
	<head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../log_in/css/style.css">
	<link rel="icon" type="images/png" href="../log_in/images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Log in - UPB DMCS Alumni and Employer Survey</title>
	</head>
	<body>
		<?php include('header.php');?>
		<article>
			<div class = "container-info">
				<h3>Welcome dear respondent!</h3>
				<div class="content">
					Please use the credentials sent to you by email.<br><br>
					We would like to ask your help in completing the succeeding survey.
					Your answers will be used as important feedback to improve our degree programs.<br><br>
					Your participation in this study is voluntary and you may opt not to participate
					by exiting this webpage. Once you log in and choose to participate, 
					it is mandatory for you to fill in the required fields. Please rest assured 
					your answers will not be attributed to you or matched with your identity. Since 
					no personal information will be collected from you, the Philippine Data Privacy
					Act does not apply to the processing of information gathered through this survey.<br><br>
					Thank you.
				</div>
			</div>
			<div class="login-form">
				<form>
					<label for="email">E-mail:</label><br>
					<input type="text" placeholder="Type your email address here..."><br><br>
					<label for="password">Password:</label><br>
					<input type="text" placeholder="Type your password here..."><br><br>
					<input type="submit" value="Log in">
				</form>
			</div>
		</article>

		<div class="row" style="background-color: green">HELLO</div>
		<?php include('footer.php');?>
	</body>
	
</html>