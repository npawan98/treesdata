<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "treedata";
$conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$targetDir = "photos/";
$image = $_FILES['files']['name'];
$fileName = implode(",",$image);


$Scientific_name = $_REQUEST['Scientific_name'];
$Common_name = $_REQUEST['Common_name'];
$Family_name = $_REQUEST['Family_name'];
$Kannada_name = $_REQUEST['Kannada_name'];
$Age = $_REQUEST['Age'];
$Description = $_REQUEST['Description'];
$Girth = $_REQUEST['Girth'];
$Height = $_REQUEST['Height'];
$Tree_Health_Condition = $_REQUEST['Tree_Health_Condition'];
$Rating = $_REQUEST['Rating'];
$Latitude_and_Longitude = $_REQUEST['Latitude_and_Longitude'];
$any_other_details = $_REQUEST['any_other_details'];
// $images = $_REQUEST['images'];
// echo $fileName;

if(!empty($image)){
    foreach($image as $key => $val){
        $targetFilePath = $targetDir . $val;
        move_uploaded_file($_FILES['files']['tmp_name'][$key],$targetFilePath);
    }
    // $query = "INSERT INTO images(image_name,name) VALUES('$fileName','$username')";
    $query = "INSERT INTO treedetails VALUES ('$Scientific_name','$Common_name','$Family_name','$Kannada_name','$Age','$Description','$Girth','$Height','$Tree_Health_Condition','$Rating','$Latitude_and_Longitude','$any_other_details','$fileName','')";
    $statement = $conn->prepare($query);
    $statement->execute();
    echo "Images Uploaded";
};
?>