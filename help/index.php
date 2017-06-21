<?php
// connect to the database
require('../connect.php');

// query the database to get
// all of the entries in the database
$entriesSQL = 'SELECT * FROM kb';
$entriesResult = $conn->query($entriesSQL);

?>

<!DOCTYPE html>
<html>
<head>
    <title>OpenCG Help Center</title>
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
            <h1>Welcome to the OpenCG Help Portal.</h1>
            <p>Here you are able to find a large variety of helpful articles that may help make your OpenCG experience better.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Help Articles</h1>
                <?php
                /* fetch associative array
                 * for each row:
                 *      display the values in HTML
                 */

                while ($row = $entriesResult->fetch_assoc()) {
                    echo("<div class=\"panel panel-default\">
              <div class=\"panel-body\">
                <h2>". $row['title'] ."</h2>
                <h4>". $row['date'] ."</h4>
                <p>". $row['description'] ."</p>
                <a href='". $row['url'] ."' class='btn btn-lg btn-primary'>Go to article</a>
              </div>
            </div>");
                }

                ?>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h3>Not finding something? Try a search!</h3>
                    <h4><span class="label label-warning">In Beta</span></h4>
                    <br>
                    <form>
                        <div class="input-group" style="width: 100%">
                            <label>Search</label>
                            <input name="search" type="text" class="form-control" placeholder="How to register as an institution..." required>
                        </div>
                        <br>
                        <div class="input-group">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php require "../includes/footer.php"; ?>
    </div>
</div>
</body>
</html>