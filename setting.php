<?php
include "admin/function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
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
            <div class="col-lg-9 row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">

                    <div class="card mt-3 box-shadow">
                        <div class="card-header bg-inverse text-center text-white">
                            <h6><i class="fa fa-key"></i> Change Password</h6>
                            <form action="setting.php" method="post">
                        </div>
                        <div class="form-group col-12">
                            <label for="Password" class="col-form-label col-form-label-sm">Password
                            <span class="text-danger">*</span></label>
                            <input type="password" name="old_pass" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="New_Password" class="col-form-label col-form-label-sm">New Password
                            <span class="text-danger">*</span></label>
                            <input type="text" size="8" name="new_pass" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="Confirm_Password" class="col-form-label col-form-label-sm">Confirm Password
                            <span class="text-danger">*</span></label>
                            <input type="text" size="8" name="re_pass" class="form-control form-control-sm" required>
                        </div>

                        <div class="form-group col-12 mt-2">
                            <input type="submit" name="submit" class="btn btn-sm btn-danger btn-block">
                            </form>
                        </div>
                    </div>
                    <?php 
                    if(isset($_POST['submit'])){

                        $old_pass = $_POST['old_pass'];
                        $new_pass = sha1($_POST['new_pass']);
                        $re_pass = $_POST['re_pass'];

                        $qry = "select * from user where email='$user'";
                        $run = (mysql_query($qry));
                        
                        while ($row = mysql_fetch_array($run)){
                        $pass = sha1($row['password']);
                        }
		
                        if($pass==$old_pass){
                            if($new_pass==$re_pass){
			
                                $update_pwd = mysql_query("update user set password='$new_pass' where email='$user'");
			
                                echo "<div class='alert alert-seccess' role='alert'>
                                        <strong>Update Successfully !</strong> 
                                        </div>";
                            }
                        }
                            else{
                                echo "<div class='alert alert-danger' role='alert'>
                                        <strong>Oh snap!</strong> Retype Password is not Match
                                        </div>";
                            }
                        }
                    ?> 
                </div>
                <div class="col-lg-3"><?php 5 ?></div>
            </div>
        </div>
    </body>

    </html>
