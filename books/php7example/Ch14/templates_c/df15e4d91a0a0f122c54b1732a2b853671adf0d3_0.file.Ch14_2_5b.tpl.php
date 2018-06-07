<?php
/* Smarty version 3.1.29, created on 2016-01-27 06:55:34
  from "C:\xampp\htdocs\Ch14\templates\Ch14_2_5b.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a85bd6ba6085_95431518',
  'file_dependency' => 
  array (
    'df15e4d91a0a0f122c54b1732a2b853671adf0d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ch14\\templates\\Ch14_2_5b.tpl',
      1 => 1453874031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a85bd6ba6085_95431518 ($_smarty_tpl) {
?>
<!-- 樣板範例：Ch14_2_5b.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>條件控制結構</title>
</head>       
<body>

<?php if ($_smarty_tpl->tpl_vars['grade']->value >= 60) {?>
   學生成績<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
及格!<br/>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['height']->value > 120) {?>
   身高:<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
購買全票!<br/>
<?php } else { ?>
   身高:<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
購買半票!<br/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grade']->value >= 80) {?>
   學生GPA成績: A(4.0)<br/>
<?php } elseif ($_smarty_tpl->tpl_vars['grade']->value >= 70) {?>
       學生GPA成績: B(3.0)<br/>
    <?php } else { ?>
       學生GPA成績: C(2.0)<br/>
<?php }?>
</body>
</html><?php }
}
