<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "temp";
$conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$targetDir = "photos/";
$image = $_FILES['files']['name'];
$fileName = implode(",",$image);
$username = $_REQUEST['name'];
// echo $fileName;

if(!empty($image)){
    foreach($image as $key => $val){
        $targetFilePath = $targetDir . $val;
        move_uploaded_file($_FILES['files']['tmp_name'][$key],$targetFilePath);
    }
    $query = "INSERT INTO images(image_name,name) VALUES('$fileName','$username')";
    $statement = $conn->prepare($query);
    $statement->execute();
    echo "Images Uploaded";
};



?>