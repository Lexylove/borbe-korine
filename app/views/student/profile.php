<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!-- TARGET FILE: app/views/student/profile.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Profile</title>
<style>
  :root {
    --bg-1: #0f172a;
    --bg-2: #1e293b;
    --accent: #f8387e;
    --accent-2: #a78bfa;
    --card: rgba(255,255,255,0.06);
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
    margin-bottom: 32px;
    background: rgba(255,255,255,0.06);
    padding: 12px 28px;
    border-radius: 999px;
  }
  nav a { color: var(--text); text-decoration: none; font-weight: 600; }
  nav a:hover { color: var(--accent); }
  .notice {
    background: rgba(250,204,21,0.12);
    border: 1px solid rgba(250,204,21,0.4);
    color: #fde68a;
    padding: 12px 18px;
    border-radius: 10px;
    margin-bottom: 20px;
    max-width: 480px;
    text-align: center;
  }
  .card {
    background: var(--card);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 18px;
    padding: 32px 36px;
    max-width: 480px;
    width: 100%;
  }
  .card .id-tag {
    display: block;
    margin-bottom: 8px;
    font-size: 0.8rem;
    color: var(--muted);
    letter-spacing: 2px;
  }
  .card h1 {
    margin: 0 0 20px;
    font-size: 1.6rem;
    background: linear-gradient(90deg, var(--accent), var(--accent-2));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }
  dl { margin: 0; }
  dl div {
    display: flex;
    justify-content: space-between;
    gap: 16px;
    padding: 10px 0;
    border-bottom: 1px solid rgba(255,255,255,0.07);
  }
  dl div:last-child { border-bottom: none; }
  dt { color: var(--muted); font-weight: 500; }
  dd { margin: 0; font-weight: 600; text-align: right; }
  .bio { margin-top: 20px; color: var(--muted); line-height: 1.5; }
</style>
</head>
<body>

  <nav>
    <a href="<?= site_url('student') ?>">Home</a>
    <a href="<?= site_url('student/profile') ?>">Student Profile</a>
  </nav>


  <div class="card">
    <span class="id-tag">STUDENT INFORMATION</span>
    <h1><?= htmlspecialchars($name) ?></h1>

    <dl>
      <div><dt>Student ID</dt><dd><?= htmlspecialchars($student_id) ?></dd></div>
      <div><dt>Course</dt><dd><?= htmlspecialchars($course) ?></dd></div>
      <div><dt>Year Level</dt><dd><?= htmlspecialchars($year) ?></dd></div>
      <div><dt>Section</dt><dd><?= htmlspecialchars($section) ?></dd></div>
      <div><dt>Email</dt><dd><?= htmlspecialchars($email) ?></dd></div>

      <!-- Optional extras — delete any of these you don't want -->
      <div><dt>Address</dt><dd><?= htmlspecialchars($address) ?></dd></div>
      <div><dt>Contact</dt><dd><?= htmlspecialchars($contact) ?></dd></div>
      <div><dt>Skills / Hobbies</dt><dd><?= htmlspecialchars($skills) ?></dd></div>
    </dl>

    <!-- Optional bio — delete this block if you don't want it -->
    <p class="bio"><?= htmlspecialchars($bio) ?></p>
  </div>

</body>
</html>
