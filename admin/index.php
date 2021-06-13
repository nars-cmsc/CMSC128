<?php

require ('controllers/user_del.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
    exit();
}

// if user is not an admin but alumni
if ($_SESSION['role'] == 1) {
    header('location: ../alum_survey.php');
    exit();
}
// if user is not an admin but employer
if ($_SESSION['role'] == 2) {
    header('location: ../emp_survey.php');
    exit();
}
// if user is not an admin but alum and employer
if ($_SESSION['role'] == 3) {
    header('location: ../alum_emp.php');
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
        <div class="content-users">
            <h4 id="title-users">List of Registered Users</h4>
            <table id="table-users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Finished Survey?</th>
                        <th>Time Created</th>
                        <th>Last Login</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) {?>
                        <?php 
                        $emp_check_query = 'SELECT * FROM emp_survey_q1 WHERE user_id='.$row['user_id'].' LIMIT 1';
                        $result1 = mysqli_query($db_conn, $emp_check_query);
                        $user_emp = mysqli_fetch_assoc($result1); 
                        $alum_check_query = 'SELECT * FROM alum_survey_q1 WHERE user_id='.$row['user_id'].' LIMIT 1';
                        $result2 = mysqli_query($db_conn, $alum_check_query);
                        $user_alum = mysqli_fetch_assoc($result2);
                        ?>
                        <tr class="user-row">
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['pass']; ?></td>
                            <td>
                                <?php if ($row['role_id'] == 0) { echo "ADMIN"; } ?>
                                <?php if ($row['role_id'] == 1) { echo "ALUMNI"; } ?>
                                <?php if ($row['role_id'] == 2) { echo "EMPLOYER"; } ?>
                                <?php if ($row['role_id'] == 3) { echo "ALUMNI AND EMPLOYER"; } ?>
                            </td>
                            <td>
                                <?php if ($row['role_id'] == 0) { echo "-"; } ?>
                                <?php if ($row['role_id'] == 1) { if ($user_alum && $user_alum['user_id'] == $row['user_id']) { echo "YES"; } else {echo "NO";} }?>
                                <?php if ($row['role_id'] == 2) { if ($user_emp && $user_emp['user_id'] == $row['user_id']) { echo "YES"; } else {echo "NO";} }?>
                                <?php if ($row['role_id'] == 3) { if ($user_alum && $user_alum['user_id'] == $row['user_id'] && !($user_emp)) { echo "ALUMNI ONLY"; } elseif ($user_emp && $user_emp['user_id'] == $row['user_id'] && !($user_alum)) { echo "EMPLOYER ONLY"; } elseif ($user_alum && $user_alum['user_id'] == $row['user_id'] && $user_emp && $user_emp['user_id'] == $row['user_id']) { echo "YES"; } else {echo "NO";} }  ?>
                            </td>
                            <td><?php echo $row['time_created']; ?></td>
                            <td><?php echo $row['last_login']; ?></td>
                            <td>
                                <a class="delete" href="index.php?delete=<?php echo $row['user_id']; ?>" onClick="return confirm('Are you sure you want to delete this user from the database?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>