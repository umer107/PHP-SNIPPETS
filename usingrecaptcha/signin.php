<?php
    require_once 'connection.php';
    if(isset($_POST['SignIn'])){
        if(!empty($_POST['password']) && !empty($_POST['email'])){
            $password= md5($_POST['password']);
            $email=$_POST['email'];
            $query="select * from mydb.users_captcha where Password='$password' && Email='$email'";
            $result=$conn->query($query);
            $count=$result->num_rows;
                if($count>0){
                    header("Location: http://localhost/usingrecaptcha/home.php");
                }
                else{
                header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=Email or Password is Incorrect");
                }
        }
        else{
            header("Location: http://localhost/usingrecaptcha/loginForm.php?Error=All fields should be filled");
        }
    }
            
        
        
    
?>
