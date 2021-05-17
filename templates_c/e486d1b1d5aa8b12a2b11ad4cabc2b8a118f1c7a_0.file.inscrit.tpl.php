<?php
/* Smarty version 3.1.39, created on 2021-05-12 13:39:23
  from 'C:\laragon\www\CrudSmarty\templates\inscrit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609bda8b7857d3_37329636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e486d1b1d5aa8b12a2b11ad4cabc2b8a118f1c7a' => 
    array (
      0 => 'C:\\laragon\\www\\CrudSmarty\\templates\\inscrit.tpl',
      1 => 1620825367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_609bda8b7857d3_37329636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
