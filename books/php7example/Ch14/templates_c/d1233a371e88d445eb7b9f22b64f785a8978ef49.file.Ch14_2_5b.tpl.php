<?php /* Smarty version Smarty-3.1.15, created on 2013-10-30 12:22:11
         compiled from ".\templates\Ch14_2_5b.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59205270f9f3982116-58856949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1233a371e88d445eb7b9f22b64f785a8978ef49' => 
    array (
      0 => '.\\templates\\Ch14_2_5b.tpl',
      1 => 1383135708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59205270f9f3982116-58856949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grade' => 0,
    'height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5270f9f3b537e3_66371028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270f9f3b537e3_66371028')) {function content_5270f9f3b537e3_66371028($_smarty_tpl) {?><!-- 樣板範例：Ch14_2_5b.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>條件控制結構</title>
</head>       
<body>

<?php if ($_smarty_tpl->tpl_vars['grade']->value>=60) {?>
   學生成績<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
及格!<br/>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['height']->value>120) {?>
   身高:<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
購買全票!<br/>
<?php } else { ?>
   身高:<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
購買半票!<br/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grade']->value>=80) {?>
   學生GPA成績: A(4.0)<br/>
<?php } elseif ($_smarty_tpl->tpl_vars['grade']->value>=70) {?>
       學生GPA成績: B(3.0)<br/>
    <?php } else { ?>
       學生GPA成績: C(2.0)<br/>
<?php }?>
</body>
</html><?php }} ?>
