<?php

// connect to DB
require('../../connect.php');

// store input in separate variables
$title = $_POST['title'];
$description = $_POST['description'];
$body = $_POST['body'];
$published = date('l jS \of F Y h:i:s A');

// SQL statements
$writeDataSQL = "INSERT INTO kb (published, title, description, body) VALUES ('$published', '$title', '$description', '$body')";
$conn->query($writeDataSQL);

// confirm write to DB
//if($conn->query($writeDataSQL)){
    //echo ("Worked.");
/*    $getIdSQL = "SELECT id FROM kb WHERE title='$title'";
    if($result = $conn->query($getIdSQL)) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $readDataSQL = "INSERT INTO kb (url) VALUES ('articles/$id') WHERE id='$id'";
        mysqli_query($conn, $readDataSQL);
    }*/
//}