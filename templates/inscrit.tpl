{include file="templates/header.tpl" }
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
            {include file="templates/footer.tpl" }