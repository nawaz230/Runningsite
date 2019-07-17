<?php
require_once("classtrail.php");
class Database{
    private $connexion;
/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/
      //Le constructeur
      public function __construct(){
        $PARAM_hote="mariadb";                  //Le chemin vers le serveur
        $PARAM_port="3306";                     //Le port de connexion à la base de données
        $PARAM_nom_bd="RunnerDB";         //Le nom de ma base de données
        $PARAM_utilisateur="adminted";       //Nom d'utilisateur pour se connecter
        $PARAM_mot_passe="nawazted";      //Mot de passe de l'utilisateur pour se connecter

        try{        //Le code qu'on essaye de faire
            $this->connexion = new PDO("mysql:dbname=" .$PARAM_nom_bd.";host=".$PARAM_hote,
                                $PARAM_utilisateur, 
                                $PARAM_mot_passe);
        }catch (Exception $monException){
            echo "Erreur : ".$monException->getMessage()."<br/>"; 
            echo "Code : ".$monException->getCode();
        }
    }//Fin du constructeur
/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/
    //Les fonctions (Le comportement)
    public function getConnexion(){
        return $this->connexion;
    }//Fin fonction de comportement
/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/
    // fonctions insertrunner
    public function insertrunner($title, $name, $photo, $postalcode, $startingpoint, $endingpoint, $city, $country, $description){
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO walkers(title, name, photo, postalcode, startingpoint, endingpoint, city, country, description)
            VALUE( :Title, :NameWalk, :Photo, :PostalCode, :StartingPoint, :EndingPoint, :City, :Country, :DescriptionWalk)"
        );

        $pdoStatement->execute(array(
            "Title"=> $title,
            "NameWalk"=> $name,
            "Photo"=> $photo,
            "PostalCode"=> $postalcode,
            "StartingPoint"=> $startingpoint,
            "EndingPoint"=> $endingpoint,
            "City"=> $city,
            "Country"=> $country,
            "DescriptionWalk"=> $description)
        );
        $id=$this->connexion->lastInsertId();
        return $id; 
    
        
    }//end fonction insertrunner 
/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/

///function to fetch the class trail and show them in my index page:

public function getTrailId($id){
    $pdoStatement =$this->connexion->prepare("SELECT id, title, name, photo, postalcode, startingpoint, endingpoint, city, country, description FROM walkers WHERE id = :id");

    $pdoStatement->execute(array(
        "id" => $id
        )
    );

    $mytrail = $pdoStatement->fetchObject("Trail");

    return $mytrail;
}
/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/


////fucntion to get the list of tail 

public function getAllTrail(){
    // i prepare  my requect to sql
    $pdoStatement = $this->connexion->prepare("SELECT * FROM walkers");

    $pdoStatement->execute();

     return $pdoStatement->fetchAll(PDO::FETCH_CLASS,"Trail");

}

/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/
 

////fucntion to get the list of tail 

public function getSomeTrail(){
    // i prepare  my requect to sql
    $pdoStatement = $this->connexion->prepare("SELECT * FROM walkers");

    $pdoStatement->execute();

     return $pdoStatement->fetchAll(PDO::FETCH_CLASS,"Trail");

}

/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/

/// update function
public function updatetrail($id, $title, $name, $photo, $postalcode, $startingpoint, $endingpoint, $city, $country, $description){
    $pdoStatement = $this->connexion->prepare("UPDATE walkers
     SET  title = :Title, name = :Name, photo = :Photo, postalcode = :PostalCode, startingpoint = :StartingPoint, endingpoint = :EndingPoint, city = :City, country = :Country, description = :DescriptionWalk 
     WHERE id = :Id");

     $pdoStatement->execute(array(
         "Id"=> $id,
        "Title" => $title,
        "Name" => $name,
        "Photo" => $photo,
        "PostalCode" => $postalcode,
        "StartingPoint" => $startingpoint,
        "EndingPoint" => $endingpoint,
        "City" => $city,
        "Country" => $country,
        "DescriptionWalk" => $description
     )
        
     );

     $errorCode = $pdoStatement->errorCode();
     if($errorCode == 0){
         return true;
     }
     return false;
}

/*----------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------*/

}
?>