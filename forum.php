<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$filename = "./data.html";
$filehand = fopen($filename, "a") or die("Unable to open file!");

// Get data from POST
$user = $_POST["user"];
$text = $_POST["message"];

fwrite($filehand, "<h1>".$user."</h1>\n");
fwrite($filehand, "<p>".$text."</p>\n");

header("Location: http://www.cs.uky.edu/~casp233/CS395/data.html");