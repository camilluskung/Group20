<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CondoHub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/boardstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Banner -->
	<header class="banner">
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
          <ul class="nav navbar-nav nav-pills">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li class="active"><a href="board.php">Board</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
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
        </div>
      </div>
    </nav>
    <!-- <div id="wrapper"> -->
    <div id="brand">
    CON<br>DO<br>HUB
    </div>
    <!-- </div> -->
  </header>
	
<!-- Content -->
	<main class="container" id="start">
	<!-- Bread Crumb -->
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Board</li>
		</ul>
		<h1>Board</h1>
		<!-- Create thread button (top)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>
		<div class="table-responsive" id="board">
		<!--
		<table class="table table-hover table-bordered table-striped">
		-->
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="number">#</th>
					<th class="topic">Topic</th>
					<th class="view">View</th>
					<th class="date">Date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="number">1</td>
					<td class="topic"><a href="thread.php#start">topic 1</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">2</td>
					<td class="topic"><a href="thread.php#start">topic 2</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">3</td>
					<td class="topic"><a href="thread.php#start">topic 3</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">4</td>
					<td class="topic"><a href="thread.php#start">topic 4</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">5</td>
					<td class="topic"><a href="thread.php#start">topic 5</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">6</td>
					<td class="topic"><a href="thread.php#start">topic 6</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">7</td>
					<td class="topic"><a href="thread.php#start">topic 7</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">8</td>
					<td class="topic"><a href="thread.php#start">topic 8</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">9</td>
					<td class="topic"><a href="thread.php#start">topic 9</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">10</td>
					<td class="topic"><a href="thread.php#start">topic 10</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
			</tbody>
		</table>
		</div>
		<!-- Create thread button (bottom)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>
	</main>

<!-- Footer -->
  <footer class="footerWrapper">
  	<div class="mainFooter">
  		<div class="container-fluid">
  			<div class="row">
  				<div class="col-sm-offset-1 col-sm-5">
  					<div class="footerWidget">
              			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>  						  
  					</div>
  				</div>
  				<div class="col-sm-3 contact">
  						<h3>CondoHub</h3>
  						<address>
  							<p> <i class="glyphicon glyphicon-map-marker"></i>&nbsp;1234 Fake St.<br>
  								&nbsp;Vancouver, BC V5E 3F8<br>&nbsp;Canada<br>
  								<i class="glyphicon glyphicon-phone"></i>&nbsp;604-374-9834 <br>
  								<i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@condohub.ca">&nbsp;info@condohub.ca</a> </p>
  						</address>
  					</div>
  					<div class="col-sm-3 footerLogo">
  						<img src="images/logo.gif" alt="logo" width="150" height="100" id="footerLogo">
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="footerRights">
  			<div class="container-fluid">
  				<div class="row">
  					<div class="col-md-12">
  						<p>Copyright © 2016 CondoHub / All rights reserved.</p>
  					</div>
  				</div>
  			</div>
  		</div>
    </footer>
	
</body>
</html>