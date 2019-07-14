<!DOCTYPE html>
<html lang="en">

<?php
         session_start();
        require_once('../mysql_connect.php');
        if($_SESSION['POSITION_ID']!="P0002") {
          header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."../login.php"); 
        }
		
		if(isset($_POST['Submit']))
		{
			$ID = $_POST['Submit'];
		}
		if(isset($_POST['Go']))
		{
			$ID = $_POST['ID'];
		}
       
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
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-datepicker/css/datepicker.css" />
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
   
        <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

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
        <h2>
          <center> FACULTY SUMMARY WORKLOAD</center>
        </h2>

        <div class="row mt">
          <div class="col-lg-12">
                 
            
                    
            <div class="form-panel">
            <div class="form-group">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
					<label class="col-sm-2 col-sm-2 control-label">School Year </label>
					<div class="col-sm-2">
						<select class="form-control" id="sychoose" name="sychoose">
						<?php
						$query="SELECT * FROM ccsfif.schoolyear;";
						$result=mysqli_query($dbc,$query);

						while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
						  echo "<option value={$row['syid']}>".$row['schoolyearstart']."-".$row['schoolyearend']."</option>";
						}
						?>
						</select>
					</div>

					<label class="col-sm-2 col-sm-2 control-label">Term </label>
					<div class="col-sm-2">
					<input type="hidden" class="form-control" name="ID" value="<?php echo $ID; ?>">
						<select class="form-control" id="termchoose" name="termchoose">
						<?php
						$query1="SELECT * FROM ccsfif.term;";
						$result1=mysqli_query($dbc,$query1);

						while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
						{
						  echo "<option value={$row1['termid']}>".$row1['term']."</option>";
						}
						?>
						</select>
					</div>
					<?php 
						if(isset($_POST['Go']))
						{
							$termchoose = $_POST['termchoose'];
							$sychoose = $_POST['sychoose'];
						}
					
					?>
						
					<div class="col-sm-2">
					<input class="btn btn-success btn-xs" type="submit" name="Go" value="Go">
					</div>
                    </form>
                  
                </div>
                
              
			  
			  
		
			
			  
              <table class="table table-striped table-advance">
                
                <thead>
                  <tr>
                    
                    <th class="hidden-phone"><i class=""></i>Workload</th>
                    <th class="hidden-phone"><i class=""></i>Units</th>
                    <th class="hidden-phone"><i class=""></i>Academic Year</th>
                    <th class="hidden-phone"><i class=""></i>Term</th>
					<th class="hidden-phone"><i class=""></i>Total Classes</th>
					<th class="hidden-phone"><i class=""></i>Hours(Week)</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $tt ="SELECT fid FROM faculty where FID = '{$ID}' ";

                    $ttr = mysqli_query($dbc, $tt);

                    $fid = mysqli_fetch_array($ttr);

                    $fidd= $fid['fid'];
					$totalall = 0;
                    
						if(isset($_POST['Go']))
						{
							$q="SELECT c.classid, 
                         c.courseid, 
                         c.termid, 
                         c.schoolyear,
                         c.number,
                         doc.file_name,
                         doc.file_uploaded 

                from class c,
                     document doc 

                where fid = $fidd 
                and c.documentID = doc.ID
                and schoolyear = $sychoose
                and termid = $termchoose;"; 
							$qr = mysqli_query($dbc, $q);
						}
						else
						{
							$q="SELECT classid, 
                         courseid, 
                         termid, 
                         schoolyear,
                         number,
                         doc.file_name,
                         doc.file_uploaded 

                from class c,
                     document doc

                
                where fid = $fidd
                and c.documentID = doc.ID;"; 
							$qr = mysqli_query($dbc, $q);

						}
							while($row = mysqli_fetch_array($qr))
							{
								$cid = $row['courseid'];
								$tid = $row['termid'];
								$syid = $row['schoolyear'];
								$num = $row['number'];
								
								$q2 ="SELECT coursename, 
                             units, 
                             hours 

                      from course 

                      where courseid = '".$cid."';"; 
								$qr2 = mysqli_query($dbc, $q2);

								while($row2 = mysqli_fetch_array($qr2))
								{
									$cname = $row2['coursename'];
									$units = $row2['units'];
									$hours = $row2['hours'];
								}
								
								$q3 ="SELECT schoolyearstart, 
                             schoolyearend 
                      from schoolyear 
                      where syid = $syid;"; 
								$qr3 = mysqli_query($dbc, $q3);

								while($row3 = mysqli_fetch_array($qr3))
								{
									$start = $row3['schoolyearstart'];
									$end = $row3['schoolyearend'];
								}     
								$total = $hours * $num;
								$totalall = $totalall + $total
						?>
							<tr>
							<td><?php echo $cname;?></div></td>
							<td><?php echo $units;?></div></td>
							<td><?php echo $start."-".$end;?></div></td>
							<td><?php echo $tid;?></div></td>
							<td><?php echo $num;?></div></td>
							<td><?php echo $total;?></div></td>
              <td>
                      <a download="<?php echo $row['file_uploaded'] ?>" href="uploads/<?php echo $row['file_uploaded'] ?>"> <?php echo $row['file_name'] ?> </a>
                    </td>
							<?php
							echo'
								</tr>';
							?>
							<?php 
							}
							if(isset($_POST['Go']))
							{
								$q1="SELECT w.id, 
                            w.name, 
                            w.hours, 
                            w.schoolyearid,
                            w.termid,
                            doc.file_name,
                            doc.file_uploaded 

                    from workload w,
                         document doc

                    where fid = $fidd
                     and w.documentID = doc.ID
                     and schoolyearid = $sychoose 
                     and termid = $termchoose;"; 
								$qr1 = mysqli_query($dbc, $q1);
							}
							else
							{
								$q1="SELECT w.id, 
                            w.name, 
                            w.hours, 
                            w.termid, 
                            w.schoolyearid,
                            doc.file_name,
                            doc.file_uploaded 

                    from workload w,
                         document doc

                    where fid = $fidd
                    and w.documentID = doc.ID;"; 

                
								$qr1 = mysqli_query($dbc, $q1);
							}
							while($row1 = mysqli_fetch_array($qr1))
							{
								$cid = $row1['name'];
								$tid = $row1['termid'];
								$syid = $row1['schoolyearid'];
								$hours = $row1['hours'];

								$q3 ="SELECT schoolyearstart, 
                             schoolyearend 
                     from schoolyear 
                     where syid = $syid;"; 
								$qr3 = mysqli_query($dbc, $q3);

								while($row3 = mysqli_fetch_array($qr3))
								{
									$start = $row3['schoolyearstart'];
									$end = $row3['schoolyearend'];
								}     
								
								$total = $hours;
								$totalall = $totalall + $total
								?>
								<tr>
								<td><?php echo $cid;?></div></td>
								<td><?php echo "N/A";?></div></td>
								<td><?php echo $start."-".$end;?></div></td>
								<td><?php echo $tid;?></div></td>
								<td><?php echo "N/A";?></div></td>
								<td><?php echo $total;?></div></td>
                <td>
                      <a download="<?php echo $row1['file_uploaded'] ?>" href="uploads/<?php echo $row1['file_uploaded'] ?>"> <?php echo $row1['file_name'] ?> </a>
                    </td>
								<?php
								echo'
									</tr>';
								?>
								
							
							<?php
							}
							if(isset($_POST['Go']))
							{
								echo "<tr bgcolor='black'>";
								echo "<td><b><font color='white'>TOTAL</font></b></div></td>";
								echo "<td></div></td>";
								echo "<td></div></td>";
								echo "<td></div></td>";
								echo "<td></div></td>";
								echo "<td><b><font color='white'>".$totalall."</font></b></div></td>";
							}
							?>   
          
                                   
                </tbody>
              </table>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
    
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
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
$("#2").addClass("active");

    </script>

</body>

</html>
