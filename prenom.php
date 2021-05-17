<?php

require_once "Autoloader.php";
Autoloader::register();

class prenom{
    public $id;
    public $prenom;


    public static function build_prenom($prenom,$id=''){
        
        $obj = new static;
        
        $obj->id = $id;
        $obj->prenom = $prenom;

        return $obj;
    }

    public function __get($key){  // permet l'appel d'une propriété objet à l'aide de id 
        return $this->$key;
    }
    public function __set($key, $value){
        $this->$key = $value;
    }

    public static function getById($id){
        if(is_numeric($id)){ // id doit être numérique pour être utiliser
            $conn = database::connexion_prenom();

            $sql = "SELECT * FROM `prenom` WHERE `id`= ? LIMIT 1"; // LIMITE 1 c'est une ligne de donnée 
            $req = $conn->prepare($sql);
            $req->setFetchMode(PDO::FETCH_CLASS, 'prenom'); // fetch_class construit un objet avec les donnée récupéré
            $req->execute([$id]); // remplace le ? par le id qui est dans un tableau ps: si plusieur ? alors plusieurs variable qui se suivent dans le tableau
            return $req->fetch/* = prends */();
        } 

        return false;
        
    }

    public static function afficherTous(){
        $conn = database::connexion_prenom();

        $sql = "SELECT * FROM `prenom`";
        $req = $conn->query($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, 'prenom'/* c'est la table */);
        return $req->fetchAll/* = prends tous */();
    }

    public function creer_prenom(){
        $conn = database::connexion_prenom();

        $sql = "INSERT INTO `prenom` (prenom) VALUES (:prenom);";
        $req = $conn->prepare($sql);
        $req->bindValue(":prenom", $this->prenom);

        return $req->execute();

    }
    
    public function supprimer_prenom(){
        $conn = database::connexion_prenom();
    
        $sql = "DELETE FROM `prenom` WHERE id = :id ";
        $req = $conn->prepare($sql);
        $req->bindValue(":id", $this->id);
    
        return $req->execute();
    }

    public function modifier(){
        $conn = database::connexion_prenom();

        $sql = "UPDATE `prenom` SET `prenom` = :prenom WHERE `id` = :id";
        $req = $conn->prepare($sql);
        $req->bindValue(":prenom", $this->prenom);
        $req->bindValue(":id", $this->id);
        return $req->execute();
    }
        
}