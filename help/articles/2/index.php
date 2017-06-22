<?php
// connect to the database
require('../../../connect.php');

$id = 2;

// query the database to get
// all of the entries in the database

$entriesSQL = "SELECT * FROM kb WHERE id='$id'";
$entriesResult = $conn->query($entriesSQL);
$row = $entriesResult->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/main.css" type="text/css">
    <script src="../../../js/jquery-3.2.1.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php require("../../../includes/nav.php"); ?>
<div class="content">
    <div class="jumbotron">
        <div class="container">
            <h1><?php echo("<h1>". $row['title'] ."</h1>"); ?></h1>
            <p><?php echo("<h4><b>". $row['date']. "</b></h4>"); ?></p>
        </div>
    </div>
    <div class="container">
        <?php echo($row['body']); ?>
        <?php require "../../../includes/footer.php"; ?>
    </div>
</div>
</body>
</html>