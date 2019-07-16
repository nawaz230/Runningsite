<?php

$title = $_POST["title"];
$name = $_POST["name"];
$photo = $_POST["photo"];
$postalcode = $_POST["postalcode"];
$startingpoint = $_POST["startingpoint"];
$endingpoint = $_POST["endingpoint"];
$city = $_POST["city"];
$country = $_POST["country"];
$description = $_POST["description"];

$id = $_GET["id"];

require_once ("database.php");

$database = new Database();

//update function was called here 

$update = $database->updatetrail($id, $title, $name, $photo, $postalcode, $startingpoint, $endingpoint, $city, $country, $description);

header("Location: detail.php?id=$id");
?>