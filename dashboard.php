<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
  <p>This is your dashboard.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
