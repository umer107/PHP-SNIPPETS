<?php
function createThumbnail($filename) {
    $source_image = imagecreatefromjpeg("upload/".$filename);
     
    $width = imagesx($source_image);
    $height = imagesy($source_image);
     
    $desired_width = 100;
    $desired_height = floor($height * ($desired_width / $width));
     
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);    
    imagejpeg($virtual_image, "upload/thumbs/".$filename);
}
