<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Image</title>
</head>
<body>
    <h1><?php echo @$_GET['Error']; ?></h1>
    <h1><?php echo @$_GET['Success']; ?></h1>
    <form action="uploadimage.php" method="POST" enctype="multipart/form-data">
        <fieldset><legend>Add Image</legend>
            <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect"><br><br>
        <input type="submit" name="submit" value="Upload"><br>
        </fieldset>
   </form>
    
    <form action="displayimage.php">
        <br><br><input type="submit" name="submit" value="Display Image">
   </form>
</body>
</html>