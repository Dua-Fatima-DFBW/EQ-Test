<?php

$questions = [
  "I quickly notice when my mood starts to change.",
  "Strong emotions sometimes feel out of control.",
  "I can usually stay calm when people around me are upset.",
  "I find it hard to guess what others are feeling.",
  "I tend to keep thinking about upsetting events for hours.",
  "I can sense tension in a room before anyone speaks.",
  "When I’m stressed I still make rational decisions.",
  "I often feel emotionally drained after social situations.",
  "I can shift my attention away from negative thoughts.",
  "I understand how my facial expression affects people.",
  "I struggle to comfort someone who is crying.",
  "I recognize when I’m being defensive.",
  "I can laugh at myself even when I make a mistake.",
  "I feel overwhelmed when multiple people need my attention.",
  "I usually know why someone is angry with me."
];

$labels = ["Strongly Disagree", "Disagree", "Neutral", "Agree", "Strongly Agree"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $responses = $_POST['r'] ?? [];
  $total = count($questions);
  $sum = 0;

  foreach ($responses as $idx => $val) {
    $v = (int)$val;
    if ($idx % 3 === 1) { // reverse every 3rd question
      $v = 6 - $v;
    }
    $sum += $v;
  }

  $max = $total * 5;
  $perc = round(($sum / $max) * 100);

  header("Location: score.php?score=$sum&max=$max&perc=$perc");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EQ Pulse – Test</title>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body {
      background: #0b001f;
      color: #e6f0ff;
      font-family: 'Exo 2', sans-serif;
      line-height: 1.5;
    }
    .test-container {
      max-width: 980px;
      margin: 50px auto;
      padding: 30px 20px;
    }
    h1 {
      text-align: center;
      font-size: 2.8rem;
      color: #7dd3fc;
      margin-bottom: 40px;
    }
    .question-row {
      background: rgba(20,15,60,0.35);
      border: 1px solid rgba(56,189,248,0.25);
      border-radius: 10px;
      padding: 24px;
      margin-bottom: 20px;
      box-shadow: 0 4px 25px rgba(0,0,0,0.3);
    }
    .q-text {
      font-size: 1.32rem;
      margin-bottom: 18px;
      color: #e6f0ff;
    }
    .scale-container {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
    }
    .scale-label {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 1rem;
      color: #c3d6ff;
      min-width: 70px;
      cursor: pointer;
    }
    .scale-number {
      font-size: 1.5rem;
      font-weight: 600;
      color: #7dd3fc;
      margin-bottom: 4px;
    }
    .scale-desc {
      font-size: 0.92rem;
      text-align: center;
      opacity: 0.85;
    }
    input[type="radio"] {
      width: 20px;
      height: 20px;
      accent-color: #38bdf8;
      margin-bottom: 6px;
    }
    .form-footer {
      text-align: center;
      margin-top: 50px;
    }
    .submit-pulse {
      padding: 18px 90px;
      font-size: 1.4rem;
      font-weight: 600;
      color: #fff;
      background: linear-gradient(90deg, #0ea5e9, #60a5fa);
      border: none;
      border-radius: 999px;
      box-shadow: 0 0 40px rgba(14,165,233,0.6);
      cursor: pointer;
      transition: all 0.4s;
    }
    .submit-pulse:hover {
      box-shadow: 0 0 80px rgba(14,165,233,0.9);
      transform: translateY(-2px);
    }
    .cancel-link {
      display: block;
      text-align: center;
      margin-top: 40px;
      color: #93c5fd;
      text-decoration: none;
      font-size: 1.15rem;
    }
    .cancel-link:hover {
      color: #e6f0ff;
    }
    @media (max-width: 760px) {
      .scale-container { flex-direction: column; align-items: flex-start; }
      .scale-label { width: 100%; flex-direction: row; justify-content: space-between; }
      .scale-desc { margin-left: 12px; }
    }
  </style>
</head>
<body>

  <div class="test-container">
    <h1>EQ Pulse</h1>

    <form method="post">
      <?php foreach ($questions as $i => $text): ?>
      <div class="question-row">
        <div class="q-text"><?= htmlspecialchars($text) ?></div>
        <div class="scale-container">
          <?php foreach ($labels as $v => $label): $val = $v + 1; ?>
            <label class="scale-label">
              <input type="radio" name="r[<?= $i ?>]" value="<?= $val ?>" required>
              <span class="scale-number"><?= $val ?></span>
              <span class="scale-desc"><?= $label ?></span>
            </label>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>

      <div class="form-footer">
        <button type="submit" class="submit-pulse">Show my EQ Pulse</button>
      </div>
    </form>

    <a href="index.php" class="cancel-link">Cancel</a>
  </div>

</body>
</html>
