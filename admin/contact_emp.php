<?php
# onchange checkbox show 'save changes' button
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
    <!-- <script type="text/javascript" src="js/survey_fcn.js"></script> -->
    <title>Admin</title>
</head>

<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-contact">
            <h4 id="title-contact">List of Employer Contacts</h4>
            <form action="contact_emp.php" method="POST" id="contact-emp-form" name="contact-emp-form">
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
                                        <input type="checkbox" name="contact-check[]" value="<?php echo $row['answer_id']; ?>" onclick="$('#update-bttn').show();" <?php echo ($row['contacted']=='Yes' ? 'checked' : '');?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <input type="submit" name="update-bttn" value="UPDATE" onclick="alert('Database updated successfully!')" id="update-bttn" style="display: none;">
            </form>
            
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>