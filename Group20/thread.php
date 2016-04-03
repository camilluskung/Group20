<?php
	require_once('forum/config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];
	$sql_topic="SELECT * FROM $tbl_name WHERE id='$id'";
	$result_topic=mysql_query($sql_topic);
	$rows_topic=mysql_fetch_array($result_topic);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CondoHub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/threadstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
	<script>
		function $(id) {
			var element = document.getElementById(id);
			return element;
		}

		function testBodyValid(id) {
			var str = $(id).value.trim();
			return (str.length > 0);
		}

		function warnBodyInvalid(id) {
			if (!testBodyValid(id)) {
				if ($("errMsgBody").innerHTML.length == 0)
					$("errMsgBody").innerHTML = "Post body cannot be empty";
				return false;
			} else {
				if ($("errMsgBody").innerHTML.length > 0)
					$("errMsgBody").innerHTML = "";
				return true;
			}
		}

		function validatePost() {
			return warnBodyInvalid("taBody");
		}
	</script>
</head>
<body>
<!-- Banner -->
	<header class="banner">
    <nav class="navbar">
      	<div class="container-fluid">
        	<div class="header">
          		<button type="button" class="navbar-inverse navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
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
			<li><a href="board.php#start">Board</a></li>
			<li class="active">Thread</li>
		</ul>
		<h1>Thread</h1>
		<!-- Reply button (top) -->
		<a href="#replybody" class="btn btn-primary" id="btnReplyPost" role="button">Reply to thread</a>
		<!-- Posts -->
		<div class="row post">
			<div class="col-md-2 userinfo">
				<div class="username">
				<?php 
					$member_id=$rows_topic['member_id'];
					$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
					$result_member=mysql_query($sql_member);
					$rows_member=mysql_fetch_array($result_member);
					echo $rows_member['firstname']; 
				?>
				</div>
			</div>
			<div class="col-md-10 postbody">
				<h2><?php echo $rows_topic['topic']; ?></h2>
				<p>
					<?php echo $rows_topic['detail']; ?>
				</p>
				<strong>Date/time : </strong><?php echo $rows_topic['datetime']; ?>
			</div>
		</div>

		<?php
		$tbl_name2="response"; // Switch to table "response"

		$sql_response="SELECT * FROM $tbl_name2 WHERE topic_id='$id'";
		$result_response=mysql_query($sql_response);

		while($rows_response=mysql_fetch_array($result_response)){
		?>

		<div class="row post">
			<div class="col-md-2 userinfo">
				<div class="username">
				<?php 
					$member_id=$rows_response['member_id'];
					$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
					$result_member=mysql_query($sql_member);
					$rows_member=mysql_fetch_array($result_member);
					echo $rows_member['firstname']; 
				?>
				</div>
			</div>
			<div class="col-md-10 postbody">
				<p>
					<?php echo $rows_response['response']; ?>
				</p>
				<strong>Date/time : </strong><?php echo $rows_response['datetime']; ?>
			</div>
		</div>

		<?php
		}
		mysql_close();
		?>

		<div class="row post" id="replybody">
			<div class="userinfo col-md-2">
				<div class="username" id="currentUser">
				<?php
	            if($_SESSION['logged']==true) {
	            	echo $_SESSION["SESS_FIRST_NAME"];
	              	}
              	else if($_SESSION['logged']==false) 
                	echo 'GUEST';
	            ?>
				</div>
			</div>
			<div class="postbody col-md-10">
				<form action="forum/add_response.php" method="post" id="replyform" 
					onSubmit="return validatePost()">
					<textarea form="replyform" name="response" id="taBody" placeholder="write your reply here..."></textarea>
					<div class=message id="errMsgBody"></div>
					<input name="id" type="hidden" value="<?php echo $id; ?>">
					<input type="submit" class="btn btn-success" id="submitReply" value="post quick reply">
				</form>
			</div>
		</div>
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