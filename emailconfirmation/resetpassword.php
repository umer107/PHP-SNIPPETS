<?php
require_once 'connection.php';
if(empty($_GET['name'])){
    echo "Something went wrong. Check Your URL"."<br>";
}
else{
    $username=$_GET['name'];
    $query="select * from mydb.users where User_Name='$username'";
        $result=$conn->query($query);
        $count=$result->num_rows;
        if($count>0){
            header("Location: http://localhost/emailconfirmation/newpassword.php?name=$username");
        }
        else{
            
        }
}
?>        


