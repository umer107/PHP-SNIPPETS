<?php
    require_once 'connection.php';
    if(isset($_POST['addrecord'])){
         if(!empty($_POST['ename'] && $_POST['salary'] && $_POST['cnic'] && $_POST['department'])){
             $ename=$_POST['ename'];
             $cnic=$_POST['cnic'];
             $salary=$_POST['salary'];
             $department=$_POST['department'];
             $query="insert into mydb.employees (E_Name,CNIC,Department,Salary) values('$ename','$cnic','$department','$salary')";
             if($conn->query($query)){
                 header("Location: http://localhost/EmployeeCRUD/View_from_database.php");
             }
             else{
                 echo $conn->error;
             }
         }
         else{
             header("Location: http://localhost/EmployeeCRUD/insertform.php");
         }
    }


?>
