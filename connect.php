<?php

$servername = "localhost";
$username = "lbattaglioli2000";
$password = "";
$db = "opencg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}