<?php

require_once "Autoloader.php";
Autoloader::register();

session_start();

/* echo"<pre>";
var_dump($_SESSION['client_email']);
var_dump($_SESSION['client_password']);
echo"<pre>"; */


echo "
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>

        <h1 class='m-5 p-3'>bravo vous êtes inscrit !</h1>
        <p class='m-5 '>connectez-vous.</p>
            <div class='m-5 '>
                <form action='validation.php'  method='post'>
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
                        </div>
                        <div>
                            <input type='password' name='pass' id='password' value='' size='24' class='textfield' >
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                            <input class='btn btn-primary' value='connexion' name='connexion_inscrit' type='submit' >
                    </fieldset>
                </form>
            </div>
";


