<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 22:31:25
         compiled from "C:\xampp\htdocs\sidonas\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2355159b04d0d3183e1-17513936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29f6b26563e2cbaae67594cf87a62ece1073c74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sidonas\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1504690078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355159b04d0d3183e1-17513936',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b04d0d323238_08111103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b04d0d323238_08111103')) {function content_59b04d0d323238_08111103($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
