<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username'] ?? 'User';

// Optional: show last score if you later decide to save scores in DB
$last_score = "Not taken yet";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>EQ Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            background: #0a0015;
            color: #e0f7ff;
            font-family: 'Orbitron', sans-serif;
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            font-size: 3.2rem;
            text-shadow: 0 0 25px #00ffff;
            margin-bottom: 40px;
        }
        .card {
            background: rgba(20,15,50,0.55);
            border: 1px solid #00ffff55;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 0 45px rgba(0,255,255,0.25);
            margin-bottom: 30px;
        }
        .score-display {
            font-size: 3.8rem;
            color: #00ffff;
            text-shadow: 0 0 30px #00ffff;
            margin: 25px 0;
        }
        .btn {
            display: inline-block;
            padding: 16px 45px;
            margin: 15px;
            font-size: 1.25rem;
            color: #00ffff;
            border: 2px solid #00ffff;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.35s;
            box-shadow: 0 0 20px rgba(0,255,255,0.4);
        }
        .btn:hover {
            background: #00ffff18;
            box-shadow: 0 0 50px #00ffff;
            transform: translateY(-3px);
        }
        .btn-pink {
            border-color: #ff00ff;
            color: #ff00ff;
        }
        .btn-pink:hover {
            background: #ff00ff18;
            box-shadow: 0 0 50px #ff00ff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>

    <div class="card">
        <h2 style="margin-bottom:20px;">Your EQ Journey</h2>
        <div class="score-display"><?= htmlspecialchars($last_score) ?></div>
        <p style="font-size:1.2rem; opacity:0.9;">Take the test to see your current level</p>
    </div>

    <a href="quiz.php" class="btn">Start / Retake Test</a>
    <a href="index.php" class="btn">Home</a>
    <a href="logout.php" class="btn btn-pink">Logout</a>
</div>

</body>
</html>
