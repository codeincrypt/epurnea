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
            <div class="col-lg-3 listbar-margin">
                <div class='box-shadow'>
                    <div class="list">
                        <?php $call->category1(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
               
                <div class="col-lg-12 row m-0">
                    <?php if(isset($_GET['category'])){ $call->callsubcategory(); } ?>
                </div>
                <div class="col-lg-12 row m-0">
                    <?php
                    $slug0 = $_GET['category'];
         
                    $query0 = "select * from ads where cat_slug='$slug0' AND status='1'";
        $run0 = mysql_query($query0);
        $count0 = mysql_num_rows($run0);
            
                    if($count0 < 1){
                echo "
                    <div class='col-lg-12 leftborder'>
                        <h5 class='text-danger'> $count0 Ad. found in <span><u>$slug0</u></span> </h5>
                    </div
                    <div class='col-lg-12'>
                        <h6>Click here to add Your <a href='#login'>Business</a> here.</h6>
                    </div> ";}
                    else {
                        echo "
                    <div class='col-lg-12 leftborder'>
                        <h5 class='text-danger'> $count0 Ad. found in <span><u>$slug0</u></span> </h5>
                    </div";
                    }
                    ?>
                </div>
                <div class="col-lg-12 row m-0">
                  <!-- All Business Filter by category dynamically  -->
                    <?php if(isset($_GET['category'])){ $call->callcategoryads(); } ?>
                    
                </div>
            </div>
        </div>
        </div>
        <?php include "include/footer.php"; ?>
    </body>

    </html>
