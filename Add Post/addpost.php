<!DOCTYPE>
<html>
<head><title>Add Post</title>
</head>
<body>
	<form action="insertpost.php" method="POST">
		<fieldset><legend>Add Post</legend>
			<label for="postheading">Post Heading: </label>
			<input type="text" name="PostHeading" id="postheading"></input><br><br>	
			<label for="postdescription">Post Description: </label>
			<textarea name="PostDescription" id="postdescription" rows="7" cols="100"></textarea><br><br>
			<input type="submit" name="addpost" value="Add Post"></input>
		</fieldset>
	</form>
	
</body>

</html>