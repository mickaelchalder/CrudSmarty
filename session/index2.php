<!DOCTYPE html>
<?php 
require_once "Autoloader.php";
Autoloader::register();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>

  <h1 class="d-flex justify-content-center">Accueil</h1>
    <br>

    <div class='container-fluid  d-sm-flex justify-content-evenly  '>
        <div class='w-30'>
         <div class='d-flex justify-content-center'>
            <form action='validation.php'  method='post'>
            <h3 >Inscription</h3>
                <fieldset >
                    <div >
                        <label for='mail' >
                            Email :      </label>
                        <div>
                            <input type='text' name='email' id='mail'  size='24' class='textfield' >
                        </div>
                    </div>

                    <div>
                        <label for='password' >
                            Mot de passe :      </label>
                        <div>
                            <input type='password' name='pass' id='password' value='' size='24' class='textfield' >
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset >
                    <input class='btn btn-primary' value='inscription' name='inscription' type='submit' >
                </fieldset>
            </form>
         </div>
        </div>


            <br>


        <div class='w-30'>
         <div class='d-flex justify-content-center'>
            <form action='validation.php'  method='post' >
            <h3>connexion</h3>
                <fieldset >
                    <div>
                        <label for='mail' >
                            Email :      </label>
                        <div>
                            <input type='text' name='email' id='mail'  size='24' class='textfield' >
                        </div>
                    </div>

                    <div>
                        <label for='password' >
                            Mot de passe :      </label>
                        <div>
                            <input type='password' name='pass' id='password' value='' size='24' class='textfield' >
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <input class='btn btn-primary' value='connexion' name='connexion_accueil' type='submit' >
                </fieldset>
            </form>
         </div>
        </div>
    </div>
    
</body>
</html>
