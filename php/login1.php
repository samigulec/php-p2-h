<?php

include "login.php";
 

$sql = "SELECT * FROM fietsen";

$stmt = $conn->prepare($sql);

$stmt-> execute();

$result =  $stmt-> fetchAll(PDO::FETCH_ASSOC);
 
var_dump($result);

echo "<br>"
echo "<table border=1px> "
?>