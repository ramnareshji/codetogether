<?php

//to read file directly
readfile("file.txt");

echo " <br>Better way to open same file ...<br> ";

$openfile = fopen("file.txt", "r");

// to read file 

$filedikhao = fread($openfile, filesize("file.txt"));
//close the file

fclose($openfile);

//show file by using echo
echo $filedikhao;

//// sirf ak line print karne karne ke liy fgets use karte h

echo "<br> ---fgets ak baar me ak line show karega----<br>";

$openfile = fopen("file.txt", "r");
echo fgets($openfile);
fclose($openfile);

echo "<br> ---fgetc ak character show karega----<br>";

$openfile = fopen("file.txt", "r");
echo fgetc($openfile);
fclose($openfile);

// Let's create a program 
echo " <br>---  Creating a programme with gets---<br>";

$openfile = fopen("file.txt", "r");
while($a = fgetc($openfile)){
    echo $a;
    if($a == "f"){
        break;
    }

}
fclose($openfile);

// lets write a file

echo "<br>------let's write a file ---\n";
$openfile = fopen("file2.txt", "w");
fwrite($openfile, "This will delete previous data and each time create new. video -38.");
fclose($openfile);

// apend mode me 
 
echo "<br> --- This is Append to file at end\n";
$openfile = fopen("file3.txt", "a");
fwrite($openfile, "This will not delete previous file data ,and add up next data.");
fclose($openfile);

?>