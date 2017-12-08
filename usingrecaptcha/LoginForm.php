<!DOCTYPE html>
<html>
    <head><title>Login Page</title>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1><?php echo @$_GET['Error']; ?></h1>
        <h1><?php echo @$_GET['Success']; ?></h1>
        <div class="floating-box">
        <form action="signup.php" method="POST">
		<fieldset><legend>Sign Up</legend>
			<label for="username">UserName: </label>
                        <input type="text" name="username" id="username"></input><br><br>	
			<label for="password">Password: </label>
			<input type="password" name="password" id="password"></input><br><br>	
                        <label for="gender">Gender: </label>
			<input type="radio" name="gender" id="gender" value="Male" checked>Male</input>
			<input type="radio" name="gender" id="gender" Value="Female">Female</input><br><br>
			<label for="emailid">Email: </label>
			<input type="text" name="email" id="emailid"></input><br><br>
                        <div class="g-recaptcha" data-sitekey="6LeZgjkUAAAAAHiYToCexZ89WDx6wIRn7lnDfjbr"></div>
                        <input type="submit" name="SignUp" value="Sign Up"></input>
		</fieldset>
	</form>
        </div>
        
        <div class="floating-box">
        <form action="signin.php" method="POST">
		<fieldset><legend>Sign IN</legend>
			<label for="emailid">Email: </label>
			<input type="text" name="email" id="emailid"></input><br><br>
                        <label for="password">Password: </label>
			<input type="password" name="password" id="password"></input><br>	
                        <input type="submit" name="SignIn" value="Sign In"></input>
		</fieldset>
	</form>
        </div>
    </body>
</html>