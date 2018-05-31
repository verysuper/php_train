<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

// try {
//     echo inverse(5) . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// } finally {
//     echo "First finally.\n";
// }
$a="";
try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    $a=$e->getMessage();
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
    echo $a;
}

// Continue execution
echo "Hello World\n";
?>