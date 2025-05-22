<?php
// Start session
session_start();

// Connect to DB (use your own config)
$conn = new mysqli("localhost", "root", "", "event_platform");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();

    // Redirect to login after registration
    header("Location: login.html");
    exit();
}
?>