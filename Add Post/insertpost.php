<?php
	require_once("connection.php");
	if(isset($_POST['addpost'])){
		$postheading=$conn->real_escape_string($_POST['PostHeading']);
		$postdescription=$conn->real_escape_string($_POST['PostDescription']);
		date_default_timezone_set("Asia/Karachi");
		$date=date("Y-m-d H:i:s");
		$query="insert into mydb.posts(Post_Heading,Post_Description,Date) values('$postheading','$postdescription','$date')";
		if($conn->query($query)){
			echo "Post added successfully";
		}
		else{
			echo "Error:".$conn->error;
		}
	}
?>
<!DOCTYPE>
<html>
<head><title>Add Post</title></head>
<body></body>

</html>