<?php

require('../../connect.php');

// Random 6 digit user ID
$userID = mt_rand(100000, 999999);
$result = $conn->query("SELECT FROM students WHERE userID = '$userID'");
// Get unique ID and make sure it doesn't exist. If it does exist, get a new one. Though the probability of it existing is little to none.
while($result->num_rows != 0){
    $userID = mt_rand(100000, 999999);
    $result = $conn->query("SELECT id FROM students WHERE userId = '$userID'");
}

// Store POST data in separate variables
$userName = ucwords($_POST['userName']);
$email = strtolower($_POST['email']);
$schoolID = $_POST['schoolID'];
$schoolName = ucwords($_POST['schoolName']);

if(!empty($userName) && !empty($email) && !empty($schoolName)){
    // Insert data into database
    $sql = "INSERT INTO students (userID, userName, email, schoolID, schoolName)
VALUES ('$userID', '$userName', '$email', '$schoolID', '$schoolName')";

    if (mysqli_query($conn, $sql)) {
        $registered = true;
        $toAddress = $email;
        $subject = "OpenCG Student Registration: " . $userName;
        $emailBody = "Hello there, " . $userName . "!\nWe are excited to have you registered as a student here at CodeGeek! We just wanted to confirm with you, the information you registered with!\nName: " . $userName . "\nEmail: " . $email . "\nYour OpenCG ID: " . $userID . "\nSchool: " . $schoolName. "\n\nThank you again for registering with us! If you need any sort of help, please visit the help center on the OpenCG Portal.\n\nSincerely,\nLuigi @ CodeGeek";
        $fromAddress = "From: luigi@opencg.pe.hu";
        mail($toAddress, $subject, $emailBody, $fromAddress);
    }else{
        $registered = false;
    }
}else{
    $registered = false;
}

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG Student Registration</title>
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
            if ($registered) {
                echo("<div class=\"alert alert-success\">
                        <p><b>Way to go, " . $userName . "!</b> You've successfully registered as a student! We recommend that you print out this
                page and keep if for your records.</p>
                      </div>");
            }else{
                echo("<div class=\"alert alert-warning\">
                        <p><b>Hmm...</b> Something went wrong and we weren't able to add you to our registry. Please <a href='index.php'>go back</a> and try again!</p>
                      </div>");
            }
            ?>

            <h1>Student Information</h1>
            <?php
            if ($registered){
                echo ("
                <div class=\"well\">
                <h3>Name: <small>".$userName."</small></h3>
                <h3>OpenCG Student ID: <small>".$userID."</small></h3>
                <h3>School: <small>".$schoolName."</small></h3>
                <h3>Email: <small>".$email."</small></h3>
            </div>
            <h1>What is all this?</h1>
            <p>You will need this information because this is what lets you access your examination scores. Once you take
            one of our exams, and it's been graded, the score will be processed and added to a database. You will be able
            to access the database to get your score by entering your OpenCG Student ID.</p>
            <h1>We emailed you all of this too...</h1>
            <p>We sent a copy of this information to you. There's a good chance (because of the way we developed this portal) that our email is in your spam folder. The email should have come from <a href='mailto:luigi@opencg.pe.hu'>luigi@opencg.pe.hu</a>.</p>
                ");
            }else{
                echo (
                        "<div class='well'>
                            <h2>We apologize...</h2>
                            <p>Unfortunately, we were unable to process your request. Please go back and try again!</p>
                            <a class='btn btn-lg btn-primary' href='index.php'>Go back</a>
                         </div>
                        "
                );
            }
            ?>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>

<?php
//Do DB shit before this comment!
mysqli_close($conn);
?>