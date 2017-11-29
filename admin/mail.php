<?php
include "function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$admin = new admin_call();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.css" type="text/css">
        <title>ePurnea Admin</title>
    </head>

    <body class="bg-inverse">
        <div class="container mt-5 text-white">
            <div class="col-lg-12 row">
                <div class="col-lg-3">
                    <?php include "sidebar.php"; ?>
                </div>
                <div class="col-lg-9">
                    <!-- start title -->
                    <div class="col-lg-12 p-0 row">
                        <div class="col-lg-7">
                            <p class="font-weight-normal textactive">Dashboard</p>
                            <p class="h1 font-weight-normal">Compose E-Mail</p>
                        </div>
                        <div class="col-lg-2">
                            <a href="logout.php" title="Log Out Admin" class="btn btn-outline-secondary">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end title -->
                    <hr class="hr">
                    <div class="col-lg-12">
                        <div class="card mt-3 text-grey">
                        <div class="card-header bg-inverse text-center">
                            <h6 class='text-white'><i class="fa fa-inbox"></i> Compose Mail</h6>
                            <form action="setting.php" method="post">
                        </div>
                        <div class="form-group col-12">
                            <label for="Password" class="col-form-label col-form-label-sm">To</label>
                            <input type="to" name="old_pass" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="Password" class="col-form-label col-form-label-sm">Subject</label>
                            <input type="subject" name="old_pass" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-12">
                            <label for="New_Password" class="col-form-label col-form-label-sm">Message</label>
                            <textarea name="message" id="" class="form-control" rows=" 10" required></textarea>
                        </div>
                        <div class="form-group col-12 mt-2">
                            <input type="submit" name="submit" class="btn btn-sm btn-danger btn-block">
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

    </body>

    </html>
