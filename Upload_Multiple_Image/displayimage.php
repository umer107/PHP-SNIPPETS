<?php
    require_once 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $query="select * from mydb.images ";
        $result=$conn->query($query);
        while($rows=$result->fetch_assoc()){
    ?>
   <img src="<?php echo 'upload/'.$rows['Image_Name'];?>"  width="200" height="200">
    <?php
        }
    ?>
</body>
</html>
