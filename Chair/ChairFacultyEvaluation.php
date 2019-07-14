<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
        require_once('../mysql_connect.php');
        if($_SESSION['POSITION_ID']!="P0002") {
          header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."../login.php"); 
        }
$message = NULL;

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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        <div class="row mt">
          <div class="col-lg-12">
            <H1><center> FACULTY EVALUATION FORM</center></H1>
        
                  
                  
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                      Hi there, I am a Modal Example for Dashio Admin Panel.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- Button trigger modal -->
              <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                Launch Modal
                </button>
              <!-- Modal -->
            
              

          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview"> Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#a">
                      A</a>
                  </li>
                  <li><a data-toggle="tab" href="#b">B</a></li>
                  <li><a data-toggle="tab" href="#c">C</a></li>
                  <li><a data-toggle="tab" href="#d">D</a></li>
                  <li><a data-toggle="tab" href="#e">E</a></li>
                  <li><a data-toggle="tab" href="#f">F</a></li>
                  <li><a data-toggle="tab" href="#g">G</a></li>
                  <li><a data-toggle="tab" href="#h">H</a></li>
                  <li><a data-toggle="tab" href="#i">I</a></li>
                  <li><a data-toggle="tab" href="#j">J</a></li>
                  <li><a data-toggle="tab" href="#k">K</a></li>
                    
                    
                </ul>
              </div>
                
                
              
                <div class="panel-body">
                <div class="tab-content">
                <!-- /panel-heading -->
              
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-6">
                          <h2 class="centered"><font color="black">CONTENTS </font></h2>
                          <p class="centered"> <font color="black">A. Academic Qualifications</font></p>
                          <p class="centered"> <font color="black">B.	Educational and Professional Experience and Length of Service</font></p>
                          <p class="centered"> <font color="black">C.	Selection of Faculty Members</font></p>
                          <p class="centered"> <font color="black">D.	Ranking and Promotion</font></p>
                          <p class="centered"> <font color="black">E.	Teaching Assignments</font></p>
                          <p class="centered"> <font color="black">F.	Research</font></p>
                          <p class="centered"> <font color="black">G.	Community Service</font></p>
                          <p class="centered"> <font color="black">H.	Performance Evaluation</font></p>
                          <p class="centered"> <font color="black">I.	Faculty Development</font></p>
                          <p class="centered"> <font color="black">J.	Faculty Relationships</font></p>
                          <p class="centered"> <font color="black">K.	Salaries and Fringe Benefits</font></p>
                        </div>
                          
               
                    <div class="row mt">
                      <div class="col-md-6 detailed">
                      <div class="form-panel">   
                      <h2><center>ANALYSIS</center></h2>
                      <p><center>Within the parentheses (  ) preceding the items given under Analysis, place one of the following letters:</center></p>
                      <div class="activity-panel">
                      <p><center>       E  provision or condition exists extensively </center></p>
                      <p><center>       S   provision or condition exists moderately </center></p>
                      <p><center>       L   provision or condition is very limited</center></p>
                      <p><center>       M   provision or condition is missing but needed</center></p>
                      <p><center>       O   provision or condition does not apply</center></p>
                      </div>



                      <h2><center>EVALUATION</center></h2>     
                      <p><center>Evaluations represent the best judgment of the effectiveness of the implementation of the provisions after all the evidence has been considered. The evaluators should use the rating scale given below:</center></p>
                      
                      <div class="activity-panel">
                      <p>5 – Excellent  the provisions or conditions are effectively implemented and are functioning excellently</p>
                      <p>4 ‑ Very Good  provisions or conditions are implemented and are functioning well</p>
                      <p><center>3 – Good provisions or conditions are moderately implemented and are functioning satisfactorily</center></p>
                      <p><center>2 – Fair provisions or conditions are implemented to a limited extent and are functioning minimally</center></p>
                      <p><center>1 ‑ Poor provisions or conditions are not implemented and are not functioning</center></p>
                      </div>
                      

                    </div>
                  </div>
                </div>                              
            </div>
          </div>
                    


                  <!-- /tab-pane -->
                  <div id="a" class="tab-pane">
                    <div class="row">
                            <h2><center><font><strong>A. ACADEMIC QUALIFICATIONS </strong></font></center></h2>
                      <hr/>
                        
                        <div class="col-md-12">
                        <div class="form-group">
                      <div class="col-sm-10">
                          <p> 2.	Number of full-time and part-time faculty members who are paid </p>

                          
                         <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>DEGREES COMPLETED</th>
                                  <th colspan="2" ><center>Full-time Faculty</center></th>
                                
                                  <th colspan="2" ><center>Part-Time Faculty</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td><center>No.</center></td>
                                <td><center>%</center></td>
                                <td><center>No.</center></td>
                                <td><center>%</center></td>
                              </tr>
                              <tr>
                                <td>Doctorate in discipline taught </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Doctorate in other fields</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            <tr>
                                <td>Master's in field of Specialization</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            <tr>
                                <td>Master's in other Fields</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                                
                                <tr>
                                <td>Bachelor's degree </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                                
                                <tr>
                                <td>total</td>
                                <td></td>
                                <td><center>100%</center></td>
                                <td></td>
                                <td><center>100%</center></td>
                                </tr>
                       

                            </tbody>
                          </table>
                          <p> Note:	Where faculty members are freely contributing their services (e.g. religious), the number of such faculty members and the value of their services in pesos should be given in a separate exhibit. </p>
                        </div> 
                        </div>
                    </div>
                    <!-- /row -->
                  </div>
                      
                </div>
                    
                <!-- /tab-pane -->
                  <div id="b" class="tab-pane">
                    <div class="row">
                    <h2><center><font><strong>B. EDUCATIONAL AND PROFESSIONAL EXPERIENCE AND LENGTH OF SERVICE</strong></font></center></h2>
                        <div class="col-md-12">
                            <div class="form-panel">
                            <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                
                        <form class="form-horizontal style-form">
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of B. Educational and Professional Experience and Length of Service, rate the following:</p>
                              <p>a.	Qualifications of the faculty</p>
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
                              
                              <p>b.	Teaching experience of the faculty member</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalb value="1" > 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalb value="2" > 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvalb value="3" > 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalb value="4" > 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalb value="5"  > 5
                                </label>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>c.	Extent of practice of profession outside of teaching</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalc value="1" > 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalc value="2" > 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvalc value="3" > 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvalc value="4" > 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvalc value="5" > 5
                                </label>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <div class="col-sm-10">
                              
                              <p>d.	Overall stability vis-à-vis turnover ratio</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvald value="1" > 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvald value="2" > 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=BEvald value="3" > 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=BEvald value="4" > 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=BEvald value="5" > 5
                                </label>
                          </div>
                        </div>
                            
                        <button type="button" class="btn btn-success" onclick="saveBpage();">Save</button> 
                        
                        </form>
                        
                    </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>

                </div>
                <!-- /tab-pane -->
                <div id="c" class="tab-pane">
                    <h2><center><font><strong>C. SELECTION OF FACULTY MEMBERS</strong></font></center></h2>
                    <div class="row mt">
                      
                        <div class="col-md-12">
                            
                      <hr/>
                
                
                          <div class="form-panel">
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                              <hr>

                            <form class="form-horizontal style-form" >       
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>1.	Faculty selection gives due consideration to the following:</p>
                                    <p>a.	academic qualifications</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1a value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1a value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1a value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1a value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1a value="O"> O
                                    </label>
                                    </div>
                                </div>
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>b.	passing board examination where applicable</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1b value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1b value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1b value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1b value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1b value="O"> O
                                    </label>
                                    </div>
                                </div>

                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>c.	industry certification and special training & specialization </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1c value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1c value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1c value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1c value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1c value="O"> O
                                    </label>
                                    </div>
                                </div>
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>d.	professional/industry experience </p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1d value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1d value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1d value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1d value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1d value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">        
                                    <p>e.	competence in the field of specialization</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1e value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1e value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1e value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1e value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1e value="O"> O
                                    </label>
                                    </div>
                                </div>
                            
                            
                                <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>f.	competence in communication</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1f value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1f value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1f value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1f value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1f value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>g.	teaching ability</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1g value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1g value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1g value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1g value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1g value="O"> O
                                    </label>
                                    </div>
                                </div>
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>h.	research output</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1h value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1h value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1h value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1h value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1h value="O"> O
                                    </label>
                                    </div>
                                </div>
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>i.	social awareness and concern </p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1i value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1i value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1i value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1i value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1i value="O"> O
                                    </label>
                                    </div>
                                </div>
                            
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>j.	personality/character </p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1j value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1j value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1j value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1j value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1j value="O"> O
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>k.	health</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1k value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1k value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c1k value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c1k value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c1k value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    
                                    <p>2. The contract clearly specifies the terms of appointment/employment.</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c2 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c2 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=c2 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=c2 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=c2 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                                
                     <hr>           
                        <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">  
                            <p>On the basis of the above analysis of C. Selection of Faculty Members, rate the following:</p>
                              <p>a.	Policies and procedures for faculty selection</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=CEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=CEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=CEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=CEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=CEvala value="5"> 5
                                </label>
                          </div>
                        </div>
            
                                
                        <button type="button" class="btn btn-success" onclick="saveCpage();">Save</button> 
        
                              </form>
                            </div>
                      
                    </div>
                    <!-- /row -->
                  </div>

                </div>
                <!-- /tab-pane -->
    
            <div id="d" class="tab-pane">
                <h2><center><font><strong>D. RANKING AND PROMOTION</strong></font></center></h2>
                <div class="row mt">
                      <div class="col-md-12">
                          <div class="form-panel">
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                              <hr>

                            <form class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                             
                           
                            <p><font color="black"> 1. The criteria for ranking and promotion include the following:</font></p>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>a. industry certification and trainings</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3a value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3a value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3a value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3a value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3a value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>b.	teaching competency</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3b value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3b value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3b value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3b value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3b value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>c.	research and publications</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3c value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3c value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3c value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3c value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3c value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>d.	special services to the college and/or department</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3d value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3d value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3d value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3d value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3d value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>e.	further educational attainment</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3e value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3e value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3e value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3e value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3e value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>f.	community involvement</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3f value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3f value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3f value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3f value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3f value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>h.	practice of profession</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3h value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3h value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3h value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3h value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3h value="O"> O
                                    </label>
                                    </div>
                                </div>
                                  
                                 <div class="form-group">
                                  <div class="col-sm-10">
                                    <p>i.	student evaluation of faculty</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3i value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3i value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d3i value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d3i value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d3i value="O"> O
                                    </label>
                                    </div>
                                </div>
                           
 
                          

                            <div class="form-group">
                              <div class="col-sm-10">
                                <p> 2. The length of the probationary period is adequate.</p>
                                  <div class="col-sm-10">
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d5 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d5 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d5 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d5 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d5 value="O"> O
                                    </label>
                                    </div>
                            </div>
                            </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                                <p> 3.Describe the procedures for termination of employment.</p>
                                  <div class="col-sm-10">
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d6 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d6 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d6 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d6 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d6 value="O"> O
                                    </label>
                                    </div>
                            </div>
                            </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                                <p>4.	Describe the procedures for resignation from employment.</p>
                                  <div class="col-sm-10">
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d7 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d7 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d7 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d7 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d7 value="O"> O
                                    </label>
                                    </div>
                            </div>
                            </div>    
                            
                                <div class="form-group">
                              <div class="col-sm-10">
                                <p>5.	Describe the procedure followed in the dismissal of a faculty member, including due process. </p>
                                  <div class="col-sm-10">
                                    
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d8 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d8 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=d8 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=d8 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=d8 value="O"> O
                                    </label>
                                    </div>
                            </div>
                            </div>  
                          
                            <H4><pull-right>EVALUATION</pull-right></H4>
                 

                            <p>On the basis of the above analysis of D. Ranking and Promotion, rate the following:</p>
                            
                            <div class="form-group">
                              <div class="col-sm-10">
                            <p>a. Ranking System</p>
                            <label class="checkbox-inline"> 
                                
                                <input type="checkbox" id="inlineCheckbox1" class="radio" name=rs value="1"> 1
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" class="radio" name=rs value="2"> 2
                            </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" class="radio" name=rs value="3"> 3
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" class="radio" name=rs value="4"> 4
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" class="radio" name=rs value="5"> 5
                                </label>
                                </div>
                                </div>
                            
                        
                            <div class="form-group">
                              <div class="col-sm-10">
                            <p>b. Procedure for promotion</p>
                            <label class="checkbox-inline"> 
                                
                                <input type="checkbox" id="inlineCheckbox1" class="radio" name=pfp value="1"> 1
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" class="radio" name=pfp value="2"> 2
                            </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" class="radio" name=pfp value="3"> 3
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" class="radio" name=pfp value="4"> 4
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" class="radio" name=pfp value="5"> 5
                                </label> 
                            
                                </div>
                                </div>
                                

                            <div class="form-group">
                              <div class="col-sm-10">
                            <p>c. Resignation Procedure</p>
                            <label class="checkbox-inline"> 
                                
                                <input type="checkbox" id="inlineCheckbox1" class="radio" name=rp value="1"> 1
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" class="radio" name=rp value="2"> 2
                            </label>
                              <label class="checkbox-inline">
                                <input type="checkbox"  id="inlineCheckbox3" class="radio" name=rp value="3"> 3
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox"  id="inlineCheckbox1" class="radio" name=rp value="4"> 4
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox"  id="inlineCheckbox2" class="radio" name=rp value="5"> 5
                                </label> 
                                  
                                </div>
                                </div>
                            
                            
                    
                            
                            
                            <div class="form-group">
                              <div class="col-sm-10">
                            <p>d.	Dismissal/Termination procedure</p>
                        
            
                            <label class="checkbox-inline"> 
                                
                                <input type="checkbox" class="check" id="inlineCheckbox1" name=dtp value="1"> 1
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" class="check" id="inlineCheckbox2" name=dtp value="2"> 2
                            </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" class="check" id="inlineCheckbox3" name=dtp value="3"> 3
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" class="check" id="inlineCheckbox1" name=dtp value="4"> 4
                                </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" class="check" id="inlineCheckbox2" name=dtp value="5"> 5
                                </label> 
                            
                                </div>
                                </div>
                            
                    
                                <button type="button" class="btn btn-success" onclick="saveDpage();">Save</button> 
                              
                    
                              </form>
                          </div>
                      <!-- /col-md-6 -->
                    </div>
                    </div>
                    </div>
                              
                              
                
                <!-- /tab-pane -->
                <div id="e" class="tab-pane">
                <div class="row">
                      
                        <div class="col-md-12">
                            <h2><center><font><strong>E. TEACHING ASSIGNMENTS</strong></font></center></h2>
                          <div class="form-panel">
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                              <hr>

                            <form class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                           
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>1. The members of the faculty are given teaching assignments only in the field of their major or minor lines of specialization.</p>
                                    <label class="checkbox-inline"> 

                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e3 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e3 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e3 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e3 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e3 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">    
                                <div class="col-sm-10">
                                    <p>2. Class schedules are conducive to efficient teaching.</p>
                                    <label class="checkbox-inline"> 
                                        
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e4 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e4 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e4 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e4 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e4 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            
                                
                            <div class="form-group">    
                                <H4><pull-right>3.	Encouragement and provision are made for extra class responsibilities:   </pull-right></H4>
                                <div class="col-sm-10">
                                    <p>a. committee work</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e5 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5 value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">        
                                <div class="col-sm-10">
                                    <p>b.	student consultation/Advising</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5b value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5b value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e5b value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5b value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5b value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                             <div class="form-group">        
                                <div class="col-sm-10">
                                    <p>c.	research</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5c value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5c value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e5c value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5c value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5c value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">        
                                <div class="col-sm-10">
                                    <p>d.	administrative work</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5d value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5d value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e5d value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5d value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5d value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">        
                                <div class="col-sm-10">
                                    <p>e. others</p>
                                    <input type="text" id="e5eInput">
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5e value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5e value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=e5e value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=e5e value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=e5e value="O"> O
                                    </label>
                                    </div>
                                </div>
                                
                            <hr>
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                              <hr>
                                
                            <div class="form-group">     
                                <div class="col-sm-10">
                                    <p>On the basis of the above analysis of E. Teaching Assignments, rate the following: </p>
                                    <p>a. Alignment of teaching assignment to degrees </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Eevala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevala value="5"> 5
                                    </label>
                                    </div>
                                </div>
                            <div class="form-group">     
                                <div class="col-sm-10">
                                    <p>b. System for assigning teaching loads </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Eevalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevalb value="5"> 5
                                    </label>
                                    </div>
                                </div>
                                
                            <div class="form-group">     
                                <div class="col-sm-10">
                                    <p>c. Scheduling </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevalc value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevalc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Eevalc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevalc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevalc value="5"> 5
                                    </label>
                                    </div>
                                </div>
                            
                                <div class="form-group">     
                                <div class="col-sm-10">
                                    <p>d. Provision for extra class responsibilities</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevald value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevald value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=Eevald value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=Eevald value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=Eevald value="5"> 5
                                    </label>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-success" onclick="saveEpage();">Save</button> 
                                
                                
                            </form>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                </div>
                <!-- /tab-pane -->
                <div id="f" class="tab-pane">
                <div class="row">
                  <div class="col-md-12 ">
                    <h2><center><font><strong>F. RESEARCH</strong></font></center></h2>
                     <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form">
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>1. There is adequate support for basic/or applied research and publication.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis1 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis1 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FAnalysis1 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis1 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis1 value="O"> O
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>2. Faculty members conduct research and publish their research.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis2 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis2 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FAnalysis2 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis2 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis2 value="O"> O
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>3. The institution publishes a research journal.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis3 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis3 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FAnalysis3 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis3 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis3 value="O"> O
                                </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>4. Faculty members publish in a peer reviewed or refereed journals.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis4 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis4 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FAnalysis4 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis4 value="M"> M
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis4  value="O"> O
                                </label>
                          </div>
                        </div>
                        
                        
                        
                         <div class="form-group">
                          <div class="col-sm-10">
                              <p>5. Faculty participates in conferences, conventions and fora.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis5 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis5 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FAnalysis5 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis5 value="M"> M
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis5 value="O"> O
                                </label>
                          </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>6.	Faculty produce commercial applications and products.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis6 value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis6 value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FAnalysis6 value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FAnalysis6 value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FAnalysis6 value="O"> O
                                </label>
                          </div>
                        </div>
                        
                      <hr>
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of F. Research, rate the following:</p>
                              <p>a. Research outputs</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=FEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=FEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=FEvala value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                    <button type="button" class="btn btn-success" onclick="saveFpage();">Save</button> 
                    
                        
                    </form>
                    </div>

                    </div>
                    <!-- /row -->
                  </div>
                </div>
                    
                <!-- /tab-pane -->
                <div id="g" class="tab-pane">
                <div class="row">
                    <div class="col-md-12">
                        <h2><center><font><strong>G. COMMUNITY SERVICE</strong></font></center></h2>
                      <div class="form-panel">
                          <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                          <hr>

                        <form class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                          <div class="col-sm-10">
                            <p>1. Community involvement of faculty members is seen in: </p>
                              <br>
                              <p>a.	relating/integrating community needs in subject matter</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1a" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1a" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="G1a" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1a" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1a" value="O"> O
                                </label>

                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <br>
                              <p>b.	research</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1b" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1b" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="G1b" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1b" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1b" value="O"> O
                                </label>

                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <br>
                              <p>c.	participation in community projects</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1c" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1c" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="G1c" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1c" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1c" value="O"> O
                                </label>

                          </div>
                        </div>
                            
                     <div class="form-group">
                          <div class="col-sm-10">
                              <br>
                              <p>d.	personal participation to community outreach project</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1d" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1d" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="G1d" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1d" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1d" value="O"> O
                                </label>

                          </div>
                        </div>
                            
      
                            
                            <div class="form-group">        
                                <div class="col-sm-10">
                                    <p>e. others</p>
                                    <input type="text" id="G1eInput">
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1e" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1e" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="G1e" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="G1e" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="G1e" value="O"> O
                                    </label>
                                    </div>
                                </div>
                        <hr>
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                     <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of H. Performance Evaluation, rate the following:</p>
                              <p>a.	Teaching competence</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="GEvala" value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="GEvala" value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="GEvala" value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="GEvala" value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="GEvala" value="5"> 5
                                </label>
                          </div>
                        </div>

                            
                    <button type="button" class="btn btn-success" onclick="saveGpage();">Save</button> 
                                                     

                        
                          </form>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                </div>
                
                <!-- /tab-pane -->
                    
                              <div id="h" class="tab-pane">
                <div class="row">
                    <div class="col-md-12">
                        <h2><center><font><strong>H. PERFORMANCE EVALUATION</strong></font></center></h2>
                      <div class="form-panel">
                          <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                          <hr>

                        <form class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                          <div class="col-sm-10">
                            <p>1.	Teaching competence can be seen in: </p>
                              <br>
                              <p>a.	implementation of course objectives as given in syllabi</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1a" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1a" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1a" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1a" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1a" value="O"> O
                                </label>

                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>b.	mastery of subject matter </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1b" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1b" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1b" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1b" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1b" value="O"> O
                                </label>

                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>c.	preparation for classes </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1c" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1c" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1c" value="L"> L
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1c" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1c" value="O"> O
                                </label>
                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>d.	relevance of subject matter to current issues</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1d" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1d" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1d" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1d" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1d" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>e.	use of library resources</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1e" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1e" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1e" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1e" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1e" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>f. use of exams, quizzes, projects, student portfolios and other forms of assessments</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1f" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1f" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1f" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1f" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1f" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>g.	student evaluation</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1g" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1g" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1g" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1g" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1g" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>h.	professional involvement and updating</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1h" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1h" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1h" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1h" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1h" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                         <div class="form-group">
                          <div class="col-sm-10">
                              <p>i.	attitudes and values</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1i" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1i" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1i" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1i" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1i" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>j.	compliance with administrative requirements</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1j" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1j" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1j" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1j" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1j" value="O"> O
                                  </label>
                          </div>
                        </div>
                            
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>k.	attendance in classes</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1k" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1k" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="H1k" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="H1k" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="H1k" value="O"> O
                                  </label>
                          </div>
                            </div>
                          <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                          <hr>  
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of H. Performance Evaluation, rate the following:</p>
                              <p>a.	Teaching competence</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=HEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=HEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=HEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=HEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=HEvala value="5"> 5
                                </label>
                          </div>
                        </div>

                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>b.	Attitudes and Values </p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=HEvalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=HEvalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=HEvalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=HEvalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=HEvalb value="5"> 5
                                </label>
                          </div>
                        </div>
                            
                         <div class="form-group">
                          <div class="col-sm-10">
                              <p>c.	Compliance with administrative requirements</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=HEvalc value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=HEvalc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=HEvalc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=HEvalc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=HEvalc value="5"> 5
                                </label>
                          </div>
                        </div>
                                <button type="button" class="btn btn-success" onclick="saveHpage();">Save</button> 
                            
                    
                            
                            
                    
                          </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!---/TAB PANE ----->
                      <div id="i" class="tab-pane">
                        <div class="row">
                      
                        <div class="col-md-12">
                            <h2><center><font><strong>I. FACULTY DEVELOPMENT</strong></font></center></h2>
                          <div class="form-panel">
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                              <hr>
                            <form class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>1.	The institution supports faculty participation in seminars, workshops, and industry certifications outside the school.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="I1" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="I1" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="I1" value="L"> L
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="I1" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="I1" value="O"> O
                                </label>
                          </div>
                        </div>
                                
                      
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>2.	The institution encourages membership of faculty in professional organizations.</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I2" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I2" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I2" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I2" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I2" value="O"> O
                                  </label>
                          </div>
                        </div>
                                

                        
                         <div class="form-group">
                          <div class="col-sm-10">
                              <p>3.	Faculty and committee meetings are well-attended</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I3" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I3" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I3" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I3" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I3" value="O"> O
                                  </label>
                          </div>
                        </div>
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p> 4.	There is an item in the budget for faculty development.</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I4" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I4" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I4" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I4" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I4" value="O"> O
                                  </label>
                          </div>
                        </div>
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p> 5.	Innovative industry academic linkage to support faculty development.</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I5" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I5" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I5" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I5" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I5" value="O"> O
                                  </label>
                          </div>
                        </div>
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p> 6. Personal development of the faculty:</p>
                              <p>a. commitment to life long learning</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I6a" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I6a" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I6a" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I6a" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I6a" value="O"> O
                                  </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>b. commitment to professional practice</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I6b" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I6b" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I6b" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I6b" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I6b" value="O"> O
                                  </label>
                          </div>
                        </div>
                        
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>c. identifying personal interests and professional growth</p>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I6c" value="E"> E
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I6c" value="S"> S
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox3" class="radio" name="I6c" value="L"> L
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" class="radio" name="I6c" value="M"> M
                                  </label>
                                  <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" class="radio" name="I6c" value="O"> O
                                  </label>
                          </div>
                        </div>
                                <hr>
                                
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                        
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>On the basis of the above analysis of I. Faculty Development, rate the following:</p>
                              <p>a. commitment to life long learning</p>
                                  <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvala value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvala value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvala value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvala value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvala value="5"> 5
                                </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>b.	In-service training</p>
                                  <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalb value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalb value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalb value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalb value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalb value="5"> 5
                                </label>
                          </div>
                        </div>
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>c.	Formal study opportunities</p>
                                  <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalc value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalc value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalc value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalc value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalc value="5"> 5
                                </label>
                          </div>
                        </div>
                    
                    <div class="form-group">
                          <div class="col-sm-10">
                              <p>d.	Participation in professional organizations, seminars and meetings</p>
                                  <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvald value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvald value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvald value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvald value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvald value="5"> 5
                                </label>
                          </div>
                        </div>            
                        
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>e.	Institutional support</p>
                                  <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvale value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvale value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvale value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvale value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvale value="5"> 5
                                </label>
                          </div>
                        </div>
                                
                        <div class="form-group">
                          <div class="col-sm-10">
                              <p>f.	Personal development</p>
                                  <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalf value="1"> 1
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalf value="2"> 2
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name=IEvalf value="3"> 3
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name=IEvalf value="4"> 4
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name=IEvalf value="5"> 5
                                </label>
                          </div>
                        </div>
                                <button type="button" class="btn btn-success" onclick="saveIpage();">Save</button> 
                                
                       
                              </form>
                              
                            </div>
                            </div>
                            
                          </div>
                    </div>
                                
                                
                <!---/TAB PANE ----->
                <div id="j" class="tab-pane">
                <div class="row">
                      
                        <div class="col-md-12">
                            <h2><center><font><strong>J. FACULTY RELATIONSHIPS</strong></font></center></h2>
                          <div class="form-panel">
                              <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                              <hr>
                              <p> With Fellow Faculty Members</p>

                            <form class="form-horizontal style-form">
                            
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                                  <p>1.	The faculty observe a Code of Ethics.</p>
                                    <label class="checkbox-inline"> 
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="J1" value="E"> E
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="J1" value="S"> S
                                </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" class="radio" name="J1" value="L"> L
                              </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" class="radio" name="J1" value="M"> M
                                    </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" class="radio" name="J1" value="O"> O
                                </label>
                          
                              </div>
                            </div>  
                            
                            <div class="form-group">
                              <div class="col-sm-10">
                                  <p>2.	There is a faculty association.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J2" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J2" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="J2" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J2" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J2" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                                  <p>3.The faculty association </p>
                                    <p>  a.	provides for the personal and professional growth of its members
                                    </p>

                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J3a" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J3a" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="J3a" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J3a" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J3a" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                                  
                                    <p>  b.	promotes faculty welfare  </p>

                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J3b" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J3b" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="J3b" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J3b" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J3b" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                            <div class="form-group">
                              <div class="col-sm-10">
                                  <p>4.	There are interdisciplinary/intercollege faculty  discussions.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J4" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J4" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="J4" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J4" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J4" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>5.	Collegial relationship among the faculty. </p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J5" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J5" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="J5" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="J5" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="J5" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                        <H4><pull-right><i class="fa fa-angle-right"></i>With Administration</pull-right></H4>
                              <hr>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>1. The faculty are involved in</p>
                                  <p>a.	the formulation/revision of the institution's purposes and objectives</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA1a" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA1a" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA1a" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA1a" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA1a" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  
                                  <p>b.	policy‑making</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA1b" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA1b" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA1b" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA1b" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA1b" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  
                                  <p>c.	evaluation of the program/s</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA1c" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA1c" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA1c" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA1c" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA1c" value="O"> O
                                      </label>
                          
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>2.	Academic committees include faculty members.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA2" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA2" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA2" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA2" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA2" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>3.	Communication lines between administration and faculty are open.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA3" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA3" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA3" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA3" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA3" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>4.	The principle of academic freedom to which the institution subscribes is clear to the faculty.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA4" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA4" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA4" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA4" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA4" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>5.	There is a provision for a grievance committee.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA5" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA5" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA5" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA5" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA5" value="O"> O
                                      </label>
                              </div>
                            </div>

                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>6.	There are opportunities for faculty‑administration dialogues.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA6" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA6" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWA6" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWA6" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWA6" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                        <hr>
                                
                                
                        <H4><pull-right><i class="fa fa-angle-right"></i>With Students</pull-right></H4>
                              <hr>
                                
                                
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>1.	Faculty members are responsive to students' needs.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS1" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS1" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWS1" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS1" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS1" value="O"> O
                                      </label>
                              </div>
                            </div>
                        
                        <div class="form-group">
                              <div class="col-sm-10">
                                  <p>2.	Faculty members are available for academic advising and consultation.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS2" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS2" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWS2" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS2" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS2" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                                
                         <div class="form-group">
                              <div class="col-sm-10">
                                  <p>3.	The faculty participate in co‑curricular/extra‑curricular activities.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS3" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS3" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWS3" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS3" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS3" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                                
                         <div class="form-group">
                              <div class="col-sm-10">
                                  <p>4.	The faculty respond positively to grievances expressed by students.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS4" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS4" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWS4" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS4" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS4" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                                
                         <div class="form-group">
                              <div class="col-sm-10">
                                  <p>5.	There is an atmosphere of accessibility of faculty to students.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS5" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS5" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWS5" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWS5" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWS5" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                                
                            
                                
                    <H4><pull-right><i class="fa fa-angle-right"></i>With the other sectors of the school community</pull-right></H4><hr>     
                    <div class="form-group">
                              <div class="col-sm-10">
                                  <p>1.	Faculty members have healthy relationships with the non-academic personnel.</p>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWOSSC1" value="E"> E
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWOSSC1" value="S"> S
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWOSSC1" value="L"> L
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWOSSC1" value="M"> M
                                      </label>
                                      <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWOSSC1" value="O"> O
                                      </label>
                              </div>
                            </div>
                                
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>2. Faculty members participate in school projects and services.</p>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWOSSC2" value="E"> E
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWOSSC2" value="S"> S
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWOSSC2" value="L"> L
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWOSSC2" value="M"> M
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWOSSC2" value="O"> O
                              </label>
                      </div>
                    </div>
                                
                    
                    <H4><pull-right><i class="fa fa-angle-right"></i>With industry/professional organization </pull-right></H4><hr>
                                
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>1.	Faculty member are members of professional organizations.</p>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWIPO1" value="E"> E
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWIPO1" value="S"> S
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWIPO1" value="L"> L
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWIPO1" value="M"> M
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWIPO1" value="O"> O
                              </label>
                      </div>
                    </div>
                                
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>2.	Faculty members maintain collaborative relationships with industry partners. </p>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWIPO2" value="E"> E
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWIPO2" value="S"> S
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox3" class="radio" name="JWIPO2" value="L"> L
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" class="radio" name="JWIPO2" value="M"> M
                              </label>
                              <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" class="radio" name="JWIPO2" value="O"> O
                              </label>
                      </div>
                    </div>
                                
                    <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>EVALUATION</font></pull-right></H4>
                      <hr>
                    <p>On the basis of the above analysis of J. Faculty Relationships, rate the following:</p>
                                
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>a.	Relationships with fellow faculty members</p>
                           <label class="checkbox-inline"> 
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvala value="1"> 1
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvala value="2"> 2
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=JEvala value="3"> 3
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvala value="4"> 4
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvala value="5"> 5
                        </label>
                      </div>
                    </div>
                                
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>b.	Relationships with administration</p>
                           <label class="checkbox-inline"> 
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvalb value="1"> 1
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvalb value="2"> 2
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=JEvalb value="3"> 3
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvalb value="4"> 4
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvalb value="5"> 5
                        </label>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>c.	Relationships with students</p>
                           <label class="checkbox-inline"> 
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvalc value="1"> 1
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvalc value="2"> 2
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=JEvalc value="3"> 3
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvalc value="4"> 4
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvalc value="5"> 5
                        </label>
                      </div>
                    </div>
                            
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>d.	Relationships with other sectors of the school community</p>
                           <label class="checkbox-inline"> 
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvald value="1"> 1
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvald value="2"> 2
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=JEvald value="3"> 3
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvald value="4"> 4
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvald value="5"> 5
                        </label>
                      </div>
                    </div>
                            
                                
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p>e.	Relationships with industry and professional organizations</p>
                           <label class="checkbox-inline"> 
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvale value="1"> 1
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvale value="2"> 2
                        </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" class="radio" name=JEvale value="3"> 3
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" class="radio" name=JEvale value="4"> 4
                            </label>
                          <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" class="radio" name=JEvale value="5"> 5
                        </label>
                      </div>
                    </div>
                                <button type="button" class="btn btn-success" onclick="saveJpage();">Save</button> 
                    
                    

                            
                    </form>
                              
                    </div>
                    </div>                
                    </div>
                    </div>
                <!---/TAB PANE ----->
                    
                    
             <div id="k" class="tab-pane">
                <div class="row">
                <div class="col-md-12">
                    <h2><center><font><strong>K. SALARIES AND FRINGE BENEFITS</strong></font></center></h2>
                  <div class="form-panel">
                      <H4><pull-right><font color="black"><i class="fa fa-angle-right"></i>ANALYSIS</font></pull-right></H4>
                      <hr>

                    <form class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p> 1.	Number of full‑time faculty members who are paid: </p>

                          
                         <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>PER MONTH</th>
                                <th>FOR 10 MONTHS</th>
                                <th>FOR 11 MONTHS</th>
                                <th>FOR 12 MONTHS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>BELOW P 10,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                              <tr>
                                <td>10,001-12,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                              <tr>
                                <td>12,001-14,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                            <tr>
                                <td>14,001-16,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                            <tr>
                                <td>16,001-18,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                                
                                <tr>
                                <td>18,001-20,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                                
                                <tr>
                                <td>20,001-22,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                </tr>
                             <tr>
                                <td>22,001-24,000</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                </tr>
                             <tr>
                                <td>24,001 and above</td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                </tr>

                            </tbody>
                          </table>
                          <p> Note:	Where faculty members are freely contributing their services (e.g. religious), the number of such faculty members and the value of their services in pesos should be given in a separate exhibit. </p>
                    </div> 
                        </div>
                    <div class="form-group">
                      <div class="col-sm-10">
                          <p> 2.	Number of full-time and part-time faculty members who are paid </p>

                          
                         <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>PER HOUR</th>
                                  <th colspan="2" ><center>LECTURE</center></th>
                                
                                  <th colspan="2" ><center>Laboratory</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td>Full-time</td>
                                <td>Part-time</td>
                                <td>Full-time</td>
                                <td>Part-time</td>
                              </tr>
                              <tr>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                              <tr>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                                
                                <tr>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                              </tr>
                                
                                <tr>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                <td><input type="text" class="form-control" name="institution" value=""></td>
                                </tr>
                       

                            </tbody>
                          </table>
                          <p> Note:	Where faculty members are freely contributing their services (e.g. religious), the number of such faculty members and the value of their services in pesos should be given in a separate exhibit. </p>
                    </div> 
                        </div>
                        
                       
                        
                    
                      </form>
                      
                      
                      
                      
                    </div>
                    </div>
                    
                 </div>
                 
                    </div>
                    
                <!--/TAB PANE------>
                
                    
            
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->

    
         
            
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
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
$(document).ready(function(){
    $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
    });
});
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
<script src="js/ChairFacultyEvaluation.js"></script>
<script>
$("#4").addClass("active");

    </script>

</body>

</html>
