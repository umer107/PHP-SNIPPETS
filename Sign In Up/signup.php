<?php include 'connection.php'; ?>
<?php

	if(isset($_POST['Signup'])){
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		$Gender=$_POST['Gender'];
		$Email=$_POST['Email'];
		$search="select * from mydb.users where User_Name='$Username' OR Email='$Email'";
		$results=$conn->query($search);
		if($rows=$results->fetch_assoc()){
			echo "Email or Username already exists. Try Again";
		}
		else{
			$insert="insert into mydb.users(User_Name,Password,Gender,Email) values('$Username','$Password','$Gender','$Email')";
			if($conn->query($insert)==true){
				//echo "Account Created Successfully";
				header("Location: http://localhost/php/home.php");
			}
		}
	}
?>