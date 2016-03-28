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
            <li ><a href="resources.php">Resources</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="board.php">Board</a></li>
            <li class="active"><a href="contactus.php">Contact Us</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right nav-pills">
            <!-- <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
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

<main class="container-fluid">
    <h1>Contact Us</h1>
    <div class="row contactUs">
        <div class=col-md-6>
            <div class="googlemap">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <div style='overflow:hidden;height:380px;width:500px;'>
                    <div id='gmap_canvas' style='height:380px;width:500px;'></div>
                    <div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div>
                    <div><small><a href="http://googlemapsgenerator.com">google maps html code</a></small></div>
                </div>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 13,
                            center: new google.maps.LatLng(49.25450289147468, -122.99938041901856),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(49.25450289147468, -122.99938041901856)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong>Condohub</strong><br>3700 Willingdon Ave, Burnaby, BC V5G 3H2<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
            </div>
        </div>
        <div class="col-md-6 contactInfo" >
            <div style="margin: auto">
                <div>
                    <h2>Address</h2>
                    <p>1234 Fake Street<br>Vancouver BC  V3C 4A9<br>Canada</p>
                </div>
                
                <div>
                    <h2>Email</h2>
                    <p>info@condohub.com</p>
                </div>
                
                <div>
                    <h2>Phone</h2>
                    <p>T 604-374-9834<br>F 604-343-5565</p>
                </div>
            </div>
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