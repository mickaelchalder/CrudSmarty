<?php
/* Smarty version 3.1.39, created on 2021-05-12 14:26:42
  from 'C:\laragon\www\CrudSmarty\templates\page_bienvenue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609be5a234ebd0_81491018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df41d7a5251f3c0bd66c354735e0c3547e66a60' => 
    array (
      0 => 'C:\\laragon\\www\\CrudSmarty\\templates\\page_bienvenue.tpl',
      1 => 1620829584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header_log.tpl' => 1,
    'file:templates/To_Do_List.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_609be5a234ebd0_81491018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header_log.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/To_Do_List.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
