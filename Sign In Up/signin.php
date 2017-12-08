<?php include 'connection.php'; ?>
<?php

	if(isset($_POST['Signin'])){
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
		
		$search="select * from mydb.users where Password='$Password' AND Email='$Email'";
		$results=$conn->query($search);
		if($rows=$results->fetch_assoc()){
			echo "Signed In Successfully";
		}
		else{
			echo "Email or Password is incorrect";
		}
	}
?>