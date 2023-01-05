<?php

echo "---Let's Start Session---\n";

session_start();
$_SESSION['name'] = "Naresh";
$_SESSION['is'] = "is ";
$_SESSION['color'] = "Black . ";


echo "<br>We have saved your session";
?>