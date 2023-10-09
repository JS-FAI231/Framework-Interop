<?php
/* Smarty version 4.3.1, created on 2023-10-09 00:12:29
  from 'C:\FAI\GIT\Framework-Interop\prestashop8.1\adminJorge\themes\default\template\controllers\images\modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65236f9de8b198_31235711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ca92421e77edf13b20a4b9e4929a425eb23cc9' => 
    array (
      0 => 'C:\\FAI\\GIT\\Framework-Interop\\prestashop8.1\\adminJorge\\themes\\default\\template\\controllers\\images\\modal_regenerate_thumbnails.tpl',
      1 => 1694703976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65236f9de8b198_31235711 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
