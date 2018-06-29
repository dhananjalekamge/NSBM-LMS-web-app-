<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="uploadcss.css">
</head>
    <div class="imgimg">
<body background="img/IMG_2916 a.jpg">
   

<form action="upload.php" method="post" enctype="multipart/form-data">
    <h1>Select files to upload:</h1>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit" >
</form>

<?php
$target_dir = "uploads/";
if(isset($_FILES["fileToUpload"]["name"])){
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


// if everything is ok, try to upload file
 else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $url = "INSERT INTO uploads('url') VALUES("."uploads/".basename($_FILES["fileToUpload"]["name"]).")";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

?>
</div>

</body>
</html>