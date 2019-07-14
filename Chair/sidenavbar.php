<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="chairdashboard.php" class="logo"><b>DLSU<span>CCS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
         <?php
              $query1="select FFNAME, FLNAME from faculty where username = '{$_SESSION['username']}'";
              $check1 = mysqli_query($dbc,$query1);
              $row1 = mysqli_fetch_assoc($check1);
                  echo "<center>";
              echo "<h3> {$row1['FFNAME']} {$row1['FLNAME']} </h3>";
              echo "</center>";                
            ?>
          <h5 class="centered">Chair Mode</h5>

          <li class="mt">
            <a id=1 class="" href="chairdashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="mt">
            <a id=2 class="" href="ChairFWSR.php">
              <i class="fa fa-columns"></i>
              <span>Faculty Workload Report</span>
              </a>
          </li>
            
          <li class="mt">
            <a id=comhead class="" href="ChairCommittee.php">
              <i class="fa fa-columns"></i>
              <span>Committee Head</span>
              </a>
          </li>
    
          <li class="mt">
            <a id=22 class="" href="ChairFWSR.php">
              <i class="fa fa-columns"></i>
              <span>Delegate Tasks</span>
              </a>
          </li>

            
          <li class="mt">
            <a id=3 class="" href="ChairMonitorTasks.php">
              <i class="fa fa-list-ul"></i>
              <span>Calendar</span>
              </a>
          </li>
        <li class="mt">
            <a id=4 class="" href="ChairFacultyEvaluation.php">
              <i class="fa fa-list-alt"></i>
              <span>Faculty Evaluation</span>
              </a>
          </li>
        <li class="mt">
            <a  id=5 class="" href="ChairInstructionEvaluation.php">
              <i class="fa fa-file-text"></i>
              <span>Instruction Evaluation</span>
              </a>
          </li>



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>