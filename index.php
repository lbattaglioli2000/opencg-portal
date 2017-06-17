<!DOCTYPE html>
<html>
    <head>
        <title>OpenCG Portal</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php require("includes/nav.php"); ?>
        <div class="content">
            <div class="jumbotron">
                <div class="container">
                    <h1>Welcome to the OpenCG Portal.</h1>
                    <p>Here you can register as an institution or student. Get started below!</p>
                </div>
            </div>
            <div class="container">
                <h1>Register</h1>
                <p>We have two roles you can register as. To get started, please select a role below.</p>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Student</h3>
                                <p>By registering as a student, you're added to a database and we can easily update your exam
                                    information and scores. As a student, simply by entering your student ID, you're able to check your
                                    scores instantaneously.</p>
                                <p><a href="/register/student" class="btn btn-primary" role="button">Register</a> <a href="/check/student" class="btn btn-default" role="button">Check Your Score</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>School or Other Institution</h3>
                                <p>By registering as an institution, we keep track of your school/institution
                                    rating and average score. This allows you to easily view this information. We're working on making
                                    this data driven application work with more demographics and data as well.</p>
                                <p><a href="/register/institution" class="btn btn-primary" role="button">Register</a> <a href="/check/institution" class="btn btn-default" role="button">Check Institution Score</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="help" class="btn btn-block btn-primary btn-lg">Need help?</a>
                    </div>
                </div>
                <?php require "includes/footer.php"; ?>
            </div>
        </div>
    </body>
</html>