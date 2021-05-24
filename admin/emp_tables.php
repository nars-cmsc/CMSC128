<?php

require ('controllers/emp_data_chart.php');

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
        <div class="content-emp-table">
            <h4 id="title-emp-table">Tables</h4>
            <h6 id="subtitle-emp-table">Employer Satisfaction Survey</h6>
            <table id="table-emp-table1">
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
                        <td>Sector of Economy</td>
                        <td>Public</td>
                        <td><?php echo $ct_pub ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Private</td>
                        <td><?php echo $ct_priv ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Others: <?php echo $ct_other1txt ; ?></td>
                        <td><?php echo $ct_other1 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 2 -->
                    <tr>
                        <td>Location</td>
                        <td>Philippines</td>
                        <td><?php echo $ct_ph ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Abroad</td>
                        <td><?php echo $ct_ab ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 3 -->
                    <tr>
                        <td>Industry/Business Sector</td>
                        <td><?php echo $ques3_arr[0]; ?></td>
                        <td><?php echo $ct_ind1 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[1]; ?></td>
                        <td><?php echo $ct_ind2 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[2]; ?></td>
                        <td><?php echo $ct_ind3 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[3]; ?></td>
                        <td><?php echo $ct_ind4 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[4]; ?></td>
                        <td><?php echo $ct_ind5 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[5]; ?></td>
                        <td><?php echo $ct_ind6 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[6]; ?></td>
                        <td><?php echo $ct_ind7 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[7]; ?></td>
                        <td><?php echo $ct_ind8 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[8]; ?></td>
                        <td><?php echo $ct_ind9 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[9]; ?></td>
                        <td><?php echo $ct_ind10 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[10]; ?></td>
                        <td><?php echo $ct_ind5 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[11]; ?></td>
                        <td><?php echo $ct_ind12 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[12]; ?></td>
                        <td><?php echo $ct_ind13 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[13]; ?></td>
                        <td><?php echo $ct_ind14 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[14]; ?></td>
                        <td><?php echo $ct_ind15 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[15]; ?></td>
                        <td><?php echo $ct_ind16 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[16]; ?></td>
                        <td><?php echo $ct_ind17 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[17]; ?></td>
                        <td><?php echo $ct_ind18 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[18]; ?></td>
                        <td><?php echo $ct_ind19 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[19]; ?></td>
                        <td><?php echo $ct_ind20 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[20]; ?></td>
                        <td><?php echo $ct_ind21 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ques3_arr[21]; ?></td>
                        <td><?php echo $ct_ind22 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Others: <?php echo $ct_ind_other; ?></td>
                        <td><?php echo $ct_other3 ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 4 -->
                    <tr>
                        <td>Position in Company/Organization</td>
                        <td>Chief level</td>
                        <td><?php echo $ct_chief ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Supervisory</td>
                        <td><?php echo $ct_sup ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Rank and file</td>
                        <td><?php echo $ct_rank ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 5 -->
                    <tr>
                        <td>Number of Employees from UP</td>
                        <td>Current Total</td>
                        <td><?php echo $ct_up_hire ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                <!-- QUESTION # 6 -->
                    <tr>
                        <td>UP graduates recruited in the last three to five years have the skills to work in company/organization</td>
                        <td>Strongly Agree</td>
                        <td><?php echo $ct_sa ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Agree</td>
                        <td><?php echo $ct_a ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Disagree</td>
                        <td><?php echo $ct_d ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td></td>
                        <td>Strongly Disagree</td>
                        <td><?php echo $ct_sd ; ?></td>
                        <!-- <td></td> -->
                    </tr>
                </tbody>
            </table>
            <table id="table-emp-table1">
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Skill</th>
                        <th>Importance</th>
                        <th># of Respondents</th>
                        <th>Satisfaction</th>
                        <th># of Respondents</th>
                        <!-- <th>Date of Computation</th> -->
                    </tr>
                </thead>
                <tbody>
                <!-- QUESTION # 7 - 8 -->
                    <!-- SKILL 1 -->
                        <tr>
                            <td>General Skills</td>
                            <td><?php echo $skills_arr[0]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_read_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_read_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_read_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_read_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_read_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_read_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_read_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_read_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 2 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[1]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_list_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_list_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_list_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_list_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_list_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_list_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_list_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_list_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 3 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[2]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_writ_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_writ_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_writ_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_writ_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_writ_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_writ_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_writ_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_writ_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 4 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[3]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_verb_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_verb_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_verb_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_verb_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_verb_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_verb_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_verb_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_verb_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 5 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[4]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_math_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_math_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_math_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_math_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_math_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_math_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_math_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_math_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 6 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[5]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_sci_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_sci_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_sci_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_sci_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_sci_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_sci_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_sci_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_sci_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 7 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[6]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dig_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dig_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dig_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dig_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dig_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dig_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dig_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dig_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 8 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[7]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_crit_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_crit_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_crit_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_crit_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_crit_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_crit_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_crit_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_crit_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 9 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[8]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_part_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_part_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_part_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_part_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_part_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_part_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_part_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_part_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 10 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[9]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_crea_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_crea_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_crea_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_crea_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_crea_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_crea_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_crea_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_crea_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 11 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[10]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_lead_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_lead_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_lead_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_lead_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_lead_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_lead_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_lead_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_lead_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 12 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[11]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_soca_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_soca_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_soca_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_soca_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_soca_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_soca_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_soca_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_soca_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 13 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[12]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_serv_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_serv_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_serv_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_serv_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_serv_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_serv_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_serv_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_serv_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 14 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[13]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_time_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_time_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_time_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_time_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_time_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_time_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_time_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_time_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 15 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[14]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_prob_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_prob_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_prob_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_prob_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_prob_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_prob_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_prob_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_prob_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 16 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[15]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_judg_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_judg_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_judg_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_judg_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_judg_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_judg_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_judg_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_judg_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- SKILL 17 -->
                        <tr>
                            <td></td>
                            <td><?php echo $skills_arr[16]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_sys_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_sys_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_sys_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_sys_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_sys_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_sys_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_sys_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_sys_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                <!-- QUESTION # 11 - 12 -->
                    <!-- DMCS SKILL 1 -->
                        <tr>
                            <td>DMCS Skills</td>
                            <td><?php echo $dmcs_skills_arr[0]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs1_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs1_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs1_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs1_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs1_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs1_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs1_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs1_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 2 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[1]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs2_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs2_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs2_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs2_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs2_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs2_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs2_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs2_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 3 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[2]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs3_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs3_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs3_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs3_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs3_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs3_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs3_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs3_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 4 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[3]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs4_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs4_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs4_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs4_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs4_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs4_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs4_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs4_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 5 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[4]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs5_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs5_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs5_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs5_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs5_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs5_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs5_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs5_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 6 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[5]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs6_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs6_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs6_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs6_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs6_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs6_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs6_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs6_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 7 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[6]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs7_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs7_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs7_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs7_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs7_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs7_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs7_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs7_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 8 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[7]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs8_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs8_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs8_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs8_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs8_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs8_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs8_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs8_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 9 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[8]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs9_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs9_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs9_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs9_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs9_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs9_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs9_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs9_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 10 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[9]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs10_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs10_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs10_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs10_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs10_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs10_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs10_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs10_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                    <!-- DMCS SKILL 11 -->
                        <tr>
                            <td></td>
                            <td><?php echo $dmcs_skills_arr[10]; ?></td>
                            <td>Very Important</td>
                            <td><?php echo $ct_dmcs11_vim ; ?></td>
                            <td>Very Satisfied</td>
                            <td><?php echo $ct_dmcs11_vs ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Important</td>
                            <td><?php echo $ct_dmcs11_im ; ?></td>
                            <td>Satisfied</td>
                            <td><?php echo $ct_dmcs11_sa ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_dmcs11_ofl ; ?></td>
                            <td>Unatisfied</td>
                            <td><?php echo $ct_dmcs11_us ; ?></td>
                            <!-- <td></td> -->
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_dmcs11_un ; ?></td>
                            <td>Very Unatisfied</td>
                            <td><?php echo $ct_dmcs11_vu ; ?></td>
                            <!-- <td></td> -->
                        </tr>    
                </tbody>
            </table>
            <table id="table-emp-table1">
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
                    <!-- QUESTION # 9 -->
                        <tr>
                            <td>How LIKELY to hire other graduates of UP</td>
                            <td>Very Likely</td>
                            <td><?php echo $ct_9vl ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Likely</td>
                            <td><?php echo $ct_9l ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Unlikely</td>
                            <td><?php echo $ct_9u ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Very Unlikely</td>
                            <td><?php echo $ct_9vu ; ?></td>
                        </tr>
                    <!-- QUESTION # 10 -->
                        <tr>
                            <td>How LIKELY to keep UP graduates</td>
                            <td>Very Likely</td>
                            <td><?php echo $ct_10vl ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Likely</td>
                            <td><?php echo $ct_10l ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Unlikely</td>
                            <td><?php echo $ct_10u ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Very Unlikely</td>
                            <td><?php echo $ct_10vu ; ?></td>
                        </tr>
                    <!-- QUESTION # 13 -->
                        <tr>
                            <td>Actions UP should take to improve skill and competency of graduates</td>
                            <td>Design courses that are more relevant to the needs of employers</td>
                            <td><?php echo $ct_des ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Include practical experience as part of the academic programs</td>
                            <td><?php echo $ct_prac ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Include sector specific job placements as an integral part of the degree program</td>
                            <td><?php echo $ct_sec ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Provide better post-graduation support (facilitate relations between graduates and companies/organizations)</td>
                            <td><?php echo $ct_post ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Others: <?php echo $ct_other13txt; ?></td>
                            <td><?php echo $ct_other13 ; ?></td>
                        </tr>
                    <!-- QUESTION # 14 -->
                        <tr>
                            <td>Importance of cooperating with UP in the design of curricula and study programs</td>
                            <td>Important</td>
                            <td><?php echo $ct_im ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Moderately part Important</td>
                            <td><?php echo $ct_mod ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Of Little Importance</td>
                            <td><?php echo $ct_of ; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Unimportant</td>
                            <td><?php echo $ct_un ; ?></td>
                        </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Answers</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- QUESTION # 15 -->
                        <tr>
                            <td>Other comments/suggestions to improve skill or competency of graduates</td>
                            <td><?php echo $ct_yes15; ?></td>
                        </tr>
                    <!-- QUESTION # 16 -->
                        <tr>
                            <td>Negative feedback about graduates</td>
                            <td><?php echo $ct_yes16; ?></td>
                        </tr>
                    <!-- QUESTION # 17 -->
                        <tr>
                            <td>Specific strengths of graduates</td>
                            <td><?php echo $ct_yes17; ?></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
    
    <?php include('footer.php'); ?>

</body>
</html>