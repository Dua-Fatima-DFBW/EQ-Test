<?php
session_start();

$questions = [
    "I can easily tell when someone is upset even if they don't say anything.",
    "I often feel overwhelmed by my own emotions.",
    "I am good at calming myself down after something stressful happens.",
    "I find it difficult to understand why people react the way they do.",
    "I can keep my cool when others are losing theirs.",
    "I tend to hold onto negative feelings for a long time.",
    "I notice small changes in people's tone of voice or expression.",
    "I struggle to motivate myself when I don't feel like doing something.",
    "I can usually predict how my words will affect someone.",
    "I quickly bounce back after emotional setbacks.",
    "I find it hard to forgive people who have upset me.",
    "I am aware of how my mood affects my decisions.",
    "I can comfort or support someone who is feeling down.",
    "I often feel anxious or stressed without knowing exactly why.",
    "I am good at reading the atmosphere in a room."
];

$total = count($questions);

if (!isset($_SESSION['eq_answers'])) {
    $_SESSION['eq_answers'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = (int)($_POST['q'] ?? 0);
    $value = (int)($_POST['value'] ?? 0);

    $_SESSION['eq_answers'][$index] = $value;

    if (isset($_POST['next'])) {
        $next = $index + 1;
        if ($next >= $total) {
            header("Location: result.php");
            exit;
        }
    }
}

$current = count($_SESSION['eq_answers']);
$finished = $current >= $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EQ Assessment - Question <?= $current + 1 ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php if ($finished): ?>
        <div class="done">
            <h2>Assessment complete!</h2>
            <a href="result.php" class="see-result">View Your Results</a>
            <a href="quiz.php?restart=1" class="restart">Start Over</a>
        </div>
    <?php else: ?>
        <div class="quiz-box">
            <div class="progress">Question <?= $current + 1 ?> / <?= $total ?></div>

            <h2><?= htmlspecialchars($questions[$current]) ?></h2>

            <form method="post">
                <input type="hidden" name="q" value="<?= $current ?>">

                <div class="options">
                    <label><input type="radio" name="value" value="5" required> Always / Very Often</label>
                    <label><input type="radio" name="value" value="4"> Frequently</label>
                    <label><input type="radio" name="value" value="3"> Sometimes</label>
                    <label><input type="radio" name="value" value="2"> Rarely</label>
                    <label><input type="radio" name="value" value="1"> Almost Never</label>
                </div>

                <button type="submit" name="next" class="next-btn">Next →</button>
            </form>

            <a href="index.php" class="back">← Back to home</a>
        </div>
    <?php endif; ?>

    <?php
    if (isset($_GET['restart'])) {
        unset($_SESSION['eq_answers']);
        header("Location: quiz.php");
        exit;
    }
    ?>

</body>
</html>
