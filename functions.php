<?php

echo "code with harry , Lecture-16 ke baad ka <br>";
 echo "<pre>";
 echo rtrim("  See the sentence how the FOR loop works.. ");
 echo "</pre>";

$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
                                          
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key  ." : " . $value . "<br>";
}
echo "<br>";

$nst1 = [ 1,2,65,15,24,50]; 
foreach ($nst1 as $key => $value) {
    $i = 0; 
    $i += $value;

    echo " LINE ME LIKHNE SE REPEAT HORHA H " . $i ."<br>";
}

echo " LINE ME $ a pr gor kare.....<br>";

$ram = [ 2, 4, 6, 8 ];
$a = 0 ;        //just below the string likha h
foreach ($ram as $key => $value) {
     $a += $value;

}
echo "Ram TOTAL Marks is " . $a .".<br>" ;

echo " <br>LINE ME $ a pr gor kare es bar andr likha h.....<br>";

$ram = [ 2, 4, 6, 8 ];
$a = 0 ; 
foreach ($ram as $key => $value) {
         //just inside the loop likha h
     $a += $value;
     echo "Ram marks adding $key subject + ". $key+1 . "subject marks ($value)  = " . $a .".<br>" ;
}



echo " <br>LINE ME $ a pr gor kare es bar bahar repeat likha h.....<br>";


$ramn = [ 2, 4, 6, 8,50,60,70 ];
$a = 0; 
foreach ($ramn as $key => $value) {

    $a += $value;
    $key = $key + 1;
    echo "Rman subject "." $key ". "  Marks is $a <br> ";
}

echo " <br>LINE ME $ a pr gor kare es bar andr likha h.....<br>";

$ramn = [ 2, 4, 6, 8,50,60,70 ];

foreach ($ramn as $key => $value) {

    $a = 0; 
    $a += $value;
    $key = $key + 1;
    echo "Rman subject "." $key ". "  Marks is $a <br> ";
}



echo "<br> LEt's Now create Functions.......<br>";

function totalm($studentm)
{
    $summ = 0;
    foreach ($studentm as $key => $value) {
        $summ += $value; 
    }
    return $summ;
}

$nk = [2,5,2,7,90,70,80,45,60];
$mk = [2,5,2,79,0,80,45,60];
echo "Total marks of NK is ". totalm($nk) .".<br>";
echo "Total marks of MK is ". totalm($mk) .".<br>";



function lista($studenta){
  
    foreach ($studenta as $key => $value) {
        $v = 0;
       $v += $value;
        echo "Value of $key key is $v <br>";
    }
    return;
}
$lista1 = [1, 23, 91, 55, 54, 21];
echo  lista($lista1)."<br>";

echo "<br> Let's create more .....<br>";




?>

