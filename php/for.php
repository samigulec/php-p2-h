<?php

$som = 0; 
for ($teller=1; $teller <= 10; $teller=$teller++) { 
    echo "teller $teller<br>";

    $som = $som + $teller ;
    echo "som : $som<br>" ;
}
  
$a = 0;
while ($a <= 10) {
    echo "$a: $a <br>";
    if ($a < 10) {
        $a++;
    } else {
        $a = $a + 10;
    }
    
}


?>