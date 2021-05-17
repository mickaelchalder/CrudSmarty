<?php
require_once "Autoloader.php";
Autoloader::register();

class database{

    public static function connexion(){
        try{
            return new PDO("mysql:host=localhost;dbname=session", "root", "");
        } catch(PDOException $e){
            return $e->getMessage();
        } 
    }
    public static function connexion_prenom(){
        try{
            return new PDO("mysql:host=localhost;dbname=table_prenom", "root", "");
        } catch(PDOException $e){
            return $e->getMessage();
        } 
    }

    public static function checkBYemail($email){
        $conn = self::connexion();
        try {
            $sql = "SELECT * FROM `membre` WHERE `email` = :email LIMIT 1"; 
            $req = $conn->prepare($sql);
            $req->bindValue(":email", $email);
            $req->execute();
            $membre = $req->fetch(PDO::FETCH_OBJ);
            if($email = $membre){
                return 'ok';
            }
            
        } catch (\Throwable $th) {
            return 'false';
        }
    }
    public static function checkBYpass($pass){
        $conn = self::connexion();
        try {
            $sql = "SELECT * FROM `membre` WHERE `pass` = :pass LIMIT 1"; 
            $req = $conn->prepare($sql);
            $req->bindValue(":pass", $pass);
            $req->execute();
            $membre = $req->fetch(PDO::FETCH_OBJ);
            if($pass = $membre){
                return 'ok';
            }
        } catch (\Throwable $th) {
            return 'false';
        }
    }

   

    
}