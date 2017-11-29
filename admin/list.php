<?php
include "function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$admin = new admin_call();
$delete = new delete();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.css" type="text/css">
        <title>Welcome to School Management</title>
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
                       <?php
                        $count = mysql_query("SELECT * FROM ads");
                        $total = mysql_num_rows($count);
                        ?>
                        <div class="col-lg-10">
                            <p class="font-weight-normal textactive">Dashboard</p>
                            <p class="h1 font-weight-normal">Total Business Lists (<?php echo $total; ?>)</p>
                        </div>
                        <div class="col-lg-2">
                            <a href="logout.php" title="Log Out Admin" class="btn btn-outline-secondary">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end title -->
                    <hr class="hr">
                    <div class="col-lg-12 row"> 
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Sub_Category</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php $admin->allads(); ?>
                            
                        </table>   
                        <?php if(isset($_GET['delete'])){ $delete->delete_business(); }?>                
                    </div>
                </div>

    </body>

    </html>
