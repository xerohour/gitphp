<?php /* Smarty version Smarty-3.1.11, created on 2014-02-28 22:50:59
         compiled from ".\templates\projectindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29586531112d31951c7-91833744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f9becb069a7b9ad9e08c416aa7d0d7e8d1daaa' => 
    array (
      0 => '.\\templates\\projectindex.tpl',
      1 => 1387996648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29586531112d31951c7-91833744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projectlist' => 0,
    'proj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_531112d37cb1c5_77406859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531112d37cb1c5_77406859')) {function content_531112d37cb1c5_77406859($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['proj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projectlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proj']->key => $_smarty_tpl->tpl_vars['proj']->value){
$_smarty_tpl->tpl_vars['proj']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['proj']->value->GetProject();?>

<?php } ?>
<?php }} ?>