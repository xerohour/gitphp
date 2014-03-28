<?php /* Smarty version Smarty-3.1.11, created on 2014-02-19 23:34:20
         compiled from ".\templates\committip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2510553053f7c48cb05-85250905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae347e002a13020a470308602160708e9ace18c' => 
    array (
      0 => '.\\templates\\committip.tpl',
      1 => 1387996648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2510553053f7c48cb05-85250905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'commit' => 0,
    'line' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53053f7c557d59_88930212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53053f7c557d59_88930212')) {function content_53053f7c557d59_88930212($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\\Users\\jcstin02\\xampp\\htdocs\\gitphp/include/smartyplugins\\block.t.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\Users\\jcstin02\\xampp\\htdocs\\gitphp\\lib\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetAuthorName();?>
 (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetAuthorEpoch(),"%Y-%m-%d %H:%M:%S");?>
</time>)
<br />
<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
committer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['commit']->value->GetCommitterName();?>
 (<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterEpoch(),"%Y-%m-%dT%H:%M:%S+00:00");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commit']->value->GetCommitterEpoch(),"%Y-%m-%d %H:%M:%S");?>
</time>)
<br /><br />
<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commit']->value->GetComment(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
<?php if (strncasecmp(trim($_smarty_tpl->tpl_vars['line']->value),'Signed-off-by:',14)==0){?>
<span class="signedOffBy"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value, ENT_QUOTES, 'UTF-8', true);?>

<?php }?>
<br />
<?php } ?>
</div>
<?php }} ?>