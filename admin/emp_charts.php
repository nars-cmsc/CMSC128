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
    <!-- for charts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-emp-charts">
            <h4 id="title-emp-charts">Chart Generation</h4>
            <h5 id="subtitle-emp-charts">Employer Satisfaction Survey</h6>
                <br>
            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 1</h6>
                <canvas id="mycanvas1"></canvas>
            </div>
            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 2</h6>
                <canvas id="mycanvas2"></canvas>
            </div>
            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 3</h6>
                <canvas id="mycanvas3"></canvas>
            </div>
            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 4</h6>
                <canvas id="mycanvas4"></canvas>
            </div>
            <div id="temp-container">
                <h6 id="subtitle-emp-charts">Question No. 5</h6>
                <h3>NUMBER OF UP HIRES: <?php echo $ct_up_hire ; ?></h1>
            </div>
            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 6</h6>
                <canvas id="mycanvas6"></canvas>
            </div>



            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 9</h6>
                <canvas id="mycanvas9"></canvas>
            </div>
            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 10</h6>
                <canvas id="mycanvas10"></canvas>
            </div>



            <div id="chart-container">
                <h6 id="subtitle-emp-charts">Question No. 14</h6>
                <canvas id="mycanvas14"></canvas>
            </div>
        </div>
    </section>
    <!-- QUESTION # 1 -->
    <script type="text/javascript">
        var xValues = ["Public", "Private", "Others"];
        var yValues = [<?php echo $ct_pub;?>, <?php echo $ct_priv;?>, 0];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797"
        ];

        new Chart("mycanvas1", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 1"
            }
          }
        });
    </script>

    <!-- QUESTION # 2 -->
    <script type="text/javascript">
        var xValues = ["Philippines", "Abroad"];
        var yValues = [<?php echo $ct_ph;?>, <?php echo $ct_ab;?>];
        var barColors = [
          "#e8c3b9",
          "#1e7145"
        ];

        new Chart("mycanvas2", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 2"
            }
          }
        });
    </script>

    <!-- QUESTION # 3 -->
    <script type="text/javascript">
        var xValues = ["Industry 1", "Industry 2", "Industry 3", "Industry 4", 
                       "Industry 5", "Industry 6", "Industry 7", "Industry 8", 
                       "Industry 9", "Industry 10", "Industry 11", "Industry 12", 
                       "Industry 13", "Industry 14", "Industry 15", "Industry 16", 
                       "Industry 17", "Industry 18", "Industry 19", "Industry 20", 
                       "Industry 21", "Industry 22"
        ];
        var yValues = [<?php echo $ct_ind1;?>, <?php echo $ct_ind2;?>,
                       <?php echo $ct_ind3;?>, <?php echo $ct_ind4;?>,
                       <?php echo $ct_ind5;?>, <?php echo $ct_ind6;?>,
                       <?php echo $ct_ind7;?>, <?php echo $ct_ind8;?>,
                       <?php echo $ct_ind9;?>, <?php echo $ct_ind10;?>,
                       <?php echo $ct_ind11;?>, <?php echo $ct_ind12;?>,
                       <?php echo $ct_ind13;?>, <?php echo $ct_ind14;?>,
                       <?php echo $ct_ind15;?>, <?php echo $ct_ind16;?>,
                       <?php echo $ct_ind17;?>, <?php echo $ct_ind18;?>,
                       <?php echo $ct_ind19;?>, <?php echo $ct_ind20;?>,
                       <?php echo $ct_ind21;?>, <?php echo $ct_ind22;?> 
        ];
        var barColors = [
          "#ffffff", "#e5f5f3", "#ccebe7", "#b2e2dc", "#99d8d0",
          "#7fcfc5", "#66c5b9", "#4cbbad", "#32b2a2", "#19a896",
          "#00b9a1", "#009f8b", "#008f7d", "#007f6f", "#006f61",
          "#005f53", "#004f45", "#003f37", "#002f29", "#001f1b",
          "#000f0d", "#000000"
        ];

        new Chart("mycanvas3", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 3"
            }
          }
        });
    </script>

    <!-- QUESTION # 4 -->
    <script type="text/javascript">
        var xValues = ["Chief", "Supervisory", "Rank and file"];
        var yValues = [<?php echo $ct_chief;?>, <?php echo $ct_sup;?>, <?php echo $ct_rank;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797"

        ];

        new Chart("mycanvas4", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 4"
            }
          }
        });
    </script>

    <!-- QUESTION # 6 -->
    <script type="text/javascript">
        var xValues = ["Strongly Disagree", "Disagree",
                       "Agree", "Strongly Agree"
                      ];
        var yValues = [<?php echo $ct_sd;?>, <?php echo $ct_d;?>, <?php echo $ct_a;?>, <?php echo $ct_sa;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("mycanvas6", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 6"
            }
          }
        });
    </script>




    <!-- QUESTION # 9 -->
    <script type="text/javascript">
        var xValues = ["Very Unlikely", "Unlikely",
                       "Likely", "Very Likely"
                      ];
        var yValues = [<?php echo $ct_9vu;?>, <?php echo $ct_9u;?>, <?php echo $ct_9l;?>, <?php echo $ct_9vl;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("mycanvas9", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 9"
            }
          }
        });
    </script>

    <!-- QUESTION # 10 -->
    <script type="text/javascript">
        var xValues = ["Very Unlikely", "Unlikely",
                       "Likely", "Very Likely"
                      ];
        var yValues = [<?php echo $ct_10vu;?>, <?php echo $ct_10u;?>, <?php echo $ct_10l;?>, <?php echo $ct_10vl;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("mycanvas10", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 10"
            }
          }
        });
    </script>




    <!-- QUESTION # 14 -->
    <script type="text/javascript">
        var xValues = ["Unimportant", "Of Little Importance",
                       "Moderately part Important", "Important"
                      ];
        var yValues = [<?php echo $ct_un;?>, <?php echo $ct_of;?>, <?php echo $ct_mod;?>, <?php echo $ct_im;?>];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#1e7145"
        ];

        new Chart("mycanvas14", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Question # 14"
            }
          }
        });
    </script>

    <?php include('footer.php'); ?>

</body>
</html>