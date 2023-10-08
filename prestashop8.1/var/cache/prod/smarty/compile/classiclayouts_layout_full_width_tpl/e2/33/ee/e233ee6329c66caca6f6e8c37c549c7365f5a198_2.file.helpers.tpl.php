<?php
/* Smarty version 4.3.1, created on 2023-10-05 22:14:17
  from 'C:\FAI\GIT\Framework-Interop\prestashop8.1\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651f5f695abca4_01257056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e233ee6329c66caca6f6e8c37c549c7365f5a198' => 
    array (
      0 => 'C:\\FAI\\GIT\\Framework-Interop\\prestashop8.1\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651f5f695abca4_01257056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\FAI\\GIT\\Framework-Interop\\prestashop8.1\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\e2\\33\\ee\\e233ee6329c66caca6f6e8c37c549c7365f5a198_2.file.helpers.tpl.php',
    'uid' => 'e233ee6329c66caca6f6e8c37c549c7365f5a198',
    'call_name' => 'smarty_template_function_renderLogo_767720849651f5f6958eec0_32763559',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_767720849651f5f6958eec0_32763559 */
if (!function_exists('smarty_template_function_renderLogo_767720849651f5f6958eec0_32763559')) {
function smarty_template_function_renderLogo_767720849651f5f6958eec0_32763559(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_767720849651f5f6958eec0_32763559 */
}
