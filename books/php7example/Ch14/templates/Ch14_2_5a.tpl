<!-- 樣板範例：Ch14_2_5a.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>變數修飾子</title>
</head>      
<body>
{$name|capitalize}<br/>
{$msg|count_words}<br/>
{$var|default:"陳允傑"}<br/>
{$body|strip_tags}<br/>
{$str|truncate:7}<br/>
</body>
</html>