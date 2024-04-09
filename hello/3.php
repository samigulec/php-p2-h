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
    
    // Databaseverbinding maken
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "opdr3";
    
    // Maak verbinding
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Controleer de verbinding
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Functie om webbrowser op te halen (overgenomen van opdracht 2)
    function getBrowser($user_agent) {
        // ... Code om browser op te halen ...
    }
    
    // Functie om besturingssysteem op te halen (overgenomen van opdracht 2)
    function getOperatingSystem($user_agent) {
        // ... Code om besturingssysteem op te halen ...
    }
    
    // Haal de user agent op van de HTTP request
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    
    // Roep de functies aan om de browser en het besturingssysteem op te halen
    $browser = getBrowser($user_agent);
    $os = getOperatingSystem($user_agent);
    
    // SQL query om de browser en het besturingssysteem van de bezoeker in de 'opdr3' tabel op te slaan
    $sql = "INSERT INTO opdr3 (browsers, os) VALUES ('$browser', '$os')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record toegevoegd aan de database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Extra SQL-query om alleen het overzicht van webbrowsers en hun aantallen op te halen
    $sql_overzicht = "SELECT browsers, COUNT(*) AS aantal FROM opdr3 GROUP BY browsers ORDER BY aantal DESC";
    $result_overzicht = $conn->query($sql_overzicht);
    
    // Controleer of er resultaten zijn
    if ($result_overzicht->num_rows > 0) {
        // Output de resultaten
        echo "<h2>Overzicht van webbrowsers en aantallen:</h2>";
        while($row = $result_overzicht->fetch_assoc()) {
            echo "Browser: " . $row["browsers"]. " - Aantal: " . $row["aantal"]. "<br>";
        }
    } else {
        echo "Geen resultaten gevonden.";
    }
    
    // Sluit de verbinding met de database
    $conn->close();
    
    ?>
</body>
</html>