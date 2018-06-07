<?php /* Smarty version Smarty-3.1.15, created on 2013-10-30 12:22:05
         compiled from ".\templates\Ch14_2_5a.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97635270f9ed14e5b2-44641207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf8ed767a35aa5c4a3c0461b4809052c93c0356' => 
    array (
      0 => '.\\templates\\Ch14_2_5a.tpl',
      1 => 1383135632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97635270f9ed14e5b2-44641207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'msg' => 0,
    'var' => 0,
    'body' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5270f9ed2d0745_35383413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270f9ed2d0745_35383413')) {function content_5270f9ed2d0745_35383413($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\Ch14\\Smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\Ch14\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><!-- 樣板範例：Ch14_2_5a.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>變數修飾子</title>
</head>      
<body>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
<br/>
<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['msg']->value, $tmp);?>
<br/>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['var']->value)===null||$tmp==='' ? "陳允傑" : $tmp);?>
<br/>
<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['body']->value);?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str']->value,7);?>
<br/>
</body>
</html><?php }} ?>
