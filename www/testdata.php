<?php
//Import des fichiers nécéssaires aux tests
require_once ("database.php");

//J'instancie une nouvelle connexion à ma base de données
$database = new Database();


if($database->getConnexion() == null){
    echo "The connection failed";
}else{
    echo "Hell yeah it is connected!";
}
/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/
//$newrunner = $database->insertrunner("Catching","Kumar", "upload/map3.png","2000 Mumbai", "Gugrawala", "Jalwar Road", "Mumbai", "India","it was a nice run and i enjoying but it was little longer then i expected ");
//echo "<p> new runner has been added : $newrunner</p>";


//var_dump("$newrunner") 
$trails = $database ->getAllTrail();
//i made order list and use foreach loop 
echo "<ul>";

foreach($trails as $test){
    echo "<li>" 
    .$test->getId().", ".
     $test->getTitle().", ". 
     $test->getName(). ", ".
     $test->getPhoto(). ", ".
     $test->getStartingPoint(). ", ".
     $test->getEndingPoint(). ", ".
     $test->getPostalCode(). ", ".
     $test->getCity(). ", ".
     $test->getCountry(). ", ".
     $test->getDescription(). ", ".
    "</li>";
   }
   "</ul>";

   $update = $database->updatetrail(8,"Catching","Kumar", "upload/carte.png","2000 Mumbai", "Gugrawala", "Jalwar Road", "Mumbai", "India","it was a nice run and i enjoying but it was little longer then i expected " );

   if($update == true){
    echo ("update successfully ");
   }else{
       echo ("update fail");
   }


?>