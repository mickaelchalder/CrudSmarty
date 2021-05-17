<?php 
require_once "Autoloader.php";
Autoloader::register();

$errors = [];

if(!empty($_POST["prenom"])){
    //si un des champs est vide alors retour à la  page
    

   

    $errprenom = Validateur::checkstr($_POST['prenom']);
    if(!empty($errprenom)) {$errors["prenom"] = $errprenom;}

    
    

    

    if (!empty($errors)) { 
        header("location:bienvenue.php?verif=1");
        exit;
    }else{

            session_start(); //initialisation de session obligatoire pour y avoir accès
    
            $_SESSION['client_prenom'] = strtoupper($_POST['prenom']);
            


            
            $_SESSION['prenom']=prenom::build_prenom($_SESSION['client_prenom']);
            var_dump($_SESSION['prenom']);    

            if($_SESSION['prenom']->creer_prenom()){
                header("Location: bienvenue.php?statut=Ok");
                exit();
            } else {
                echo "problème de sauvegarde";
                var_dump($_SESSION['prenom']);
            }
            exit;

         
    }
}else{
    header("location:bienvenue.php");
    exit;
} 
