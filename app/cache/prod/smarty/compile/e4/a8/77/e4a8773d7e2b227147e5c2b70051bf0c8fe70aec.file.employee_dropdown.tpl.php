<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 23:41:39
         compiled from "C:\xampp\htdocs\sidonas\admin794v4mu1q\themes\new-theme\template\components\layout\employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2988759b05d83b5e940-49640142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4a8773d7e2b227147e5c2b70051bf0c8fe70aec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sidonas\\admin794v4mu1q\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1504690058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2988759b05d83b5e940-49640142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b05d83bb63a7_75404487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b05d83bb63a7_75404487')) {function content_59b05d83bb63a7_75404487($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="img-circle person" data-toggle="dropdown">
      <i class="material-icons">person</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right p-a-1 m-r-2">
    <div class="text-xs-center employee_avatar">
      <img class="avatar img-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <hr>
    <a class="employee-link profile-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee">
      <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

    </a>
    <a class="employee-link m-t-1" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
      <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

    </a>
  </div>
</div>
<?php }} ?>