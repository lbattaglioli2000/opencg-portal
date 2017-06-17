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
                    <h1>Welcome to the OpenCG Student Registration Portal.</h1>
                </div>
            </div>
            <div class="container">
                <h1>Register</h1>
                <p>Welcome student! We here at CodeGeek are so glad you're registering. You're helping us make a better
                teaching framework by registering with us. Also, by registering through OpenCG, you will be able to see
                how you do on our examinations. This will hopefully give you a deeper sense of understanding with you
                knowledge of code. So, let's get started! Please fill out the form below.</p>
                <form action="register.php" method="post">
                    <div class="input-group">
                        <label>Name</label>
                        <input name="userName" type="text" class="form-control" placeholder="Johny Appleseed" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" placeholder="jappleseed@example.com" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label>OpenCG School ID</label>
                        <input name="schoolID" type="text" class="form-control" placeholder="123456">
                    </div>
                    <br>
                    <div class="input-group">
                        <label>School name if OpenCG ID is not applicable</label>
                        <input name="schoolName" type="text" class="form-control" placeholder="School name" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <button type="submit" class="btn btn-lg btn-primary">Register</button>
                    </div>
                </form>
                <?php require "../../includes/footer.php"; ?>
            </div>
        </div>
    </body>
</html>