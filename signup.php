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
        <title>SignUp for Free Listing</title>
        <?php include "include/links.php"; ?>
    </head>

    <body class="bg-faded">
        <?php include "include/nav.php"; ?>
        <div class="col-lg-12 row margin-top">
            <div class="col-lg-7 m-l-t pl-5">
                <h1 class="text-danger">Add Your Business to ePurnea</h1>
                <h4 class='blockquote'>Create Free Account for List Your Business</h4>
            </div>
            <div class="col-lg-4 col-md-12 row">
                <div class="form-group col-12">
                    <form action="signup.php" method="post">
                        <label for="text">Name<span class="text-danger">*</span></label>
                        <input class="form-control form-control-sm" type="text" name="name" id="Roll-no" required>
                </div>
                <div class="form-group col-12">
                    <label for="text">Contact<span class="text-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="contact" id="example-text-input" required>
                </div>
                <div class="form-group col-12">
                    <label for="text">Email Id<span class="text-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="email" id="example-text-input" required>
                </div>
                <div class="form-group col-12">
                    <label for="text">Create Password<span class="text-danger">*</span></label>
                    <input class="form-control form-control-sm" type="password" name="pass" id="example-text-input" required>
                    <small>Your password must be 8-20 characters long, contain letters and numbers.</small>
                </div>
                <div class="form-group col-12 m-0">
                    <label for="text" class="mr-3">Gender<span class="text-danger">*</span></label>
                    <label class="custom-control custom-radio">
                          <input id="radio1" name="gender" value="Male" type="radio" class="custom-control-input">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-description">Male</span>
                    </label>
                    <label class="custom-control custom-radio">
                          <input id="radio2" name="gender" value="Female" type="radio" class="custom-control-input">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-description">Female</span>
                    </label>
                </div>
                <div class="form-group col-12">
                    <input class="btn btn-primary btn-block btn-sm" type="submit" name="submit" id="example-text-input">
                    <input class="btn btn-danger btn-block btn-sm" type="reset" name="reset" id="example-text-input">
                </div>
            </div>
            <div class="col-lg-1 hidden-xs-up"></div>
            </form>

            <?php if(isset($_POST['submit'])){ $user->newaccount_user();} ?>
        </div>
        </div>
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login Here to Manage Your Business Lists</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        <form action="signup.php" method="post">
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

                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($_POST['login'])){ $user->loginuser(); } ?>
        <!-- Login Modal -->
    </body>

    </html>
