<?php
require_once 'connection.php';
if(isset($_POST['submit'])){
// Check if the form was submitted
    for($i=0;   $i< count($_FILES["photo"]["name"]);$i++){
        if($_FILES["photo"]["error"][$i] == 0){
              $allowed = array("JPG" => "image/JPG","jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
              $filename = $_FILES["photo"]["name"][$i];
              $filetype = $_FILES["photo"]["type"][$i];
              $filesize = $_FILES["photo"]["size"][$i];
              // Verify file extension
              $ext = pathinfo($filename, PATHINFO_EXTENSION);
              if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

              // Verify file size - 5MB maximum
              $maxsize = 5 * 1024 * 1024;
              if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

              // Verify MYME type of the file
              if(in_array($filetype, $allowed)){
                  // Check whether file exists before uploading it
                  if(file_exists("upload/" . $_FILES["photo"]["name"][$i])){
                      echo $_FILES["photo"]["name"][$i] . " is already exists.";
                  } else{
                      $query="insert into mydb.images(Image_Name) values('$filename')";
                      if($conn->query($query)){
                          move_uploaded_file($_FILES["photo"]["tmp_name"][$i], "upload/" . $_FILES["photo"]["name"][$i]);
                          echo "Your file was uploaded successfully.";
                          header("Location: http://localhost/UploadImage/displayimage.php");
                      }
                      else{
                          echo "Error: ".$conn->error;
                      }
                  } 
              } else{
                  echo "Error: There was a problem uploading your file. Please try again."; 
              }
          } else{
              echo "Error: " . $_FILES["photo"]["error"][$i];
          }
    }
}
?>