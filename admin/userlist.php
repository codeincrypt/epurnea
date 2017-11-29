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
                                <th>Image</th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Business</th>
                                <th>Action</th>
                            </tr>
                            <?php $admin->userlist(); ?>
                            
                        </table>  
                        <?php
                        $query = "select * FROM user order by id DESC";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $img = $row['img'];
        if(empty($img)) $img = "default.png";}
                        ?>
                                
<div class="modal fade" id="User" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Here to Manage Your Business Lists</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid mt-5">
                    <form action="index.php" method="post">
                        <div class="field col-12">
                            <label for="fieldUser" class="label"><?php echo $name; ?></label>
                        </div>
                        <div class="field col-12">
                            <input type="password" id="fieldPassword" class="input" name="password" required pattern=.*\S.* />
                            <label for="fieldPassword" class="label">Password</label>
                        </div>
                        <button class="btn btn-danger btn-block btn-sm" name="login">Login</button>
                        <div class="col-12 text-right">
                            <small>Forget Password? <a href="signup.php">Reset Here</a></small>
                        </div>
                        <div class="col-12 mt-3">
                            <small>Not User? <a href="signup.php">Register Here</a> For Free Listing!</small>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>       
                    </div>
                </div>

    </body>

    </html>
