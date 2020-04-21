<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DBserver = "mysql.cs.uky.edu";
$DBuser = "casp233";
$DBpass = "guitar zipper window";

// Connect to database
$conn = new mysqli($DBserver, $DBuser, $DBpass);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select database
$conn->query("USE casp233");

// Get data from POST
$search = $_POST["search"];

echo $search;
