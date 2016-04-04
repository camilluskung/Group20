<?php
  //header
  $css = "style/login2.css";
  $page = "login";
  include("header.php");
?>    
  <script>
  function validateLoginForm() {
        //var usernameRegex = /^[0-9a-zA-Z\-_]+$/;
		var emailRegex =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var usernameVal = document.forms["loginform"]["txtEmail"].value.match(emailRegex);
        if (usernameVal == null || usernameVal == "") {
        document.getElementById("emailError").innerHTML="E-mail is invalid (must include @gmail.com, @hotmail.com, @shaw.ca)";
        document.forms["loginform"]["txtEmail"].focus();
        return false;
        }
        if (usernameVal != null || usernameVal != "") {
          document.getElementById("emailError").innerHTML="";
        }
		var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/;
        var passwordVal = document.forms["loginform"]["txtPassword"].value.match(passwordRegex);
        if (passwordVal == null || passwordVal == "") {
        document.getElementById("passwordError").innerHTML="Must be at least six characters. At least one UPPERCASE, one lower case, and a digit";
        document.forms["loginform"]["txtPassword"].focus();
        return false;
        }
        if (passwordVal != null || passwordVal != "") {
          document.getElementById("passwordError").innerHTML="";
        }
        
        else {
          return true;
        }
      }     
  </script>


 <!-- Content --> 
 <main class="container-fluid">
	<!-- Title Wrapper  -->
	<div id="start" class="toptitle">
		<h1>Log In</h1>
	</div>
	<!-- Main content wrapper -->
	<div class="belowbox">
		<form name="loginform" class="form1" onsubmit="return validateLoginForm()" action="forum/login.php" method="post">
		<table>
       <div class="form-group">
        <tr>
				<td class="category"><label class="control-label" for="email">E-mail</label></td>		
				<td><input id="txtEmail" class="form-control" type="text" name="login" placeholder="Enter your e-mail" maxlength="40" size="40">
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

       
      </br>
      <div class="form-group">
        <tr>
        <td></td>
        <td><button class="btn btn-success" id="submit" type="submit">Submit</button>
		<a href=forgot.html>Forgot password</a></td>
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