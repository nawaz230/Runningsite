<?php

$title = $_POST["title"];
$name = $_POST["name"];
$postalcode = $_POST["postalcode"];
$startingpoint = $_POST["startingpoint"];
$endingpoint = $_POST["endingpoint"];
$city = $_POST["city"];
$country = $_POST["country"];
$description = $_POST["description"];

$id = $_GET["id"];

require_once ("database.php");

$database = new Database();

if(isset($_POST["submit"])){
    $file = $_FILES["file"];

    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg","jpeg","png");

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = "upload/".$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
            }else{
                echo "your file is too big";
            }

        }else{
            echo "there was am error upload the file";
        }
    }else{
        echo "you cant upload this file";
    }
}

//update function was called here 

$update = $database->updatetrail($id, $title, $name, $fileDestination, $postalcode, $startingpoint, $endingpoint, $city, $country, $description);

header("Location: detail.php?id=$id");
?>