<?php

require ('controllers/contact_emp_db.php');

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
        <div class="content-contact">
            <h4 id="title-contact">List of Employer Contacts</h4>
            <form action="contact_emp.php" method="POST">
                <table id="table-contact">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Contact Person</th>
                            <th>Contact Number</th>
                            <th>Contact Email</th>
                            <th>Contacted?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($result)) {?>
                            <tr class="contact-row">
                                <td><?php echo $row['companyname']; ?></td>
                                <td><?php echo $row['contactperson']; ?></td>
                                <td><?php echo $row['contactnumber']; ?></td>
                                <td><?php echo $row['contactemail']; ?></td>
                                <td>
                                    <label class="check-option">
                                        <input type="checkbox" name="contact-check[]" value="Yes" <?php echo ($row['contacted']=='Yes' ? 'checked' : '');?> id="contact-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- <input type="checkbox" name="contact-check"> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>