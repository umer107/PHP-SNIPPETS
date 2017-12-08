<?php
        if(isset($_COOKIE['Email']) && isset($_COOKIE['Password'])){
            header("Location: http://localhost/authentication%20with%20cookies/home.php");
            exit;
        }
 ?>
<!DOCTYPE>
<html>
<head><title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="floating-box">
	<form action="signup.php" method="POST">
		<fieldset><legend>SIGN UP</legend>
			<label for="username">Username: </label>
			<input type="text" name="Username" id="username"></input><br><br>	
			<label for="password">Password: </label>
			<input type="password" name="Password" id="password"></input><br><br>	
			<label for="Gender">Gender: </label>
			<input type="radio" name="Gender" id="Gender" value="Male" checked>Male</input>
			<input type="radio" name="Gender" id="Gender" Value="Female">Female</input><br><br>
			<label for="emailid">Email: </label>
			<input type="text" name="Email" id="emailid"></input><br><br>
			<input type="submit"  name="Signup" value="Sign Up"></input>
		</fieldset>
	</form>


</div>
<div class="floating-box">
	<form action="signin.php" method="POST">
		<fieldset><legend>SIGN IN</legend>
			<label for="emailid">Email: </label>
			<input type="text" name="Email" id="emailid"></input><br><br>
			<label for="password">Password: </label>
                        <input type="password" name="Password" id="password"></input><br><br>
                        <input type="checkbox" name="rememberme" value="1">Remember Me</input><br><br>
			<input type="submit" name="Signin" value="Sign In"></input>
		</fieldset>
	</form>	
</div>
</body>

</html>


