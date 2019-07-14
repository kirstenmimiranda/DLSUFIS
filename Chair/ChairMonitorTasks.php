<!DOCTYPE html>

<?php 
session_start();
        require_once('../mysql_connect.php');
        if($_SESSION['POSITION_ID']!="P0002") {
          header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."../login.php"); 
        }
$message = NULL;

?>
<html lang="en">

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
  <link href="../../lib/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../../css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="../../lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <script src="../../lib/chart-master/Chart.js"></script>

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
      <section class="wrapper site-min-height">
          <div class="border-head">
              <center><h1>Monitor Tasks</h1></center>
            </div>
              <div class="border-head">
              <h3>Tasks Schedule</h3>
            </div>
             <div color>Legend</div>
              <div class="external-event label label-success">Completed</div>
              <div class="external-event label label-info">In Progress</div>
              <div class="external-event label label-warning">For Approval</div>
              <div class="external-event label label-danger">Overdue</div>
              <div class="external-event label label-default">Cancelled</div>
              
              
             <br> 
          
              <br>
              <br>
              <br>
              <div id="calendar" class="has-toolbar"></div>

    

      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">

     
        </div>
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
  <script src="../../lib/fullcalendar/fullcalendar.min.js"></script>

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
    var Script = function () {


    /* initialize the external events
     -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* initialize the calendar
     -----------------------------------------------------------------*/

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        events: [
        <?php
            $queryTasks = "SELECT t.tasktitle, f.ffname, f.flname, DATE(t.duedate) AS duedate, YEAR(t.duedate) AS dueyear, MONTH(t.duedate) AS duemonth, DAY(t.duedate) AS dueday, t.statusid
            FROM task t, faculty f, status s
            WHERE t.faculty_FID= f.fid AND t.statusid = s.id; ";
            
            $resultTask = mysqli_query($dbc,$queryTasks);
            
            while($rowTask=mysqli_fetch_array($resultTask)):?>
            {
              title: '<?php echo $rowTask['tasktitle']. " (". $rowTask['ffname']. " "  .$rowTask['flname']. ")"; ?>',
              start: new Date(<?php echo $rowTask['dueyear']; ?>, <?php echo ($rowTask['duemonth'] - 1); ?>, <?php echo $rowTask['dueday']; ?>),
              color: '<?php 
                    if($rowTask['statusid'] == 3)
                        echo '#5bc0de';
                    else if ($rowTask['statusid'] == 4)
                        echo '#5cb85c';
                    else if ($rowTask['statusid'] == 5)
                        echo '#777';
                    else if ($rowTask['statusid'] == 6)
                        echo '#f0ad4e';
                    else
                        echo '#d9534f';
                    
                ?>'
              
            },
            <?php endwhile; ?>
        ]
    });


}();
    
    
</script>
    
    <script>
$("#3").addClass("active");

    </script>
</body>

</html>
