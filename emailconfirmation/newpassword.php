<?php
require_once 'connection.php';
  if(isset($_POST['resetpassword'])){
      $username=$_GET['name'];
      $password=md5($_POST['password']);
      $query="Update mydb.users set Password='$password' where User_Name='$username'";
      if($conn->query($query)){
          header("Location: http://localhost/emailconfirmation/LoginForm.php?Success=New Password Saved Successfully");
      }
  }  

?>
<!DOCTYPE>
<html>
    <head><title>Reset Password</title></head>
    <body>
        <form action="newpassword.php?name=<?php echo $_GET['name']; ?>" method="POST">
                <fieldset><legend>Reset Password</legend>
                        <label for="password">New Password: </label>
                        <input type="password" name="password" id="password"></input><br><br>	
                        <input type="submit" name="resetpassword" value="Reset Password"></input><br><br>
                </fieldset>
            </form>
    </body>
</html>

