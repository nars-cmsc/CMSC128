<?php
session_start();
require ('config/connection.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
    exit();
}

$get_user = "SELECT * FROM users WHERE user_id ='".$_GET['edit']."'; ";
$result = mysqli_query($db_conn, $get_user);
$row = mysqli_fetch_array($result);

if ($row['role_id'] == 0) {
	$role = 'Admin';
}
elseif ($row['role_id'] == 1) {
	$role = 'Alumni';
}
elseif ($row['role_id'] == 2) {
	$role = 'Employer';
}
elseif ($row['role_id'] == 3) {
	$role = 'Alumni and Employer';
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
        <div class="content-edit-users">
        	<h4 id="title-users">Update User Details</h4>
            <form action="user_edit.php?edit=<?php echo $row['user_id']; ?>" method="post">
            	<input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
            	<label for="email">E-mail:</label><br>
				<input type="email" placeholder="Type email address here..." name="email" value="<?php echo $row['email']; ?>"><br><br>
				<label for="email">Role:</label><br>
				<select name="roles">
					<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
					<option value="admin">Admin</option>
					<option value="alum">Alumni</option>
					<option value="emp">Employer</option>
					<option value="alum_emp">Alumni and Employer</option>
				</select><br><br>
				<input type="submit" value="Update" name="update-btn">
            </form>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>