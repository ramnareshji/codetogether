<?php

echo "--- Here i ended session---";

session_start();
session_unset();
session_destroy();
echo "<br> You are logged out";

?>