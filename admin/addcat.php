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
                        <div class="col-lg-7">
                            <p class="font-weight-normal textactive">Admin Panel</p>
                            <p class="h1 font-weight-normal">Insert Category</p>
                        </div>
                        <div class="col-lg-3">
                            <a href="logout.php" title="Log Out Admin" class="btn btn-outline-secondary">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end title -->
                    <hr class="hr">
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <div class="card card-outline-danger p-3">
                                <form class="form" method="post" action="addcat.php">
                                    <label>Category Name:</label>
                                    <input type="text" name="cat" class="form-control form-control-sm">
                                    <label>Category Slug:</label>
                                    <input type="text" name="slug" class="form-control form-control-sm">
                                    <label>Description:</label>
                                    <input type="text" name="desc" class="form-control form-control-sm">
                                    <label>Icon:</label>
                                    <input type="text" name="icon" class="form-control form-control-sm">
                                    <label>Parent No.:</label>
                                    <input type="text" name="parent" class="form-control form-control-sm">
                                    <label>Category Slug(for sub category only)</label>
                                    <input type="text" name="maincat" class="form-control form-control-sm">
                                    <input type="submit" class="btn btn-success btn-block btn-sm mt-2" name="submit">
                                </form>
                                <?php if(isset($_POST['submit'])) { $insert->add_category(); }?>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <table class="table table-stacked">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Category</th>
                                        <th>Cat_Id</th>
                                        <th>Cat_Slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
        $query = "select * FROM category where parent_id=0 ";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $cat = $row['cat_name'];
        $maincat = $row['maincat'];
        $cat_slug = $row['cat_slug'];        
        echo "
        <tr>
            <td>$cat</td>
            <td>$maincat</td>
            <td>$cat_slug</td>
        </tr>
        ";
        }
     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </body>

    </html>
