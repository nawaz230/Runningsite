<?php

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

}
?> 