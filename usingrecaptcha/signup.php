<?php
    require_once 'connection.php';
    if(isset($_POST['SignUp'])){
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            $secret ="6LeZgjkUAAAAAOI4MHyuEcYoli26PhrsTP9_805h";
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
        if($responseData->success){
            if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['gender'])){
             $username=$_POST['username'];
             $password= md5($_POST['password']);
             $email=$_POST['email'];
             $gender=$_POST['gender'];
             $query="select * from mydb.users_captcha where User_Name='$username' || Email='$email'";
             $result=$conn->query($query);
             $count=$result->num_rows;
             if($count>0){
                 header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=UserName or Email already exists");
             }
             else{
                 $query="insert into mydb.users_captcha(User_Name,Password,Email,Gender) values('$username','$password','$email','$gender')";
                 if($conn->query($query)){
                     header("Location: http://localhost/usingrecaptcha/loginForm.php?Success=Signed Up Successfully");
                 }   
                 else{
                     header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=$conn->error");
                 }
             }
         }
         else{
             header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=All fields should be filled");
            }      
       }
       else{
            header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=Robot verification failed, please try again.");
           }
   }
   else{
       header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=Please click on the reCAPTCHA box.");
   }
}
?>
