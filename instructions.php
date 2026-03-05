<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>How to Take the EQ Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            background: #0a0015;
            color: #e0f7ff;
            font-family: 'Orbitron', sans-serif;
            min-height: 100vh;
            padding: 60px 20px 40px;
        }
        .container {
            max-width: 880px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-size: 3.3rem;
            text-shadow: 0 0 28px #00ffff;
            margin-bottom: 45px;
        }
        .steps {
            counter-reset: step;
            list-style: none;
            padding: 0;
        }
        .steps li {
            position: relative;
            padding-left: 60px;
            margin-bottom: 40px;
            font-size: 1.25rem;
            line-height: 1.7;
        }
        .steps li::before {
            content: counter(step);
            counter-increment: step;
            position: absolute;
            left: 0;
            top: 0;
            width: 45px;
            height: 45px;
            background: #00ffff22;
            border: 2px solid #00ffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            font-weight: bold;
            color: #00ffff;
            box-shadow: 0 0 20px #00ffff66;
        }
        .btn-back {
            display: inline-block;
            margin-top: 50px;
            padding: 15px 45px;
            font-size: 1.25rem;
            color: #00ffff;
            border: 2px solid #00ffff;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.35s;
        }
        .btn-back:hover {
            background: #00ffff18;
            box-shadow: 0 0 45px #00ffff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>How to Take the Test</h1>

    <ol class="steps">
        <li>Sign up or log in using your email and password.</li>
        <li>Click "Start Test" (or "Retake Test") from the home or dashboard page.</li>
        <li>Read each statement carefully and select how much you agree with it.</li>
        <li>There are no right or wrong answers — answer honestly.</li>
        <li>After answering all questions, your results will appear immediately.</li>
        <li>Your score is private — nothing is saved unless you choose to keep track later.</li>
        <li>You can retake the test anytime to see progress.</li>
    </ol>

    <div style="text-align:center;">
        <a href="index.php" class="btn-back">← Return to Home</a>
    </div>
</div>

</body>
</html>
