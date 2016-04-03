<?php
	include 'functions.php';
	require_once('forum/config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
	$sql_last_topic="SELECT id FROM $tbl_name ORDER BY id DESC LIMIT 1";
	$result_last_topic=mysql_query($sql_last_topic);
	$row_last_topic=mysql_fetch_array($result_last_topic);
	$upper_bound=$row_last_topic["id"];
	$lower_bound=$upper_bound-10;
?>

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
		<!-- <ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#start">1</a></li>
			<li><a href="board.php?id=<?=$lower_bound?>#start">2</a></li>
			<li><a href="#start">3</a></li>
			<li><a href="#start">4</a></li>
			<li><a href="#start">5</a></li>
		</ul> -->
		<div class="table-responsive" id="board">
		<!--
		<table class="table table-hover table-bordered table-striped">
		-->
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="number">#</th>
					<th class="topic">Topic</th>
					<th class="view">Replies</th>
					<th class="date">Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql_topic="SELECT * FROM $tbl_name WHERE id BETWEEN $lower_bound AND $upper_bound ORDER BY id DESC";
				//$sql_topic="SELECT * FROM $tbl_name ORDER BY id DESC";
				$result_topic=mysql_query($sql_topic);
				$count = min(10, mysql_num_rows($result_topic));
				if($count==0)
					echo '
						<tr>
							<td class="number">0</td>
							<td class="topic">No topics</td>
							<td class="view">0</td>
							<td class="date"> N/A</td>
						</tr>';
				else
					for($i=0; $i < $count; $i++){
						$row_topic=mysql_fetch_array($result_topic);
						$tbl_name2="response"; // Switch to table "response"
						$sql_response="SELECT * FROM $tbl_name2 WHERE topic_id=".$row_topic['id'];
						$result_response=mysql_query($sql_response);
						$sql_last_response="SELECT * FROM $tbl_name2 WHERE topic_id=".$row_topic['id']." ORDER BY id DESC LIMIT 1";
						$result_last_response=mysql_query($sql_last_response);
						$row_last_response=mysql_fetch_array($result_last_response);
						$number_response=mysql_num_rows($result_last_response);
						echo '
							<tr>
								<td class="number">'.$row_topic['id'].'</td>
								<td class="topic"><a href="thread.php?id='.$row_topic['id'].'#start">';
						if (empty($row_topic['topic'])) {
							echo 'topic '.$row_topic['id'];
						}
						else {
							echo $row_topic['topic'];
						}
						echo 	'</a></td>
								<td class="view">'.mysql_num_rows($result_response).'</td>
								<td class="date">Last Posy By: ';
						if($number_response==0) {
							$member_id=$row_topic['member_id'];
							$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
							$result_member=mysql_query($sql_member);
							$rows_member=mysql_fetch_array($result_member);
							echo $rows_member['firstname']."<br>"; 
							echo $row_topic['datetime'].'</td></tr>';
						}
						else {
							$member_id=$row_last_response['member_id'];
							$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
							$result_member=mysql_query($sql_member);
							$rows_member=mysql_fetch_array($result_member);
							echo $rows_member['firstname']."<br>"; 
							echo $row_last_response['datetime'].'</td></tr>';
						}
					}
				?>
			</tbody>
		</table>
		</div>
		<!-- Create thread button (bottom)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<!-- <ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul> -->
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