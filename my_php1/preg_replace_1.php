<?php
    $string = "This is a test. That is another test.";
    echo preg_replace ("/ is/", "  was", $string)."<P>";
    echo preg_replace ("/ is/", "<B> is</B>", $string)."<P>";
    echo preg_replace ("/test/", "<a href=http://www.google.tw>test</a>", $string);
    echo "<br>";
    $string ="測試用文字";
    echo "**********$string**********<p>";
    $string = preg_replace ("/^/", "<BR>", $string);
    $string = preg_replace ("/$/", "<BR>", $string);
    echo "==========$string==========";
    echo "<br>";
    // $num = 49;
    // $string = "This string has four words. <BR>";
    // $string = ereg_replace ('/four/', $num, $string);
    // echo $string;
    $num = '49';
    $string = "This string has four words";
    $string = preg_replace ('/four/', $num, $string);
    echo $string;
    echo "<br>";
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
        changing the deprecated ereg_replace() function to preg_replace()
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