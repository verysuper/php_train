<!-- 樣板範例：Ch14_2_5b.tpl -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>條件控制結構</title>
</head>       
<body>
{* 是否選 *}
{if $grade >= 60}
   學生成績{$grade}及格!<br/>
{/if} 
{* 二選一 *}
{if $height > 120}
   身高:{$height}購買全票!<br/>
{else}
   身高:{$height}購買半票!<br/>
{/if}
{* 多選一 *}
{if $grade >= 80}
   學生GPA成績: A(4.0)<br/>
{elseif $grade >= 70}
       學生GPA成績: B(3.0)<br/>
    {else}
       學生GPA成績: C(2.0)<br/>
{/if}
</body>
</html>