<?php
ob_start();
    include_once("database.inc.php");
    include_once("functions.inc.php");
    if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin')
    {

    }
    else
    {
        header("location:adminlogin.php");
    }
?>
<!DOCTYPE html>
<head>
<title>GD GOENKA INTERNATIONAL SCHOOL-World Class Education Of Delhi At BHAWANIPUR,KAPURTHALA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="  World Class Education of Delhi at  Bhawanipur,Kapurthala" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

<!-- //bootstrap-css -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--fav icon -->
	<link rel="shortcut icon" href="../assets/images/fav-icon.png" type="image/x-icon">	
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!--Admin panel css -->
<link rel="stylesheet" href="css/admin-style.css" >
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php"  class="logo">
    
    <img class=" img-fluid admin-logo" src="..\assets\images\GD Goenka Logo.png">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        
      
       
        <!-- notification dropdown start-->
        
        <li >
           <h3> Welcome <span class="text-capitalize"> <?php echo $_SESSION['username']?></span></h3>
            
        </li>
       
        <!-- notification dropdown end -->
    
</ul>

</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li> -->
        <!-- user login dropdown start-->
        <li>
            
                <!-- <img alt="" src="images/2.png"> -->
                
                
                
            </a>
           <!--  <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> 
                <li><a href="adminlogout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>-->
        </li>
        <!-- user login dropdown end -->
        <li><a href="adminlogout.php"><i class="fa fa-key"></i> Log Out</a></li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="adminimpnotices.php">
                        <i class="fa fa-book"></i>
                        <span>Important Notices</span>
                    </a>
                    
                   <!-- <ul class="sub">
						<li><a href="typography.html">Typography</a></li>
						<li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>-->
                </li>
				<li>
                    <a href="adminvaccancy.php">
                        <img src="images/job.png">
                        <span>Vaccancy/Current Opening </span>
                    </a>
                </li>
                <li>
                    <a href="adminevents.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Events/News </span>
                    </a>
                </li>
                <li>
                    <a href="adminstud.php">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span>Brilliant Students Display </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="admingallery.php">
                        <i class="fa fa-th"></i>
                        <span>Gallery</span>
                    </a>
                    
                </li>
                <li class="sub-menu">
                    <a href="adminmedia.php">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <span>Media Release</span>
                    </a>
                    
                </li>
               
                <li>
                    <a href="admincontacts.php">
                        <i class="fa fa-user"></i>
                        <span>Contact List</span>
                    </a>
                </li>

                <li>
                    <a href="adminsignup.php">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <span>Add another Admin </span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>