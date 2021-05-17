<?php
require_once"smarty/libs/Smarty.class.php";
require_once "Autoloader.php";
Autoloader::register();


// create object
$smarty = new Smarty;
if( ! isset( $verif ) ) $verif = 0;
if(!empty($_GET["verif"]) && $_GET["verif"] == 1){
    if (isset ($verif)) $verif = 1;
}
if ($verif==1) {
    $smarty->display('page_bienvenuehack.tpl');
}

$smarty->display('templates/header_log.tpl');

$smarty->display('templates/To_Do_List.tpl');

$prenoms = prenom::afficherTous(); 
foreach($prenoms as $prenom) {

    echo
        strtoupper($prenom->prenom);
    echo    "<a  href='delete.php?id={$prenom->id}'><i class=' button fas fa-trash'></i></a>";
    echo    " <a href='modifier.php?id={$prenom->id}'><i class='button fas fa-edit'></i></a>";
    echo "<hr>"; 

} 


    

$smarty->display('templates/footer.tpl');


