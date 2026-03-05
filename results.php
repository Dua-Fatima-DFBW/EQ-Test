<?php
session_start();

if (!isset($_SESSION['eq_answers']) || empty($_SESSION['eq_answers'])) {
    header("Location: index.php");
    exit;
}

$answers = $_SESSION['eq_answers'];
$total_questions = count($answers);

$score = array_sum($answers);
$max_score = $total_questions * 5;
$percent = round(($score / $max_score) * 100);

if ($percent >= 82) {
    $title = "Exceptional";
    $description = "You demonstrate outstanding emotional intelligence. You read emotions accurately, manage stress effectively, and build strong connections with others.";
} elseif ($percent >= 68) {
    $title = "Strong";
    $description = "You have very good emotional awareness and control. You handle most emotional situations well and understand others effectively.";
} elseif ($percent >= 50) {
    $title = "Moderate";
    $description = "You have average emotional intelligence. Some areas are strong, while others could benefit from conscious practice and attention.";
} else {
    $title = "Developing";
    $description = "There is room for growth in emotional awareness, regulation, or empathy. Small, consistent efforts can lead to significant improvement.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your EQ Result</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="result-screen">
        <h1>Your Emotional Intelligence Score</h1>

        <div class="score-box">
            <div class="points"><?= $score ?> / <?= $max_score ?></div>
            <div class="percent"><?= $percent ?>%</div>
        </div>

        <h2 class="level"><?= $title ?></h2>

        <p class="explanation"><?= $description ?></p>

        <div class="actions">
            <a href="quiz.php?restart=1" class="retry">Take the test again</a>
            <a href="index.php" class="home">Return to home</a>
        </div>
    </div>

</body>
</html>
