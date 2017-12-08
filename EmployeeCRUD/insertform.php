<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Employee Record</title>
    </head>
    <body>
       <form action="insert_into_database.php" method="POST">
		<fieldset><legend>Employee Form</legend>
			<label for="ename">Name: </label>
			<input type="text" name="ename" id="ename"></input><br><br>
			<label for="cnic">CNIC: </label>
			<input type="text" name="cnic" id="cnic"></input><br><br>
			<label for="department">Department: </label>
			<input type="text" name="department" id="department"></input><br><br>
			<label for="salary">Salary: </label>
			<input type="text" name="salary" id="salary"></input><br><br>
			<input type="submit" name="addrecord" value="Insert Record"></input>
		</fieldset>
	</form>
	
    </body>
</html>
