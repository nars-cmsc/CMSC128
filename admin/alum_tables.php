<?php

require ('controllers/alum_data_chart.php');

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
        <div class="content-alum-table">
            <h4 id="title-alum-table">Tables</h4>
            <h6 id="subtitle-alum-table">Alumni Survey</h6>
            <table id="table-alum-table1">
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th># of Respondents</th>
                        <!-- <th>Date of Computation (tent)</th> -->
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <!-- QUESTION # 1 -->
                    <tr>
                        <td>Sex at birth</td>
                        <td>Female</td>
                        <td><?php echo $ct_fmale ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Male</td>
                        <td><?php echo $ct_male ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 2 -->
                    <tr>
                        <td>Countries alumni work for/in</td>
                        <td>More than 6 months: <?php echo $country ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 3 -->
                    <tr>
                        <td>Satisfaction with undergrad education in UP</td>
                        <td>Very Satisfied</td>
                        <td><?php echo $ct_vs3 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Generally Satisfied</td>
                        <td><?php echo $ct_gs3 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Generally Dissatisfied</td>
                        <td><?php echo $ct_gd3 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Very Dissatisfied</td>
                        <td><?php echo $ct_vd3 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 4 -->
                    <tr>
                        <td>Got first job after graduation...</td>
                        <td>While still in college</td>
                        <td><?php echo $ct_coll ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>In 2 months or less</td>
                        <td><?php echo $ct_2mos ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>In 3 to 6 months</td>
                        <td><?php echo $ct_6mos ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>In 7 months to 1 year</td>
                        <td><?php echo $ct_7mos ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>In 1 to 2 years</td>
                        <td><?php echo $ct_1yr ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>More than 2 years</td>
                        <td><?php echo $ct_2yrs ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>I am not sure</td>
                        <td><?php echo $ct_nots ; ?></td>
                        <!-- <td></td> -->
                    </tr>

                </tbody>
            </table>
            <table id="table-alum-table1">
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th></th>
                        <th>Rating</th>
                        <th># of Respondents</th>
                        <!-- <th>Date of Computation</th> -->
                    </tr>
                </thead>
                <tbody>
                <!-- QUESTION # 18 -->
                    <!-- DMCS SKILL 1 -->
                        <tr>
                            <td>How well UPB DMCS prepared its alumni...</td>
                            <td><?php echo $ques18_arr[0]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs1_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs1_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs1_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs1_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 2 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[1]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs2_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs2_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs2_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs2_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 3 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[2]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs3_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs3_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs3_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs3_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 4 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[3]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs4_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs4_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs4_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs4_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 5 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[4]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs5_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs5_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs5_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs5_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 6 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[5]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs6_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs6_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs6_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs6_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 7 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[6]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs7_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs7_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs7_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs7_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 8 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[7]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs8_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs8_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs8_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs8_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 9 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[8]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs9_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs9_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs9_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs9_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 10 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[9]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs10_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs10_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs10_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs10_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 11 -->
                        <tr>
                            <td></td>
                            <td><?php echo $ques18_arr[10]; ?></td>
                            <td>Very well</td>
                            <td><?php echo $ct_dmcs11_vw ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>More than adequately</td>
                            <td><?php echo $ct_dmcs11_ma ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Less than adequately</td>
                            <td><?php echo $ct_dmcs11_la ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Very Poorly</td>
                            <td><?php echo $ct_dmcs11_vp ; ?></td>
                            <!-- <td></td> -->
                        </tr>    
                </tbody>
            </table>
            <table id="table-alum-table1">
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Answers</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- QUESTION # 19 -->
                        <tr>
                            <td>Other comments/suggestions how UPB DMCS helped aqcuire competencies needed: </td>
                            <td><?php echo $ct_yes19; ?></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>