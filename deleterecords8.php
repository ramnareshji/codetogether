<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "database1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//delete data
$sql = "DELETE FROM `classdata` WHERE `name` = 'naresh' LIMIT 1";
$result = mysqli_query($conn, $sql);

//to check how many row effected 
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> $err";
}




?>