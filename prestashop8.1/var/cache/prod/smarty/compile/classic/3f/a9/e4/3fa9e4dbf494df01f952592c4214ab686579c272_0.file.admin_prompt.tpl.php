<?php
/* Smarty version 4.3.1, created on 2023-10-09 00:09:56
  from 'C:\FAI\GIT\Framework-Interop\prestashop8.1\modules\klaviyopsautomation\views\templates\hook\admin_prompt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65236f045c7225_81241273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fa9e4dbf494df01f952592c4214ab686579c272' => 
    array (
      0 => 'C:\\FAI\\GIT\\Framework-Interop\\prestashop8.1\\modules\\klaviyopsautomation\\views\\templates\\hook\\admin_prompt.tpl',
      1 => 1694703976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65236f045c7225_81241273 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="klaviyops-admin-prompt">
    <div class="klaviyops-admin-prompt-content">
        <div class="klaviyops-admin-prompt-content-inner">
            <div class="klaviyops-admin-prompt-content-logo">
                <img
                    src="<?php echo $_smarty_tpl->tpl_vars['klaviyo_edition_logo']->value;?>
"
                    alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop Automation with Klaviyo'),$_smarty_tpl ) );?>
"
                    height="62"
                    width="200"
                    decoding="async"
                    loading="lazy"
                >
            </div>
            <div class="klaviyops-admin-prompt-content-text">
                <?php if ($_smarty_tpl->tpl_vars['heading_text']->value !== null) {?>
                    <div class="h1"><?php echo $_smarty_tpl->tpl_vars['heading_text']->value;?>
</div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['sub_heading_text']->value !== null) {?>
                    <div class="h2"><?php echo $_smarty_tpl->tpl_vars['sub_heading_text']->value;?>
</div>
                <?php }?>

                <p><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</p>
            </div>
        </div>
        <div class="klaviyops-admin-prompt-content-cta">
            <a href="<?php echo $_smarty_tpl->tpl_vars['klaviyo_link']->value;?>
" class="btn" target="_blank" rel="noopener">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more'),$_smarty_tpl ) );?>

            </a>
            <div class="klaviyops-admin-prompt-content-cta-link-wrapper">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account ?'),$_smarty_tpl ) );?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['klaviyo_module_link']->value;?>
" class="klaviyops-admin-prompt-content-cta-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get started here.'),$_smarty_tpl ) );?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }
}
