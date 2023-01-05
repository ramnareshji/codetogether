<?php

// include 'datareceiv10.php'; // agar file bani huyi nai h to b aage badhne ko include allow kar dega but require me phle file banana padega
require 'datareceiv10.php';

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";

// do something which u wish 
while($row = mysqli_fetch_assoc($result)){ 
    echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dt'] . "<br>";
    echo "<br>";
   
}
?>
