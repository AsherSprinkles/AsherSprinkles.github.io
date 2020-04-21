<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DBserver = "mysql.cs.uky.edu";
$DBuser = "casp233";
$DBpass = "guitar zipper window";

$conn = new mysqli($DBserver, $DBuser, $DBpass);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["user"];
$password_plain = $_POST["pass"];

$sql = "SELECT password FROM users WHERE username='$username'";

// Select database
$conn->query("USE casp233");
echo "Generated SQL query is: <br>";
echo $sql;
echo "<br><br>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $password_hashed = $result->fetch_assoc()["password"];

  if (password_verify($password_plain, $password_hashed)) {
      echo 'Password is valid!';
  } else {
      echo 'Invalid password.';
  }
  echo '<form action="./index.html">';
  echo '    <br><button type="submit">Back to Login</button> ';
  echo '</form>';
}

echo "<br>done";
?>
