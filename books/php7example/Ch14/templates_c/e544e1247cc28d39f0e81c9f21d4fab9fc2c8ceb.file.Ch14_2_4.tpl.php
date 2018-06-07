<?php /* Smarty version Smarty-3.1.15, created on 2013-10-30 12:16:18
         compiled from ".\templates\Ch14_2_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213305270f89207fcf1-22035788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e544e1247cc28d39f0e81c9f21d4fab9fc2c8ceb' => 
    array (
      0 => '.\\templates\\Ch14_2_4.tpl',
      1 => 1383135305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213305270f89207fcf1-22035788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5270f8921a8497_92734080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270f8921a8497_92734080')) {function content_5270f8921a8497_92734080($_smarty_tpl) {?><!-- 樣板範例：Ch14_2_4.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>      
<body>
<p>
歡迎使用者[
<font color="red"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]</font>進入PHP網站
</p>
</body>
</html><?php }} ?>
