<?php
    require_once 'connection.php';
    require_once 'functions.php';
    if(isset($_POST['forgotpassword'])){
        $username;
        $email;
        if(!empty($_POST['email'])){
            $email=$_POST['email'];
        }
        if(!empty($_POST['username'])){
            $username=$_POST['username'];
        }
        $query="select * from mydb.users where User_Name='$username' || Email='$email'";
        $result=$conn->query($query);
        $count=$result->num_rows;
        if($count>0){
           if($rows=$result->fetch_assoc()){
               $username=$rows['User_Name'];
               $email=$rows['Email'];
               $info=array(
                   'email'=>$email,
                   'username'=>$username
               );
               if(resetlink($info)){
                   header("Location: http://localhost/emailconfirmation/LoginForm.php?Success=Check Your Mail To Reset Password");
               }
              else{
                  header("Location: http://localhost/emailconfirmation/forgetpassword.php?Error=Could Not Sent Reset Password Mail");
              }
           }
        }
        else{
            header("Location: http://localhost/emailconfirmation/forgetpassword.php?Error=Email or Username is Invalid");
        }
    }
?>
<!DOCTYPE>
<html>
    <head></head>
        <body>
            <h1><?php echo @$_GET['Error']; ?></h1>
            <form action="forgetpassword.php" method="POST">
                <fieldset><legend>Forgot Password</legend>
                    <label for="emailid">Email: </label>
                        <input type="text" name="email" id="emailid"></input><br><br>  OR
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username"></input><br>	
                        <input type="submit" name="forgotpassword" value="Submit"></input><br><br>
                </fieldset>
            </form>
        </body>
</html>