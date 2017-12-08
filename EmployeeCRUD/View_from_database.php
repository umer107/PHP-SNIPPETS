<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head><title>Employee Record</title></head>
<body>
    <table>
        <caption>Employee Record</caption>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>CNIC</td>
            <td>Department</td>
            <td>Salary</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
    <?php
        $count=0;
        $query="select * from mydb.employees ";
        $result=$conn->query($query);
        while($rows=$result->fetch_assoc()){
            $count++;
    ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $rows['E_Name']; ?></td>
            <td><?php echo $rows['CNIC']; ?></td>
            <td><?php echo $rows['Department']; ?></td>
            <td><?php echo $rows['Salary']; ?></td>
            <td><a href="updateform.php?update=<?php echo $rows['E_Id']; ?>">Update</a></td>
            <td><a href="delete.php?delete=<?php echo $rows['E_Id']; ?>">Delete</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <form action="insertform.php">
        <br><br>
	<input type="submit" name="addrecord" value="Insert Record"></input>
    </form>
</body>
</html>
