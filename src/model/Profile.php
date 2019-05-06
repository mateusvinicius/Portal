<?php

namespace App\Model;


class Profile {

     private $nivel;
     private $name;
     private $sobrenome;
     private $image_profile;
     private $cargo;
     


     /**
      * Get the value of nivel
      */ 
     public function getNivel()
     {
          return $this->nivel;
     }

     /**
      * Set the value of nivel
      *
      * @return  self
      */ 
     public function setNivel($nivel)
     {
          $this->nivel = $nivel;

          return $this;
     }

     /**
      * Get the value of name
      */ 
     public function getName()
     {
          return $this->name;
     }

     /**
      * Set the value of name
      *
      * @return  self
      */ 
     public function setName($name)
     {
          $this->name = $name;

          return $this;
     }

     /**
      * Get the value of sobrenome
      */ 
     public function getSobrenome()
     {
          return $this->sobrenome;
     }

     /**
      * Set the value of sobrenome
      *
      * @return  self
      */ 
     public function setSobrenome($sobrenome)
     {
          $this->sobrenome = $sobrenome;

          return $this;
     }

     /**
      * Get the value of image_profile
      */ 
     public function getImage_profile()
     {
          return $this->image_profile;
     }

     /**
      * Set the value of image_profile
      *
      * @return  self
      */ 
     public function setImage_profile($image_profile)
     {
          $this->image_profile = $image_profile;

          return $this;
     }

     /**
      * Get the value of cargo
      */ 
     public function getCargo()
     {
          return $this->cargo;
     }

     /**
      * Set the value of cargo
      *
      * @return  self
      */ 
     public function setCargo($cargo)
     {
          $this->cargo = $cargo;

          return $this;
     }
}