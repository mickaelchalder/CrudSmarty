<?php 
    
   require_once "Autoloader.php";
    Autoloader::register();

    
    if(empty($_GET['id'])){
        header("location: bienvenue.php?problème_id_empty");
        exit;
    }
    $num=intval($_GET['id']);
        


echo"
   <h2>Changer de prénom</h2>
 </div>
 <div class='modal-body'>
    <form action='validation_modif.php' method='post' >
        <label for='prenom'>nouveau Prénom *</label><input type='text' name='prenom' id='prenom' ' ><br>
        
        <input type='hidden' name='id' value='{$num}'>
        <div class='btn-grp'>
            <input type='submit' value='Editer le contact' name='editContact' class='btn'>  </div>
    </form>
 </div>
 <div class='modal-footer'>
   <h3>Merci</h3>
 </div>
</div> 
</div>

</div> ";