<?php

require('../../connect.php');

// Store POST data in separate variables
$userID = $_POST['userID'];

$sql = "SELECT * FROM students WHERE userID='$userID'";
$result = mysqli_query($conn, $sql);
$school = $result->fetch_assoc();

?>


<!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG Student Exam Scores</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../../css/main.css" type="text/css">
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php require("../../includes/nav.php"); ?>
    <div class="content">
        <div class="jumbotron">
            <div class="container">
                <?php if($result->num_rows != 0){
                    echo "<h1>Welcome, " . $school['userName'] . ".</h1><p>Below you can find a table of all your scores. We will, eventually, have a place for you to download a graded copy of your exam so you can see what you got wrong.</p>";
                }else{
                    echo "<h1>Hmm...</h1><p>Something went wrong. We couldn't seem to locate your student record. Please ensure you entered the correct OpenCG Student ID.</p>";
                }
                ?>
            </div>
        </div>
        <div class="container">
            <?php 
            if($result->num_rows != 0){
                echo "
                    <h1>".$school["userName"]."'s Exam Scores</h1>
                    <table class=\"table table-bordered\">
                        <tr><thead class=\"thead-inverse\"><th></th><th>Score</th><th>Download</th></thead></tr>
                        <tr><th>Pre-Test</th><td>".$school['pre']."%</td><td><a href=\"". $school['preURL'] ."\" class=\"btn btn-primary disabled\">Download</a></td></tr>
                        <tr><th>Midterm</th><td>".$school['mid']."%</td><td><a href=\"". $school['midURL'] ."\" class=\"btn btn-primary disabled\">Download</a></td></tr>
                        <tr><th>Post-Test</th><td>".$school['post']."%</td><td><a href=\"". $school['postURL'] ."\" class=\"btn btn-primary disabled\">Download</a></td></tr>
                    </table>
                    <h2>See something wrong?</h2>
                    <p>If you're reviewing the PDF version of your graded exam and you see something that looks incorrect or you don't understand, please reach out to us!</p>
                    <a href=\"mailto:luigi@code-geek.pe.hu\" class=\"btn btn-primary btn-lg\">Contact us!</a>
                ";
            }else{
                echo "<h1>Now what?</h1>
                <p>Please return to our Exam Score Portal and enter your ID again. If that doesn't work, please visit the ID recovery page. If none of these work, please contact us.</p>
                <p><a href=\"../index.php\" class=\"btn btn-lg btn-primary\">Step 1: Exam Score Portal</a> <a href=\"../../forgot/student\" class=\"btn btn-lg btn-primary\">Step 2: ID Recovery</a> <a href=\"mailto:luigi@code-geek.pe.hu\" class=\"btn btn-lg btn-primary\">Step 3: Contact Us</a></p>";
            }
            ?>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>