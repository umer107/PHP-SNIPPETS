<?php
    require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Employee Record</title>
    </head>
    <body>
        <?php
            $id=$_GET['update'];
            $query="select * from mydb.employees where E_Id='$id'";
            $result=$conn->query($query);
            while($rows=$result->fetch_assoc()){
                $ename=$rows['E_Name'];
                $cnic=$rows['CNIC'];
                $salary=$rows['Salary'];
                $department=$rows['Department'];
            }
        ?>
        <form action="update.php?update=<?php echo $id; ?>" method="POST">
		<fieldset><legend>Update Employee Record</legend>
			<label for="ename">Name: </label>
			<input type="text" name="ename" id="ename" value="<?php echo $ename; ?>"></input><br><br>
			<label for="cnic">CNIC: </label>
			<input type="text" name="cnic" id="cnic" value="<?php echo $cnic; ?>"></input><br><br>
			<label for="department">Department: </label>
			<input type="text" name="department" id="department" value="<?php echo $department; ?>"></input><br><br>
			<label for="salary">Salary: </label>
			<input type="text" name="salary" id="salary" value="<?php echo $salary; ?>"></input><br><br>
			<input type="submit" name="updaterecord" value="Update Record"></input>
		</fieldset>
	</form>
	
    </body>
</html>
