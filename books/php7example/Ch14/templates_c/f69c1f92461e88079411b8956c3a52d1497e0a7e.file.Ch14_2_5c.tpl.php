<?php /* Smarty version Smarty-3.1.15, created on 2013-10-30 12:22:16
         compiled from ".\templates\Ch14_2_5c.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186495270f9f8a2dbc7-68391858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69c1f92461e88079411b8956c3a52d1497e0a7e' => 
    array (
      0 => '.\\templates\\Ch14_2_5c.tpl',
      1 => 1383135689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186495270f9f8a2dbc7-68391858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scores' => 0,
    'element' => 0,
    'arr' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5270f9f8c230d2_87547830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270f9f8c230d2_87547830')) {function content_5270f9f8c230d2_87547830($_smarty_tpl) {?><!-- 樣板範例：Ch14_2_5c.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>迴圈控制結構</title>
</head>           
<body>

<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
   <?php echo $_smarty_tpl->tpl_vars['element']->value;?>
<br/>
<?php } ?>
<hr/>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
   <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br/>
<?php } ?>
</body>
</html><?php }} ?>
