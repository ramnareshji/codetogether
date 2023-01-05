<?php
echo "--This is multidimensional Array-- <br>";

$badalist = array(
    array(1, 2, 3),
    array(4, 5, 6,),
    array(7, 8, 9)
);

for ($i=0; $i < count($badalist); $i++) {
    for ($j=0; $j<count($badalist[$i]); $j++) {

        echo $badalist[$i][$j];
        echo " ";
    }
    echo "<br>";
   
}







?>