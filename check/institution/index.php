<?php

require('../../connect.php');

// Store POST data in separate variables
$schoolID = $_POST['schoolID'];

$studentSql = "SELECT * FROM students WHERE schoolID='$schoolID'";
$studentsResult = mysqli_query($conn, $studentSql);

$teacherSql = "SELECT * FROM teacher WHERE schoolID='$schoolID'";
$teacherResult = mysqli_query($conn, $teacherSql);
$school = $teacherResult->fetch_assoc();


// you'll need to loop this!
// --->  $students = $result->fetch_assoc();

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
                <?php if($teacherResult->num_rows != 0){
                    echo "<h1>Welcome, " . $school['adminName'] . ".</h1><p>Below you can find a table of all the exams taken (and registered) at your school/institution. There will be a series of tables, some of which are coming soon, and they will give you some insight about your schools performance.</p>";
                }else{
                    echo "<h1>Hmm...</h1><p>Something went wrong. We couldn't seem to locate a school in our database with the provided OpenCG School ID. Please ensure you entered the correct OpenCG School ID.</p>";
                }
                ?>
            </div>
        </div>
        <div class="container">
            <?php
            if($studentsResult->num_rows != 0){
                echo "<h1>".$school["schoolName"]."'s Exam Scores</h1>";
                echo "<table class=\"table table-bordered\">
                    <tr><thead class=\"thead-inverse\"><th></th><th>Pre-test</th><th>Midterm</th><th>Post-test</th></thead></tr>";
                    while($row = $studentsResult->fetch_assoc()){
                        echo "<tr><td>". $row["userName"] ."</td><td>". $row["pre"] ."</td><td>". $row["mid"] ."</td><td>". $row["post"] ."</td></tr>";
                    }
                echo "</table>";
            }else if($teacherResult->num_rows == 0){
                echo "<h1>Now what?</h1>";
                echo "<p>Please return to our Exam Score Portal and enter your ID again. If that doesn't work, please visit the ID recovery page. If none of these work, please contact us.</p>
                <p><a href=\"../index.php\" class=\"btn btn-lg btn-primary\">Step 1: Exam Score Portal</a> <a href=\"../../forgot/institution\" class=\"btn btn-lg btn-primary\">Step 2: ID Recovery</a> <a href=\"mailto:luigi@code-geek.pe.hu\" class=\"btn btn-lg btn-primary\">Step 3: Contact Us</a></p>";
            }else{
                echo "<h1>Looks like we've got nothin' to show ya.</h1>";
                echo "<p>It seems that we have no data from your school in our databases! Administer one (or more!) of our exams, 
                get them graded, and then check back! If you already have given at least one of our exams, then your students 
                must not have supplied their OpenCG Student ID on their exam answer booklet. This identification number allows us to 
                correlate information within our databases, and when a student doesn't provied this information, they will not show up 
                due to the fact that they wanted to keep their scores confidential.</p>";
                echo "<p>If you really wish to see a students exam results, you can reach out to us and make a request for a copy 
                of their exam. You must however, have the students permission to obtain a copy of their examination.</p>";
            }
            ?>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>