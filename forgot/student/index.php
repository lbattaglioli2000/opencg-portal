<!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG Student ID Recovery</title>
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
                <h1>Forgot your Student ID?</h1>
                <p>No need to worry. Just fill out this form and, if you're registered, you'll be given your ID number.</p>
            </div>
        </div>
        <div class="container">
            <div class="well">
                <form action="id.php" method="POST">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control"/>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg">Find my ID</button>
                </form>
            </div>
            <?php require "../../includes/footer.php"; ?>
        </div>
    </div>
    </body>
    </html>