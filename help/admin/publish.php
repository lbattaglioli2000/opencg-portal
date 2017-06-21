<?php
// connect to DB
require('../../connect.php');
// store input in separate variables
$title = $_POST['title'];
$description = $_POST['description'];
$body = $_POST['body'];
// SQL statements
$writeDataSQL = "INSERT INTO kb (title, description, body) VALUES ($title, $description, $body);";
// confirm write to DB
if($conn->query($writeDataSQL)){
    $getIdSQL = "SELECT id FROM kb WHERE title='$title'";
    if($conn->query($getIdSQL)) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $newPage = fopen("../articles/".$id.".php", "w");
        fwrite($newPage, "Hey.");
        fclose($newPage);
    }
}