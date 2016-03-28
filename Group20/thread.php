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
				Waylon Ching
				</div>
			</div>
			<div class="col-md-10 postbody">
				<h2>Thread Title</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat neque ut neque pulvinar pretium. Curabitur aliquam dui pharetra orci maximus, nec interdum sem condimentum. Nam faucibus hendrerit leo, faucibus tristique nibh fermentum a. Nulla aliquet porttitor ullamcorper. Ut aliquam posuere massa sed ultrices. Duis sagittis elit nec odio consequat mollis. Aliquam tincidunt neque posuere est ullamcorper egestas. Nulla a nulla varius, vehicula tortor non, fringilla lorem. Nulla a aliquam ante. Donec dignissim mauris vel molestie imperdiet.
				<br><br>Etiam imperdiet tellus quam. Proin ultricies libero turpis, non molestie lectus tincidunt nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean nec neque metus. Nullam quis sem in sem laoreet ultrices sit amet quis mi. Mauris feugiat, nibh eget blandit lobortis, erat nisl tristique quam, aliquam venenatis felis elit in dui. Sed non augue porta, aliquet ligula porttitor, venenatis dui. Phasellus quis enim eu sapien consectetur suscipit et sed nunc.</p>
			</div>
		</div>
		<div class="row post">
			<div class="userinfo col-md-2">
				<div class="username">
				Waylon Ching
				</div>
			</div>
			<div class="postbody col-md-10">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat neque ut neque pulvinar pretium. Curabitur aliquam dui pharetra orci maximus, nec interdum sem condimentum. Nam faucibus hendrerit leo, faucibus tristique nibh fermentum a. Nulla aliquet porttitor ullamcorper. Ut aliquam posuere massa sed ultrices. Duis sagittis elit nec odio consequat mollis. Aliquam tincidunt neque posuere est ullamcorper egestas. Nulla a nulla varius, vehicula tortor non, fringilla lorem. Nulla a aliquam ante. Donec dignissim mauris vel molestie imperdiet.</p>
			</div>
		</div>
		<div class="row post">
			<div class="userinfo col-md-2">
				<div class="username">
				A Rather Long Name (longerrrr)
				</div>
			</div>
			<div class="postbody col-md-10">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat neque ut neque pulvinar pretium. Curabitur aliquam dui pharetra orci maximus, nec interdum sem condimentum. Nam faucibus hendrerit leo, faucibus tristique nibh fermentum a. Nulla aliquet porttitor ullamcorper. Ut aliquam posuere massa sed ultrices. Duis sagittis elit nec odio consequat mollis. Aliquam tincidunt neque posuere est ullamcorper egestas. Nulla a nulla varius, vehicula tortor non, fringilla lorem. Nulla a aliquam ante. Donec dignissim mauris vel molestie imperdiet.
				<br><br>
				Etiam imperdiet tellus quam. Proin ultricies libero turpis, non molestie lectus tincidunt nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean nec neque metus. Nullam quis sem in sem laoreet ultrices sit amet quis mi. Mauris feugiat, nibh eget blandit lobortis, erat nisl tristique quam, aliquam venenatis felis elit in dui. Sed non augue porta, aliquet ligula porttitor, venenatis dui. Phasellus quis enim eu sapien consectetur suscipit et sed nunc.
				<br><br>
				Cras eu velit a risus rhoncus finibus. Sed eu sem suscipit, mattis ligula vel, consectetur purus. Duis dictum nec nibh eget accumsan. Nunc tincidunt sodales faucibus. Fusce sollicitudin metus nec metus dictum pretium. Morbi a eleifend ipsum. Phasellus ac nisi sapien. Sed varius enim enim, sed vulputate tortor vehicula quis. Vestibulum dapibus cursus orci in posuere. Ut cursus, felis in dictum varius, sem lorem tempus ligula, sed ullamcorper orci est ac sem. Fusce porta nulla mi, eu porta sem sodales et. Donec diam lacus, malesuada a condimentum eget, mollis id ipsum. Cras nec odio nibh. Nunc aliquet nulla vitae convallis fermentum.</p>
			</div>
		</div>
		<!-- Reply text area -->
		<div class="row post" id="replybody">
			<div class="userinfo col-md-2">
				<div class="username" id="currentUser">
				[User Name]
				</div>
			</div>
			<div class="postbody col-md-10">
				<form action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" id="replyform" 
					onSubmit="return validatePost()">
					<textarea form="replyform" name="taBody" id="taBody" placeholder="write your reply here..."></textarea>
					<div class=message id="errMsgBody"></div>
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