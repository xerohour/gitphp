<?php /* Smarty version Smarty-3.1.11, created on 2014-02-28 22:51:03
         compiled from ".\templates\opml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24931531112d760b692-54331744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f3a3bf2bba017a3749cf19973ae20d944bd8d3' => 
    array (
      0 => '.\\templates\\opml.tpl',
      1 => 1387996648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24931531112d760b692-54331744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'projectlist' => 0,
    'proj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_531112d7841df2_06766318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531112d7841df2_06766318')) {function content_531112d7841df2_06766318($_smarty_tpl) {?><?php if (!is_callable('smarty_function_geturl')) include 'C:\\Users\\jcstin02\\Desktop\\local\\HTML.PHP\\htdocs\\gitphp/include/smartyplugins\\function.geturl.php';
?>
<?php echo '<?xml';?> version="1.0" encoding="utf-8"<?php echo '?>';?>

<opml version="1.0">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 OPML Export</title>
  </head>
  <body>
    <outline text="git Atom feeds">

      <?php  $_smarty_tpl->tpl_vars['proj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projectlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proj']->key => $_smarty_tpl->tpl_vars['proj']->value){
$_smarty_tpl->tpl_vars['proj']->_loop = true;
?>
      <outline type="rss" text="<?php echo $_smarty_tpl->tpl_vars['proj']->value->GetProject();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['proj']->value->GetProject(), ENT_QUOTES, 'UTF-8', true);?>
" xmlUrl="<?php echo smarty_function_geturl(array('fullurl'=>true,'project'=>$_smarty_tpl->tpl_vars['proj']->value,'action'=>'atom'),$_smarty_tpl);?>
" htmlUrl="<?php echo smarty_function_geturl(array('fullurl'=>true,'project'=>$_smarty_tpl->tpl_vars['proj']->value),$_smarty_tpl);?>
" />

      <?php } ?>
    </outline>
  </body>
</opml>
<?php }} ?>