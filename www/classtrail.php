<?php

class Trail {
    //attribute
    private $id;
    private $title;
    private $name;
    private $photo;
    private $startingpoint;
    private $endingpoint;
    private $postalcode;
    private $city;
    private $country;
    private $description;

    public function __set($name,$value){}
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    } 
    public function getName(){
        return $this->name;
    }
    public function getPhoto(){
        return $this->photo;
    }       
    public function getStartingPoint(){
        return $this->startingpoint;
    }
    public function getEndingpoint(){
        return $this->endingpoint;
    }
    public function getPostalCode(){
        return $this->postalcode;
    }
    public function getCity(){
        return $this->city;
    }
    public function getCountry(){
        return $this->country;
    }
    public function getDescription(){
        return $this->description;
    }
}
?>