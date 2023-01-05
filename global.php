<?php
echo "--This is Local /Global variables -- <br>";

$a = 5;
function printvalue(){
    global $a, $b;
    $a = 10;
    $b = 15;
    echo "<br> The value of variable $a and $b <br>";
}

echo $a;
printvalue();
echo "<br>";

echo "value of all gloval var ";
 echo var_dump($GLOBALS["a"]);

echo var_dump($GLOBALS["b"]);



?>