<?php
require_once 'connection.php';
require_once 'function.php';
// Check if the form was submitted
if(isset($_POST['submit'])){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("JPG" => "image/JPG","jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Error=Error: Please select a valid file format.");
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Error=Error: File Size is larger than allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["photo"]["name"])){
                header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Error=Error:$filename is already exists");
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                createThumbnail($filename);
                $query="insert into mydb.images(Image_Name) values('$filename')";
                if($conn->query($query)){
                    header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Success=Image Uploaded Successfully");
               }
                else{
                    header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Error=$conn->error");
                }
            } 
        } else{
            header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Error=There was a problem uploading your file. Please try again.");               
        }
    } else{
        $error=$_FILES['photo']['error'];
        header("Location: http://localhost/uploadimagewiththumbnail/AddImage.php?Error=$error ");
    }
}
?>