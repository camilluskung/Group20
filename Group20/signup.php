<?php
  //header
  $css = "style/signup.css";
  $page = "signup";
  include("header.php");
?>
    
    <script>
<<<<<<< HEAD
   
   function $(id) {
=======
      function $(id) {
>>>>>>> 47e51129f80b9e8693549a10658d752aaedb37ae
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

  
<?php 
  //footer
  include("footer.php")
?>