<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 22:31:25
         compiled from "C:\xampp\htdocs\sidonas\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3260159b04d0d29e889-44937661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38bcc04034098807d344b6dbcc53dce5bfad117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sidonas\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1504690078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3260159b04d0d29e889-44937661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b04d0d2c5962_71227590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b04d0d2c5962_71227590')) {function content_59b04d0d2c5962_71227590($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
