<?php
require_once "Autoloader.php";
Autoloader::register();

class validateur{

            public static function checkData($data){
                $error = [];

                if(!empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                    $error[] = "Le mail est mal formé";

                    if(isset($data['id'])){
                        if(empty($data['id'])){
                            $error[] = "id fausse";
                        }
                    }
                    return $error;
                }
            }
            
            public static function checkstr($str){
                if(empty($str)){
                    return "chaine vide";
                }else if(strlen($str) < 3){
                    return "chaine trop courte";
                }else if(strlen($str) > 30){
                    return "chaine trop longue";
                }else if(!preg_match("/^[a-zA-Z-éàçèùïî]*$/", $str)){
                    return "Caractère interdit dans la chaine";
                } 
                return "";
            }
           /*  public static function checkForcePwd($str){
               
                if(strlen($str) < 6){
                    return "mdp trop court";
                }
                $maj = false;
                $min = false;
                $num = false;
                $spe = false;
        
                $strToArray = str_split($str);
                foreach($strToArray as $lettre){
                    if(is_numeric($lettre)){
                        $num = true;
                    }
                    if(preg_match("/^[a-z]*$/", $lettre)){
                        $min = true;
                    }
                    if(preg_match("/^[A-Z]*$/", $lettre)){
                        $maj = true;
                    }
                    if(!preg_match("/^[a-zA-Z0-9]*$/", $lettre)){
                        $spe = true;
                    }
                }
        
                if(!$maj || !$min || !$num || !$spe){
                    return "le mdp ne respecte pas les règles suivantes : <br>- au moins une majuscule<br>-au moins une minuscule<br>-au moins un chiffre<br>-au moins un caractère spécial<br>-au moins 6 caractères";
                }
                return "";
            } */

}

/*
                au moins une majuscule
                au moins une minuscule
                au moins un chiffre
                au moins un caractère spécial
                au moins 6 caractères
                */