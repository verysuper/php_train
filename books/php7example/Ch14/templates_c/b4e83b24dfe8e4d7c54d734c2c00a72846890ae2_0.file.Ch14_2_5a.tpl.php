<?php
/* Smarty version 3.1.29, created on 2016-01-27 06:55:16
  from "C:\xampp\htdocs\Ch14\templates\Ch14_2_5a.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a85bc4258003_64974224',
  'file_dependency' => 
  array (
    'b4e83b24dfe8e4d7c54d734c2c00a72846890ae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ch14\\templates\\Ch14_2_5a.tpl',
      1 => 1453874027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a85bc4258003_64974224 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\Ch14\\Smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\Ch14\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<!-- 樣板範例：Ch14_2_5a.tpl -->
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
</html><?php }
}
