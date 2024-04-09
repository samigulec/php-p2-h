<?php
// Inclusief de database connectie
include 'connect.php';

// Array om de totale stemmen per vraag bij te houden
$totalVotesPerQuestion = [];

// Haal alle vragen op uit de database
$stmt = $conn->prepare("SELECT * FROM vraag_en_opties");
$stmt->execute();
$questions = $stmt->fetchAll();

// Begin van de tabel met roze achtergrondkleur
echo "<table border='1' style='background-color: pink;'>";
echo "<tr><th>Vraag</th><th>Antwoord</th><th>Stemmen</th><th>Percentage</th></tr>";

// Itereer door elke vraag om de resultaten weer te geven
foreach ($questions as $question) {
    // Totaal aantal stemmen voor de huidige vraag initialiseren
    $totalVotes = 0;

    // Eerst berekenen we het totaal aantal stemmen voor deze vraag
    $stmt = $conn->prepare("SELECT SUM(votes) AS total_votes FROM poll WHERE question_id = ?");
    $stmt->execute([$question['id']]);
    $totalResult = $stmt->fetch();
    if ($totalResult) {
        $totalVotes = $totalResult['total_votes'];
        // Voeg totaal aantal stemmen per vraag toe aan de array
        $totalVotesPerQuestion[$question['id']] = $totalVotes;
    }

    // Toon elke antwoordoptie met het aantal stemmen en het percentage van het totaal
    for ($i = 1; $i <= 4; $i++) {
        $answer = $question["antwoord" . $i];
        if (!empty($answer)) {
            // Haal het aantal stemmen op voor deze specifieke keuze
            $stmt = $conn->prepare("SELECT votes FROM poll WHERE question_id = ? AND choice = ?");
            $stmt->execute([$question['id'], $i]);
            $result = $stmt->fetch();
            $votes = $result ? $result['votes'] : 0;
            // Bereken het percentage van het totaal
            $percentage = $totalVotes > 0 ? round(($votes / $totalVotes) * 100, 2) : 0;
            // Toon de resultaten in de tabelrij
            echo "<tr>";
            if ($i == 1) {
                echo "<td rowspan='4'>" . htmlspecialchars($question['vraag']) . "</td>";
            }
            echo "<td>" . htmlspecialchars($answer) . "</td><td>" . $votes . "</td><td>" . $percentage . "%</td>";
            echo "</tr>";
        }
    }
}
// Einde van de tabel
echo "</table>";

// Totaal stemmen per vraag afdrukken
echo "<br><br><b>Totaal stemmen per vraag:</b><br>";
foreach ($totalVotesPerQuestion as $questionId => $totalVotes) {
    echo "Vraag " . $questionId . "= " . $totalVotes . " stemmen<br>";
}
?>
