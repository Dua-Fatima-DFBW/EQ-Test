<?php
session_start();
require_once 'db.php';

// Simple message handling (from login/signup/logout)
$message = isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>EQ Test • Emotional Intelligence Assessment</title>
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    
    <!-- Our custom CSS -->
    <link rel="stylesheet" href="home.css?v=<?= time() ?>">
</head>
<body>

    <div class="stars"></div>
    <div class="nebula"></div>

    <header class="header">
        <div class="logo">EQ<span>Test</span></div>
        <nav class="nav">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php" class="nav-link">Dashboard</a>
                <a href="logout.php" class="nav-link logout">Logout</a>
            <?php else: ?>
                <a href="#login" class="nav-link">Login</a>
                <a href="#signup" class="nav-link">Sign Up</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="hero">
        <div class="hero-content">
            <h1>Discover Your <span>Emotional Intelligence</span></h1>
            <p class="tagline">
                Understand yourself better. Build stronger relationships.  
                Lead with empathy. Take the EQ test in just a few minutes.
            </p>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="quiz.php" class="cta-button glow">Start / Retake Test</a>
            <?php else: ?>
                <a href="#signup" class="cta-button glow">Get Started Now</a>
            <?php endif; ?>

            <?php if ($message): ?>
                <div class="alert-message"><?= $message ?></div>
            <?php endif; ?>
        </div>
    </main>

    <section class="features">
        <div class="feature-card">
            <div class="icon">🧠</div>
            <h3>Self-Awareness</h3>
            <p>Recognize your emotions and understand their impact on your thoughts and behavior.</p>
        </div>
        <div class="feature-card">
            <div class="icon">⚖️</div>
            <h3>Self-Regulation</h3>
            <p>Manage disruptive emotions, adapt to change, and stay in control under pressure.</p>
        </div>
        <div class="feature-card">
            <div class="icon">🤝</div>
            <h3>Empathy & Social Skills</h3>
            <p>Understand others' feelings and build stronger, more meaningful relationships.</p>
        </div>
    </section>

    <section class="auth-section" id="signup">
        <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="auth-container">
                <div class="auth-box signup-box">
                    <h2>Create Account</h2>
                    <form action="process_signup.php" method="post">
                        <input type="text" name="username" placeholder="Username" required autocomplete="off">
                        <input type="email" name="email" placeholder="Email" required autocomplete="off">
                        <input type="password" name="password" placeholder="Password" required autocomplete="off">
                        <button type="submit" class="auth-btn">Sign Up</button>
                    </form>
                </div>

                <div class="auth-box login-box" id="login">
                    <h2>Login</h2>
                    <form action="process_login.php" method="post">
                        <input type="email" name="email" placeholder="Email" required autocomplete="off">
                        <input type="password" name="password" placeholder="Password" required autocomplete="off">
                        <button type="submit" class="auth-btn login">Login</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <footer>
        <p>© <?= date("Y") ?> EQ Test • Personal Growth Tool</p>
        <div class="footer-links">
            <a href="about.php">About EQ</a>
            <a href="instructions.php">How It Works</a>
        </div>
    </footer>

</body>
</html>
