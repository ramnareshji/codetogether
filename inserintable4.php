<?php
echo "----Let's Insurt data in DataBase TABLE <br>";

// create a connection 
$servername ="localhost";
$username = "root";
$password ="";
$database = "naresh";

//db with name naresh is already existing in phpmyadmin 
$conn = mysqli_connect($servername, $username, $password ,$database);

  // i am coding after creating a db already . to see learn how to create db

// create a table in table in database already created

// $createtable = "CREATE TABLE `naresh`.`tour` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `destination` VARCHAR(20) NOT NULL , `budge` INT(20) NOT NULL , PRIMARY KEY (`sno`))";
// $resulttable = mysqli_query($conn, $createtable);

// Insert in table already created in databse named tour

 $table = "INSERT INTO `tour` (`sno`, `name`, `destination`, `budge`) VALUES (NULL, 'suresh', 'africa', '5000')";
 $result = mysqli_query($conn, $table);


?>