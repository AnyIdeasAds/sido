<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 22:31:24
         compiled from "C:\xampp\htdocs\sidonas\admin794v4mu1q\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2445659b04d0c35aa36-72510913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300c3610dcdbe4076bc57a17c11879d922c0b64d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sidonas\\admin794v4mu1q\\themes\\default\\template\\content.tpl',
      1 => 1504690056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2445659b04d0c35aa36-72510913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b04d0c3704b7_45729207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b04d0c3704b7_45729207')) {function content_59b04d0c3704b7_45729207($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
