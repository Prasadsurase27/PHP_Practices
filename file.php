<?php

if(isset($_FILES["image"])){

    $file_name=$_FILES['image']["name"];
    $file_size=$_FILES['image']["size"];
    $file_tmp=$_FILES['image']["tmp_name"];
    $file_type=$_FILES['image']["type"];
}
    if(move_uploaded_file($file_tmp,"C://wamp64/www/Devansh Febrication and Engineering works/upload-files/".$file_name)){
        echo "Successfully Uploded";
    }else{
        echo "Could Not be Uploded";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globle_File</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="image" placeholder="click here"/><br><br>
        <input type="submit"/>
    </form>
</body>
</html>