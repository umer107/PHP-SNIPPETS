<?php
	require_once("connection.php");
?>
<!DOCTYPE>
<html>
<head><title>Latest Posts</title></head>
<body>
	<h1>Latest Posts</h1>
	<hr>
	<?php
		$query="select * from mydb.posts order by date desc limit 5";
		$results=$conn->query($query);
		while($rows=$results->fetch_assoc()){	
	?>
	<h2><?php echo $rows['Post_Heading']; ?></h2><br>
	<?php
		$paragraphs=explode("\n",$rows['Post_Description']);
		foreach ($paragraphs as $key) {
	?>
	<p><?php echo $key; ?></p>
	<?php 
		} 
	?>
	<hr>
	<?php 
		} 
	?>


</body>

</html>