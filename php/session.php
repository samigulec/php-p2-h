<?php 


session_start();

if (isset($_SESSION['teller']) == false ) {
    $_SESSION['teller'] = 0;
    $_SESSION['login'] = "piet";
} else {
    echo "sessie bestaat<br>";

    $_SESSION['teller']++;

    echo  "inhoud sessie:"   .$_SESSION['teller'];
}


?>