<?php //require_once 'controllers/authentication.php'; 

session_start();
// if user is not logged in
if (!isset($_SESSION['email'])) {
	header('location:login.php');
	exit();
}

// if user is not an alum & emp but alumni only
if ($_SESSION['role'] == 1) {
    header('location: alum_survey.php');
    exit();
}
// if user is not an alum & emp but employer only
if ($_SESSION['role'] == 2) {
    header('location: emp_survey.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="images/png" href="images/UP_seal.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Alumni & Employer Landing Page - UPB DMCS</title>
	</head>
		<?php include('header.php'); ?>

	<div class="container-info-ae">
		<h3>
			Which survey would you like to answer first?
		</h3>
		<div class = "ae-buttons">
				<a href="alum_survey.php" class="ae-choices" name="alumni" title="Alumni Survey">Alumni</a>
				<a href="emp_survey.php" class="ae-choices" name="employer" title="Employer Satisfaction Survey">Employer</a>
		</div>
	</div>
	<?php include('footer.php'); ?>
	</body>
	</html>