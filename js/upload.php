<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$audioFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
	echo '<script language="javascript">';
    echo 'alert("Sorry, file already exists.")';
	echo '</script>';
    $uploadOk = 0;
}
// Check file size


if ($_FILES["fileToUpload"]["size"] > 15000000) {
	echo '<script language="javascript">';
    echo 'alert("Sorry, your file is too large. The max is 5 mbs bro")';
	echo '</script>';
    $uploadOk = 0;
}

// Allow certain file formats

if($audioFileType != "mp3" && $audioFileType != "wav" && $audioFileType != "ogg") {
	echo '<script language="javascript">';
    echo 'alert("Sorry, only mp3, wav, and ogg files are supported.")';
	echo '</script>';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo 'alert("Sorry, there was an error uploading your file.")';
    }
}
?>