<!DOCTYPE html>
<!-- This document was created by Mr. Wergeles on November 3, 2016 -->
<html>
<head>
	<title>Session Login</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Evan Teters">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Materialize Custom   -->
    <link href="css/custom-download.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="app.css" rel="stylesheet" type="text/css">
<!--    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">-->
<!--
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
-->
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
</head>
<body>
    
    <div class="container jumbotron">
        <div class="row "> 
            <div class="col-md-4 ">
                
                <img class="sloth img-circle" src="img/different.jpg" alt="sloth" class="img-circle">
            </div>
            <div class="col-md-8">
                <h1>Hello! I am Evan Teters. </h1>
            </div>
        </div>
        <div class="row jumbotron">
            <div class="col-xs-12">
                <h3>I am a developer with experience in many areas and always seeking more. Login to find out more.</h3>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="col-xs-8 col-xs-offset-2 text-center">
            <div class="well well-sm" id="login">
                <h1>Login</h1>

                <?php
                    if ($error) {
                        print "<div class=\"\">$error</div>\n";
                    }
                ?>

                <form action="login.php" method="POST">

                    <input type="hidden" name="action" value="do_login">
                    <label class="hidden" for="username">Username:</label>
                    <div class="input-group">
                        <span class="input-group-addon">User name:</span>
                        <input placeholder="Try test" type="text" id="username" name="username" class="form-control" autofocus value="<?php print $username; ?>">
                    </div>
                    
                    <label class="hidden" for="password">Pass word:</label>
                    <div class="input-group">
                        <span class="input-group-addon">Password:</span>
                        <input placeholder="Try pass" type="password" id="password" name="password" class="form-control">
                    </div>

                    <div class="stack">
                        <input class="waves waves-light btn btn-default" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>