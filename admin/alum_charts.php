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
    <!-- for charts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-alum-charts">
            <h4 id="title-alum-charts">Chart Generation</h4>
            <h6 id="subtitle-alum-charts">Alumni Survey</h6>
                <br>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 1</h6>
                <canvas id="alum_canvas1"></canvas>
            </div>
            <div id="temp-container">
                <h6 id="subtitle-emp-charts">Question No. 2</h6>
                <h3>COUNTRIES ALUMNI WORK IN/FOR: <?php echo $country ; ?></h1>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 3</h6>
                <canvas id="alum_canvas3"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 4</h6>
                <canvas id="alum_canvas4"></canvas>
            </div>


            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 6</h6>
                <canvas id="alum_canvas6"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 7</h6>
                <canvas id="alum_canvas7"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 8</h6>
                <canvas id="alum_canvas8"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 9</h6>
                <canvas id="alum_canvas9"></canvas>
            </div>


            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 11</h6>
                <canvas id="alum_canvas11"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 12</h6>
                <canvas id="alum_canvas12"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 13</h6>
                <canvas id="alum_canvas13"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 14</h6>
                <canvas id="alum_canvas14"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 15</h6>
                <canvas id="alum_canvas15"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 16</h6>
                <canvas id="alum_canvas16"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 17</h6>
                <canvas id="alum_canvas17"></canvas>
            </div>
            <div id="chart-container-alum">
                <h6 id="subtitle-alum-charts">Question No. 18</h6>
                <canvas id="alum_canvas18"></canvas>
            </div>
            <div id="temp-container">
                <h6 id="subtitle-emp-charts">Question No. 19</h6>
                <h3>HOW DID UPB DMCS HELP YOU? <?php echo $ct_yes19 ; ?></h1>
            </div>
        </div>
    </section>
    <!-- QUESTION # 1 -->
    <script type="text/javascript">
        var xValues = ["Female", "Male"];
        var yValues = [<?php echo $ct_fmale;?>, <?php echo $ct_male;?>];
        var barColors = [
          "#b91d47",
          "#00aba9"
        ];

        new Chart("alum_canvas1", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 1"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 3 -->
    <script type="text/javascript">
        var xValues = ["Very Dissatisfied", "Generally Dissatisfied",
                       "Generally Satisfied", "Very Satisfied"
                      ];
        var yValues = [<?php echo $ct_vd3;?>, <?php echo $ct_gd3;?>, <?php echo $ct_gs3;?>, <?php echo $ct_vs3;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("alum_canvas3", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 3"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 4 -->
    <script type="text/javascript">
        var xValues = ["I got a job while still in college", "2 months or less", "3 to 6 months", "7 months to 1 year", "1 to 2 years", "More than 2 years", "I am not sure"
                      ];
        var yValues = [<?php echo $ct_coll;?>, <?php echo $ct_2mos;?>, <?php echo $ct_6mos;?>, <?php echo $ct_7mos;?>, <?php echo $ct_1yr;?>, <?php echo $ct_2yrs;?>, <?php echo $ct_nots;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145",
          "blue",
          "pink",
          "gray"
        ];

        new Chart("alum_canvas4", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 4"
                }
            }
          }
        });
    </script>




    <!-- QUESTION # 6 -->
    <script type="text/javascript">
        var xValues = ["High school", "Some college", "Associate’s degree", "Bachelor’s degree", "Master’s degree", "Doctoral degree", "Others"
                      ];
        var yValues = [<?php echo $ct_hs6;?>, <?php echo $ct_coll6;?>, <?php echo $ct_ad6;?>, <?php echo $ct_bd6;?>, <?php echo $ct_md6;?>, <?php echo $ct_dd6;?>, <?php echo $ct_other6;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145",
          "blue",
          "pink",
          "gray"
        ];

        new Chart("alum_canvas6", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 6"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 7 -->
    <script type="text/javascript">
        var xValues = ["High school", "Some college", "Associate’s degree", "Bachelor’s degree", "Master’s degree", "Doctoral degree", "Others"
                      ];
        var yValues = [<?php echo $ct_hs7;?>, <?php echo $ct_coll7;?>, <?php echo $ct_ad7;?>, <?php echo $ct_bd7;?>, <?php echo $ct_md7;?>, <?php echo $ct_dd7;?>, <?php echo $ct_other7;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145",
          "blue",
          "pink",
          "gray"
        ];

        new Chart("alum_canvas7", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 7"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 8 -->
    <script type="text/javascript">
        var xValues = ["Armed Forces Occupations", "Clerical Support Workers", "Craft and Related Trade Workers", "Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)",  "Managers", "Plant and Machine Operators, and Assemblers", "Professionals", "Service and Sales Workers", "Skilled Agricultural, Forestry and Fishery Workers", "Technicians and Associate Professionals"
        ];
        var yValues = [<?php echo $ct_occ1;?>, <?php echo $ct_occ2;?>, <?php echo $ct_occ3;?>, <?php echo $ct_occ4;?>, <?php echo $ct_occ5;?>, <?php echo $ct_occ6;?>, <?php echo $ct_occ7;?>, <?php echo $ct_occ8;?>, <?php echo $ct_occ9;?>, <?php echo $ct_occ10;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145",
          "blue",
          "pink",
          "gray",
          "green",
          "yellow",
          "brown"
        ];

        new Chart("alum_canvas8", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 8"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 9 -->
    <script type="text/javascript">
        var xValues = ["Yes, it is the same field as my major/s", "Yes, it is related to my major/s", "No, it is not related"
        ];
        var yValues = [<?php echo $ct_sf;?>, <?php echo $ct_rf;?>, <?php echo $ct_nr;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797"
        ];

        new Chart("alum_canvas9", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 9"
                }
            }
          }
        });
    </script>




    <!-- QUESTION # 11 -->
    <script type="text/javascript">
        var xValues = ["Yes, Part time", "Yes, Full time (40 hours/week)", "No"
        ];
        var yValues = [<?php echo $ct_yes11_part;?>, <?php echo $ct_yes11_full;?>, <?php echo $ct_no11;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797"
        ];

        new Chart("alum_canvas11", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 11"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 12 -->
    <script type="text/javascript">
        var xValues = ["No experience", "Less than one (1) year", "One (1) to three (3) years", "Three (3) to six (6) years", "More than six (6+) years"
        ];
        var yValues = [<?php echo $ct_noex;?>, <?php echo $ct_less1;?>, <?php echo $ct_1to3;?>, <?php echo $ct_3to6;?>, <?php echo $ct_more6;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145",
          "blue",
        ];

        new Chart("alum_canvas12", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 12"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 13 -->
    <script type="text/javascript">
        var xValues = ["Very Poorly", "Less than adequately",
                       "More than adequately", "Very well"
                      ];
        var yValues = [<?php echo $ct_vp13;?>, <?php echo $ct_la13;?>, <?php echo $ct_ma13;?>, <?php echo $ct_vw13;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("alum_canvas13", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 13"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 14 -->
    <script type="text/javascript">
        var xValues = ["Entry-level", "Supervisory",
                       "Executive level (except Chief Executive)", "Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)"
                      ];
        var yValues = [<?php echo $ct_entry14;?>, <?php echo $ct_sup14;?>, <?php echo $ct_exec14;?>, <?php echo $ct_chief14;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("alum_canvas14", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 14"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 15 -->
    <script type="text/javascript">
        var xValues = ["None at all", "Some of my time (up to 25% of my time)", "Half my time (50%)", "Most of my time (75% of my time)"
        ];
        var yValues = [<?php echo $ct_non15;?>, <?php echo $ct_som15;?>, <?php echo $ct_half15;?>, <?php echo $ct_most15;?> 
        ];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("alum_canvas15", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 15"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 16 -->
    <script type="text/javascript">
        var xValues = ["No supervisory or lead responsibilities", "Limited or indirect supervision of one or more people", "Direct supervision of one or more people", "Direct supervision over a unit or department"
        ];
        var yValues = [<?php echo $ct_non16;?>, <?php echo $ct_lim16;?>, <?php echo $ct_dir16;?>, <?php echo $ct_unit16;?> 
        ];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("alum_canvas16", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 16"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 17 -->
    <script type="text/javascript">
        var xValues = ["Very Dissatisfied", "Generally Dissatisfied",
                       "Generally Satisfied", "Very Satisfied"
                      ];
        var yValues = [<?php echo $ct_vd17;?>, <?php echo $ct_gd17;?>, <?php echo $ct_gs17;?>, <?php echo $ct_vs17;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("alum_canvas17", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 17"
                }
            }
          }
        });
    </script>

    <!-- QUESTION # 18 -->
    <script type="text/javascript">

        var barChartData = {
            // labels: ["Possess the skills and mindset to improve human life", "Commit to the freedom and welfare of all", "Demonstrate mastery of knowledge in your specific discipline", "Possess breadth of mind", "Possess strength of character", "Possess generosity of spirit", "Inclusively engage with society and the world at large", "Be mindful of the needs and capabilities of people", "Be sensitive to the challenges and opportunities of national development and global change", "Think critically", "Demonstrate discernment"],
            labels: ["Competency 1", "Competency 2", "Competency 3", "Competency 4", "Competency 5", "Competency 6", "Competency 7", "Competency 8", "Competency 9", "Competency 10", "Competency 11"],
            datasets: [{
                label: 'Very Poorly',
                backgroundColor: "gray",
                yAxisID: "y-axis-1",
                data: [<?php echo $ct_dmcs1_vp;?>, <?php echo $ct_dmcs2_vp;?>,
                       <?php echo $ct_dmcs3_vp;?>, <?php echo $ct_dmcs4_vp;?>,
                       <?php echo $ct_dmcs5_vp;?>, <?php echo $ct_dmcs6_vp;?>,
                       <?php echo $ct_dmcs7_vp;?>, <?php echo $ct_dmcs8_vp;?>,
                       <?php echo $ct_dmcs9_vp;?>, <?php echo $ct_dmcs10_vp;?>,
                       <?php echo $ct_dmcs11_vp;?>]
            }, {
                label: 'Less than adequately',
                backgroundColor: "rgba(151,187,205,0.5)",
                yAxisID: "y-axis-2",
                data: [<?php echo $ct_dmcs1_la;?>, <?php echo $ct_dmcs2_la;?>,
                       <?php echo $ct_dmcs3_la;?>, <?php echo $ct_dmcs4_la;?>,
                       <?php echo $ct_dmcs5_la;?>, <?php echo $ct_dmcs6_la;?>,
                       <?php echo $ct_dmcs7_la;?>, <?php echo $ct_dmcs8_la;?>,
                       <?php echo $ct_dmcs9_la;?>, <?php echo $ct_dmcs10_la;?>,
                       <?php echo $ct_dmcs11_la;?>]
            }, {
                label: 'More than adequately',
                backgroundColor: "#99d8d0",
                yAxisID: "y-axis-3",
                data: [<?php echo $ct_dmcs1_ma;?>, <?php echo $ct_dmcs2_ma;?>,
                       <?php echo $ct_dmcs3_ma;?>, <?php echo $ct_dmcs4_ma;?>,
                       <?php echo $ct_dmcs5_ma;?>, <?php echo $ct_dmcs6_ma;?>,
                       <?php echo $ct_dmcs7_ma;?>, <?php echo $ct_dmcs8_ma;?>,
                       <?php echo $ct_dmcs9_ma;?>, <?php echo $ct_dmcs10_ma;?>,
                       <?php echo $ct_dmcs11_ma;?>]
            }, {
                label: 'Very well',
                backgroundColor: "#009f8b",
                yAxisID: "y-axis-4",
                data: [<?php echo $ct_dmcs1_vw;?>, <?php echo $ct_dmcs2_vw;?>,
                       <?php echo $ct_dmcs3_vw;?>, <?php echo $ct_dmcs4_vw;?>,
                       <?php echo $ct_dmcs5_vw;?>, <?php echo $ct_dmcs6_vw;?>,
                       <?php echo $ct_dmcs7_vw;?>, <?php echo $ct_dmcs8_vw;?>,
                       <?php echo $ct_dmcs9_vw;?>, <?php echo $ct_dmcs10_vw;?>,
                       <?php echo $ct_dmcs11_vw;?>]
            }]
        }

        new Chart("alum_canvas18", {
          type: "bar",
          data: barChartData,
          options: {
            plugins: {
                 title: {
                  display: true,
                  text: "Question # 18"
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-1": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-2": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-3": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-4": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }
           
          }
        });
    </script>

    <?php include('footer.php'); ?>

</body>
</html>