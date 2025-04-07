<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $event = $_POST['event'];

  $data = "$name,$contact,$email,$password,$event\n";
  file_put_contents("users.txt", $data, FILE_APPEND);

  header("Location: login.html");
  exit();
}
?>
