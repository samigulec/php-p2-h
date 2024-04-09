<!DOCTYPE html>
 <html lang="nl">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" >
     <link rel="stylesheet" href="style.css">
     <title>opdracht 1</title>
 </head>
 <body>     
   <?php
    // Verbinding maken met de database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cijfers";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verbinding controleren
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Query om gegevens van de leerlingen en hun cijfers op te halen
    $sql = "SELECT * FROM cijfers";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Tabelkop weergeven
        echo "<table><tr><th>Leerling</th><th>Cijfer</th></tr>";
    
        // Gegevens van leerlingen weergeven
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["leerling"] . "</td><td>" . $row["cijfer"] . "</td></tr>";
        }
    
        // Query om het gemiddelde, het hoogste en het laagste cijfer te berekenen
        $sql_stats = "SELECT AVG(cijfer) AS gemiddeld_cijfer, MAX(cijfer) AS hoogste_cijfer, MIN(cijfer) AS laagste_cijfer FROM cijfers";
        $result_stats = $conn->query($sql_stats);
        $row_stats = $result_stats->fetch_assoc();
    
        // Gemiddelde, hoogste en laagste cijfer weergeven
        echo "<tr><td>Gemiddeld cijfer:</td><td>" . $row_stats["gemiddeld_cijfer"] . "</td></tr>";
        echo "<tr><td>Hoogste cijfer:</td><td>" . $row_stats["hoogste_cijfer"] . "</td></tr>";
        echo "<tr><td>Laagste cijfer:</td><td>" . $row_stats["laagste_cijfer"] . "</td></tr>";
    
        echo "</table>";
    } else {
        echo "Geen resultaten gevonden.";
    }
    
    $conn->close();
    ?>
</body>
</html>