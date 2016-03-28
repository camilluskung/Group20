<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CondoHub</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/contactusstyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
     <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>

</head>

<body>

  <!-- Navigation -->
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
            <li ><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="active"><a href="resources.php">Resources</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="board.php">Board</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right nav-pills">
            <!-- <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
            <?php
            session_start();
            if($_SESSION['logged']==true) {
              echo '<li><a href=#>'.$_SESSION["SESS_FIRST_NAME"].'</a></li><li><a href="forum/logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>';
              }
              else if($_SESSION['logged']==false) 
                echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li><li><a href="login."><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
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

<main class="container">
    <div class="section">
        <div class="sectionTitle">
            <h2>Resource</h2>
        </div>
        <div class="sectionBody">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
    </div>
</main>

    <footer class="footerWrapper">
        <div class="mainFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
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
            <div class="container">
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