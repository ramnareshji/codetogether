<?php
  
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
        Number of times i wishe u is " . $v + 1 .".<br>";
        
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
    
    echo "<br> Let's create  FOR loop <br> ";

  $fruits = array("mango", "banana", "pinaple", "papita" );

     for ($i=1; $i< count($fruits) ; $i++)
  {

       echo $i . ". Name of Fruit is " . $fruits[$i] . ".";
        echo "<br>";
  }

  echo " <br>  Letl's create FOREACH loop which is quit easy. <br>" ;
 
  $fruit = array("mango", "banana", "pinaple", "papita" );
  foreach ($fruit as $key => $value) 
  {
    echo "$value <br>"; 
  }

     

 ?>
    