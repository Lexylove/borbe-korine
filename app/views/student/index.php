<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!-- TARGET FILE: app/views/student/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars('Student Home') ?></title>
<style>
  :root {
    --bg-1: #0f172a;
    --bg-2: #1e293b;
    --accent: #f8387e;
    --accent-2: #a78bfa;
    --text: #e2e8f0;
    --muted: #94a3b8;
  }
  * { box-sizing: border-box; }
  body {
    margin: 0;
    font-family: 'Segoe UI', system-ui, sans-serif;
    background: linear-gradient(135deg, var(--bg-1), var(--bg-2));
    color: var(--text);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 48px 20px;
  }
  nav {
    display: flex;
    gap: 24px;
    margin-bottom: 48px;
    background: rgba(255,255,255,0.06);
    padding: 12px 28px;
    border-radius: 999px;
  }
  nav a {
    color: var(--text);
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 0.3px;
  }
  nav a:hover { color: var(--accent); }
  .hero { text-align: center; max-width: 560px; }
  .hero h1 {
    font-size: 2.4rem;
    margin-bottom: 12px;
    background: linear-gradient(90deg, var(--accent), var(--accent-2));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }
  .hero p { color: var(--muted); line-height: 1.6; }
  .btn {
    display: inline-block;
    margin-top: 28px;
    padding: 12px 28px;
    border-radius: 10px;
    background: var(--accent);
    color: #0f172a;
    font-weight: 700;
    text-decoration: none;
    transition: transform 0.15s, box-shadow 0.15s;
  }
  .btn:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(56,189,248,0.35); }
</style>
</head>
<body>

  <nav>
    <a href="<?= site_url('student') ?>">Home</a>
    <a href="<?= site_url('student/profile') ?>">Student Profile</a>
  </nav>

  <div class="hero">
    <h1><?= htmlspecialchars('Student Information Page') ?></h1>
    <p>This mini student portal was built with LavaLust: a route, a controller, a view, and a middleware-protected profile page.</p>
    <a class="btn" href="<?= site_url('student/profile') ?>">View My Profile →</a>
  </div>

</body>
</html>
