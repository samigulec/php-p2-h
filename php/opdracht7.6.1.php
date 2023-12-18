<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
 
    Bedrag exclusief BTW <input type="tekst" name="bedrag" value="">
    <p><input type="radio" name="BTW" value="negen">Laag, 9%<p>
    <p><input type="radio" name="BTW" value="21">Hoog, 21%<p>
    <p><input type="submit" name="uitrekenen" value="uitrekenen"></p>
</form>

<?php
var_dump($_POST);
if ($_POST('BTW') == "negen") {
    $percentage = 1.09;
} else {
    $percentage = 1.21;
}

$uitkomst = $percentage * $_POST['bedrag'];

echo "Bedrag :" .number_format($_POST['bedrag'],2) . "<br>";
echo "Bedrag met Btw:" .number_format($uitkomst,2) . "<br>";
?>
</body>
</html>