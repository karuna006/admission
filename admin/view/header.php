<?php
session_start();
// print_r($_SESSION['user_details']);
if (isset($_SESSION['user_details'])) 
{
  if ($_SESSION['user_details']['user_type'] == "admin") 
  {  
  }
  else
  {
    header("location: ../../index.php");
  }  
}
else
{
  header("location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../img/favicon.html">
    <title>Greefi Technologies</title>
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../css/owl.carousel.css" type="text/css">
    <!--right slidebar-->
    <link href="../../css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/style-responsive.css" rel="stylesheet" />
    
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><span>SSCP</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" style="width: 29px;height: 29px;" src="../img/avatar1_small.png">
                            <span class="username">SSCP</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="../../controller/logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="home.php">
                          <i class="fa fa-user"></i>
                          <span>Overall status</span>
                      </a>
                  </li>
                  <li>
                      <a class="active" href="fees_based.php">
                          <i class="fa fa-usd"></i>
                          <span>Fees Based</span>
                      </a>
                  </li>
                   <li>
                      <a class="active" href="community_based.php">
                          <i class="fa fa-eye"></i>
                          <span>Cut off</span>
                      </a>
                  </li>
                  <li>
                      <a class="active" href="refered_by.php">
                          <i class="fa fa-retweet"></i>
                          <span>Refferal</span>
                      </a>
                  </li>
                  <li>
                      <a class="active" href="queries.php">
                          <i class="fa fa-question-circle"></i>
                          <span>Queries</span>
                      </a>
                  </li>
                   <li>
                      <a class="active" href="seat_allotment_BPHARAM.php">
                          <i class="fa fa-random"></i>
                          <span>B.P Seat Allotment</span>
                      </a>
                  </li>
                   <li>
                      <a class="active" href="seat_allotment_DPHARAM.php">
                          <i class="fa fa-random"></i>
                          <span>D.P Seat Allotment</span>
                      </a>
                  </li>
                   
                   <li>
                      <a class="active" href="seat_allotment_HL.php">
                          <i class="fa fa-random"></i>
                          <span>HEALTH INSPECTOR <br> Seat Allotment</span>
                      </a>
                  </li>
              </ul>
          </div>
      
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
        <section class="wrapper">
            
                          
                        