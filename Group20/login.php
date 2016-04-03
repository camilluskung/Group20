<!DOCTYPE html>
<html lang="en">

<!-- Internal Details: title, stylesheets, scripts -->
<head>
    <meta charset="utf-8">
    <title>CondoHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
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
</head>

<!-- Body -->  
<body>

<!-- Main Wrapper -->               
<div class="container">

<!-- Title box -->
<div class="logobar">
<h1>CondoHub</h1>
<h2>Log In</h2>
</div>

<!-- Main content -->
<div class="content">

<!-- Left column: text forms for username and password -->
<div class="leftcol">
<!-- Text form labels and text fields -->
<form name="loginform" class="form1" onsubmit="return validateLoginForm()" action="forum/login.php" method="post">

       
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
<a href="http://time.is/Vancouver" id="time_is_link" rel="nofollow" style="font-size:20px;color:white">Time in Vancouver:</a>
<span id="Vancouver_z18c" style="font-size:20px;color:white"></span>
<script src="http://widget.time.is/en_gb.js"></script>
<script>
time_is_widget.init({Vancouver_z18c:{template:"TIME<br>DATE", time_format:"12hours:minutesAMPM", date_format:"monthname dnum,year dayname"}});
</script>

</div>

<!-- Right Column: Logo -->
<div class="rightcol">
<!-- Logo -->
<img src="images/logo.gif" width="350" alt="CondoHub">
</div>
</div>

<!-- Bottom wrapper: Back and Sign Up reference -->
<div class="bottom">
<p>Not a member? <a href=signup.php>Sign up now.</a></p>
<!-- <button id="back" onclick="goBack()">Go Back</button> -->
<button class="btn btn-success" onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
</div>
</div>

</body>




</html>