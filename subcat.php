<?php
include "admin/function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$user = new user();
session_start();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>epurnea.com</title>
        <?php include "include/links.php"; ?>
    </head>

    <body class="bg-faded">
        <?php include "include/nav.php"; ?>
        <div class="container margin-top"></div>
        <div class="col-lg-12 row m-0">
            <div class="col-lg-3" style="margin-top:-25px;">
                <div class='box-shadow'>
                    <div class="list">
                        <?php $call->category1(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0">
                <div class="col-lg-12 row m-0">
                    <h3 class="text-center text-grey">
                    </h3>
                </div>
                <div class="col-lg-12 row m-0">
                    
                </div>
                <div class="col-lg-12 row m-0">
                  <!-- All Business Filter by category dynamically  -->
                    <?php if(isset($_GET['subcategory'])){ $call->callsubcatads(); } ?>
                    
                </div>
            </div>
        </div>
        </div>
        <?php include "include/footer.php"; ?>
    </body>

    </html>
