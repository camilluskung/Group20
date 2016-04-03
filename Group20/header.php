<!DOCTYPE html>
<html lang="en">

<!-- External stylesheet and bootstrap links -->
<head>
    <meta charset="utf-8">
    <title>CondoHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/base.css">
  
    <?php
    if (isset($css))
    printf('<link rel="stylesheet" type="text/css" href=%s />', $css);
    ?>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
  
    <script>
	   $(document).ready(function (){$("#click").click(function (){$('html, body').animate({scrollTop: $("#start").offset().top}, 1000);});});
    </script> 
</head>
  
  <!-- Navigation -->
  <header class="banner">
    <!-- <div id="wrapper"> -->
    <div id="brand">
      CON<br>DO<br>HUB
    </div>
    <nav class="navbar">
      <div class="container-fluid">
        <div class="header">
          <button type="button" class="navbar-inverse navbar-toggle" data-toggle="collapse" 
            data-target="#mainmenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="images/logo_tall.png" alt="logo" width="100" height="100">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="mainmenu">
          <ul class="pull-right">
          <ul class="nav navbar-nav nav-pills">
            <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="index.php">Home</a></li>
            <li class="<?php echo ($page == "about" ? "active" : "")?>"><a href="about.php">About Us</a></li>
            <li class="<?php echo ($page == "resources" ? "active" : "")?>"><a href="resources.php">Resources</a></li>
            <li class="<?php echo ($page == "faq" ? "active" : "")?>"><a href="faq.php">FAQ</a></li>
            <li class="<?php echo ($page == "board" ? "active" : "")?>"><a href="board.php">Board</a></li>
            <li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href="contactus.php">Contact Us</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right nav-pills">
            <?php
            session_start();
            if($_SESSION['logged']==true) {
              echo '<li><a href=#>'.$_SESSION["SESS_FIRST_NAME"].'</a></li><li><a href="forum/logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>';
              }
              else if($_SESSION['logged']==false) 
                echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li><li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            ?>
          </ul>
        </ul>
        </div>
      </div>
    </nav>
    
<!-- Scroll down button -->
	<div id="scroll-down">
  <button type="button" id="click" class="btn btn-default btn-lg">
	<span class="glyphicon glyphicon-menu-down"></span>
	</button>
	</div>
  </header>
  <body>