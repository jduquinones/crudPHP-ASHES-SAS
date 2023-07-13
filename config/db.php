<?php

class db{
    private $hots="localhost";
    private $dbname="ashes";
    private $user="root";
    private $password="12345";

    public function conexion(){
        try {
            $PDO = new PDO("mysql:host=".$this->hots.";dbname=".$this->dbname,$this->user,$this->password);
            return $PDO;
        } catch (PDOException $th) {
            return $th->getMessage();
        }
    }
}