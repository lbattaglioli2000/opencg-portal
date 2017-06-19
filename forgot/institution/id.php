<?php

require('../../connect.php');

// Store POST data in separate variables
$email = strtolower($_POST['email']);
$name = ucwords($_POST['name']);

$sql = "SELECT * FROM teacher WHERE email='$email' AND adminName='$name'";
$id = mysqli_query($conn, $sql);

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG School ID Recovery</title>
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
                <h1>Forgot your School ID?</h1>
                <p>No need to worry. Just fill out this form and, if you're registered, you'll be given your ID number.</p>
            </div>
        </div>
        <div class="container">
            <h1>Here's what we found...</h1>
            <div class="well">
                <?php
                if($id->num_rows == 0){
                    echo("<div class=\"alert alert-danger\">
                        <p><b>Hmm...</b> We don't seem to have any records of you being a registered institution.</p>
                      </div>");
                }else{
                    $school = $id->fetch_assoc();
                    echo("<h3>School Name: <small>". $school["schoolName"] ."</small></h3>
                    <h3>Admin/Teacher Name: <small>". $school["adminName"] ."</small></h3>
                    <h3>Contact Email: <small>". $school["email"] ."</small></h3>");
                    echo("<div class=\"alert alert-success\">
                        <p>Your OpenCG School ID is:</p><h3>". $school['schoolID'] ."</h3>
                      </div>");
                }
                ?>
            </div>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>

<?php

//Do DB shit before this comment!
mysqli_close($conn);

?>