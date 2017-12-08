<?php
    require_once 'connection.php';
        $id=$_GET['delete'];
        $query="Delete from mydb.employees WHERE E_Id='$id'";
        if($conn->query($query)){
            header("LOcation: http://localhost/EmployeeCRUD/View_from_database.php");
        }
        else{
            echo $conn->error;
        }
?>
