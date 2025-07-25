<?php
include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $_SESSION['username'] = $username;
    echo "<h2>Login successful! Welcome, $username.</h2>";
  } else {
    echo "<h2>Invalid credentials</h2>";
  }
}
?>
