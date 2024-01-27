<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $action = $_POST['action'];

    switch ($action) {
        case 'uppercase':
            $result = strtoupper($text);
            break;
        case 'lowercase':
            $result = strtolower($text);
            break;
        case 'ucfirst':
            $result = ucfirst(strtolower($text));
            break;
        case 'ucwords':
            $result = ucwords(strtolower($text));
            break;
        default:
            $result = $text;
    }
}
?>

<form method="post">
    Tekst: <input type="text" name="text" value="<?php echo isset($text) ? $text : ''; ?>"><br>
    <input type="radio" name="action" value="uppercase" <?php echo isset($action) && $action == 'uppercase' ? 'checked' : ''; ?>> In hoofdletters<br>
    <input type="radio" name="action" value="lowercase" <?php echo isset($action) && $action == 'lowercase' ? 'checked' : ''; ?>> In kleine letters<br>
    <input type="radio" name="action" value="ucfirst" <?php echo isset($action) && $action == 'ucfirst' ? 'checked' : ''; ?>> Eerste letter van zin hoofdletter<br>
    <input type="radio" name="action" value="ucwords" <?php echo isset($action) && $action == 'ucwords' ? 'checked' : ''; ?>> Eerste letter van ieder woord hoofdletter<br>
    <input type="submit" value="Weergeven">
</form>

<?php
if (isset($result)) {
    echo "<p>Resultaat: $result</p>";
}
?>
