<!DOCTYPE html>
<html lang="en">

<!-- External stylesheet and bootstrap links -->
<head>
    <meta charset="utf-8">
    <title>CondoHub</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="style/base.css">
    <link rel="stylesheet" type="text/css" href="style/faq.css">
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>

</head>
  
<!-- Body  -->
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
            <li><a href="resources.php">Resources</a></li>
            <li class="active"><a href="faq.php">FAQ</a></li>
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
    <main class="container">
     <div class="left_column">
        <h1 id="C4">Frequently Asked Questions<br></h1>

         <hr>
         <div class="container-60">
         <div class="container2">
         <div class="row question1" id="faq1">
            
             
            <h2>Question1</h2>
            
            <p>Because our website’s purpose is to provide information for a business, we decided to use a simple and minimalistic design. Our primary demographic of users are condo and townhouse owners of all age and gender, so we focussed on a design that was streamlined and accessible. We researched several different websites that contained similar content to ours and found that they focused on functionality and simplicity rather than being<br><br> aesthetically pleasing. We kept a uniform design for all our pages -- keeping the same layout for the navigation and banner, changing only the content to keep our website consistent.  The content will either be using a one column layout or a two column layout depending on how much </p>
             <p class="button">
             <a href="faq1-more.html" class="btn btn-default"><i class="fa fa-picture-o">
                 
                 </i>
             &nbsp; Read more >>
             </a>
             </p>
             </div>
             
           <div class="row question2" id="faq2">
             
             
                <h2>Question2</h2>
            
            <p>Because our website’s purpose is to provide information for a business, we decided to use a simple and minimalistic design. Our primary demographic of users are condo and townhouse owners of all age and gender, so we focussed on a design that was streamlined and accessible. We researched several different websites that contained similar content to ours and found that they focused on functionality and simplicity rather than being<br><br> aesthetically pleasing. We kept a uniform design for all our pages -- keeping the same layout for the navigation and banner, changing only the content to keep our website consistent.  The content will either be using a one column layout or a two column layout depending on how much </p>
             <p class="button">
              <a href="faq2-more.html" class="btn btn-default"><i class="fa fa-picture-o">
                 
                 </i>
             &nbsp; Read more >>
             </a>
             </p>
             </div>
             
             <div class="row question3" id="faq3">
             
             
              <h2>Question3</h2>
            
            <p>Because our website’s purpose is to provide information for a business, we decided to use a simple and minimalistic design. Our primary demographic of users are condo and townhouse owners of all age and gender, so we focussed on a design that was streamlined and accessible. We researched several different websites that contained similar content to ours and found that they focused on functionality and simplicity rather than being<br><br> aesthetically pleasing. We kept a uniform design for all our pages -- keeping the same layout for the navigation and banner, changing only the content to keep our website consistent.  The content will either be using a one column layout or a two column layout depending on how much </p>
              <p class="button">
              <a href="faq3-more.html" class="btn btn-default"><i class="fa fa-picture-o">
                 
                 </i>
             &nbsp; Read more >>
             </a>
             </p>
             </div>
             
               <div class="row question4" id="faq4">
             
              <h2>Question4</h2>
            
            <p>Because our website’s purpose is to provide information for a business, we decided to use a simple and minimalistic design. Our primary demographic of users are condo and townhouse owners of all age and gender, so we focussed on a design that was streamlined and accessible. We researched several different websites that contained similar content to ours and found that they focused on functionality and simplicity rather than being<br><br> aesthetically pleasing. We kept a uniform design for all our pages -- keeping the same layout for the navigation and banner, changing only the content to keep our website consistent.  The content will either be using a one column layout or a two column layout depending on how much </p>
              <p class="button">
              <a href="faq4-more.html" class="btn btn-default"><i class="fa fa-picture-o">
                 
                 </i>
             &nbsp; Read more >>
             </a>
             </p>
             </div>
             
               <div class="row question5" id="faq5">
             
             
              <h2>Question5</h2>
            
            <p>Because our website’s purpose is to provide information for a business, we decided to use a simple and minimalistic design. Our primary demographic of users are condo and townhouse owners of all age and gender, so we focussed on a design that was streamlined and accessible. We researched several different websites that contained similar content to ours and found that they focused on functionality and simplicity rather than being<br><br> aesthetically pleasing. We kept a uniform design for all our pages -- keeping the same layout for the navigation and banner, changing only the content to keep our website consistent.  The content will either be using a one column layout or a two column layout depending on how much </p><br>
              <p class="button">
              <a href="faq5-more.html" class="btn btn-default"><i class="fa fa-picture-o">
                 </i>
             &nbsp; Read more >>
             </a>
             </p>
             </div>
             
             <div>
             <p id = "bookmark"><a href="#C4">Go to top</a></p>
             </div>
             
            
        </div>
    </div>
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