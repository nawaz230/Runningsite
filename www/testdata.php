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

?>