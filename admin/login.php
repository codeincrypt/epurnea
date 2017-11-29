<?php
include "admin/function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$user = new user();

session_start();
    if(isset($_SESSION['username'])){
        header ("location: profile.php");
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login | epurnea.com</title>
        <?php include "include/links.php"; ?>
    </head>
    <body class="bg-faded">
        <nav class="navbar navbar-toggleable-md navbar-light bg-danger fixed-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <a class="navbar-brand" href="index.php"><img src="Image/epurnea.png" alt="" width="125px"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="offset-lg-8 col-lg-4 text-center">
                    <div id='cssmenu' class="">
                    <ul>
                        <li class=''><a href='signup.php'><span>SignUp</span></a></li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <div class="col-lg-12 row margin-top">
            <div class="col-lg-7 m-l-t">
                <h1>Your Business to ePurnea</h1>
                <h4 class='blockquote text-danger'>Login Here to Manage or List Your Business</h4>
            </div>
            <div class="col-lg-4 row card bg-white p-4 pt-5 margin-top">
                <form action="loginuser.php" method="post">
                    <div class="field col-12">
                        <input type="text" id="fieldUser" class="input" name="username" required pattern=.*\S.* />
                        <label for="fieldUser" class="label">Username</label>
                    </div>
                    <div class="field col-12">
                        <input type="password" id="fieldPassword" class="input" name="password" required pattern=.*\S.* />
                        <label for="fieldPassword" class="label">Password</label>
                    </div>
                    <button class="btn btn-primary btn-block" name="login">Login</button>
                    <small>Not User? <a href="signup.php">Register Here</a> For Free Listing!</small>

                </form>
                <?php if(isset($_POST['login'])){ $user->loginuser(); } ?>
            </div>
        </div>
        </div>
    </body>

    </html>
