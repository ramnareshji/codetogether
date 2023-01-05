<?php

echo "---Let's create a numeric/index array---<br>";

$list = array('naresh' => 'blue',
'suresh'=>'orange','rakesh'=>'black');

foreach ($list as $key => $value) {
    echo " Favorite color of $key is $value .<br>";
}


?>