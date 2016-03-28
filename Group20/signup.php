<!DOCTYPE html>
<html lang="en">

<!-- External stylesheet and boostrap links -->
<head>
    <meta charset="utf-8">
    <title>CondoHub</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="style/base.css">
	
	 <link rel="stylesheet" type="text/css" href="style/signup.css">
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
    
    <script>
   function $(id) {
			  var element = document.getElementById(id);
			  return element;
		  } 
      
      function testFirstNameValid(id) {
        var firstNameRegex = /^([a-zA-Z\-\s]{2,40})+$/;
        var firstName = $(id).value.match(firstNameRegex);
        return firstName;
      }
        
      function warnFirstNameInvalid(id) {
        if (!testFirstNameValid(id)) {
          $("firstNameError").innerHTML="*Name is invalid (No numeric or special characters)*";
          return false;
        } else {
          $("firstNameError").innerHTML="";
          return true;
        }
      } 
      
      function testLastNameValid(id) {
        var lastNameRegex = /^([a-zA-Z\-\s]{2,40})+$/;
        var lastName = $(id).value.match(lastNameRegex);
        return lastName;
      }
        
      function warnLastNameInvalid(id) {
        if (!testLastNameValid(id)) {
          $("lastNameError").innerHTML="*Name is invalid (No numeric or special characters)*";
          return false;
        } else {
          $("lastNameError").innerHTML="";
          return true;
        }
      } 
      
      function testEmailValid(id) {
        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var email = $(id).value.match(emailRegex);
        return email;
      }
      
      function warnEmailInvalid(id) {
        if (!testEmailValid(id)) {
        $("emailError").innerHTML="*E-mail is invalid (must include @gmail.com, @hotmail.com, @shaw.ca)*";
        return false;
        } else {
        $("emailError").innerHTML="";
        return true;
        }
      }
      
      function testPasswordValid(id) {
        var passwordRegex = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,})$/;
        var password = $(id).value.match(passwordRegex);
        return password;
      }
      
      function warnPasswordInvalid(id) {
        if (!testPasswordValid(id)) {
        $("passwordError").innerHTML="*Please enter password (must be 6 characters and include an </br>UPPERCASE, lowercase and a digit)*"; 
        return false;
        } else {
        $("passwordError").innerHTML="";
        return true;
        }
      }
      
      function testConfirmValid(id) {
        var confirm = $(id).value;
        if (confirm == password) {
        return true;
        }
      }
      
      function warnConfirmInvalid(id) {
        if (!testPasswordValid(id)) {
          $("confirmError").innerHTML="*Password does not match*"
          return false;
        } else {
          $("confirmError").innerHTML="";
          return true;
        }
      }
      
      function validateForm() {
        var firstNameFlag = false;
        var lastNameFlag = false;
        var userFlag = false;
        var emailFlag = false;
        var passwordFlag = false;
        var confirmFlag = false;
        if (warnFirstNameInvalid("txtFirstName"))
          firstNameFlag = true;
        else 
          firstNameFlag = false;
        if (warnLastNameInvalid("txtLastName"))
          lastNameFlag = true;
        else 
          lastNameFlag = false;
        if (warnEmailInvalid("txtEmail"))
          emailFlag = true;
        else
          emailFlag = false;
        if (warnPasswordInvalid("txtPassword"))
          passwordFlag = true;
        else
          passwordFlag = false;
        if (warnConfirmInvalid("txtConfirm"))
          confirmFlag = true;
        else
          confirmFlag = false;
        return firstNameFlag && lastNameFlag && emailFlag && passwordFlag && confirmFlag;
      }
      
  </script>

</head>

<!-- Body -->
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
          <a class="navbar-brand" href="index.html">
            <img src="images/logo_tall.png" alt="logo" width="100" height="100">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="mainmenu">
          <ul class="nav navbar-nav nav-pills">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="board.html">Board</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right nav-pills">
            <!-- <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
            <?php
            session_start();
            if($_SESSION['logged']==true) {
              echo '<li><a href=#>'.$_SESSION["SESS_FIRST_NAME"].'</a></li><li><a href="forum/logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>';
              }
              else if($_SESSION['logged']==false) 
                echo '<li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li><li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
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
 <main class="container-fluid">
	<!-- Title Wrapper  -->
	<div id="start" class="toptitle">
		<h1>Sign Up</h1>
	</div>
	<!-- Main content wrapper -->
	<div class="belowbox">
		<form name="signUpForm" class="form-inline" action="forum/register.php" onsubmit="return validateForm()" method="post" >
			<table>
      <div class="form-group">
        <tr>
        <td class="category"><label class="control-label" for="firstName">First Name</label></td>
				<td><input id="txtFirstName" class="form-control" type="text" name="fname" placeholder="Enter your first name" maxlength="40" size="40">
        <div class="message" id="firstNameError"></div></td> 
        </div>
        </tr>
			<div class="form-group">
        <tr>
				<td class="category"><label class="control-label" for="lastName">Last Name</label></td>
				<td><input id="txtLastName" class="form-control" type="text" name="lname" placeholder="Enter your last name" maxlength="40" size="40">
      <div class="message" id="lastNameError"></div></td>
			</div>
        </tr>
			<div class="form-group">
        <tr>
				<td class="category"><label class="control-label" for="email">E-mail</label></td>		
				<td><input id="txtEmail" class="form-control" type="text" name="login" placeholder="Enter your e-mail" size="40">
        <div class="message" id="emailError"></div></td>
      </div>
        </tr>
			<div class="form-group">
        <tr>
				<td class="category"><label class="control-label" for="password">Password</label></td>
				<td><input id="txtPassword" class="form-control" type="password" name="password" placeholder="Enter the password" maxlength="40" size="40">
        <div class="message" id="passwordError"></div></td>
			</div>
        </tr>
			<div class="form-group">
        <tr>
				<td class="category"><label class="control-label" for="pconfirm">Confirm Password</label></td>
				<td><input id="txtConfirm" class="form-control" type="password" name="cpassword" placeholder="Confirm the password" maxlength="40" size="40">
        <div class="message" id="confirmError"></div></td>
      </div>
        </tr>
      </br>
      <div class="form-group">
        <tr>
        <td></td>
        <td><button class="btn btn-success" id="submit" type="submit">Create Account</button></td>
        </tr>
      </div>
      </table>
		</form>
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