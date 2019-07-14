<!DOCTYPE html>
<html lang="en">
    
    <?php
        session_start();
        require_once('../mysql_connect.php');
        if($_SESSION['POSITION_ID']!="P0002") {
          header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."../login.php"); 
        }
?>
    
<style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
          position: relative;
          background-color: #fefefe;
          margin: auto;
          padding: 0;
          border: 1px solid #888;
          width: 80%;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
          -webkit-animation-name: animatetop;
          -webkit-animation-duration: 0.4s;
          animation-name: animatetop;
          animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
          from {top:-300px; opacity:0} 
          to {top:0; opacity:1}
        }

        @keyframes animatetop {
          from {top:-300px; opacity:0}
          to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
          color: white;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }

        .modal-header {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
        }
        </style>



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
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <script src="../../lib/chart-master/Chart.js"></script>  
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    
    
</head>
<body>
  <section id="container">
    <!-- **********************************  TOP BAR CONTENT & NOTIFICATIONS ******************************************** -->
    <!--header start-->
   <?php
      require_once("sidenavbar.php");
      
      ?>
    <!--sidebar end-->
    <!-- ************************************************** MAIN CONTENT ************************************************** -->
    <!--main content start-->
 <section id="main-content">
      <section class="wrapper site-min-height">
          
          
          
            <?php 
            $titleid = $_GET['id'];
            $title = "SELECT p.position
                      FROM 
                        Committee_Head_Executive ce,
                        committee_positions p
                      WHERE 
                        idCommittee_Head_Executive = $titleid
                            AND ce.position = p.id_Committee_Positions";
            $qr = mysqli_query($dbc, $title);
            $display = mysqli_fetch_assoc($qr);
            echo "<center><h2> Assign {$display['position']} Committee <button id='myBtn' class='btn btn-success btn-xs'><i class='fa fa-plus'></i></button> </center></h2>";
                
                        
          
            ?>
          
          <?php
                $flag=0;

                if (isset($_POST['submit']))
                {
                    $message = NULL;
                    if(empty($_POST['yolo']))
                    {
                        $faculty = FALSE;
                        $message='<p> You forgot to select an assigned faculty';
                    }
                    else 
                        $faculty = $_POST['yolo'];

                    $area = $_GET['area'];
                    
                    
                    if (isset($_POST['inlineCheckbox1'])) {

                        $head_team = 1;
                    } else {

                        $head_team = 0;
                    }

                    $team = $_POST['team'];

                    if(!isset($message))
                    {
                      $insert ="INSERT INTO `ccsfif`.`committee_team` (`area`, `fid`, `head_team`, `team`, `status`)
                                VALUES ('$area', '$faculty', '$head_team', '$team', '1');";
                        
                        $result = mysqli_query($dbc, $insert);
                        $message ="<div class='alert alert-success'> <b> Faculty Successfully assigned!</b></div>";
                        $flag = 1;
                    }
                }

                if (isset($message))
                  echo '<font color="red">'.$message.'</font>';
            ?>
        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <h2>Assign Committee Member</h2>
            </div>
       
            <div class="modal-body">
              <div class="row mt">
                <div class="col-lg-12">
                  <div class="form-panel">
                    <div class="form">
                      <form class="cmxform form-horizontal style-form" method="post" action="" onsubmit="return confirm('Are you sure you want to submit your form? Select OK to confirm.');">
                        
                        <div class="form-group">
                        <label class="control-label col-md-2">Faculty Name</label>
                        <div class="col-lg-3">
                        <select class="form-control" id="yolo" name="yolo">
                        <option value="0"> -----select Faculty ---- </option>    
                        
                        <?php
                        $query11="Select CONCAT(f.ffname, ' ', f.flname) AS name, f.fid from faculty f" ;
                        echo $query11;    
                        $result11=mysqli_query($dbc,$query11);
                            
                        while($row1=mysqli_fetch_array($result11,MYSQLI_ASSOC))
                        {
                            echo "<option value={$row1['fid']}>{$row1['name']}</option>";
                        }
                        ?>  
                            </select>    
  
                            </div>
                        </div>  
                          
                        <!-- yeeeet section -->
                        
                          <div class="form-group ">
                          <label class="control-label col-md-2">Team</label>

                          <div class="col-md-3 col-xs-11">
                          <select class="form-control" id="team" name="team">
                            <option value="1">Analysis</option>    
                            <option value="2">Evaluation</option>    
                          </select>
                        </div>
                         <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" name='inlineCheckbox1' value="option1"> Team Head
                         </label>
                          </div>
                        
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" name="submit" type="submit">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- /form-panel -->
                </div>
          <!-- /col-lg-12 -->
        </div>
            </div>

          </div>

        </div>

        <!-- HEADING -->
    <table id="sampleTable" class="table table-striped table-advance table-hover">
       	<thead>
                  <tr>
                    <th><i class=""></i> Full Name </th>
                    <th class="hidden-phone">Position</th>
                    <th></th>
                    </tr>
                </thead>
		<tbody>       
                <?php
                    $area = $_GET['area'];
                    $query11="SELECT 
                                    idcommittee_team,
                                    area,
                                    GETFACULTYNAME(fid) AS 'name',
                                    team,
                                    head_team,
                                    status
                                FROM
                                    ccsfif.committee_team
                                WHERE
                                    area = $area AND status = 1
                                ORDER BY 5 DESC;" ;
                    $result11=mysqli_query($dbc,$query11);

                    while($row1=mysqli_fetch_array($result11,MYSQLI_ASSOC))
                    {
                        echo "<tr>";
                        echo "<td>{$row1['name']}</td>";
                        
                        $team = '';
                        if($row1['team'] == 1)
                            $team = 'Analysis';
                        else
                            $team = 'Evaluation';
                        
                        if($row1['head_team'] == 0)
                            echo "<td>$team Team Member</td>";
                        else
                            echo "<td>$team Team Head</td>";
                        
                        echo "<td></td>";
                        echo "</tr>";
                    }
                ?>
	   </tbody>
	</table>  
          
          
          
          
      </section>
      <!-- /wrapper -->
    </section>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">

        </div>
        <a href="../../ChairFWSR.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  

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
  <script type="text/javascript" src="../../lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="../../lib/advanced-form-components.js"></script>

          <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>


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
   $('#sampleTable').DataTable();
});
</script>
    <script>
$("#comhead").addClass("active");

    </script>
</body>

</html>
