<?php

require('../../connect.php');

// Random 6 digit user ID
$schoolID = mt_rand(100000, 999999);
$result = $conn->query("SELECT FROM teachers WHERE schoolID = '$schoolID'");
// Get unique ID and make sure it doesn't exist. If it does exist, get a new one. Though the probability of it existing is little to none.
while($result->num_rows != 0){
    $schoolID = mt_rand(100000, 999999);
    $result = $conn->query("SELECT schoolID FROM students WHERE schoolID = '$schoolID'");
}

// Store POST data in separate variables
$schoolName = ucwords($_POST['schoolName']);
$email = strtolower($_POST['email']);
$adminName = ucwords($_POST['adminName']);


// Insert data into database
$sql = "INSERT INTO teacher (schoolID, schoolName, adminName, email)
VALUES ('$schoolID', '$schoolName', '$adminName', '$email')";

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG Institution Registration</title>
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
                <h1>Registration Successful!</h1>
                <p>We're gonna throw some information at you, you better write this all down.</p>
            </div>
        </div>
        <div class="container">
            <?php
            if (mysqli_query($conn, $sql)) {
                echo("<div class=\"alert alert-success\">
                        <p><b>Way to go!</b> You've successfully registered as an institution! We recommend that you print out this
                page and keep if for your records.</p>
                      </div>");
            }
            ?>

            <h1>Student Information</h1>
            <div class="well">
                <h3>School Name: <small><?php echo $schoolName; ?></small></h3>
                <h3>OpenCG School ID: <small><?php echo $schoolID; ?></small></h3>
                <h3>Teacher/Admin Name: <small><?php echo $adminName; ?></small></h3>
                <h3>Contact Email: <small><?php echo $email; ?></small></h3>
            </div>
            <h1>What is all this?</h1>
            <p>You will need this information because this is what lets you access your school/institution examination scores. Once your students take
            one of our exams, and it's been graded, the score will be processed and added to a database. You will be able
            to access the database and get scores and information specific to your school alone.</p>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>

<?php

//Do DB shit before this comment!
mysqli_close($conn);

?>