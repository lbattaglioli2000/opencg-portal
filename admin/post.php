<?php

require('../connect.php');

// Store POST data in separate variables
$userID = $_POST['userID'];
$score = $_POST['score'];
$url = $_POST['url'];

$studentSql = "UPDATE students SET post='$score',postURL='$url' WHERE userID='$userID';";

if(mysqli_query($conn, $studentSql)){
    header("Location: index.php");
}else{
    echo ("Hmm. An error occurred while updating the records. Please go back and try again, <a href=\"index.php\">here!</a>");
}

?>