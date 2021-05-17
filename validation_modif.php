<?php
 require_once "Autoloader.php";
 Autoloader::register();

if(isset($_POST['prenom'])){

        $error = validateur::checkData($_POST['prenom']);
        
        if(empty($error)){
            $newPrenom = prenom::build_prenom($_POST['prenom'], $_POST['id']);
            if($newPrenom->modifier()){
                header("Location: bienvenue.php?statut=Ok");
                exit();
            } else {
                $errors = "problème de sauvegarde";
            }
        }
    }
    
    if(!empty($error)){
        header("Location: bienvenue.php?statut=errorvalid");
        
    }
    if(!empty($errors)){
        header("Location: bienvenue.php?statut=errormodif");
        var_dump($newPrenom);
        
    }