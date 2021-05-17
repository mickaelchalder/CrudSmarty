<?php
/* Smarty version 3.1.39, created on 2021-05-12 12:55:15
  from 'C:\laragon\www\CrudSmarty\templates\body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609bd03322fa39_95924466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c92cca2c97c171dcd4df100cca1bfd0e071a363' => 
    array (
      0 => 'C:\\laragon\\www\\CrudSmarty\\templates\\body.tpl',
      1 => 1620824074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609bd03322fa39_95924466 (Smarty_Internal_Template $_smarty_tpl) {
?><body>

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
    
</body><?php }
}
