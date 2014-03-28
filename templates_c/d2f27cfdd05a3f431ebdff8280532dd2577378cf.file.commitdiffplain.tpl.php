<?php /* Smarty version Smarty-3.1.11, created on 2014-02-28 22:53:41
         compiled from ".\templates\commitdiffplain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15848531113756aacb1-19497799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f27cfdd05a3f431ebdff8280532dd2577378cf' => 
    array (
      0 => '.\\templates\\commitdiffplain.tpl',
      1 => 1387996648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15848531113756aacb1-19497799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'commit' => 0,
    'tag' => 0,
    'project' => 0,
    'line' => 0,
    'treediff' => 0,
    'filediff' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_531113759046b6_72951562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531113759046b6_72951562')) {function content_531113759046b6_72951562($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Users\\jcstin02\\Desktop\\local\\HTML.PHP\\htdocs\\gitphp\\lib\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_geturl')) include 'C:\\Users\\jcstin02\\Desktop\\local\\HTML.PHP\\htdocs\\gitphp/include/smartyplugins\\function.geturl.php';
?>
From: <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthor();?>

Date: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%a, %d %b %Y %H:%M:%S %z");?>

Subject: <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetTitle();?>

<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable($_smarty_tpl->tpl_vars['commit']->value->GetContainingTag(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['tag']->value){?>
X-Git-Tag: <?php echo $_smarty_tpl->tpl_vars['tag']->value->GetName();?>

<?php }?>
X-Git-Url: <?php echo smarty_function_geturl(array('escape'=>false,'fullurl'=>true,'project'=>$_smarty_tpl->tpl_vars['project']->value,'action'=>'commitdiff','hash'=>$_smarty_tpl->tpl_vars['commit']->value),$_smarty_tpl);?>

---
<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetComment(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['line']->value;?>

<?php } ?>
---


<?php  $_smarty_tpl->tpl_vars['filediff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filediff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['treediff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filediff']->key => $_smarty_tpl->tpl_vars['filediff']->value){
$_smarty_tpl->tpl_vars['filediff']->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['filediff']->value->IsBinary()){?>
<?php echo $_smarty_tpl->tpl_vars['filediff']->value->GetDiff();?>

<?php }?>
<?php } ?>
<?php }} ?>