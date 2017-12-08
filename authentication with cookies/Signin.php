<?php require_once 'connection.php'; ?>
<?php
        if(isset($_COOKIE['Email']) && isset($_COOKIE['Password'])){
            header("Location: http://localhost/authentication%20with%20cookies/home.php");
            exit;
        }
	if(isset($_POST['Signin'])){
            if(!empty($_POST['Email'] && $_POST['Password'])){
		$Email=$_POST['Email'];
		$Password= md5($_POST['Password']);
		$search="select * from mydb.users where Password='$Password' AND Email='$Email'";
		$results=$conn->query($search);
                $count=$results->num_rows;
               if($count>0){
                    if(isset($_POST['rememberme'])){
                        setcookie("Email", $Email, time()+ (60*60*24*5), "/");
                        setcookie("Password", $Password, time()+ (60*60*24*5), "/");
                    }
                    header("Location: http://localhost/authentication%20with%20cookies/home.php");
                        exit;
			echo "Signed In Successfully";
                        
		}
		else{
                    echo "Email or Password is incorrect";
		}
            }
            else{
                echo "Email Or Password is empty";
            }
        }
?>