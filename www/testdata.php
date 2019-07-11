<?php
require_once ("database.php");

$database = new Database();


if($database->getConnection() == null){
    echo "the connection is failed";
}else{
    echo"hell yeah it is connected";
}

?>