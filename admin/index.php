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
                            <p class="h1 font-weight-normal">ePurnea.com</p>
                        </div>
                        <div class="col-lg-3">
                            <h5>Welcome Admin</h5>
                        </div>
                        <div class="col-lg-2">
                            <a href="logout.php" title="Log Out Admin" class="btn btn-outline-secondary">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end title -->
                    <hr class="hr">
                    <div class="col-lg-12 row m-0 p-0">
                        <div class="col-lg-6 mb-4">
                            <?php
                        $count = mysql_query("SELECT * FROM ads");
                        $numrows = mysql_num_rows($count);
                        ?>
                                <a href="list.php" class="a2">
                                    <div class="m-0 bg-success row p-4" title="Total Business Lists Added By You">
                                        <div class="col-6">
                                            <i class="fa fa-briefcase fa-5x"></i>
                                        </div>
                                        <div class='col-6 text-right'>
                                            <h1>
                                                <?php echo"$numrows"; ?> </h1>
                                            <h4>Business</h4>
                                        </div>
                                    </div>
                                </a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <?php
                        $count3 = mysql_query("SELECT * FROM user");
                        $numrows3 = mysql_num_rows($count3);
                        ?>
                                <a href="userlist.php" class="a2">
                                    <div class="bg-primary row m-0 p-4" title="Total Business Lists Added By You">
                                        <div class="col-6">
                                        <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-6 text-right">
                                        <h1>
                                            <?php echo"$numrows3"; ?> </h1>
                                        <h4>User</h4>
                                        </div> 
                                    </div>
                                </a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <?php
                        $count2 = mysql_query("SELECT * FROM ads where status=0");
                        $numrows2 = mysql_num_rows($count2);
                        ?>
                                <a href="pendinglist.php" class="a2">
                                    <div class="bg-danger row m-0 p-4" title="Total Business Lists Added By You">
                                        <div class="col-6">
                                        <i class="fa fa-pencil-square fa-5x"></i>
                                        </div>
                                        <div class="col-6 text-right">
                                        <h1>
                                            <?php echo"$numrows2"; ?> </h1>
                                        <h4>Pending</h4>
                                        </div> 
                                    </div>
                                </a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <?php
                        $count4 = mysql_query("SELECT * FROM ads where premium='free'");
                        $numrows4 = mysql_num_rows($count4);
                        ?>
                                <a href="list.php" class="a2">
                                    <div class="bg-blue row m-0 p-4" title="Total Business Lists Added By You">
                                        <div class="col-5">
                                        <i class="fa fa-sticky-note fa-5x"></i>
                                        </div>
                                        <div class="col-7 text-right">
                                        <h1>
                                            <?php echo"$numrows4"; ?> </h1>
                                        <h4>Free Listing</h4>
                                        </div> 
                                    </div>
                                </a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <?php
                        $count5 = mysql_query("SELECT * FROM ads where premium='Paid'");
                        $numrows5 = mysql_num_rows($count5);
                        ?>
                                <a href="list.php" class="a2">
                                    <div class="bg-warning row m-0 p-4" title="Total Business Lists Added By You">
                                        <div class="col-5">
                                        <i class="fa fa-inr fa-5x"></i>
                                        </div>
                                        <div class="col-7 text-right">
                                        <h1>
                                            <?php echo"$numrows2"; ?> </h1>
                                        <h4>Paid Listing</h4>
                                        </div> 
                                    </div>
                                </a>
                        </div>
                    </div>
                </div>

    </body>

    </html>
