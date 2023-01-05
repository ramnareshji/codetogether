<?php
echo "Let's create date ...<br>";

$daydikao = date("d");

$datanotherformate = date("dS F Y,g:i A");

$datanotherformatee = date("dS F Y");
echo "Today's date is $daydikao <br>";
echo "<br>Today's date is $datanotherformate <br>";
echo "<br>Today's date is $datanotherformatee <br>";

$timedikao = date("h:i:sA");
echo " Time now  is $timedikao <br>";
?>