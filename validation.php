<?php 
require_once "Autoloader.php";
Autoloader::register();

$errors = [];

if((!empty($_POST["pass"])) and (!empty($_POST["email"])) ){
    //si un des champs est vide alors retour à la  page
    

   

    $errEmail = Validateur::checkData($_POST['email']);
    if(!empty($errEmail)) {$errors["email"] = $errEmail;}

    
    

    

    if (!empty($errors)) { //vérifie si le tab errors est bien vide avant de continuer
        echo "veillez vérifier votre formulaire";
        header("location:index1.php");
        exit;
    }else{
        if (isset($_POST['inscription'])) {

            session_start(); //initialisation de session obligatoire pour y avoir accès
    
            $_SESSION['client_email'] = $_POST['email'];
            
            $_SESSION['client_password'] = $_POST['pass'];

            
            $_SESSION['user']=membre::build($_SESSION['client_email'],$_SESSION['client_password']);
            var_dump($_SESSION['user']);    

            if($_SESSION['user']->creer()){
                header("Location: inscrit.php?statut=Ok");
                exit();
            } else {
                echo "problème de sauvegarde";
                var_dump($_SESSION['user']);
            }
            exit;

        }elseif(isset($_POST['connexion_inscrit'])){

            session_start(); 
            
            if ($_SESSION['client_email']=== $_POST['email'] and $_SESSION['client_password'] === $_POST['pass']) {
                
                if ($phrase1 = database::checkBYemail($_SESSION['client_email'])) {
                    header("location:bienvenue.php") ;
                    exit;
               }
                
            }else{
                echo 'probleme connexion';
                header("location:index1.php") ;
            }
            

        }elseif(isset($_POST['connexion_accueil'])){
            session_start(); 
    
            $_SESSION['client_email'] = $_POST['email'];
            
            $_SESSION['client_pass'] = $_POST['pass'];
            
           if ($phrase1 = database::checkBYemail($_SESSION['client_email'])) {
                header("location:bienvenue.php") ;
                exit;
           }else{
            echo 'probleme connexion';
          }  
            
            
        

        }else{
            echo "pas ok";
            echo "<br>";
            session_start();
            var_dump($_SESSION['client_email']);
            var_dump($_SESSION['client_password']);
            var_dump($_POST['inscription']);

        } 
         
    }
}else{
    header("location:index1.php");
    exit;
} 

/* 
if (!empty($_POST["email"])){
    $v = $_POST["email"];
    print_r($v);
}else{
    echo "faux";
} */

 
//echo "<pre>";
//var_dump($client);
//echo "</pre> "; 
