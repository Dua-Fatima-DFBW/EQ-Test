<?php
$raw    = (int)($_GET['score'] ?? 0);
$max    = (int)($_GET['max'] ?? 75);
$percent = (float)($_GET['perc'] ?? 0);

if ($max === 0) {
  header("Location: index.php");
  exit;
}

if ($percent >= 80) {
  $title = "Strong Pulse";
  $desc  = "Your emotional radar is sharp. You read situations well and stay balanced under pressure.";
} elseif ($percent >= 65) {
  $title = "Clear Pulse";
  $desc  = "Solid emotional awareness. You handle most situations effectively with only minor blind spots.";
} elseif ($percent >= 48) {
  $title = "Mixed Pulse";
  $desc  = "You have strengths and areas that could use attention. Small adjustments can create big improvements.";
} else {
  $title = "Developing Pulse";
  $desc  = "Emotional signals are harder to read right now. Focused practice can strengthen your EQ significantly.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EQ Pulse Result</title>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body {
      background: #0b001f;
      color: #e6f0ff;
      font-family: 'Exo 2', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }
    .score-screen {
      text-align: center;
    }
    .result-card {
      background: rgba(15,10,50,0.5);
      border: 1px solid rgba(56,189,248,0.35);
      border-radius: 16px;
      padding: 60px 40px;
      max-width: 780px;
      box-shadow: 0 0 60px rgba(56,189,248,0.3);
    }
    h1 {
      font-size: 3rem;
      color: #7dd3fc;
      margin-bottom: 40px;
    }
    .pulse-score {
      font-size: 7rem;
      font-weight: 700;
      color: #7dd3fc;
      text-shadow: 0 0 50px #38bdf8;
      margin-bottom: 10px;
    }
    .pulse-title {
      font-size: 2.8rem;
      color: #93c5fd;
      margin: 20px 0 30px;
    }
    .pulse-text {
      font-size: 1.38rem;
      line-height: 1.7;
      max-width: 720px;
      margin: 0 auto 50px;
      color: #c3d6ff;
    }
    .score-details {
      font-size: 1.45rem;
      color: #93c5fd;
      margin-bottom: 50px;
    }
    .action-row a {
      margin: 0 20px;
      padding: 14px 50px;
      font-size: 1.25rem;
      border-radius: 999px;
      text-decoration: none;
      display: inline-block;
      transition: all 0.35s;
    }
    .retry-btn {
      background: rgba(56,189,248,0.15);
      border: 2px solid #38bdf8;
      color: #7dd3fc;
    }
    .retry-btn:hover {
      background: rgba(56,189,248,0.3);
      box-shadow: 0 0 40px rgba(56,189,248,0.7);
    }
    .home-btn {
      background: rgba(147,197,253,0.12);
      border: 2px solid #93c5fd;
      color: #93c5fd;
    }
    .home-btn:hover {
      background: rgba(147,197,253,0.25);
      box-shadow: 0 0 35px rgba(147,197,253,0.6);
    }
    @media (max-width: 760px) {
      .pulse-score { font-size: 5.2rem; }
      .result-card { padding: 40px 25px; }
    }
  </style>
</head>
<body>

  <div class="score-screen">
    <div class="result-card">
      <h1>EQ Pulse Result</h1>

      <div class="pulse-score"><?= $percent ?>%</div>
      <div class="pulse-title"><?= $title ?></div>

      <p class="pulse-text"><?= $desc ?></p>

      <div class="score-details">
        <?= $raw ?> / <?= $max ?> points
      </div>

      <div class="action-row">
        <a href="test.php" class="retry-btn">New Pulse</a>
        <a href="index.php" class="home-btn">Home</a>
      </div>
    </div>
  </div>

</body>
</html>
