<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "opencg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Please try your request again later. Also email <a href='luigi@opencg.pe.hu'>luigi@opencg.pe.hu to inform 
          us of the issues taking place.";
}