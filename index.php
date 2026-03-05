<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EQ Pulse – Quick Emotional Check</title>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background: #0b001f;
      color: #e6f0ff;
      font-family: 'Exo 2', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .intro-screen {
      padding: 40px 20px;
      max-width: 900px;
    }
    h1 {
      font-size: 4.5rem;
      color: #7dd3fc;
      text-shadow: 0 0 40px #38bdf8;
      margin-bottom: 25px;
    }
    .subtitle {
      font-size: 1.7rem;
      color: #a5d8ff;
      margin-bottom: 40px;
      letter-spacing: 1px;
    }
    p {
      font-size: 1.35rem;
      color: #c3d6ff;
      margin-bottom: 50px;
    }
    .pulse-button {
      display: inline-block;
      padding: 20px 90px;
      font-size: 1.65rem;
      font-weight: 600;
      color: #7dd3fc;
      border: 2px solid #38bdf8;
      border-radius: 999px;
      text-decoration: none;
      background: rgba(56, 189, 248, 0.06);
      box-shadow: 0 0 45px rgba(56, 189, 248, 0.55);
      transition: all 0.4s ease;
    }
    .pulse-button:hover {
      background: rgba(56, 189, 248, 0.18);
      box-shadow: 0 0 80px rgba(56, 189, 248, 0.9);
      transform: scale(1.06);
    }
    @media (max-width: 700px) {
      h1 { font-size: 3.2rem; }
      .pulse-button { padding: 16px 60px; font-size: 1.4rem; }
    }
  </style>
</head>
<body>

  <div class="intro-screen">
    <div class="content-box">
      <h1>EQ Pulse</h1>
      <div class="subtitle">15-second emotional snapshot</div>
      <p>Answer honestly — no right or wrong.</p>
      <a href="test.php" class="pulse-button">Start Pulse</a>
    </div>
  </div>

</body>
</html>
