<?php
/* Smarty version 3.1.39, created on 2021-05-16 14:44:33
  from 'C:\laragon\www\CrudSmarty\templates\To_Do_List.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a12fd1106ec4_76986419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0f998e4f8c265fc34a38b6be5c61588cf31bca' => 
    array (
      0 => 'C:\\laragon\\www\\CrudSmarty\\templates\\To_Do_List.tpl',
      1 => 1621176270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a12fd1106ec4_76986419 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <div id="myDIV" class="header">
        <h2>Liste de prénom</h2>
        <form action='validation_prenom.php'  method='post'>
        <input type="text" id="myInput" name='prenom' value='' placeholder="prénom...">
        <input class='addBtn' value='Ajouter'   type='submit' >
        </form>
    </div>
    

</body>
<?php }
}
