<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Image</title>
</head>
<body>
    <?php
    $query="select * from mydb.images";
    $result=$conn->query($query);
    while($rows=$result->fetch_assoc()){
?>
    <img src="<?php echo 'upload/'.$rows['Image_Name']; ?>" height="42" width="42">
    <img src="<?php echo 'upload/thumbs/'.$rows['Image_Name']; ?>"><br>
    
    <?php
    }
    ?>
</body>
</html>