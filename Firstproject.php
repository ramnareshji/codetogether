<?php
//CREATE TABLE `idea`.`plan` (`sno` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(10) NOT NULL , `description` TEXT NOT NULL , `tstamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`));



$username = "root";
$servername = "localhost";
$password = "";
$database = "idea";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Sorry we can't connect " . mysqli_connect_error());
}

$title = $_POST["title"];
$description = $_POST["description"];

$sql ="INSERT INTO `plan` ( `title`, `description`) VALUES ('$title', '$description')";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form-cointainer">
        <h1>Submit your Idea to Execute Later..</h1>

        <form class="dataform" action="/codewithharryphp/Firstproject.php" method="post">

            <div class="title-class">

                <label for="title"> Title: </label>
                <br>
                <input type="text" size="61" id="title" name="title" placeholder="Short Description">
                <br>
            </div>
            <div class="description-class ">
                <br>
                <label for="description"> Idea In Brief : </label>
                <br>
                <textarea id="description" name="description" placeholder=" Write in brief " rows="5"
                    cols="57"></textarea>
                <br>
            </div>
            <div class="button-class">
                <button type="submit" id="buttonS">Submit</button>
            </div>
        </form>
    </div>
    <div>
        <table>
            <thead>
               
            <?php 
                  $sql = "SELECT * FROM `plan`";
                  $result = mysqli_query($conn, $sql);
                  $sno = 0;
                  while($row = mysqli_fetch_assoc($result)){
                    $sno = $sno + 1;
                    echo "<tr>
                   <th>S.No : </th>  <td>". $sno . "</td> </tr>
                    <tr><th> Title :</th> <td> ". $row['title'] . "</td><?tr>
                    <tr> <th>Description :</th><td>  ". $row['description'] . "</td></tr>
                   <tr><th></th> <td>  <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary'  id=".$row['sno'].">Delete</button>  </td>
                  </tr>";
                } 
                 
                ?>

            </thead>
            
        </table>
    </div>


</body>

</html>