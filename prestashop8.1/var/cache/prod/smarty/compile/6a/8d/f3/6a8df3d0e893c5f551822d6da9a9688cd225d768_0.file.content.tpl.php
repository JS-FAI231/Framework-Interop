<?php
/* Smarty version 4.3.1, created on 2023-10-05 22:12:32
  from 'C:\FAI\GIT\Framework-Interop\prestashop8.1\adminJorge\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651f5f002845e2_96117189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8df3d0e893c5f551822d6da9a9688cd225d768' => 
    array (
      0 => 'C:\\FAI\\GIT\\Framework-Interop\\prestashop8.1\\adminJorge\\themes\\new-theme\\template\\content.tpl',
      1 => 1694703976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651f5f002845e2_96117189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
