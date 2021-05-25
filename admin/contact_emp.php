<?php

require ('controllers/contact_emp_db.php');

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
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/survey_fcn.js"></script>
    <title>Admin</title>
</head>

<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-contact">
            <h4 id="title-contact">List of Employer Contacts</h4>
            <form action="contact_emp.php" method="POST" id="contact-emp-form">
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
                        <?php $i=1; while ($row = mysqli_fetch_array($result)) {?>
                            <tr class="contact-row">
                                <td><?php echo $row['companyname']; ?></td>
                                <td><?php echo $row['contactperson']; ?></td>
                                <td><?php echo $row['contactnumber']; ?></td>
                                <td><?php echo $row['contactemail']; ?></td>
                                <td>
                                    <label class="check-option">
                                        <input type="checkbox" name="contact-check[]" value="Yes" <?php echo ($row['contacted']=='Yes' ? 'checked' : '');?> id="<?php echo 'contact-check-'.$i; ?>">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- <input type="checkbox" name="contact-check"> -->
                                </td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
                <!-- <input type="checkbox" name="contact-check[]" value="Yes" id="contact-check" onchange=""> -->
            </form>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>