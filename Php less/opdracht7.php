<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kapitaal = $_POST['kapitaal'];
    $rente = $_POST['rente'] / 100;
    $opname = $_POST['opname'];
    $jaren = 0;

    while ($kapitaal > 0) {
        $kapitaal += $kapitaal * $rente - $opname;
        $jaren++;
        if ($jaren > 100) {
            echo "Je kunt het bedrag langer dan 100 jaar opnemen.";
            break;
        }
    }

    if ($jaren <= 100) {
        echo "U kunt $jaren jaar lang € $opname opnemen.";
    }
}
?>

<form method="post">
    Startkapitaal: <input type="text" name="kapitaal"><br>
    Rentepercentage: <input type="text" name="rente"><br>
    Jaarlijkse opname: <input type="text" name="opname"><br>
    <input type="submit" value="Bereken de looptijd">
</form>
