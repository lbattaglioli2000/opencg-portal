<!DOCTYPE html>
<html>
    <head>
        <title>OpenCG Institution Registration</title>
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
                    <h1>Welcome to the OpenCG Institution Registration Portal.</h1>
                </div>
            </div>
            <div class="container">
                <h1>Register</h1>
                <p>Hello there! We here at CodeGeek are so glad you're registering as an institution through us. You're helping us make a better
                teaching framework by registering with us. Also, by registering through OpenCG, you will be able to see
                how your school does on their examinations. This will hopefully give you a deeper sense of understanding about how effective the curriculum is. So, let's get started! Please fill out the form below and you will be added to our database of registered schools!</p>
                <form action="register.php" method="post">
                    <div class="input-group">
                        <label>Institution or School Name</label>
                        <input name="schoolName" type="text" class="form-control" placeholder="Appleseed Senior High" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label>Administrator or Teacher Email</label>
                        <input name="email" type="email" class="form-control" placeholder="jappleseed@appleseed.edu" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label>Administrator or Teacher Name</label>
                        <input name="adminName" type="text" class="form-control" placeholder="Johny Appleseed" required>
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