<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fruit'])) {
    $_SESSION['fruits'][] = $_POST['fruit'];
}


if (isset($_POST['sort'])) {
    sort($_SESSION['fruits']);
} elseif (isset($_POST['shuffle'])) {
    shuffle($_SESSION['fruits']);
}

?>

<form method="post">
    Fruitsoort: <input type="text" name="fruit">
    <input type="submit" value="Toevoegen">
    <input type="submit" name="sort" value="Sorteren">
    <input type="submit" name="shuffle" value="Schudden">
</form>

<?php
if (isset($_SESSION['fruits'])) {
    echo "Inhoud van de array:<br>";
    foreach ($_SESSION['fruits'] as $fruit) {
        echo "- $fruit<br>";
    }
}
?>
