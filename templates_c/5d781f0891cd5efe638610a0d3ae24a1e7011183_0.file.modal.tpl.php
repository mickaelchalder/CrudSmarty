<?php
/* Smarty version 3.1.39, created on 2021-05-16 09:46:58
  from 'C:\laragon\www\CrudSmarty\templates\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0ea12ef3a89_42183304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d781f0891cd5efe638610a0d3ae24a1e7011183' => 
    array (
      0 => 'C:\\laragon\\www\\CrudSmarty\\templates\\modal.tpl',
      1 => 1621157777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a0ea12ef3a89_42183304 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- The Modal -->
<div id="myModal" class="modal">
 
<!-- Modal content -->
<div class="modal-content">
 <div class="modal-header">
   <span class="close">&times;</span>
   <h2>Changer de prénom</h2>
 </div>
 <div class="modal-body">
    <form action="modifier.php" method="post" class="form">
        <label for="prenom">Prénom du contact *</label><input type="text" name="prenom" id="prenom" " ><br>
        
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value->id;?>
">
        <div class="btn-grp">
            <input type="submit" value="Editer le contact" name="editContact" class="btn"> <input type="reset" value="Reset" class="btn">
        </div>
    </form>
 </div>
 <div class="modal-footer">
   <h3>Merci</h3>
 </div>
</div> 
</div>

</div> <?php }
}
