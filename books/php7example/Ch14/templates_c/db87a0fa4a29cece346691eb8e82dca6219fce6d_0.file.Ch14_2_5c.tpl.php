<?php
/* Smarty version 3.1.29, created on 2016-01-27 06:55:43
  from "C:\xampp\htdocs\Ch14\templates\Ch14_2_5c.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a85bdf3e5a87_38568196',
  'file_dependency' => 
  array (
    'db87a0fa4a29cece346691eb8e82dca6219fce6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ch14\\templates\\Ch14_2_5c.tpl',
      1 => 1453874034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a85bdf3e5a87_38568196 ($_smarty_tpl) {
?>
<!-- 樣板範例：Ch14_2_5c.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>迴圈控制結構</title>
</head>           
<body>

<?php
$_from = $_smarty_tpl->tpl_vars['scores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_element_0_saved_item = isset($_smarty_tpl->tpl_vars['element']) ? $_smarty_tpl->tpl_vars['element'] : false;
$_smarty_tpl->tpl_vars['element'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['element']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
$__foreach_element_0_saved_local_item = $_smarty_tpl->tpl_vars['element'];
?>
   <?php echo $_smarty_tpl->tpl_vars['element']->value;?>
<br/>
<?php
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_0_saved_local_item;
}
if ($__foreach_element_0_saved_item) {
$_smarty_tpl->tpl_vars['element'] = $__foreach_element_0_saved_item;
}
?>
<hr/>

<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
   <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br/>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
if ($__foreach_item_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_1_saved_key;
}
?>
</body>
</html><?php }
}
