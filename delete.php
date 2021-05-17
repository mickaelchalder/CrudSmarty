<?php
    require_once"smarty/libs/Smarty.class.php";
    require_once "Autoloader.php";
    Autoloader::register();

    if(empty($_GET['id'])){
        header("location: bienvenue.php?suppr=id_vide");
        exit;
    }

    $contact = prenom::getById($_GET['id']);

    if($contact === false){
        header("location: bienvenue.php?suppr=problème");
        exit;
    }

    if($contact->supprimer_prenom()){
        header("Location: bienvenue.php?statutsuppr=Ok");
        exit();
    } else {
        header("Location: index.php?suppr=Problème de sauvegarde");
        exit();
    }

?>