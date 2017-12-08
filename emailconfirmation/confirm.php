<?php
require_once 'connection.php';
if(empty($_GET['email']) || empty($_GET['key'])){
    echo "Something went wrong. Check your URL and try again";
}		
else{
	$email = $_GET['email'];
	$key = $_GET['key'];
	
	//check if the key is in the database
	$query = "SELECT * FROM confirm WHERE Email = '$email' AND Randomkey = '$key'"; 
	$result=$conn->query($query);
	if($row=$result->fetch_assoc()){
		$userid=$row['User_Id'];
		$update="UPDATE users SET active = 1 WHERE User_Id = '$userid'";
                if($conn->query($update)){
                    echo "User has been confirmed";
                    $delete = "DELETE FROM confirm WHERE  User_Id='$userid'";
                    if($conn->query($delete)){
                        header("Location: http://localhost/emailconfirmation/loginForm.php?Success=Email Has Been Verfied");
                    }
                }
		else{
                    echo "Error: ".$conn->error;
                }
        
	}else{
             header("Location: http://localhost/emailconfirmation/loginForm.php?Error=User Has not Signed Up");       
	}

}


?>
