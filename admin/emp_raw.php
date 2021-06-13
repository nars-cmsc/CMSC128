<?php

require ('controllers/emp_db.php');

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
    <style>

        /* Style the tab */
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button, .tab p {
          background-color: inherit;
          /*float: left;*/
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
        }



        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
          display: none;
          padding: 6px 12px;
          border: 1px solid #ccc;
          border-top: none;
          -webkit-animation: fadeEffect 1s;
          animation: fadeEffect 1s; /* Fading effect takes 1 second */
        }

        /* Fade in tabs */
        @-webkit-keyframes fadeEffect {
          from {opacity: 0;}
          to {opacity: 1;}
        }

        @keyframes fadeEffect {
          from {opacity: 0;}
          to {opacity: 1;}
        }
    </style>
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-emp-raw">
            <h4 id="title-emp-raw">Raw Data</h4>
            <h6 id="subtitle-emp-raw">Employer Satisfaction Survey</h6><br>
            <div class="tab">
                <p class="tablinks" disabled="true">QUESTION NUMBER: </button>
                <button class="tablinks" onclick="openQues(event, 'ques1')" id="defaultOpen">1</button>
                <button class="tablinks" onclick="openQues(event, 'ques2')" id="defaultOpen">2</button>
                <button class="tablinks" onclick="openQues(event, 'ques3')" id="defaultOpen">3</button>
                <button class="tablinks" onclick="openQues(event, 'ques4')" id="defaultOpen">4</button>
                <button class="tablinks" onclick="openQues(event, 'ques5')" id="defaultOpen">5</button>
                <button class="tablinks" onclick="openQues(event, 'ques6')" id="defaultOpen">6</button>
                <button class="tablinks" onclick="openQues(event, 'ques7')" id="defaultOpen">7</button>
                <button class="tablinks" onclick="openQues(event, 'ques8')" id="defaultOpen">8</button>
                <button class="tablinks" onclick="openQues(event, 'ques9')" id="defaultOpen">9</button>
                <button class="tablinks" onclick="openQues(event, 'ques10')" id="defaultOpen">10</button>
                <button class="tablinks" onclick="openQues(event, 'ques11')" id="defaultOpen">11</button>
                <button class="tablinks" onclick="openQues(event, 'ques12')" id="defaultOpen">12</button>
                <button class="tablinks" onclick="openQues(event, 'ques13')" id="defaultOpen">13</button>
                <button class="tablinks" onclick="openQues(event, 'ques14')" id="defaultOpen">14</button>
                <button class="tablinks" onclick="openQues(event, 'ques15')" id="defaultOpen">15</button>
                <button class="tablinks" onclick="openQues(event, 'ques16')" id="defaultOpen">16</button>
                <button class="tablinks" onclick="openQues(event, 'ques17')" id="defaultOpen">17</button>
            </div>
            <div id="ques1" class="tabcontent">
                <p class="ques_title"><strong>Which sector of economy does your company/organization belong to?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query1)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'Other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques2" class="tabcontent">
                <p class="ques_title"><strong>Where is your company/organization located?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th></th>
                            <th></th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query2)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                            $query2_1 = mysqli_query($db_conn, 'SELECT * FROM emp_survey_q2_1 WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result2_1 = mysqli_fetch_array($query2_1);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $row['answer_body']; ?></td>
                                <td><?php if($result2_1) { echo $result2_1['region']; } ?></td>
                                <td><?php if($result2_1) { echo $result2_1['subregion']; } ?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques3" class="tabcontent">
                <p class="ques_title"><strong>Which industry and business does your company/organization belong to?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query3)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques4" class="tabcontent">
                <p class="ques_title"><strong>What is your position in your company/organization?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query4)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques5" class="tabcontent">
                <p class="ques_title"><strong>How many UP graduates are employed in your company/organization?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query5)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques6" class="tabcontent">
                <p class="ques_title"><strong>How much do you agree or disagree with this statement: “UP graduates recruited in the last three to five years have the skills to work in my company/organization.”?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query6)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques7" class="tabcontent">
                <p class="ques_title"><strong>Rate the importance of each skill when hiring new staff.</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query7)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques8" class="tabcontent">
                <p class="ques_title"><strong>Rate your satisfaction on how well each skill is demonstrated by your staff who are UP graduates.</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query8)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques9" class="tabcontent">
                <p class="ques_title"><strong>Based on your experience with the staff, how LIKELY are you to hire other graduates of UP?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query9)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques10" class="tabcontent">
                <p class="ques_title"><strong>Based on your experience with the staff how likely are you going to keep the UP graduates in your company/organization?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query10)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques11" class="tabcontent">
                <p class="ques_title"><strong>Rate the importance of each item to the successful performance of the job for which your staff, who are UP graduates, were hired.</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query11)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php echo $row['answer_body']; ?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques12" class="tabcontent">
                <p class="ques_title"><strong>Rate your satisfaction on how well each item was demonstrated by your hired UP graduates.</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Skill</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query12)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $row['skill']; ?></td>
                                <td><?php echo $row['answer_body']; ?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques13" class="tabcontent">
                <p class="ques_title"><strong>Which actions should UP take in order to improve the skill and competency set of its graduates?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query13)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques14" class="tabcontent">
                <p class="ques_title"><strong>How important is UP cooperation for your company/organization?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query14)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'other') { echo $row['answer_others']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques15" class="tabcontent">
                <p class="ques_title"><strong>Do you have any other comments or suggestions as to how UP can improve the skill and competency set of its graduates?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query15)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'Yes') { echo $row['answer_yes']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques16" class="tabcontent">
                <p class="ques_title"><strong>Do you have any negative feedback about the graduates?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query16)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'Yes') { echo $row['answer_yes']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div id="ques17" class="tabcontent">
                <p class="ques_title"><strong>Are specific strengths of the graduates appreciated? If yes, what are these strengths?</strong></p><br>
                <table id="table-emp-raw">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Answer</th>
                            <th>Date of Response</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query17)) {
                            $query = mysqli_query($db_conn, 'SELECT email FROM users WHERE user_id='.$row['user_id'].' LIMIT 1');
                            $result = mysqli_fetch_array($query);
                        ?>
                            <tr>
                                <td><?php echo $row['answer_id']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php if($row['answer_body'] == 'Yes') { echo $row['answer_yes']; } else { echo $row['answer_body']; }?></td>
                                <td><?php echo $row['date_response']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

    <script>
        function openQues(evt, quesNum) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(quesNum).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>
</html>