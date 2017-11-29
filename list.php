<?php
include "admin/function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$category = new category();
$user = new user();

session_start();
$user = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    header ("location: index.php");
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>epurnea.com</title>
        <?php include "include/links.php"; ?>
    </head>
    <?php 
        $query ="select * From user where email='$user'";
        $run = mysql_query($query);
            
        while ($row = mysql_fetch_array($run)) {
            global $name;
            $name = $row['name']; 
            $email = $row['email']; 
            $img = $row['img']; 
        } ?>

    <body class="bg-faded">
        <?php include "include/nav.php"; ?>
        <div class="container margin-top"></div>
        <div class="col-lg-12 row m-0">
            <div class="col-lg-3 hidden-md-down" style="margin-top:-25px;">
                <div class="posi">
                    <div class="list-group box-shadow ">
                        <a href="profile.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-user"></i></span><span class='col-11'>Your Profile</span></a>
                        <a href="list.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-th-list"></i></span><span class='col-11'>Business Lists</span></a>
                        <a href="addbusiness.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-pencil-square-o"></i></span><span class='col-11'>Add Business</span></a>
                        <a href="setting.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-cogs"></i></span><span class='col-11'>Setting</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 hidden-lg-up">
                <div class="list-group box-shadow">
                    <a href="profile.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-user"></i></span><span class='col-11'>Your Profile</span></a>
                    <a href="list.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-th-list"></i></span><span class='col-11'>Business Lists</span></a>
                    <a href="addbusiness.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-pencil-square-o"></i></span><span class='col-11'>Add Business</span></a>
                    <a href="setting.php" class="list-group-item list-group-item-action"><span class='col-1 p-0 m-0'><i class="fa fa-cogs"></i></span><span class='col-11'>Setting</span></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="col-lg-12 row" id="myTab" role="tablist">
                    <div class="col-lg-4">
                        <?php
                        $count = mysql_query("SELECT * FROM ads where user='$user'");
                        $numrows = mysql_num_rows($count);
                        ?>
                            <div class="text-white">
                                <div class="card card-success text-right p-3" title="Total Business Lists Added By You">
                                    <span class="text-left">
                               <i class="fa fa-briefcase fa-5x"></i>
                           </span>
                                    <h1>
                                        <?php echo"$numrows"; ?>
                                    </h1>
                                    <h4>Business</h4>
                                </div>
                                </div>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        $count2 = mysql_query("SELECT * FROM ads where user='$user' AND status=0 ");
                        $numrows2 = mysql_num_rows($count2);
                        ?>
                            <div class="text-white">
                                <div class="card card-danger text-right p-3" title="Total Business Lists Added By You">
                                    <span class="text-left">
                                       <i class="fa fa-briefcase fa-5x"></i>
                                    </span>
                                    <h1><?php echo"$numrows2"; ?></h1>
                                    <h4>Pending</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-white">
                            <div class="card card-warning text-right p-3" title="Inbox">
                                <span class="text-left">
                                   <i class="fa fa-briefcase fa-5x"></i>
                                </span>
                                <h1 class="">0</h1>
                                <h4>Inbox</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#list" role="tab" aria-controls="home">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pending" role="tab" aria-controls="profile">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#inbox" role="tab" aria-controls="messages">Inbox</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="list" role="tabpanel">
                            <table class="table table-stacked">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Id</th>
                                        <th>Business Title</th>
                                        <th>Sub Category</th>
                                        <th>Category</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
        $query = "select * FROM ads where user='$user'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $title_slug = $row['title_slug'];
        $subcat  = $row['subcat'];
        $cat  = $row['cat_slug'];
        $contact  = $row['contact'];
        
        echo "
        <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$subcat</td>
            <td>$cat</td>
            <td>$contact</td>
            <td>
            <a href='business.php?business=$title_slug'><span class='btn btn-sm btn-outline-primary'>View</span></a>
            <a href='business.php?edit=$id'><span class='btn btn-sm btn-outline-danger'>Update</span></a>
            </td>
        </tr>
        ";
        }
     ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="pending" role="tabpanel">
                            <table class="table table-stacked">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Id</th>
                                        <th>Business Title</th>
                                        <th>Sub Category</th>
                                        <th>Category</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
        $query = "select * FROM ads where user='$user' AND status=''";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $title_slug = $row['title_slug'];
        $subcat  = $row['subcat'];
        $cat  = $row['cat_slug'];
        $contact  = $row['contact'];
        
        echo "
        <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$subcat</td>
            <td>$cat</td>
            <td>$contact</td>
            <td>
            <a href='business.php?business=$title_slug'><span class='btn btn-sm btn-outline-primary'>View</span></a>
            <a href='business.php?edit=$id'><span class='btn btn-sm btn-outline-danger'>Update</span></a>
            </td>
        </tr>
        ";
        }
     ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="inbox" role="tabpanel">
                            <table class="table table-stacked">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Id</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>View</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
