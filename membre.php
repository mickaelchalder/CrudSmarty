<?php

require_once "Autoloader.php";
Autoloader::register();

class membre{
    public $email;
    public $pass;

    public static function build($email, $password){
        
        $obj = new static;
     
        $obj->email = $email;
        $obj->pass = $password;
        return $obj;
    }

    public function __get($key){  // permet l'appel d'une propriété objet à l'aide de id 
        return $this->$key;
    }
    public function __set($key, $value){
        $this->$key = $value;
    }

    public function creer(){
        $conn = database::connexion();

        $sql = "INSERT INTO `membre` ( email, pass) VALUES (:email, :pass);";
        $req = $conn->prepare($sql);
        $req->bindValue(":email", $this->email);
        $req->bindValue(":pass", $this->pass);

        return $req->execute();

        // $sql = "INSERT INTO `contact` (nom, prenom, mail, tel, adresse, cp, ville) VALUES (?, ?, ?, ?, ?, ?, ?);";
        // $req = $conn->prepare($sql);
        // return $req->execute([$this->nom, $this->prenom, $this->mail, $this->tel, $this->adresse, $this->cp, $this->ville]);
    }
   

}