<?php
    require_once 'connection.php';
    require_once 'functions.php';
    if(isset($_POST['SignUp'])){
        if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['gender'])){
            $username=$_POST['username'];
            $password= md5($_POST['password']);
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $query="select * from mydb.users where User_Name='$username' || Email='$email'";
            $result=$conn->query($query);
            $count=$result->num_rows;
            if($count>0){
                header("Location: http://localhost/emailconfirmation/loginForm.php?Error=UserName or Email already exists");
            }
            else{
                $query="insert into mydb.users(User_Name,Password,Email,Gender,Active) values('$username','$password','$email','$gender','0')";
                if($conn->query($query)){
                    $userid=$conn->insert_id;
                    $key=$username.$email.date("mY");
                    $key= md5($key);
                    $insert="insert into mydb.confirm(User_Id,Email,RandomKey) values('$userid','$email','$key')";
                    if($conn->query($insert)){
                        $info = array(
                            'username' => $username,
                            'email' => $email,
                            'key' => $key);
                        if(send_email($info)){
                            header("Location: http://localhost/emailconfirmation/loginForm.php?Success=Signed Up Successfully. Check Your Email For Confirmation");
                        }
                        else{
                            header("Location: http://localhost/emailconfirmation/loginForm.php?Error=Could Not Send Confirm Mail");
                        }
                    }
                    else{
                        echo "Error: ".$conn->error;
                    }
                }
                else{
                    echo "Error: ". $conn->error;
                }
            }
        }
        else{
            header("Location: http://localhost/emailconfirmation/loginForm.php?Error=All fields should be filled");
        }
    }
?>
