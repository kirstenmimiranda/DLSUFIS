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
          <div class="row mt">
          <div class="col-lg-12">
            <H1><center> CURRICULUM AND INSTRUCTION EVALUATION FORM</center></H1>
              
            <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview"> Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#a">A</a>
                  </li>
                  <li><a data-toggle="tab" href="#b">B</a></li>
                  <li><a data-toggle="tab" href="#c">C</a></li>
                  <li><a data-toggle="tab" href="#d">D</a></li>
                  <li><a data-toggle="tab" href="#e">E</a></li>
                  <li><a data-toggle="tab" href="#f">F</a></li>
                  <li><a data-toggle="tab" href="#g">G</a></li>
                    
                    
                </ul>
              </div>
                
                <div class="panel-body">
                <div class="tab-content">
                <!-- /panel-heading -->
                <div id="overview" class="tab-pane active">
                    
                    <h2><center>ANALYSIS</center></h2>
                    <p><center>Within the parentheses (  ) preceding the items given under Analysis, place one of the following letters:</center></p>
                    
                    <p><center>E  	provision or condition exists extensively</center></p>
                    <p><center>S  	provision or condition exists moderately</center></p>
                    <p><center>L  	provision or condition is very limited</center></p>
                    <p><center>M  	provision or condition is missing but needed</center></p>
                    <p><center>O  	provision or condition does not apply</center></p>
                    <p></p>
                    <p></p>

                    <h2><center>EVALUATION</center></h2>
                    <p><center>Evaluations represent the best judgment of the effectiveness of the implementation of the provisions after all the evidence has been considered. The evaluators should use the rating scale given below:</center></p>
                    
                    <p><center>5 – Excellent	the provisions or conditions are effectively implemented and are functioning excellently</center></p>
                    <p><center>4 ‑ Very Good	provisions or conditions are implemented and are functioning well</center></p>
                    <p><center>3 – Good	provisions or conditions are moderately implemented and are functioning satisfactorily</center></p>
                    <p><center>2 – Fair	provisions or conditions are implemented to a limited extent and are functioning minimally</center></p>
                    <p><center>1 ‑ Poor	provisions or conditions are not implemented and are not functioning</center></p>
                    <p><center>O ‑ Does not apply	provisions or conditions are not applicable</center></p>

                                
                    </div>
                <!-- /panel-heading -->
                <div id="a" class="tab-pane">
                    <div class="row">
                        <h2><center><font><strong>A. CURRICULUM</strong></font></center></h2>
                      
                        <div class="col-md-12">
                        <div class="form-panel">
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                              <hr>
                            <form class="form-horizontal style-form">
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>1.	There is a clear description of the degree programs.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="Instructiona1" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="Instructiona1" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="Instructiona1" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="Instructiona1" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="Instructiona1" value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>2.  There is a set of clear objectives for each degree program.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona2 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona2 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona2 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona2 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona2 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>3.	Students are provided orientation about the degree programs and the objectives.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona3 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona3 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona3 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona3 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona3 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                            <P>4.  The curricular goals and objectives are aligned with: (check)</P>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name=Instructiona4a value="a">
                                  a.	national development goals
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona4b value="b">
                                  b.	institutional vision-mission
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona4c value="c">
                                  c.	school/college/departmental objectives
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona4d value="d">
                                  d.	specific program objectives
                                  </label>
                                <br>
                              </div>
                            </div>
                            </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                            <P>5.	Curricular goals include the following essential purposes of undergraduate education: (check)</P>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" name=Instructiona5a value="a">
                                  a.	building character
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona5b value="b">
                                  b.	cultivating critical thinking
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona5c value="c">
                                  c.	developing communication skills
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona5d value="d">
                                  d.	preparing for a career
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona5e value="e">
                                  e.	acquiring holistic development
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona5f value="f">
                                  f.	preparing for responsible citizenship
                                  </label>
                                <br>
                                <label>
                                  <input type="checkbox" name=Instructiona5g value="g">
                                  g.	preparing for a global community
                                  </label>
                                <br>
                              </div>
                            </div>
                            </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>6.	The school has a well-defined theoretical or conceptual framework (i.e. constructivist, student-centered, transformative) upon which its teaching-learning process is anchored.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona6 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona6 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona6 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona6 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona6 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>7. There is an appropriate set of general education courses, basic ITE core subjects, ITE professional/major subjects, ITE electives, and free electives.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona7 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona7 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona7 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona7 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona7 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>8. Students are given choices for ITE and free electives.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona8 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona8 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona8 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona8 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona8 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>9. Course codes and titles match the course description and contents.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona9 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona9 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona9 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona9 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona9 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>10.	In each area of major concentration, the courses are arranged in logical sequence.  There is no omission or needless overlapping of content.  Moreover, each subject contributes effectively to the development of the objectives in the area of concentration.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona10 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona10 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona10 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona10 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona10 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>11.	There is evidence that the required prerequisites of the program of studies are clearly defined and strictly implemented.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona11 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona11 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona11 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona11 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona11 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>12.	There is evidence of the connectedness between and among the different course clusters (i.e. General Education courses with professional/major courses and electives).</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona12 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona12 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona12 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona12 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona12 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>13.	There are provisions for adequate and relevant internships/field experience or practicum that support student learning and facilitate the achievement of learning outcomes.</p>
                                    
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona13 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona13 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona13 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona13 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona13 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>14. There are provisions for appropriate and relevant thesis/capstone project/portfolio that support student learning and facilitate the achievement of learning outcomes.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona14 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona14 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona14 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona14 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona14 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>15.	There is a standard format used for course syllabi.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona15 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona15 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona15 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona15 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona15 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>16.	Course descriptions in the syllabi are consistent with those contained in the Bulletin of Information and other official school documents.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona16 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona16 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona16 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona16 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona16 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>17.	The course syllabi clearly define the intended/expected learning outcomes.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona17 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona17 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona17 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona17 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona17 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>18. The course syllabi should indicate list of topics and schedule, grading scheme, and updated list of references.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona18 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona18 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona18 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona18 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona18 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>19.	Initiatives are undertaken to foster inter-departmental collaboration to enrich curricular programs.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona19 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona19 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona19 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona19 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona19 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>20.	A system is in place for curriculum development, evaluation, and management.</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona20 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona20 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona20 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona20 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona20 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>21.	There is evidence of a planned and regular assessment of the curriculum.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona21 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona21 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona21 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona21 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona21 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                <p>22. Various stakeholders are involved in the evaluation of the curriculum: (check)</p>

                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name=Instructiona22a value="a">
                                      a.	faculty
                                      </label>
                                    <br>
                                    <label>
                                      <input type="checkbox" name=Instructiona22b value="b">
                                      b.	alumni
                                      </label>
                                    <br>
                                    <label>
                                      <input type="checkbox" name=Instructiona22c value="c">
                                      c.	students
                                      </label>
                                    <br>
                                    <label>
                                      <input type="checkbox" name=Instructiona22d value="d">
                                      d.	employers
                                      </label>
                                    <br>
                                    <label>
                                      <input type="checkbox" name=Instructiona22e value="e">
                                      e.	industry practitioners
                                      </label>
                                    <br>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>23.	Curriculum review/assessment data are disseminated to concerned sectors and used for continuous instructional and program improvement.    </p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona23 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona23 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona23 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona23 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona23 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>24.	There is evidence of sustained interest in curricular innovations from both faculty and administrators.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona24 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona24 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona24 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona24 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona24 value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>25.	The program of studies reflects initiatives to introduce/expose students to international/global perspectives.</p>
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona25 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona25 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructiona25 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructiona25 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructiona25 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                        <hr>        
                        <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                          <hr>

                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>On the basis of the above analysis of A. Curriculum, rate the following:</p>
                                  <p>a.	Alignment of curriculum with institutional vision-mission-goals and program goals/objectives</p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvala value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvala value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvala value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvala value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvala value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvala value="5"> 5
                                    </label>
                              </div>
                        </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>b.	Well-defined theoretical or conceptual framework of the teaching-learning process </p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalb value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalb value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalb value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvalb value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalb value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalb value="5"> 5
                                    </label>
                              </div>
                        </div>

                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>c.	Clearly defined learning outcomes </p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalc value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalc value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalc value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvalc value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalc value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalc value="5"> 5
                                    </label>
                              </div>
                        </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>d.	Breadth and depth of the curriculum </p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvald value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvald value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvald value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvald value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvald value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvald value="5"> 5
                                    </label>
                              </div>
                        </div>
                         
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>e.	Choices for electives </p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvale value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvale value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvale value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvale value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvale value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvale value="5"> 5
                                    </label>
                              </div>
                        </div>
                        <div class="form-group">
                              <div class="col-sm-10">
                                  
                                  <p>f.	Quality of field experience and thesis/project/portfolios</p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalf value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalf value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalf value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvalf value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalf value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalf value="5"> 5
                                    </label>
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>g.	System for evaluating the curriculum</p>
                                  <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalg value="0"> 0
                                        </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalg value="1"> 1
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalg value="2"> 2
                                    </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=AEvalg value="3"> 3
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=AEvalg value="4"> 4
                                        </label>
                                      <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=AEvalg value="5"> 5
                                    </label>
                              </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="saveApage();">Save</button>
                
                    </form>
                </div>
              </div>
            </div>
          </div>
        <!-- /panel-heading -->
                    
          <div id="b" class="tab-pane">
                <div class="row">
                      
                <div class="col-md-12">
                    <h2><center><font><strong>B. TEACHING-LEARNING PROCESS</strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form">
                    <div class="form-group">
                      <div class="col-sm-10">
                        <p>1. The syllabi reflect the expected learning outcomes and the means to achieve them.</p>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb1 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb1 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb1 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb1 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb1 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                   
                     <div class="form-group">
                    <div class="col-sm-10">
                            <P> 2.	Integrated lecture and lab mode of delivery, rather than separate sessions for lecture and lab, is used.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb2 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb2 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb2 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb2 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb2 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                     <div class="form-group">
                    <div class="col-sm-10">
                            <P> 3.	Individual and group design/development projects are required in the courses.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb3 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb3 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb3 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb3 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb3 value="O"> O
                        </label>
                        </div>
                    </div>
                     <div class="form-group">
                    <div class="col-sm-10">
                            <P>4.	Students are provided detailed specifications about the required projects for the courses.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb4 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb4 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb4 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb4 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb4 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                     <div class="form-group">
                    <div class="col-sm-10">
                            <P>5.	The medium of instruction prescribed by the school is followed in classes.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb5 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb5 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb5 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb5 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb5 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P> 6.	Topics in the course syllabi are followed as scheduled.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb6 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb6 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb6 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb6 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb6 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P> 7.	The syllabi include appropriate and up-to-date bibliography of references, including journals and web sources.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb7 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb7 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb7 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb7 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb7 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                   
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>8.	There is a person assigned to plan, implement, and coordinate with the work sites of the students’ on-the-job trainings, practicum or internship programs.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb8 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb8 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb8 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb8 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb8 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>9. There are faculty members assigned to advise and monitor students doing thesis/capstone projects/portfolios.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb9 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb9 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb9 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb9 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb9 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>10. Written examinations follow the principles of test construction.</P>
                            <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb10 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb10 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb10 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb10 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb10 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>12. Student assessment supports the program design in     terms of its objectives, underlying philosophy and learning outcomes.</P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb12 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb12 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb12 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb12 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb12 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>13.	Instructors personally rate examinations and other  requirements submitted by students.</P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb13 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb13 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb13 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb13 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb13 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>14.	Students are informed at the beginning of the course regarding the basis for rating their performance. </P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb14 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb14 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb14 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb14 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb14 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>15.	The method of arriving at the final mark is well-defined and known to students.
</P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb15 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb15 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb15 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb15 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb15 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>16.	Final marks are a fair and objective appraisal of the students’ performance throughout the entire         course.</P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb16 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb16 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb16 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb16 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb16 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                    <div class="form-group">
                    <div class="col-sm-10">
                            <P>17.	Final marks on the grading sheets can be changed only by the instructor concerned, following        standard procedures.</P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb17 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb17 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb17 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb17 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb17 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                        <div class="form-group">
                    <div class="col-sm-10">
                            <P>18. Students are informed of their class standing regularly.</P>
                        <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb18 value="option1"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb18 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=Instructionb18 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=Instructionb18 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=Instructionb18 value="O"> O
                        </label>
                        </div>
                    </div>
                        
                   
                        
                    
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of B. Teaching-Learning Process, rate the following:</p>
                              <p>a.	Quality of instructional processes</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvala value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvala value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                         
                              <p>b.	Effectiveness of teaching methods</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalb value="0"> 0
                                    </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalb value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>c.	Use of instructional resources and ICT</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalc value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalc value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvalc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalc value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                         
                              <p>d.	Evaluation of student performance</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvald value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvald value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvald value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvald value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvald value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvald value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                         
                              <p>e. Quality of exams, projects, and thesis/portfolios</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvale value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvale value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvale value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvale value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvale value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvale value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                         
                              <p>f.	System of student assessment</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalf value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalf value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalf value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvalf value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalf value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalf value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                         
                              <p>g.	Support for students with academic difficulties</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalg value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalg value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalg value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvalg value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalg value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalg value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <button type="button" class="btn btn-primary" onclick="saveBpage();">Save</button>
                </form>
                </div>
              </div>
            </div>
          </div>
                    
                    
                    
              
            <!------ panel ------>
            <div id="c" class="tab-pane">
                <div class="row">

                <div class="col-md-12">
                    <h2><center><font><strong>C. TEACHING-LEARNING ENVIRONMENT</strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form">
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>1.	Schedule of classes are conducive to the students’ learning.</p>
                          
                           <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc1 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc1 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc1 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc1 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc1 value="O"> O
                            </label>
                      </div>
                    </div>
                        
                    
                    <div class="form-group">    
                        <div class="col-sm-10">
                            <p>2.	The teaching-learning environment is conducive to effective instruction.</p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc2 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc2 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc2 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc2 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc2 value="O"> O
                            </label>
                            </div>
                        </div>
     
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>3.	Adequate measures are taken to ensure punctual attendance of faculty and students in all scheduled instructional activities.</p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc3 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc3 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc3 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc3 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc3 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>4.	Rules concerning class attendance are strictly enforced. A record is kept of the daily attendance of students. </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc4 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc4 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc4 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc4 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc4 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>5.	There is a provision for teachers to make up for missed classes.  </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc5 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc5 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc5 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc5 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc5 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>6.	There is a system of substitution or special arrangements in cases of teacher absences.  </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc6 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc6 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc6 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc6 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc6 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>7.	The teacher implements institutional policies and practices to ensure effective instruction.  </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc7 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc7 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc7 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc7 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc7 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>8. Classroom layout encourages collaboration and group discussion. </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc8 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc8 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc8 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc8 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc8 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>9.	Class sizes (in classrooms and laboratories) are conducive to effective teaching and learning. </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc9 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc9 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc9 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc9 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc9 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>10.	The room sizes and acoustics are appropriate to the number of students. </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc10 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc10 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc10 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc10 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc10 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        <div class="form-group">    
                        <div class="col-sm-10">
                            <p>11. Classrooms are well-lighted and properly ventilated. </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc11 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc11 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc11 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc11 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc11 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                         <div class="form-group">    
                        <div class="col-sm-10">
                            <p>12.	Venues for instruction are well-equipped, appropriate to the subject, and properly maintained. </p>
                            <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc12 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc12 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionc12 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionc12 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionc12 value="O"> O
                            </label>
                            </div>
                        </div>
                        
                        
                    
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of C. Teaching-Learning Environment, rate the following:</p>
                              <p>a.	Class atmosphere</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCa value="0"> 0
                                    </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCa value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCa value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalCa value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCa value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCa value="5"> 5
                                  </label>
                          </div>
                        </div>  
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>b.	Class attendance of students and faculty </p>
                              <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCb value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCb value="1"> 1
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalCb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCb value="5"> 5
                                </label>
                          </div>
                        </div>  
                        
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>c.	Classroom layout</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCc value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCc value="1"> 1
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalCc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCc value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>d.	Appropriateness of instructional venues to class size</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCd value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCd value="1"> 1
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCd value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalCd value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalCd value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalCd value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        

                    <button type="button" class="btn btn-primary" onclick="saveCpage();">Save</button>
                  
                  </form>
                </div>
            </div>
            </div>
            </div>
                    
            <!------ panel ------>
                    
              <div id="d" class="tab-pane">
                <div class="row">

                <div class="col-md-12">
                    <h2><center><font><strong>D. ASSESSMENT OF LEARNING OUTCOMES</strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form">
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>1.	The learning outcomes of each program define the knowledge, skills, competencies, and values that students acquire from their educational experience.</p>
                          
                          <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionAD1 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionAD1 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionAD1 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionAD1 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionAD1 value="O"> O
                        </label>
                      </div>
                    </div>
                        
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>2.	Policies are in place to screen out students whose performance does not meet program standards.	</p>
                          
                          <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionAD2 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionAD2 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionAD2 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionAD2 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionAD2 value="O"> O
                        </label>
                      </div>
                    </div>
                        
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>3.	Failure and attrition rates of students are monitored.</p>
                         <label class="checkbox-inline"> 

                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionAD3 value="E"> E
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionAD3 value="S"> S
                    </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionAD3 value="L"> L
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionAD3 value="M"> M
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionAD3 value="O"> O
                        </label>
                      </div>
                    </div>
                        
                <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of D. Assessment of Learning Outcomes, rate the following:</p>
                              <p>a.	Articulation of program learning outcomes</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEa value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEa value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEa value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionDEa value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEa value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEa value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>b.	Admission and retention policies</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEb value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionDEb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEb value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>c.	Recognition of outstanding students</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEc value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEc value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionDEc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEc value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>d.	Systems and procedures for determining attainment of learning outcomes</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEd value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEd value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEd value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=instructionDEd value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=instructionDEd value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=instructionDEd value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        
                        <button type="button" class="btn btn-primary" onclick="saveDpage();">Save</button>


                  </form>
                </div>
            </div>
            </div>
            </div>
                  

            <!------ panel ------>
            <div id="e" class="tab-pane">
                <div class="row">

                <div class="col-md-12">
                    <h2><center><font><strong>E.	SUPERVISION OF INSTRUCTIONAL PROGRAM</strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form" >

                        
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>1.	The academic administrator exercises supervision over the selection of textbooks and other instructional materials.</p>
                          
                          <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis1 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis1 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionAnalysis1 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis1 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis1 value="O"> O
                            </label>
                          
                      </div>
                    </div>  
                        
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>2.	Instructors submit a syllabus for each subject to the academic administrator for approval.  This is updated periodically.</p>
                          
                         <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis2 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis2 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionAnalysis2 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis2 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis2 value="O"> O
                            </label>
                          
                      </div>
                    </div> 
                        
                        
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>3.	There is a budget for instructional materials and equipment.</p>
                          
                         <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis3 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis3 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionAnalysis3 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis3 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis3 value="O"> O
                            </label>
                          
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>4.	The organizational structure of the institution facilitates effective instruction.</p>
                          <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis4 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis4 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionAnalysis4 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionAnalysis4 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionAnalysis4 value="O"> O
                            </label>
                      </div>
                    </div>
                        
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis for E. Supervision of Instructional Program, rate the following:</p>
                              <p>a.	Implementation of the instructional supervision program  </p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvala value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionEvala value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>b.	Faculty evaluation mechanisms </p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvalb value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionEvalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionEvalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionEvalb value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>c.	Budget in support of instruction </p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvalc value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvalc value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionEvalc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=EInstructionEvalc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=EInstructionEvalc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=EInstructionEvalc value="5"> 5
                                </label>
                          </div>
                        </div>

                    <button type="button" class="btn btn-primary" onclick="saveEpage();">Save</button>
                  </form>
                </div>
            </div>
            </div>
            </div>
            <!------ panel ------>
            <div id="f" class="tab-pane">
                <div class="row">

                <div class="col-md-12">
                    <h2><center><font><strong>F. CO-CURRICULAR PROGRAMS </strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form">
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>1.	Co-curricular activities contribute to the effectiveness of the teaching-learning process and the realization of learning outcomes.</p>
                          <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis1 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis1 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis1 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis1 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis1 value="O"> O
                                    </label>
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>2.	Programs are in place to encourage active participation of all students in co-curricular activities.</p>
                          <label class="checkbox-inline"> 
                              
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis2 value="option1"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis2 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis2 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis2 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis2s value="O"> O
                                    </label>
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>3.	Academic requirements are not relaxed in favor of participation in co-curricular activities.</p>
                          <label class="checkbox-inline"> 
                              
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis3 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis3 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis3 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis3 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis3 value="O"> O
                                    </label>
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>4.	Instructional schedules are not unduly interrupted by co-curricular functions.</p>
                          <label class="checkbox-inline"> 
                              
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis4 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis4 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis4 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis4 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis4 value="O"> O
                                    </label>
                      </div>
                    </div>  
                     <div class="form-group">
                      <div class="col-sm-10">
                          <p>5. 	Students play an active role in the design and implementation of the co-curricular program. </p>
                          <label class="checkbox-inline"> 
                              
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis5 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis5 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis5 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis5 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis5 value="O"> O
                                    </label>
                      </div>
                    </div>  
                     <div class="form-group">
                      <div class="col-sm-10">
                          <p>6.	Recognition is given to excellence in co-curricular activities.</p>
                          <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis6 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis6 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis6 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis6 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis6 value="O"> O
                                    </label>
                      </div>
                    </div>  
                     <div class="form-group">
                      <div class="col-sm-10">
                          <p> 7.	Students are actively involved in the periodic evaluation of the co-curricular programs.</p>
                          <label class="checkbox-inline"> 
                              
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis7 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis7 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionAnalysis7 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionAnalysis7 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionAnalysis7 value="O"> O
                                    </label>
                      </div>
                    </div> 
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of F. Co-curricular Programs, rate the following:</p>
                              <p>a. Complementation between curricular and co-curricular programs</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionEvala value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionEvala value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>b.	Extent of student involvement in co-curricular programs</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionEvalb value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionEvalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionEvalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FInstructionEvalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FInstructionEvalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FInstructionEvalb value="5"> 5
                                </label>
                          </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="saveFpage();">Save</button>
                    
                  </form>
                </div>
            </div>
            </div>
            </div>
            <!------ panel ------>
            <div id="g" class="tab-pane">
                <div class="row">

                <div class="col-md-12">
                    <h2><center><font><strong>G. ACADEMIC CONSULTATION/ADVISING </strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form">
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p> 1.	The rationale for academic consultation/advising is clearly articulated and disseminated to faculty and students.</p>
                          
                          <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionAnalysis1 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionAnalysis1 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=GInstructionAnalysis1 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionAnalysis1 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionAnalysis1 value="O"> O
                            </label>
                          
                      </div>
                    </div> 
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p> 2.	Faculty members and/or advisers refer students to the Guidance Office when warranted.</p>
                          
                          <label class="checkbox-inline"> 
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionAnalysis2 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionAnalysis2 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=GInstructionAnalysis2 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionAnalysis2 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionAnalysis2 value="O"> O
                            </label>
                          
                          
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>3.	There is a system of monitoring the effectiveness of the academic consultation/advising program.</p>
                          
                          <label class="checkbox-inline"> 

                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionAnalysis3 value="E"> E
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionAnalysis3 value="S"> S
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=GInstructionAnalysis3 value="L"> L
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionAnalysis3 value="M"> M
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionAnalysis3 value="O"> O
                            </label>
                          
                      </div>
                    </div>
                        
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of G. Academic Consultation/Advising, rate the following:</p>
                              <p>a.	Availability of academic consultation/advising services</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionEvala value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=GInstructionEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionEvala value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>b.	Effectiveness of academic consultation/advising services</p>
                              <label class="checkbox-inline"> 
                                        <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionEvalb value="0"> 0
                                        </label>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionEvalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionEvalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=GInstructionEvalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=GInstructionEvalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=GInstructionEvalb value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        
                    <button type="button" class="btn btn-primary" onclick="saveGpage();">Save</button>
                  </form>
                </div>
            </div>
            </div>
            </div>

                    
                    
                    
                    
                    
                    
                    
                <!----- do not disturb---->    
                    </div>
                </div>
                </div>
              </div>
              </div>
          </div>
                    
                    
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
    
    $("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>

<script src="js/ChairInstructionEvaluation.js"></script>    

<script>
    $(document).ready(function(){
        // SECTION A
        <?php
        $sql = "SELECT * FROM ccsfif.chairefa ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var Instructiona4 = '<?php echo $row['A4']; ?>';
        var Instruction4checked = Instructiona4.split('');

        var Instructiona5 = '<?php echo $row['A5']; ?>';
        var Instruction5checked = Instructiona5.split('');

        var Instructiona22 = '<?php echo $row['A22']; ?>';
        var Instruction22checked = Instructiona22.split('');

        var Instructiona1 = $("input[name='Instructiona1'][value = '<?php echo $row['A1']; ?>']");
        var Instructiona2 = $("input[name='Instructiona2'][value = '<?php echo $row['A2']; ?>']");
        var Instructiona3 = $("input[name='Instructiona3'][value = '<?php echo $row['A3']; ?>']");

        var Instructiona4a = $("input[name='Instructiona4a'][value = 'a']");
        var Instructiona4b = $("input[name='Instructiona4b'][value = 'b']");
        var Instructiona4c = $("input[name='Instructiona4c'][value = 'c']");
        var Instructiona4d = $("input[name='Instructiona4d'][value = 'd']");

        var Instructiona5a = $("input[name='Instructiona5a'][value = 'a']");
        var Instructiona5b = $("input[name='Instructiona5b'][value = 'b']");
        var Instructiona5c = $("input[name='Instructiona5c'][value = 'c']");
        var Instructiona5d = $("input[name='Instructiona5d'][value = 'd']");
        var Instructiona5e = $("input[name='Instructiona5e'][value = 'e']");
        var Instructiona5f = $("input[name='Instructiona5f'][value = 'f']");
        var Instructiona5g = $("input[name='Instructiona5g'][value = 'g']");

        var Instructiona6 = $("input[name='Instructiona6'][value = '<?php echo $row['A6']; ?>']");
        var Instructiona7 = $("input[name='Instructiona7'][value = '<?php echo $row['A7']; ?>']");
        var Instructiona8 = $("input[name='Instructiona8'][value = '<?php echo $row['A8']; ?>']");
        var Instructiona9 = $("input[name='Instructiona9'][value = '<?php echo $row['A9']; ?>']");
        var Instructiona10 = $("input[name='Instructiona10'][value = '<?php echo $row['A10']; ?>']");
        var Instructiona11 = $("input[name='Instructiona11'][value = '<?php echo $row['A11']; ?>']");
        var Instructiona12 = $("input[name='Instructiona12'][value = '<?php echo $row['A12']; ?>']");
        var Instructiona13 = $("input[name='Instructiona13'][value = '<?php echo $row['A13']; ?>']");
        var Instructiona14 = $("input[name='Instructiona14'][value = '<?php echo $row['A14']; ?>']");
        var Instructiona15 = $("input[name='Instructiona15'][value = '<?php echo $row['A15']; ?>']");
        var Instructiona16 = $("input[name='Instructiona16'][value = '<?php echo $row['A16']; ?>']");
        var Instructiona17 = $("input[name='Instructiona17'][value = '<?php echo $row['A17']; ?>']");
        var Instructiona18 = $("input[name='Instructiona18'][value = '<?php echo $row['A18']; ?>']");
        var Instructiona19 = $("input[name='Instructiona19'][value = '<?php echo $row['A19']; ?>']");
        var Instructiona20 = $("input[name='Instructiona20'][value = '<?php echo $row['A20']; ?>']");
        var Instructiona21 = $("input[name='Instructiona21'][value = '<?php echo $row['A21']; ?>']");

        var Instructiona22a = $("input[name='Instructiona22a'][value = 'a']");
        var Instructiona22b = $("input[name='Instructiona22b'][value = 'b']");
        var Instructiona22c = $("input[name='Instructiona22c'][value = 'c']");
        var Instructiona22d = $("input[name='Instructiona22d'][value = 'd']");
        var Instructiona22e = $("input[name='Instructiona22e'][value = 'e']");

        var Instructiona23 = $("input[name='Instructiona23'][value = '<?php echo $row['A23']; ?>']");
        var Instructiona24 = $("input[name='Instructiona24'][value = '<?php echo $row['A24']; ?>']");
        var Instructiona25 = $("input[name='Instructiona25'][value = '<?php echo $row['A25']; ?>']");
        var AEvala = $("input[name='AEvala'][value = '<?php echo $row['AEa']; ?>']");
        var AEvalb = $("input[name='AEvalb'][value = '<?php echo $row['AEb']; ?>']");
        var AEvalc = $("input[name='AEvalc'][value = '<?php echo $row['AEc']; ?>']");
        var AEvald = $("input[name='AEvald'][value = '<?php echo $row['AEd']; ?>']");
        var AEvale = $("input[name='AEvale'][value = '<?php echo $row['AEe']; ?>']");
        var AEvalf = $("input[name='AEvalf'][value = '<?php echo $row['AEf']; ?>']");
        var AEvalg = $("input[name='AEvalg'][value = '<?php echo $row['AEg']; ?>']");

        try{Instructiona1[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona2[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona3[0].setAttribute('checked', true);}catch(err){}


        for(var x = 0; x <  Instruction4checked.length; x++){
            if(Instruction4checked[x] == 'a')
                try{Instructiona4a[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction4checked[x] == 'b')
                try{Instructiona4b[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction4checked[x] == 'c')
                try{Instructiona4c[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction4checked[x] == 'd')
                try{Instructiona4d[0].setAttribute('checked', true);}catch(err){}
        }

        for(var y = 0; y <  Instruction5checked.length; y++){
            if(Instruction5checked[y] == 'a')
                try{Instructiona5a[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction5checked[y] == 'b')
                try{Instructiona5b[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction5checked[y] == 'c')
                try{Instructiona5c[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction5checked[y] == 'd')
                try{Instructiona5d[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction5checked[y] == 'e')
                try{Instructiona5e[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction5checked[y] == 'f')
                try{Instructiona5f[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction5checked[y] == 'g')
                try{Instructiona5g[0].setAttribute('checked', true);}catch(err){}
        }


        try{Instructiona5[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona6[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona7[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona8[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona9[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona10[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona11[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona12[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona13[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona14[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona15[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona16[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona17[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona18[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona19[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona20[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona21[0].setAttribute('checked', true);}catch(err){}

        for(var z = 0; z <  Instruction22checked.length; z++){
            if(Instruction22checked[z] == 'a')
                try{Instructiona22a[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction22checked[z] == 'b')
                try{Instructiona22b[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction22checked[z] == 'c')
                try{Instructiona22c[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction22checked[z] == 'd')
                try{Instructiona22d[0].setAttribute('checked', true);}catch(err){}
            else if(Instruction22checked[z] == 'e')
                try{Instructiona22e[0].setAttribute('checked', true);}catch(err){}
        }

        try{Instructiona22[0].setAttribute('checked', true);}catch(err){}

        try{Instructiona23[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona24[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona24[0].setAttribute('checked', true);}catch(err){}
        try{Instructiona25[0].setAttribute('checked', true);}catch(err){}
        try{AEvala[0].setAttribute('checked', true);}catch(err){}
        try{AEvalb[0].setAttribute('checked', true);}catch(err){}
        try{AEvalc[0].setAttribute('checked', true);}catch(err){}
        try{AEvald[0].setAttribute('checked', true);}catch(err){}
        try{AEvale[0].setAttribute('checked', true);}catch(err){}
        try{AEvalf[0].setAttribute('checked', true);}catch(err){}
        try{AEvalg[0].setAttribute('checked', true);}catch(err){}


        <?php endwhile; ?>

        // SECTION B
        <?php
        $sql = "SELECT * FROM ccsfif.chairefb ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var Instructionb1 = $("input[name='Instructionb1'][value = '<?php echo $row['A1']; ?>']");
        var Instructionb2 = $("input[name='Instructionb2'][value = '<?php echo $row['A2']; ?>']");
        var Instructionb3 = $("input[name='Instructionb3'][value = '<?php echo $row['A3']; ?>']");
        var Instructionb4 = $("input[name='Instructionb4'][value = '<?php echo $row['A4']; ?>']");
        var Instructionb5 = $("input[name='Instructionb5'][value = '<?php echo $row['A5']; ?>']");
        var Instructionb6 = $("input[name='Instructionb6'][value = '<?php echo $row['A6']; ?>']");
        var Instructionb7 = $("input[name='Instructionb7'][value = '<?php echo $row['A7']; ?>']");
        var Instructionb8 = $("input[name='Instructionb8'][value = '<?php echo $row['A8']; ?>']");
        var Instructionb9 = $("input[name='Instructionb9'][value = '<?php echo $row['A9']; ?>']");
        var Instructionb10 = $("input[name='Instructionb10'][value = '<?php echo $row['A10']; ?>']");
        var Instructionb11 = $("input[name='Instructionb11'][value = '<?php echo $row['A11']; ?>']");
        var Instructionb12 = $("input[name='Instructionb12'][value = '<?php echo $row['A12']; ?>']");
        var Instructionb13 = $("input[name='Instructionb13'][value = '<?php echo $row['A13']; ?>']");
        var Instructionb14 = $("input[name='Instructionb14'][value = '<?php echo $row['A14']; ?>']");
        var Instructionb15 = $("input[name='Instructionb15'][value = '<?php echo $row['A15']; ?>']");
        var Instructionb16 = $("input[name='Instructionb16'][value = '<?php echo $row['A16']; ?>']");
        var Instructionb17 = $("input[name='Instructionb17'][value = '<?php echo $row['A17']; ?>']");
        var Instructionb18 = $("input[name='Instructionb18'][value = '<?php echo $row['A18']; ?>']");
        var BEvala = $("input[name='BEvala'][value = '<?php echo $row['Ea']; ?>']");
        var BEvalb = $("input[name='BEvalb'][value = '<?php echo $row['Eb']; ?>']");
        var BEvalc = $("input[name='BEvalc'][value = '<?php echo $row['Ec']; ?>']");
        var BEvald = $("input[name='BEvald'][value = '<?php echo $row['Ed']; ?>']");
        var BEvale = $("input[name='BEvale'][value = '<?php echo $row['Ee']; ?>']");
        var BEvalf = $("input[name='BEvalf'][value = '<?php echo $row['Ef']; ?>']");
        var BEvalg = $("input[name='BEvalg'][value = '<?php echo $row['Eg']; ?>']");

        try{Instructionb1[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb2[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb3[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb4[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb5[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb6[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb7[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb8[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb9[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb10[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb11[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb12[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb13[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb14[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb15[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb16[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb17[0].setAttribute('checked', true);}catch(err){}
        try{Instructionb18[0].setAttribute('checked', true);}catch(err){}
        try{BEvala[0].setAttribute('checked', true);}catch(err){}
        try{BEvalb[0].setAttribute('checked', true);}catch(err){}
        try{BEvalc[0].setAttribute('checked', true);}catch(err){}
        try{BEvald[0].setAttribute('checked', true);}catch(err){}
        try{BEvale[0].setAttribute('checked', true);}catch(err){}
        try{BEvalf[0].setAttribute('checked', true);}catch(err){}
        try{BEvalg[0].setAttribute('checked', true);}catch(err){}

        <?php endwhile; ?>

        // SECTION C
        <?php
        $sql = "SELECT * FROM ccsfif.chairefc ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var instructionc1 = $("input[name='instructionc1'][value = '<?php echo $row['CA1']; ?>']");
        var instructionc2 = $("input[name='instructionc2'][value = '<?php echo $row['CA2']; ?>']");
        var instructionc3 = $("input[name='instructionc3'][value = '<?php echo $row['CA3']; ?>']");
        var instructionc4 = $("input[name='instructionc4'][value = '<?php echo $row['CA4']; ?>']");
        var instructionc5 = $("input[name='instructionc5'][value = '<?php echo $row['CA5']; ?>']");
        var instructionc6 = $("input[name='instructionc6'][value = '<?php echo $row['CA6']; ?>']");
        var instructionc7 = $("input[name='instructionc7'][value = '<?php echo $row['CA7']; ?>']");
        var instructionc8 = $("input[name='instructionc8'][value = '<?php echo $row['CA8']; ?>']");
        var instructionc9 = $("input[name='instructionc9'][value = '<?php echo $row['CA9']; ?>']");
        var instructionc10 = $("input[name='instructionc10'][value = '<?php echo $row['CA10']; ?>']");
        var instructionc11 = $("input[name='instructionc11'][value = '<?php echo $row['CA11']; ?>']");
        var instructionc12 = $("input[name='instructionc12'][value = '<?php echo $row['CA12']; ?>']");
        var IEvalCa = $("input[name='IEvalCa'][value = '<?php echo $row['CEa']; ?>']");
        var IEvalCb = $("input[name='IEvalCb'][value = '<?php echo $row['CEb']; ?>']");
        var IEvalCc = $("input[name='IEvalCc'][value = '<?php echo $row['CEc']; ?>']");
        var IEvalCd = $("input[name='IEvalCd'][value = '<?php echo $row['CEd']; ?>']");

        try{instructionc1[0].setAttribute('checked', true);}catch(err){}
        try{instructionc2[0].setAttribute('checked', true);}catch(err){}
        try{instructionc3[0].setAttribute('checked', true);}catch(err){}
        try{instructionc4[0].setAttribute('checked', true);}catch(err){}
        try{instructionc5[0].setAttribute('checked', true);}catch(err){}
        try{instructionc6[0].setAttribute('checked', true);}catch(err){}
        try{instructionc7[0].setAttribute('checked', true);}catch(err){}
        try{instructionc8[0].setAttribute('checked', true);}catch(err){}
        try{instructionc9[0].setAttribute('checked', true);}catch(err){}
        try{instructionc10[0].setAttribute('checked', true);}catch(err){}
        try{instructionc11[0].setAttribute('checked', true);}catch(err){}
        try{instructionc12[0].setAttribute('checked', true);}catch(err){}
        try{IEvalCa[0].setAttribute('checked', true);}catch(err){}
        try{IEvalCb[0].setAttribute('checked', true);}catch(err){}
        try{IEvalCc[0].setAttribute('checked', true);}catch(err){}
        try{IEvalCd[0].setAttribute('checked', true);}catch(err){}

        <?php endwhile; ?>

        // SECTION D
        <?php
        $sql = "SELECT * FROM ccsfif.chairefd ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var instructionAD1 = $("input[name='instructionAD1'][value = '<?php echo $row['DA1']; ?>']");
        var instructionAD2 = $("input[name='instructionAD2'][value = '<?php echo $row['DA2']; ?>']");
        var instructionAD3 = $("input[name='instructionAD3'][value = '<?php echo $row['DA3']; ?>']");
        var instructionDEa = $("input[name='instructionDEa'][value = '<?php echo $row['DEa']; ?>']");
        var instructionDEb = $("input[name='instructionDEb'][value = '<?php echo $row['DEb']; ?>']");
        var instructionDEc = $("input[name='instructionDEc'][value = '<?php echo $row['DEcc']; ?>']");
        var instructionDEd = $("input[name='instructionDEd'][value = '<?php echo $row['DEd']; ?>']");

        try{instructionAD1[0].setAttribute('checked', true);}catch(err){}
        try{instructionAD2[0].setAttribute('checked', true);}catch(err){}
        try{instructionAD3[0].setAttribute('checked', true);}catch(err){}
        try{instructionDEa[0].setAttribute('checked', true);}catch(err){}
        try{instructionDEb[0].setAttribute('checked', true);}catch(err){}
        try{instructionDEc[0].setAttribute('checked', true);}catch(err){}
        try{instructionDEd[0].setAttribute('checked', true);}catch(err){}

        <?php endwhile; ?>

        // SECTION E
        <?php
        $sql = "SELECT * FROM ccsfif.chairefe ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var EInstructionAnalysis1 = $("input[name='EInstructionAnalysis1'][value = '<?php echo $row['A1']; ?>']");
        var EInstructionAnalysis2 = $("input[name='EInstructionAnalysis2'][value = '<?php echo $row['A2']; ?>']");
        var EInstructionAnalysis3 = $("input[name='EInstructionAnalysis3'][value = '<?php echo $row['A3']; ?>']");
        var EInstructionAnalysis4 = $("input[name='EInstructionAnalysis4'][value = '<?php echo $row['A4']; ?>']");
        var EInstructionEvala = $("input[name='EInstructionEvala'][value = '<?php echo $row['Ea']; ?>']");
        var EInstructionEvalb = $("input[name='EInstructionEvalb'][value = '<?php echo $row['Eb']; ?>']");
        var EInstructionEvalc = $("input[name='EInstructionEvalc'][value = '<?php echo $row['Ec']; ?>']");

        try{EInstructionAnalysis1[0].setAttribute('checked', true);}catch(err){}
        try{EInstructionAnalysis2[0].setAttribute('checked', true);}catch(err){}
        try{EInstructionAnalysis3[0].setAttribute('checked', true);}catch(err){}
        try{EInstructionAnalysis4[0].setAttribute('checked', true);}catch(err){}
        try{EInstructionEvala[0].setAttribute('checked', true);}catch(err){}
        try{EInstructionEvalb[0].setAttribute('checked', true);}catch(err){}
        try{EInstructionEvalc[0].setAttribute('checked', true);}catch(err){}

        <?php endwhile; ?>

        // SECTION F
        <?php
        $sql = "SELECT * FROM ccsfif.chaireff ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var FInstructionAnalysis1 = $("input[name='FInstructionAnalysis1'][value = '<?php echo $row['A1']; ?>']");
        var FInstructionAnalysis2 = $("input[name='FInstructionAnalysis2'][value = '<?php echo $row['A2']; ?>']");
        var FInstructionAnalysis3 = $("input[name='FInstructionAnalysis3'][value = '<?php echo $row['A3']; ?>']");
        var FInstructionAnalysis4 = $("input[name='FInstructionAnalysis4'][value = '<?php echo $row['A4']; ?>']");
        var FInstructionAnalysis5 = $("input[name='FInstructionAnalysis5'][value = '<?php echo $row['A5']; ?>']");
        var FInstructionAnalysis6 = $("input[name='FInstructionAnalysis6'][value = '<?php echo $row['A6']; ?>']");
        var FInstructionAnalysis7 = $("input[name='FInstructionAnalysis7'][value = '<?php echo $row['A7']; ?>']");
        var FInstructionEvala = $("input[name='FInstructionEvala'][value = '<?php echo $row['Ea']; ?>']");
        var FInstructionEvalb = $("input[name='FInstructionEvalb'][value = '<?php echo $row['Eb']; ?>']");

        try{FInstructionAnalysis1[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionAnalysis2[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionAnalysis3[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionAnalysis4[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionAnalysis5[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionAnalysis6[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionAnalysis7[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionEvala[0].setAttribute('checked', true);}catch(err){}
        try{FInstructionEvalb[0].setAttribute('checked', true);}catch(err){}

        <?php endwhile; ?>

        // SECTION G
        <?php
        $sql = "SELECT * FROM ccsfif.chairefg ORDER BY 1 DESC LIMIT 1;";
        $result = $dbc->query($sql);

        if ($result->num_rows == 0) {
    }
        else
        while($row = $result->fetch_assoc()):

        ?>
        var GInstructionAnalysis1 = $("input[name='GInstructionAnalysis1'][value = '<?php echo $row['A1']; ?>']");
        var GInstructionAnalysis2 = $("input[name='GInstructionAnalysis2'][value = '<?php echo $row['A2']; ?>']");
        var GInstructionAnalysis3 = $("input[name='GInstructionAnalysis3'][value = '<?php echo $row['A3']; ?>']");
        var GInstructionEvala = $("input[name='GInstructionEvala'][value = '<?php echo $row['Ea']; ?>']");
        var GInstructionEvalb = $("input[name='GInstructionEvalb'][value = '<?php echo $row['Eb']; ?>']");

        try{GInstructionAnalysis1[0].setAttribute('checked', true);}catch(err){}
        try{GInstructionAnalysis2[0].setAttribute('checked', true);}catch(err){}
        try{GInstructionAnalysis3[0].setAttribute('checked', true);}catch(err){}
        try{GInstructionEvala[0].setAttribute('checked', true);}catch(err){}
        try{GInstructionEvalb[0].setAttribute('checked', true);}catch(err){}

        <?php endwhile; ?>

    });
</script>

<script>
$("#5").addClass("active");

    </script>
</body>

</html>
