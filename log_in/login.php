<!DOCTYPE html>
<html lang="en">
  <head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../log_in/css/style.css">
	<link rel="icon" type="images/png" href="../log_in/images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Log in - UPB DMCS Alumni and Employer Survey</title>
  </head>
 
	<?php include('header.php');?>
	<article>
		<div class = "container-info">
			<h3>Welcome!</h3>
			<div class="content">
				Please use the credentials sent to you by email.<br><br>
				By CLICKING the LOG IN BUTTON, I CONSENT TO and recognize the authority of the 
				Department of Mathematics and Computer Science of the University of the Philippines
				Baguio, to process the information that I will be providing for the enhancement
				of its future batches.
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
	<?php include('footer.php');?>
</html>