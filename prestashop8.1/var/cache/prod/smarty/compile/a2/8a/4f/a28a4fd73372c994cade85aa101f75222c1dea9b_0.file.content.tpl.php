<?php
/* Smarty version 4.3.1, created on 2023-10-09 00:03:11
  from 'C:\FAI\GIT\Framework-Interop\prestashop8.1\adminJorge\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65236d6fad5c81_37690616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a28a4fd73372c994cade85aa101f75222c1dea9b' => 
    array (
      0 => 'C:\\FAI\\GIT\\Framework-Interop\\prestashop8.1\\adminJorge\\themes\\default\\template\\content.tpl',
      1 => 1694703976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65236d6fad5c81_37690616 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
