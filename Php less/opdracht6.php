<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $number = floatval($_POST['number']);
    if ($number >= 1.0 && $number <= 10.0) {
        $_SESSION['numbers'][] = $number;
    }
}


$average = 0;
if (!empty($_SESSION['numbers'])) {
    $average = array_sum($_SESSION['numbers']) / count($_SESSION['numbers']);
    $average = round($average, 1); 
}

?>

<form method="post">
    Cijfer: <input type="text" name="number">
    <input type="submit" value="Toevoegen">
</form>

<?php
if (isset($_SESSION['numbers'])) {
    echo "Aantal ingevoerde cijfers: " . count($_SESSION['numbers']) . "<br>";
    echo "Gemiddelde: " . $average;
}
?>
