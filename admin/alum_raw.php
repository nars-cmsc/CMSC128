<?php

require ('controllers/alum_db.php');

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
        <div class="content-alum-raw">
            <h4 id="title-alum-raw">Raw Data</h4>
            <h6 id="subtitle-alum-raw">Alumni Survey</h6>
            <table id="table-alum-raw">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Question Number</th>
                        <th>User</th>
                        <th>Answer</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) {?>
                        <tr>
                            <td><?php echo $row['answer_id']; ?></td>
                            <td><?php echo $row['question_num']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['answer_body']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>