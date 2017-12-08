<!DOCTYPE html>
<html>
<body>

<form action="insertimage.php" method="post" enctype="multipart/form-data">
    <label for="fileToUpload">Select Image:</label>
    <input type="file" name="photo[]" id="fileToUpload" multiple="multiple"><br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>