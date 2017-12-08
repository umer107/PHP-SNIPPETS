<?php require_once 'connection.php'; ?>
<?php

	if(isset($_POST['Signup'])){
            if(!empty($_POST['Email'] && $_POST['Password'] && $_POST['Username'] && $_POST['Gender'])){
		$Username=$_POST['Username'];
		$Password= md5($_POST['Password']);
		$Gender=$_POST['Gender'];
		$Email=$_POST['Email'];
		$search="select * from mydb.users where User_Name='$Username' OR Email='$Email'";
		$results=$conn->query($search);
                $count=$results->num_rows;
		if($count>0){
			echo "Email or Username already exists. Try Again";
		}
		else{
			$insert="insert into mydb.users(User_Name,Password,Gender,Email) values('$Username','$Password','$Gender','$Email')";
			if($conn->query($insert)==true){
                            echo "Account Created Successfully";
			}
                        else{
                            echo $conn->error;
                        }
		}
            }
            else{
                echo "All Fields should not be empty";
            }
        }
?>