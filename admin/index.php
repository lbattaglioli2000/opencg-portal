<!DOCTYPE html>
    <html>
    <head>
        <title>OpenCG Grade Entry Portal</title>
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
                <h1>Grade Entry Portal</h1>
                <p>This portal allows a grader to enter students scores into the database. Once you enter a grade, the application will direct you back to this page to enter more grades.</p>
            </div>
        </div>
        <div class="container">
            <h1>Grade Entry Process</h1>
            <p>There are several steps involved in grading and entering that grade, into our databases. These steps are outlined below...</p>
            <ol>
                <li>Grade the exam</li>
                <ul>
                    <li>Use the rating key we provide you, in order to rate the students examination.</li>
                </ul>
                <li>Scan the exam</li>
                <ul>
                    <li>Use a document scanner to generate a PDF copy of the students examination.</li>
                    <li>Name each exam PDF file based on the students OpenCG ID and the test they took. For example, if Brian Turner's OpenCG ID were 123456, and he took our midterm examination, his PDF file would be named as follows:</li>
                    <ul>
                        <li><kbd>123456-mid.pdf</kbd></li>
                    </ul>
                    <li><b>THE STUDENT'S NAME MUST BE BLACKED OUT OR HIDDEN, ON ANY DOCUMENT, TO MAINTAIN OUR PRIVACY POLICY. THE OPENCG STUDENT ID SHOULD NOT BE BLACKED OUT!</b></li>
                </ul>
                <li>Upload the scanned exam to our Dropbox CDN</li>
                <ul>
                    <li>Firstly, go to <a target="_blank" href="https://www.dropbox.com/request/wwHlt4RsIw6LeOn2Xw1E">https://www.dropbox.com/request/wwHlt4RsIw6LeOn2Xw1E</a> and upload the scanned exam PDF file.</li>
                    <li>Secondly, go to <a target="_blank" href="https://www.dropbox.com/sh/jp880jbicehbz1w/AADlr1ZZ0-8AsShXMIa286Xfa?dl=0">https://www.dropbox.com/sh/jp880jbicehbz1w/AADlr1ZZ0-8AsShXMIa286Xfa?dl=0</a>.</li>
                    <li>And finally, once you're here, locate the file you uploaded (we reccomend sorting the files by date modified to find the most recently added files) and locate the public URL of the file. This is the URL you will enter into the database. Copy it and paste it into the form below.</li>
                </ul>
                <li>Enter the information in our database</li>
                <ul>
                    <li>Use one of the three forms to enter the data into our database. Be sure to enter the following information:</li>
                    <ul>
                        <li>The student's OpenCG ID</li>
                        <li>The student's examination score</li>
                        <li>A URL to the student's exam PDF within our Dropbox CDN</li>
                    </ul>
                </ul>
                <li>Wash, rinse, and repeat!</li>
                <ul>
                    <li>Repeat this process for all of the students who took the examination!</li>
                </ul>
            </ol>
            <h3>Stuck or don't understand a step?</h3>
            <p>No need to worry. You can head over to our helpdesk and get help from us.</p>
            <h1>Data Entry Forms</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        <h2>Pre-Test</h2>
                        <form method="post" action="pre.php">
                            <div class="input-group" style="width: 100%;">
                                <label>OpenCG Student ID</label>
                                <input name="userID" type="text" class="form-control" placeholder="123456" required>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <label>Exam Score</label>
                                <input name="score" type="text" class="form-control" placeholder="35" required>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <label>Exam PDF URL</label>
                                <input name="url" type="text" class="form-control" placeholder="http://www.dropbox.com/path/to/file" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary">Enter Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <h2>Midterm</h2>
                        <form method="post" action="mid.php">
                            <div class="input-group" style="width: 100%;">
                                <label>OpenCG Student ID</label>
                                <input name="userID" type="text" class="form-control" placeholder="123456" required>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <label>Exam Score</label>
                                <input name="score" type="text" class="form-control" placeholder="87" required>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <label>Exam PDF URL</label>
                                <input name="url" type="text" class="form-control" placeholder="http://www.dropbox.com/path/to/file" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary">Enter Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <h2>Post-Test</h2>
                        <form method="post" action="post.php">
                            <div class="input-group" style="width: 100%;">
                                <label>OpenCG Student ID</label>
                                <input name="userID" type="text" class="form-control" placeholder="123456" required>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <label>Exam Score</label>
                                <input name="score" type="text" class="form-control" placeholder="98" required>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <label>Exam PDF URL</label>
                                <input name="url" type="text" class="form-control" placeholder="http://www.dropbox.com/path/to/file" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary">Enter Data</button>
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