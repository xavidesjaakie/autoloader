<?php

require __DIR__ . '/vendor/autoload.php';

use Xxvan\calculatormetautoload\Classes\Calculator;

$calc = new Calculator();

echo "Optellen: 5 + 7 = " . $calc->add(5, 7) . "<br>";
echo "Optellen: 15 + 3 = " . $calc->add(15, 3) . "<br>";
echo "Optellen: 7 + 92 = " . $calc->add(7, 92) . "<br>";
"<br>; ";
echo "Aftrekken: 44 - 14 = " . $calc->subtract(44, 14) . "<br>";
echo "Aftrekken: 18 - 24 = " . $calc->subtract(18, 24) . "<br>";
echo "Aftrekken: 88 - 41 = " . $calc->subtract(88, 41) . "<br>";
"<br>; ";
echo "Vermenigvuldigen: 6 * 7 = " . $calc->multiply(6, 7) . "<br>";
echo "Vermenigvuldigen: 36 * 8 = " . $calc->multiply(36, 8) . "<br>";
echo "Vermenigvuldigen: 4 * 2 = " . $calc->multiply(4, 2) . "<br>";
"<br>; ";
       echo "Delen: 75 / 7 = " . $calc->divide(75, 7) . "<br>";
           echo "Delen: 20 / 4 = " . $calc->divide(20, 4) . "<br>";
try {
    echo "Delen door nul: 10 / 0 = " . $calc->divide(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Foutmelding: " . $e->getMessage() . "<br>";
}

?>
