<?php


echo "<pre>";
echo rtrim("      lecture-09 ke baad ka content ");
echo "</pre>";

echo "operators in php <br>";
echo "<br> Arithmetic operator <br>";
echo "<br> Assignment operator <br>";
echo "<br> Comparison operator <br>";
echo "<br> Logical operator <br>";

$a = 5;
$b = 6;

echo " a = 5 and b =6 <br>";
echo " a + b is "  . $a + $b . "<br> " ; 
echo " a - b is "  . $a - $b . " <br>"; 
echo " a * b is " . $a * $b . " <br>" ; 
echo " a / b is "  . $a / $b . " <br>"; 
echo " a % b is "  . $a % $b . " <br>"; 
echo " a ** b is "  . $a ** $b . " <br>";

echo " <br>Assingment Operator <br>";

echo $a +=2;
echo "<br>";
echo " a+=2 means value of a = a +2";
echo "<br>";

echo " <br>Comparison Operator <br>";
$x = 2;
$y = 3;
echo " For x == y , the result is ";
echo var_dump($x == $y);
echo "<br>";

echo " For x <= y , the result is ";
echo var_dump($x <= $y);
echo "<br>";

echo "<br> Logical operator <br>";

$m = true;
$n = false;
echo " For m and (&&) n, the result is ";
echo var_dump($m and $n);
echo "<br>";
echo " For m or (||) n, the result is ";
echo var_dump($m or $n);
echo "<br>";


echo "if and else case aata h <br>";

echo "<br> Switch case use karte h. <br>";
$age = 50;
switch($age){ 
    case 20:
        echo "u are 20. <br>"; 
        break;

    case 12:
        echo "u are 12. <br>";
        break;

    case 50:
            echo " u are  50. <br>";
            break;

    default:
        echo " u are out of syllabus. Break nahi lagaoge to condtion match
        hone ke baad ka sab print hoga.<br>";
        break;
    }


echo "<pre>";
echo "<br>      While loops in php <br> ";
echo "</pre>";

$i =0;
while($i <6){
    echo $i + 1;
    echo "<br>";
    $i++;

}

echo "Let's increase value with 2 <br>";
$i =0;
while($i <8){
    echo $i + 1;
    echo "<br>";
    $i+=2;

}

$v = 0;
while($v <5){
   
    echo "Happy bdy ,
    Number of times i wishe u is " . $v +1 .".<br>";
    
   $v++;

}
echo "<br> Let's create FOR loop <br>";

 for($a=1; $a <5; $a++)
 {
    echo " The number is $a <br> ";
    
 }

echo "<br> Let's create DO and WHILE  <br> ";

$c = 10;
do {
    echo "$c <br>";
    $c++;

} while ($c < 5);


echo "<br> Let's create  WHILE loop <br> ";

$d =0;
while($d <5)
{
    echo "This is while loop ". $d ." times <br>";
    $d+=1;

}

echo "<br> Let's create  FOREACH loop <br> ";

$arrlist = array("apple", "banana", "orange", "papita");

for ($i=0; $i < count($arrlist); $i++) {

    echo "This is " . $arrlist[$i];
    echo "<br>";
}
echo "<br> Let's create  FOR loop <br> ";

$fruits = array("mango", "banana", "pinaple", "papita" );

   for ($i=1; $i < count($fruits) ; $i++)
{

     echo $i . ". Name of Fruit is " . $fruits[$i] . ".";
      echo "<br>";
}

echo " <br>  Letl's create FOREACH loop which is quit easy. <br>" ;
$fruit = array("mango", "banana", "pinaple", "papita" );
foreach ($fruit as $key => $value) {
  echo "This is a $value <br>"; 
}

//for,foreach,while,do,if,elseif,else



?>
