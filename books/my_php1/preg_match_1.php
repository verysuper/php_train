<?php
    $date="2003-01-31";
    if (preg_match ("/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/", $date, $regs)) {
        echo "$regs[3] / $regs[2] / $regs[1] <p>";
        echo "$regs[0] <p>";
        echo "$regs[1]年~ $regs[2]月 $regs[3]日";
    } else {
        echo "不合法的日期格式:$date";
    }
    //__________________________________________________
    $string="I am abc";
    if (preg_match ("/abc/", $string)) echo "'abc' is True <p>";                   
    if (preg_match ("/^abc/", $string)) echo "'^abc' is True <p>";//檢查開始字串                   
    if (preg_match ("/abc$/", $string)) echo "'abc$' is True";//檢查結尾字串
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        changing the deprecated ereg() function to preg_match()
        https://github.com/mitcho/hookpress/pull/15

        When adding a Webhook, no field items are displaying after selecting actions or filters .

        The following error is logged:

        PHP Fatal error: Uncaught Error: Call to undefined function ereg() in /path/wp-content/plugins/hookpress/services.php:13

        This was this fix:
        // changing the deprecated ereg() function to preg_match()
        from: if (ereg('[A-Z]+',$arg))
        to: if (preg_match('/[A-Z]+/',$arg))
    </pre>
</body>
</html>