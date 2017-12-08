<?php
    require_once 'connection.php';
    if(isset($_POST['SignIn'])){
        if(!empty($_POST['password']) && !empty($_POST['email'])){
            $password= md5($_POST['password']);
            $email=$_POST['email'];
            $query="select * from mydb.users where Password='$password' && Email='$email'";
            $result=$conn->query($query);
            $count=$result->num_rows;
            if($count>0){
                if($row=$result->fetch_assoc()){
                    if($row['Active']==0){
                        header("Location: http://localhost/emailconfirmation/loginForm.php?Error=Check Your Email For Confirmation");
                    }
                    else{
                        header("Location: http://localhost/emailconfirmation/home.php");
                    }
                }
                
            }
            else{
                header("Location: http://localhost/emailconfirmation/loginForm.php?Error=Email or Password is Incorrect");
            }
        }
        else{
            header("Location: http://localhost/emailconfirmation/loginForm.php?Error=All fields should be filled");
        }
    }
?>
