<?php


$name = "naresh \n ";
$lname = "kuri";

echo "$name  $lname <br>";
echo "$name is a good boy. His surname is $lname <br>";

echo "what are data types example ? <br>" ;
echo " string , integer ,float , boolean , null ,object <br>";
echo " Integer is a non- decimal number. <br>";
echo "FLoat is a decimal type number.<br>";
echo " Boolean can be true or false.<br>";


$y = true;
echo var_dump($y);

echo "<br> Array is used to store more values in a single string.<Br>";

$arrraylist = array("naresh", "ram", "Ramnm","narem");
echo var_dump($arrraylist);
echo "<br>";
echo $arrraylist[0];
echo "<br>";
echo $arrraylist[1];
echo "<br>";
echo $arrraylist[2];
echo "<br>";

echo "null is used to print nothing<br>";

$a = null;

echo $a;  // nothing is printed. 

echo var_dump($a);
echo "<br>";

echo "To find the length of string <br>";

$q = " <br> Ramnaresh";
echo $q;
echo "<br>";
echo "The length of " . " my string is " . strlen($q) ;
echo ". <br>";
echo " . is used to add two string";
echo ". <br>";

$w = "ramnaresh is a good boy";
echo "<br>";
echo $w  ."<br> str_word_count is used to count words. <br> which is".  str_word_count($w);
echo "<br>";

echo "<br> To reverse the sting <br>" . "echo strrev($w) <br>";
echo strrev($w);
echo "<br>";

echo "<br> To replace something <br>";
echo str_replace("good", "bad", $w);
echo "<br>";

echo "<br> To repeat something <br>";
echo str_repeat($w, 3);
echo "<br>";

echo "<pre>";
echo trim("  jesa likhoge wesa dikhega. space bagera  ");
echo "</pre>";

echo "<pre>";
echo rtrim("      jesa likhoge wesa dikhega,but right side se space rule nahi lage  ");
echo "</pre>";


echo "<pre>";
echo ltrim("  jesa likhoge wesa dikhega,but left side se space rule nahi lage  ");
echo "</pre>";


?>