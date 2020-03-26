<?php 
session_start();
$_userid=$_SESSION['id']?? 0;
if($_userid)
{
    header("location:home.php");
    die();
}
require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home">
<div class="container" id="main">
    
    <h1 class="maintitle">
      MultiUserCrud:)
    </h1>

    <div class="row navigation">
        <div class="column column-60 column-offset-20">

            <div class="formaction">
                <a href="#" id="login">Login</a> | <a href="#" id="Registretion">Register Account</a>
            </div>
             <div class="formc">
                <form id="form01" action="task.php" method="POST">
                    <h3>login</h3>
                    <fieldset>
                        <label for="email">Email</label>
                        <input type="text" placeholder="Email Address" id="email" name="email">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" id="password" name="password">
                        
                        <input class="button-primary" type="submit" value="Submit">
                        <div>
                         <?php
                            $status=$_GET['status']??0;
                            if($status)
                            {
                                echo  getStatus($status);
                            }
                         ?>
                        </div>

                        <input type="hidden" name="action" id="action" value="login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/script.js"></script>
</html>