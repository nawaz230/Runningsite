<?php
///insertion of database through form
$title = $_POST["title"];
$name = $_POST["name"];
$photo = $_POST["photo"];
$postalcode = $_POST["postalcode"];
$startingpoint = $_POST["startingpoint"];
$endingpoint = $_POST["endingpoint"];
$city = $_POST["city"];
$country = $_POST["country"];
$description = $_POST["description"];

require_once("database.php");
$database = new Database();

$novelId = $database-> insertrunner($title, $name, $photo, $postalcode, $startingpoint, $endingpoint, $city, $country, $description);

header("Location: detail.php?id=".$novelId);


?>