<?php
require_once 'connection.php';
// Check if the form was submitted
  if(isset($_FILES["video"]) && $_FILES["video"]["error"] == 0){
        $allowed = array("avi" => "video/x-msvideo","flv" => "video/x-flv", "mp4" => "video/mp4", "3gp" => "video/3gpp", "wmv" => "video/x-ms-wmv");
        $filename = $_FILES["video"]["name"];
        $filetype = $_FILES["video"]["type"];
        $filesize = $_FILES["video"]["size"];
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 100 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["video"]["name"])){
                echo $_FILES["video"]["name"] . " is already exists.";
            } else{
                $query="insert into mydb.videos(Video_Name,Video_Type) values('$filename','$filetype')";
                if($conn->query($query)){
                    move_uploaded_file($_FILES["video"]["tmp_name"], "upload/" . $_FILES["video"]["name"]);
                    echo "Your file was uploaded successfully.";
                    header("Location: http://localhost/UploadImage/displayvideo.php");
                }
                else{
                    echo "Error: ".$conn->error;
                }
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " .$_FILES["video"]["error"];
    }
?>