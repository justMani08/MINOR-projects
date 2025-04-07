<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $lines = file("users.txt");

  foreach ($lines as $line) {
    list($name, $contact, $storedEmail, $storedPass, $event) = explode(",", trim($line));

    if ($email == $storedEmail && $password == $storedPass) {
      header("Location: home.php");
      exit();
    }
  }

  echo "<script>alert('Invalid login credentials'); window.location.href = 'login.html';</script>";
}
?>
