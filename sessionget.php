<?php

echo "Let's get session data----<br>";

session_start();
if(isset($_SESSION['name'])){
    echo "Welcome " .$_SESSION["name"];
    echo "Your carrer  " .$_SESSION['is']. $_SESSION['color'];
    
    
}
else{
    echo "Please login to continue";
}

?>