<!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG Exam Score Portal</title>
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
                <h1>Exam Score Portal</h1>
                <p>Curious about your exam score? Enter your OpenCG ID for your registered role, whether that be a teacher at an institution or a student.</p>
                <a class="btn btn-primary btn-lg" href="../register">Not Registered? Register</a>
            </div>
        </div>
        <div class="container">
            <h1>Login</h1>
            <p>All exams are usually graded within two weeks of exam completion and the grades are usually added to our database shortly after. If you're not a registered student or institution, please register.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <h2>Student?</h2>
                        <form method="post" action="student/index.php">
                            <div class="input-group" style="width: 100%;">
                                <label>OpenCG Student ID</label>
                                <input name="userID" type="text" class="form-control" placeholder="123456" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary">Check Score</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <h2>School or other Institution?</h2>
                        <form method="post" action="institution/index.php">
                            <div class="input-group" style="width: 100%;">
                                <label>OpenCG School ID</label>
                                <input name="schoolID" type="text" class="form-control" placeholder="123456" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary">Check Score</button>
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