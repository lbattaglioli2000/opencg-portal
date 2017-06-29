<!DOCTYPE html>
<html>
<head>
    <title>OpenCG Help Center</title>
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
            <h1>Help Article Publication Portal</h1>
            <p>This portal allows a help agent to easily publish a support article.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <p><b>Heads up!</b> This application doesn't work yet and has been disabled.</p>
                </div>
                <h1>Help Article Guidelines</h1>
                <ol>
                    <li>Must not be an existing help article.</li>
                    <li>Must be specific, detailed, and thorough.</li>
                    <li>It is recommended that you include pictures or other helpful media</li>
                    <li>Contains no grammatical, spelling or informational errors.</li>
                    <ul>
                        <li>We recommend you enable <a target="_blank" href="http://www.grammarly.com">Grammarly</a> to proofread your work.</li>
                    </ul>
                </ol>
                <p>All help articles can (<b>and must</b>) be written in HTML. You can write your HTML in the <i>Body</i> field below, and it will be rendered once the article is published. You can use all HTML5 tags and attributes here. They will be rendered. There's no need to define the <code>!DOCTYPE</code> or add a <code>&lt;head&gt;</code> tag or a <code>&lt;body&gt;</code></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                        <form>
                            <div style="width: 100%" class="input-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control"/>
                            </div>
                            <br>
                            <div style="width: 100%" class="input-group">
                                <label for="description">Description</label>
                                <textarea maxlength="350" class="form-control" rows="2" name="description"></textarea>
                            </div>
                            <br>
                            <div style="width: 100%" class="input-group">
                                <label for="body">Article Body</label>
                                <textarea class="form-control" rows="30" name="body"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-lg">Publish Article</button>
                        </form>
                </div>
            </div>
        </div>
        <?php require "../../includes/footer.php"; ?>
    </div>
</div>
</body>
</html>