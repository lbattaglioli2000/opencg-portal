<?php
// connect to the database
require('../connect.php');

$search = $_POST['search'];

// query the database to get
// all of the entries in the database

$entriesSQL = "SELECT * FROM kb WHERE title LIKE '%{$search}%' OR body LIKE '%{$search}%' OR description LIKE '%{$search}%'";
$entriesResult = $conn->query($entriesSQL);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results: <?php echo $search; ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php require("../includes/nav.php"); ?>
<div class="content">
    <div class="jumbotron">
        <div class="container">
            <h1>Here's what we found...</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                if($entriesResult->num_rows == 0){
                    echo("<img src='../includes/26514689.jpg'>");
                }else {
                    echo "<h1>Results for <small>".$search."</small></h1>";
                    while ($row = $entriesResult->fetch_assoc()) {
                        echo("<div class=\"panel panel-default\"><div class=\"panel-body\"><h2>" . $row['title'] . "</h2><h4>" . $row['date'] . "</h4><p>" . $row['description'] . "</p><a href='" . $row['url'] . "' class='btn btn-lg btn-primary'>Go to article</a></div></div>");
                    }
                }

                ?>
            </div>
        </div>

        <?php require "../includes/footer.php"; ?>
    </div>
</div>
</body>
</html>