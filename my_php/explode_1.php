<?php
    $date = "04/30/1973";
    list ($month, $day, $year) = explode('/', $date);
    echo "月: $month; 日:$day; 年: $year<br>\n";
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
        changing the deprecated split() function to explode()
    </pre>
</body>
</html>