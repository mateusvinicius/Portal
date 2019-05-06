<?php

namespace App\Config;

class DB {

    private $conect;
    private $host = 'mysql:host=localhost;dbname=test';
    private $users ='root';
    private $password = '';





    function __contruct(){
        return $this->conect;
    }


    public function conect(){
        try{
            $this->conect = new \PDO($host, $user, $pass);
            return $conect;
        }catch(\PDOExeption $e){
            return $e;
        }
    }







}

