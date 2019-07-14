<!DOCTYPE html>
<html lang="en">
    
    <?php
        session_start();
        require_once('../mysql_connect.php');
        if($_SESSION['POSITION_ID']!="P0002") {
          header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."../login.php"); 
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
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <script src="../../lib/chart-master/Chart.js"></script>  
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!-- **********************************  TOP BAR CONTENT & NOTIFICATIONS ******************************************** -->
    <?php
      require_once("sidenavbar.php");
      
      ?>



    <!--sidebar end-->
    <!-- ************************************** MAIN CONTENT************************************************************** -->
    <!--main content start-->
      
      
 <section id="main-content">
      <section class="wrapper site-min-height">
        <h2><center>Assign Committee </center></h2>
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
            
            $position = $_POST['committeeId'];
            
            if(!isset($message))
            {
              $insert ="INSERT INTO Committee_Head_Executive 
                        ( fid, position,status )
                        VALUES 
                        ('$faculty','$position','1')";
                
                $result = mysqli_query($dbc, $insert);
                $message ="<div class='alert alert-success'> <b> Faculty Successfully assigned!</b></div>";
                $flag = 1;
                
            }
        }
            
        if (isset($message))
          echo '<font color="red">'.$message.'</font>';
    ?>
          <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"><b>Executive Committee</b></label>
                  <div class="col-sm-8">
                      <?php 
                            $q = "SELECT 
                                        idCommittee_Head_Executive as 'id',
                                        GETFACULTYNAME(fid) AS 'name',
                                        position,
                                        status
                                    FROM
                                        ccsfif.Committee_Head_Executive
                                    WHERE
                                        position = 1 AND status = 1;
                                ";

                            $qr = mysqli_query($dbc, $q);
                            $row = mysqli_fetch_array($qr);

                            if($row['status']==0)
                                echo "<button class='btn btn-success btn-s' name='modals' data-toggle='modal' data-target='#myModal' onclick='myFunction(this)' id='meBtn' value='1' 
                                committee-name='Executive Committee'>Assign</button>";
                            else
                                echo '<p class="form-control-static" placeholder="input name">'.$row['name'].'</p>';
                        ?>
                  </div>
                </div>
                <div class="row mt">
                  <div class="col-md-12">

                      <table class="table table-striped table-advance table-hover">
                        <h3><center>Committee Heads </center></h3>
                        <thead>
                          <tr>
                            <th><i class="fa fa-user"></i> Full Name </th>
                            <th class="hidden-phone"><i class="fa fa-sitemap"></i> Area</th>
                            <th></th>
                          </tr>
                        </thead>
                          
                          
                        <tbody>
                        <!-- MODAL FOR ASSIGNING COMMITTEE HEAD -->
                            
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="form">
                          <form class="cmxform form-horizontal style-form" method="post" action="" onsubmit="return confirm('Are you sure you want to submit your form? Select OK to confirm.');">
                            <input type="hidden" id="committeeId" name="committeeId" >
                              <div class="form-group ">  
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                                  <h4 class="modal-title" id="modalTitle"></h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group ">
                                      <label class="control-label col-lg-2">Faculty</label>
                                      <div class="col-lg-6">
                                        <select class="form-control" id="yolo" name="yolo">
                                        <option> ------Please select a person --------</option>
                                        <?php 
                                        $query1 = "SELECT fid, flname, ffname 
                                                  FROM FACULTY;";
                                        $result1=mysqli_query($dbc,$query1);

                                        while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                                      {
                                          echo "<option value={$row1['fid']}>{$row1['flname']}, {$row1['ffname']}</option>";
                                      }

                                        ?>
                                        </select>
                                        </div>
                                    
                                  </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                              
                            </form>
                        </div>
                     </div>
                    </div>
                </div>
                          <tr>
                                <?php 
                                    $q = "SELECT 
                                                idCommittee_Head_Executive as 'id',
                                                GETFACULTYNAME(fid) AS 'name',
                                                position,
                                                status
                                            FROM
                                                ccsfif.Committee_Head_Executive
                                            WHERE
                                                position = 2 AND status = 1;
                                        ";
                            
                                    $qr = mysqli_query($dbc, $q);
                                    $row = mysqli_fetch_array($qr);
                                
                                    if($row['status']==0)
                                        echo "<td><button class='btn btn-success btn-s' name='modals' data-toggle='modal' data-target='#myModal' onclick='myFunction(this)' id='meBtn' value='2' 
                                        committee-name='Laboratory'>Assign</button>";
                                    else
                                        echo "<td>".$row['name']."</td>";
                                
                                
                                    echo "<td>Laboratory</td>
                                            <td>";
                                
                                    if($row['status']!=0)
                                        echo "
                                              <td>
                                              <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                                  <a href='ChairViewCommitteeMembers.php?id=".$row['id']."&area=2'>
                                              <button class='btn btn-warning btn-xs'>View members</button> </a>
                                             </td>
                                             ";
                                    else
                                        echo "<td></td>"
                                ?>
                          </tr>
                          <tr>
                                <?php 
                                    $q = "SELECT 
                                                idCommittee_Head_Executive as 'id',
                                                GETFACULTYNAME(fid) AS 'name',
                                                position,
                                                status
                                            FROM
                                                ccsfif.Committee_Head_Executive
                                            WHERE
                                                position = 3 AND status = 1;
                                        ";
                            
                                    $qr = mysqli_query($dbc, $q);
                                    $row = mysqli_fetch_array($qr);
                                
                                    if($row['status']==0)
                                        echo "<td><button class='btn btn-success btn-s' name='modals' data-toggle='modal' data-target='#myModal' onclick='myFunction(this)' id='meBtn' value='3' 
                                        committee-name='Instruction'>Assign</button>";
                                    else
                                        echo "<td>".$row['name']."</td>";
                                
                                
                                    echo "<td>Instruction</td>
                                            <td>";
                                
                                    if($row['status']!=0)
                                        echo "
                                              <td>
                                              <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                                  <a href='ChairViewCommitteeMembers.php?id=".$row['id']."&area=3'>
                                              <button class='btn btn-warning btn-xs'>View members</button> </a>
                                             </td>
                                             ";
                                    else
                                        echo "<td></td>"
                                ?>
                          </tr>
                          <tr>
                                <?php 
                                    $q = "SELECT 
                                                idCommittee_Head_Executive as 'id',
                                                GETFACULTYNAME(fid) AS 'name',
                                                position,
                                                status
                                            FROM
                                                ccsfif.Committee_Head_Executive
                                            WHERE
                                                position = 4 AND status = 1;
                                        ";
                            
                                    $qr = mysqli_query($dbc, $q);
                                    $row = mysqli_fetch_array($qr);
                                
                                    if($row['status']==0)
                                        echo "<td><button class='btn btn-success btn-s' name='modals' data-toggle='modal' data-target='#myModal' onclick='myFunction(this)' id='meBtn' value='4' 
                                        committee-name='Faculty'>Assign</button>";
                                    else
                                        echo "<td>".$row['name']."</td>";
                                
                                
                                    echo "<td>Faculty</td>
                                            <td>";
                                
                                    if($row['status']!=0)
                                        echo "
                                              <td>
                                              <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                                  <a href='ChairViewCommitteeMembers.php?id=".$row['id']."&area=4'>
                                              <button class='btn btn-warning btn-xs'>View members</button> </a>
                                             </td>
                                             ";
                                    else
                                        echo "<td></td>"
                                ?>
                          </tr>
                          
                            
                        
                        </tbody>
                      </table>
                    <!-- /content-panel -->
                  </div>
                  <!-- /col-md-12 -->
                </div>
    <!--   -------------- -------------- -------------- -------------- -------------- -------------- -------------- -->
                  
                  
              
            </div>
          </div>
          <!-- col-lg-12-->
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
        <a href="../../ChairFWSR.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      
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
  <script type="text/javascript" src="../../lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="../../lib/advanced-form-components.js"></script>
    <script>
    function myFunction(obj) {
    var x = $(obj).attr("value");
    var committeeName = $(obj).attr("committee-name");
    console.log(x);
    console.log(committeeName);
    $('#committeeId').val(x);
    $('#modalTitle').html("Assign Committee Head for " + committeeName);
    
    //document.getElementById("modalTitle").innerHTML = ("Assign Committee Head for " + committeeName);
        
    }
    </script>
</body>

</html>
