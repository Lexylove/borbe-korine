<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!-- TARGET FILE: app/views/users/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', system-ui, sans-serif;
    background: #0f172a;
    color: #e2e8f0;
    padding: 48px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  h1 {
    margin-bottom: 24px;
    background: linear-gradient(90deg, #38bdf8, #a78bfa);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }
  table {
    border-collapse: collapse;
    width: 100%;
    max-width: 720px;
    background: rgba(255,255,255,0.04);
    border-radius: 12px;
    overflow: hidden;
  }
  th, td {
    padding: 12px 18px;
    text-align: left;
  }
  th {
    background: rgba(255,255,255,0.08);
    color: #94a3b8;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  tbody tr:nth-child(even) { background: rgba(255,255,255,0.03); }
  tbody tr:hover { background: rgba(56,189,248,0.08); }
</style>
</head>
<body>

  <h1>Registered Users</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($users)): ?>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['firstname']) ?></td>
            <td><?= htmlspecialchars($user['lastname']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="5">No users found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>

</body>
</html>
