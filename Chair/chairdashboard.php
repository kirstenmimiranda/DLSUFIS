<!DOCTYPE html>

<html lang="en">
    
<?php
        session_start();
        require_once('../mysql_connect.php');
        
        if($_SESSION['POSITION_ID']!="P0002" ) {
          header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."../login.php"); }
    
    $tt ="SELECT fid FROM faculty where username = '{$_SESSION['username']}' ";

                    $ttr = mysqli_query($dbc, $tt);

                    $fid = mysqli_fetch_array($ttr);

                    $fidd= $fid['fid'];
    
    

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>CCS Accreditation Management System </title>

  <!-- Favicons -->
  <link href="../../img/logodlsu.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../../css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="../../lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <script src="../../lib/chart-master/Chart.js"></script>
		<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
       <?php
      require_once("sidenavbar.php");
      
      ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
       <section id="main-content">
      <section class="wrapper">
        <h2> <center>CHAIR DASHBOARD</center></h2>
        <hr>
          
  
              
              <div class="btn-group btn-group-justified">
                <div class="btn-group">
                  <a href="chairdashboard.php"><button type="button" class="btn btn-theme">Faculty</button></a>
                </div>
                
                <div class="btn-group">
                    <a href="chairdashboardinstruction.php"><button type="button" class="btn btn-theme">Instruction</button></a>
                </div>
              </div>
            
        
        <!-- page start-->
        <div class="tab-pane" id="chartjs">
            
            
            <div class="row mt">
            <div class="showback col-md-4">
                <h4><center><bold>TOTAL NUMBER OF FACULTY</bold></center> </h4>
                <hr>
                <?php
                
                $totalfaculty = "SELECT 
                                fid as totalfaculty FROM FACULTY WHERE position_ID = 'P0004' or position_ID='P0003' or position_ID='P0002'";
                
                $resulttotalfaculty = mysqli_query($dbc,$totalfaculty);
                
                $finaltotal = $resulttotalfaculty->num_rows;
                
                ?>
                <h4><center><?php echo $finaltotal; ?></center></h4>
                
            </div>
            <div class="showback col-md-4">
                <h4><center> TOTAL NUMBER OF PART TIME FACULTY</center> </h4>
                <hr>
                
                <?php
                
                $totalparttime = "SELECT fid
                                    FROM FACULTY 
                                    where position_ID ='P0004';";
                    
                $resulttotalparttime = mysqli_query($dbc,$totalparttime);
                
                $finalparttime = $resulttotalparttime->num_rows;
                
                ?>
                
                <h4><center><?php echo $finalparttime ?></center></h4>
                
            </div>
            <div class="showback col-md-4">
                <h4><center> TOTAL NUMBER OF FULL TIME FACULTY </center></h4>
                <hr>
                <?php
                
                $totalfulltime = "SELECT fid
                                    FROM FACULTY 
                                    where position_ID ='P0003' OR position_ID='P0002';";
                    
                $resulttotalfulltime = mysqli_query($dbc,$totalfulltime);
                
                $finalfulltime = $resulttotalfulltime->num_rows;
                
                ?>
                
                <h4><center><?php echo $finalfulltime ?></center></h4>
                
            </div>
            </div>
            <div class="row mt">
          <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4> Degree Holders</h4>
                  <br>
                <div class="panel-body text-center">
                  <div id="bar" style="width: 400; height: 300px;"></div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6 detailed ">
              <div class="content-panel">
                <h4><i class=""></i> Faculty Average Workloads per hr</h4>
                  <br>
                <div class="panel-body text-center">
                  <div id="avgfacultyworkload" style="width: 400; height: 300px;"></div>
                    
                </div>
              </div>
            </div>
            </div>
            
             <div class="row mt">
            <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4><i class=""></i> Degree being pursued</h4>
                <div class="panel-body text-center">
                    <div id="currentdegrees" style="width: 400; height: 300px;"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4><i class=""></i> Experience in DLSU</h4>
                <div class="panel-body text-center">
                  <div id="piechart"></div>
                </div>
              </div>
            </div>
          </div>
            
        <div class="row mt">
            <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4><i class=""></i> Experience in Other Schools</h4>
                <div class="panel-body text-center">
                    <div id="experienceinother" style="width: 400; height: 300px;"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4><i class=""></i> Practice of Profession</h4>
                <div class="panel-body text-center">
                    <div id="practiceinprofession" style="width: 400; height: 300px;"></div>
                    
                    
                  <div id="piechart"></div>
                </div>
              </div>
            </div>
          </div>
        <div class="row mt">
            <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4><i class=""></i> Staff Mobility (Reasons for Turnover)</h4>
                  <H5> <center>Total : 10 </center></H5>
                <div class="panel-body text-center">
                    <center><div id="myChart" style="width: 500px; height: 300px;"></div></center>
                </div>
              </div>
            </div>
            <div class="col-lg-6 detailed">
              <div class="content-panel">
                <h4><i class=""></i> Staff Mobility (Reasons for changes in full-time faculty)</h4>
                  <H5> <center>Total : 15 </center></H5>
                <div class="panel-body text-center">
                    <div id="staffmob" style="width: 400; height: 300px;"></div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">

      
        <a href="../../index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../../lib/jquery/jquery.min.js"></script>

  <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../../lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../../lib/jquery.scrollTo.min.js"></script>
  <script src="../../lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../../lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="../../lib/common-scripts.js"></script>
  <script type="text/javascript" src="../../lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="../../lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="../../lib/sparkline-chart.js"></script>
  <script src="../../lib/zabuto_calendar.js"></script>
      <script src="../../lib/chart-master/Chart.js"></script>
  <script src="../../lib/chartjs-conf.js"></script>

  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

      
<script>
    $(document).ready(function() {
          var pieData = [
        {
            value: 30,
            color:"#1abc9c"
        },
        {
            value : 50,
            color : "#16a085"
        },
        {
            value : 100,
            color : "#27ae60"
        }

    ];
    new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

    });
      
      
</script>
      
<script>
    $(document).ready(function() {
      var barChartData = {
        labels : ["Master","Doctorate"],
          
          
          
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [90,59]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [89,58]
            }
        ]

    };
    new Chart(document.getElementById("barcurrent").getContext("2d")).Bar(barChartData);

    });
</script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['DEGREE','Part Time', 'Full Time'],
          
          ['Bachelor',60, 55
          ],
            
          ['Masters', 50, 30],
          ['Doctorate',40, 32]
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          },
            
        series: {
            0: { color: '#F0B27A' },
            1: { color: '#F08080' },
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('bar'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }



      
<!---- AVERAGE FACULTY WORKLOAD ----->

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['less than 1 year', 8],
  ['1-3', 2],
  ['4-9', 4],
  ['10-14', 2],
  ['15 and above', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
      
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['3hrs or less', 8],
  ['3-5', 2],
  ['5-10', 12],
  ['10-15', 8],
  ['15 hrs and above', 5]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('avgfacultyworkload'));
  chart.draw(data, options);
}
</script>
      
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Years', 'Hours per Day'],
  ['less than 2 years', 8],
  ['3-5', 2],
  ['6-10', 4],
  ['10-15', 2],
  ['15 years and above', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('currentdegree'));
  chart.draw(data, options);
}
</script>
      
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['less than 2 years', 8],
  ['3-5', 2],
  ['6-10', 12],
  ['10-15', 8],
  ['15 years and above', 5]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('experienceinother'));
  chart.draw(data, options);
}
</script>

      
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'years'],
  ['less than 2 years', 8],
  ['3-5', 2],
  ['6-10', 12],
  ['10-15', 8],
  ['15 years and above', 5]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('practiceinprofession'));
  chart.draw(data, options);
}
</script>

      
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['DEGREE','Part Time', 'Full Time',  { role: 'style' } ],
            
        
          ['Masters', 50, 30,''],
          ['Doctorate',40, 32,'']
        ]);
          
          
      var view = new google.visualization.DataView(data);
      view.setColumns([0,1,{ calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" }, 2,
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },
                       3]);
          
        var options = {
          chart: {
            title: '',
            subtitle: '',
          },
            
        series: {
            0: { color: '#F0B27A' },
            1: { color: '#F08080' },
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('currentdegrees'));

      chart.draw(view, options);

      }
    </script>
      
      

<!---- STAFF MOBILITY IN THE LAST 3 YEARS ----->
    <script>
 var myConfig = {
      type: 'radar',
      plot: {
        aspect: 'area',
        animation: {
          effect: 3,
          sequence: 1,
          speed: 700
        }
      },
      scaleV: {
        visible: false
      },
      scaleK: {
        values: '0:3:1',
        labels: ['Retirement', 'Retrenchment', 'Resignation', 'Others(On leave, etc)'],
        item: {
          fontColor: '#607D8B',
          backgroundColor: "white",
          borderColor: "#aeaeae",
          borderWidth: 1,
          padding: '5 10',
          borderRadius: 10
        },
        refLine: {
          lineColor: '#c10000'
        },
        tick: {
          lineColor: '#59869c',
          lineWidth: 2,
          lineStyle: 'dotted',
          size: 20
        },
        guide: {
          lineColor: "#607D8B",
          lineStyle: 'solid',
          alpha: 0.3,
          backgroundColor: "#c5c5c5 #718eb4"
        }
      },
      series: [{
        values: [59, 39, 38, 19],
        text: 'farm'
      }, {
        lineColor: '#53a534',
        backgroundColor: '#689F38'
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: '100%',
      width: '100%'
    });
  </script>
      
      <!---- STAFF MOBILITY IN THE LAST 3 YEARS ----->
    <script>
 var myConfig = {
      type: 'radar',
      plot: {
        aspect: 'area',
        animation: {
          effect: 3,
          sequence: 1,
          speed: 700
        }
      },
      scaleV: {
        visible: false
      },
      scaleK: {
        values: '0:3:1',
        labels: ['Growth/Expansion', 'Replacement', 'New Programs', 'Others'],
        item: {
          fontColor: '#607D8B',
          backgroundColor: "white",
          borderColor: "#aeaeae",
          borderWidth: 1,
          padding: '5 10',
          borderRadius: 10
        },
        refLine: {
          lineColor: '#c10000'
        },
        tick: {
          lineColor: '#59869c',
          lineWidth: 2,
          lineStyle: 'dotted',
          size: 20
        },
        guide: {
          lineColor: "#607D8B",
          lineStyle: 'solid',
          alpha: 0.3,
          backgroundColor: "#c5c5c5 #718eb4"
        }
      },
      series: [{
        text: 'farm'
      }, {
        values: [20, 20, 54, 41],
        lineColor: '#53a534',
        backgroundColor: '#689F38'
      }]
    };

    zingchart.render({
      id: 'staffmob',
      data: myConfig,
      height: '100%',
      width: '100%'
    });
  </script>
    <script>
$("#1").addClass("active");
</script>


</body>

</html>
