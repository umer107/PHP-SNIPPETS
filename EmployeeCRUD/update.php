<?php
    require_once 'connection.php';
    if(isset($_POST['updaterecord'])){
        if(!empty($_POST['ename'] && $_POST['salary'] && $_POST['cnic'] && $_POST['department'])){
             $id=$_GET['update'];
             $ename=$_POST['ename'];
             $cnic=$_POST['cnic'];
             $salary=$_POST['salary'];
             $department=$_POST['department'];
             $query="UPDATE mydb.employees SET E_Name='$ename',CNIC='$cnic',Salary='$salary',Department='$department' WHERE E_Id='$id'";
             if($conn->query($query)){
                 header("Location: http://localhost/EmployeeCRUD/View_from_database.php");
             }
             else{
                 echo $conn->error;
            }
         }
         else{
             header("Location: http://localhost/EmployeeCRUD/updateform.php");
         }

    }
?>
