<?php

require('../connect.php');

// Store POST data in separate variables
$userID = $_POST['userID'];
$score = $_POST['score'];
$url = $_POST['url'];

$studentSql = "UPDATE students SET pre='$score',preURL='$url' WHERE userID='$userID';";

if(mysqli_query($conn, $studentSql)){
    header("Location: 1"); 
}else{
    echo ("Hmm. An error occured while updating the records. Please try again <a href=\"1\">here!</a>");
}

?>