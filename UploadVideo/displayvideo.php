<?php
    require_once 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<body>
    <?php
        $query="select * from mydb.videos";
        $result=$conn->query($query);
        while($rows=$result->fetch_assoc()){
    ?>
    <video width="320" height="240" controls>
        <source src="<?php echo 'upload/'.$rows['Video_Name']; ?>" type="<?php echo $rows['Video_Type']; ?>">
    </video>
    <?php
        }
    ?>
</body>
</html>
