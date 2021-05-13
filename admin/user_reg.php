<?php

require ('controllers/user_add.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
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
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-reg-users">
        	<h4 id="title-users">Register New User</h4>
            <form action="user_reg.php" method="post">
            	<!-- added this area for error messages -->
				<?php if (count($errors) > 0): ?>
					<div class="alert">
						<?php foreach ($errors as $error): ?>
							<?php echo $error; ?><br>
						<?php endforeach; ?>	
					</div>
				<?php endif;?>
            	<label for="email">E-mail:</label><br>
				<input type="email" placeholder="Type email address here..." name="email" value="<?php echo $email; ?>"><br><br>
				<label for="email">Role:</label><br>
				<select name="roles">
					<option value="" selected disabled>Select Role</option>
					<option value="admin">Admin</option>
					<option value="alum">Alumni</option>
					<option value="emp">Employer</option>
					<option value="alum_emp">Alumni and Employer</option>
				</select><br><br>
				<label for="password">Password:</label><br>
				<input type="text" placeholder="Random password..." name="password" value="<?php echo password_generate(8); ?>">
				<button>Random Password</button>
				<br><br>
				<input type="submit" value="Register" name="reg-btn">
            </form>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>