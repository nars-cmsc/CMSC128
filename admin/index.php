<?php //require_once 'controllers/authentication.php'; 

session_start();
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
<body>
    <header>
        <div class = "logos">
            <img src = "images/UP_seal.png" id="up">        
            <img src = "images/CS_logo.png" id="cs">    
        </div>      
        <div class = "banner_lines">    
            <h3>Department of Mathematics and Computer Science</h3>
            <h4>College of Science</h4>
            <h6>University of the Philippines Baguio</h6>
        </div>
        <div class="log_out">
            <a href="header.php?logout=1" class="logout" title="Log out"><img src = "images/logout.png"></a>
        </div>
    </header>
    <section>
        <nav id="sidebar">
            <ul>
                <li><a href="#">Users</a></li>
                <li><a href="#">Reports</a></li>
            </ul>
        </nav>
        <article>
            sajhdkjashdahsdkadhkad
        </article>
    </section>
    
    <footer>
        <p class="info">Department of Mathematics and Computer Science <br>
        College of Science <br> 
        University of the Philippines Baguio</p>
        <p class="icons">In case of technical problems, you may contact us through:
        <a href="https://www.facebook.com/upbdmcs/" target="_blank" title="Department of Mathematics and Computer Science, University of the Philippines Baguio"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank" title="Email"><i class="fa fa-at"></i></a></p>
    </footer>

</body>
</html>