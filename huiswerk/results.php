<?php

include 'connect.php';


$stmt = $conn->prepare("SELECT * FROM vraag_en_opties");
$stmt->execute();
$questions = $stmt->fetchAll();


foreach ($questions as $question) {
    echo "<h2>" . htmlspecialchars($question['vraag']) . "</h2>";

    // Initialiseren van stemmen voor de huidige vraag
    $totalVotes = 0;

    // Berekenen wat het totaal aantal stemmen voor deze vraag is
    $stmt = $conn->prepare("SELECT SUM(votes) as totalVotes FROM poll WHERE question_id = ?");
    $stmt->execute([$question['id']]);
    $totalResult = $stmt->fetch();
    if ($totalResult) {
        $totalVotes = $totalResult['totalVotes'];
    }

 
   for ($i = 1; $i <= 4; $i++) {
    $answer = $question["antwoord" . $i]; 

    if (!empty($answer)) {
     $stmt = $conn -> prepare("SELECT votes FROM poll WHERE question_id = ? AND choice = ?");
        $stmt->execute([$question['id'], $i]);
        $result = $stmt->fetch();
        $votes = $result ? $result['votes'] : 0;

            $percentage = $totalVotes > 0 ? round(($votes / $totalVotes) * 100, 2) : 0;
            echo htmlspecialchars($answer) . ": " . $votes . " stemmen (" . $percentage . "%)<br/>";
        }
    }

    echo "<hr/>";
}
?>
