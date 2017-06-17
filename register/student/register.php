<?php
/**
 * Created by PhpStorm.
 * User: Luigi Battaglioli
 * Date: 6/11/2017
 * Time: 9:10 PM
 */

$servername = "localhost";
$username = "root";
$password = "snickers123";
$db = "opencg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Random 6 digit user ID
$userID = mt_rand(100000, 999999);
$result = $conn->query("SELECT FROM students WHERE userID = '$userID'");
// Get unique ID and make sure it doesn't exist. If it does exist, get a new one. Though the probability of it existing is little to none.
while($result->num_rows != 0){
    $userID = mt_rand(100000, 999999);
    $result = $conn->query("SELECT id FROM students WHERE id = '$userID'");
}

// Store POST data in separate variables
$userName = $_POST['userName'];
$email = $_POST['email'];
$schoolID = $_POST['schoolID'];
$schoolName = $_POST['schoolName'];

// Check for existing email, and name combo and return the OpenCG ID for that combo.
$existingQuery = "SELECT FROM students WHERE email = '$email'";
$existing = $conn->query($existingQuery);
// Get the preexisting ID if it's found already in the database.
if($existing->num_rows > 0){
    $row = $existing->fetch_assoc();
    $userID = $row['userID'];
}

// Insert data into database
$sql = "INSERT INTO students (userID, userName, email, schoolID, schoolName)
VALUES ('$userID', '$userName', '$email', '$schoolID', '$schoolName')";

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
                <p>We're gonna throw some information at you, you better write this all down...</p>
            </div>
        </div>
        <div class="container">
            <?php
            if(!exists) {
                if (mysqli_query($conn, $sql)) {
                    echo("<div class=\"alert alert-success\">
                        <p><b>Way to go, " . $userName . "!</b> You've successfully registered as a student! We recommend that you print out this
                page and keep if for your records.</p>
                      </div>");
                } else {
                    echo("<div class=\"alert alert-danger\">
                <p><b>Uh-oh!</b> Something happened! Try your request again..?</p>
              </div>");
                }
            } elseif($exists) {
                echo("<div class=\"alert alert-info\">
                <p><b>Hey there!</b> Looks like you already have an account! Here's your information in case you forgot!</p>
              </div>");
            }
            ?>

            <h1>Student Information</h1>
            <div class="well">
                <h3>Name: <small><?php echo $userName; ?></small></h3>
                <h3>OpenCG Student ID: <small><?php echo $userID; ?></small></h3>
                <h3>School: <small><?php echo $schoolName; ?></small></h3>
                <h3>Email: <small><?php echo $email; ?></small></h3>
            </div>
            <h1>What is all this?</h1>
            <p>You will need this information because this is what lets you access your examination scores. Once you take
            one of our exams, and it's been graded, the score will be processed and added to a database. You will be able
            to access the database to get your score by entering your OpenCG Student ID.</p>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>

<?php
//Do DB shit before this comment!
mysqli_close($conn);
?>