<?php

require ('controllers/user_del.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
    exit();
}

// if user is not an admin
// if (isset($_SESSION['role']) != 0) {
//     header('location: ../login.php');
//     exit();
// }

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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) {?>
                        <tr>
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
                                <a href="user_edit.php?edit=<?php echo $row['user_id']; ?>">Edit</a>
                                <a href="index.php?delete=<?php echo $row['user_id']; ?>" onClick="return confirm('Are you sure you want to delete this user from the database?');">Delete</a>
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