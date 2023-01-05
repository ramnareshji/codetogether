<?php

echo "-----displaydatafrommyqul6 <br>";

// $table = "CREATE TABLE DATATABLE"

$servername = "localhost";
$username = "root";
$password = "";    // password me blank mat dena, no space.
$database = "database1";
// Create a connection
$conn = mysqli_connect($servername, $username, $password ,$database);

// TO see the data from table named classdata in database named database1
$sql = "SELECT * FROM `classdata`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

echo "<br> records found in the DataBase  are ". $num ."<br>";
// Display the rows returned by the sql query
if($num> 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'] .  ". Hello I am ". $row['name'] ." .I am reading a ". $row['color']."color " .$row['book'] ." book which i started reading on ".$row['date'] . "<br>";
        echo "<br>";
    }
   
    

}

?>