<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>About EQ Test</title>
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
            max-width: 960px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-size: 3.5rem;
            text-shadow: 0 0 30px #00ffff;
            margin-bottom: 50px;
        }
        .section {
            background: rgba(15,10,45,0.5);
            border: 1px solid #00ffff44;
            border-radius: 16px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 0 40px rgba(0,255,255,0.18);
        }
        h2 {
            color: #00ffff;
            margin-bottom: 25px;
            font-size: 2rem;
            text-shadow: 0 0 15px #00ffff;
        }
        p, li {
            line-height: 1.8;
            font-size: 1.15rem;
            margin-bottom: 18px;
        }
        .back-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 40px;
            font-size: 1.2rem;
            color: #00ffff;
            border: 2px solid #00ffff;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.4s;
        }
        .back-btn:hover {
            background: #00ffff20;
            box-shadow: 0 0 45px #00ffff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>About Emotional Intelligence</h1>

    <div class="section">
        <h2>What is Emotional Intelligence (EQ)?</h2>
        <p>Emotional Intelligence is the ability to:</p>
        <ul>
            <li>Recognize, understand, and manage your own emotions</li>
            <li>Recognize and influence the emotions of others</li>
            <li>Use emotional information to guide thinking and behavior</li>
            <li>Adapt to different social environments</li>
        </ul>
    </div>

    <div class="section">
        <h2>Why does EQ matter?</h2>
        <p>Research shows that EQ often predicts success in life more than IQ. People with high emotional intelligence tend to have:</p>
        <ul>
            <li>Better relationships and communication</li>
            <li>Higher job performance and leadership ability</li>
            <li>Stronger mental health and stress management</li>
            <li>Greater life satisfaction</li>
        </ul>
    </div>

    <div class="section">
        <h2>About this test</h2>
        <p>This quick EQ assessment is inspired by common emotional intelligence frameworks (Goleman, Mayer-Salovey, Bar-On). It measures key areas:</p>
        <ul>
            <li>Self-awareness</li>
            <li>Self-regulation</li>
            <li>Motivation</li>
            <li>Empathy</li>
            <li>Social skills</li>
        </ul>
        <p style="margin-top:25px;">The test is not a clinical diagnostic tool — it's for self-reflection and personal growth.</p>
    </div>

    <div style="text-align:center;">
        <a href="index.php" class="back-btn">← Back to Home</a>
    </div>
</div>

</body>
</html>
