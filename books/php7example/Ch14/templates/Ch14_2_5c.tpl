<!-- 樣板範例：Ch14_2_5c.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>迴圈控制結構</title>
</head>           
<body>
{* foreach函數顯示索引陣列 *}
{foreach from=$scores item=element}
   {$element}<br/>
{/foreach}
<hr/>
{* foreach函數顯示結合陣列 *}
{foreach from=$arr key=key item=item}
   {$key}:{$item}<br/>
{/foreach}
</body>
</html>