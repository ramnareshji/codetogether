<?php

echo "----let's Create Cookies---<br>";

setcookie("category", "Books", time() +86400, "/");
echo "The cookies is set <br>";

// "/" use karne pr sare pages pr cookies set ho jayega.
// Books is the name of cookie 
// time +86400sec is given  as a day to keep cookie alive
?>