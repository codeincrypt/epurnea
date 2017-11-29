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
    <?php 
        $query ="select * From user where email='$user'";
        $run = mysql_query($query);
            
        while ($row = mysql_fetch_array($run)) {
            $id = $row['id']; 
            $name = $row['name']; 
            $contact = $row['contact']; 
            $contact2 = $row['contact2']; 
            $email = $row['email']; 
            $gender = $row['gender']; 
            $address = $row['address']; 
            $dist = $row['dist']; 
            $state = $row['state']; 
            $img = $row['img']; 
        } 
    ?>

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

                <div class="col-lg-12 row">
                    <div class="col-lg-4">
                        <form action='profile.php' class='form' method='post' enctype='multipart/form-data'>
                            <span class='choose_file' title='Upload New Profile Picture here' id="imgbtn">
                                <span><i class='fa fa-camera fa-shadow' aria-hidden='true'></i></span>
                            <input type='file' onchange='javascript:this.form.submit();' name='img' accept='image/*;capture=camera'>
                            </span>
                        </form>
                        <div id="img-hover">
                            <img src='<?php if($img==""){ echo "Img/default.png";} else { echo "Img/$img"; } ?>' class='img-thumbnail' alt='Profile Picture' width='100%;' style="height:260px;">
                        </div>

                        <div class="blockquote mt-5">
                            <h1>
                                <?php echo $name; ?>
                            </h1>
                        </div>
                        <div class="mt-2">
                            <h6 class="text-danger">
                                <?php echo $email; ?>
                            </h6>
                        </div>
                        <?php if(isset($_FILES['img'])){    
                $id = $_GET['profile']; 
                $img = $_FILES['img'] ['name'];
                $tmp_img = $_FILES['img'] ['tmp_name'];
                move_uploaded_file($tmp_img,"Img/$img");
                        
                $qry = "update user set img='$img' where email='$user'";
                        
                $run = mysql_query($qry);   
    
                echo "<script>window.open('profile.php','_self')</script>";
                }
            ?>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-outline-secondery mt-3">
                            <div class="p-3">
                                <h5 class="float-left">
                                    <i class="fa fa-user"></i> Your Information
                                </h5>
                                <span class="float-right">
                                    <a href="updateuser_profile.php?update=<?php echo $id; ?>" title="Update Profile of <?php echo $name; ?>" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-pencil fa-lg"></i></a>
                                </span>
                            </div>
                            <div class="card-block row pl-5">
                                <div class="col-4 p-2"><b> Gender </b></div>
                                <div class="col-8 p-2">
                                    <?php echo $gender; ?>
                                </div>
                                <div class="col-4 p-2"><b> Contact </b></div>
                                <div class="col-8 p-2">
                                    <?php echo "$contact </br> $contact2"; ?>
                                </div>
                                <div class="col-4 p-2"><b> Email Id</b></div>
                                <div class="col-8 p-2">
                                    <?php echo $email; ?>
                                </div>
                                <div class="col-4 p-2"><b> Address </b></div>
                                <div class="col-8 p-2">
                                    <?php echo $address; ?>
                                </div>
                                <div class="col-4 p-2"><b> District </b></div>
                                <div class="col-8 p-2">
                                    <?php echo $dist; ?>
                                </div>
                                <div class="col-4 p-2"><b> State </b></div>
                                <div class="col-8 p-2">
                                    <?php echo $state; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-blue text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Update Your Profile <strong><?php echo $name; ?></strong> | <span class="text-white strong"> <a href="index.php" class='a2'>ePurnea.com</a> </span> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-12 row p-0 m-0">
                            <div class="form-group col-12">
                                <form action="profile.php" method="post">
                                    <label for="text">Name</label>
                                    <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group col-6">
                                <label for="text">Contact</label>
                                <input class="form-control form-control-sm" type="text" name="contact" value="<?php echo $contact; ?>">
                            </div>
                            <div class="form-group col-6">
                                <label for="text">Contact</label>
                                <input class="form-control form-control-sm" type="text" name="contact2" placeholder="Your another Contact No." value="<?php echo $contact2;?>">
                            </div>
                            <div class="form-group col-12">
                                <label for="text">Gender</label>
                                <input class="form-control form-control-sm" type="text" name="gender" value="<?php echo $gender; ?>">
                            </div>
                            <div class="form-group col-12">
                                <label for="text">Addresss</label>
                                <input class="form-control form-control-sm" type="text" name="address" value="<?php echo $address; ?>">
                            </div>
                            <div class="form-group col-6">
                                <label for="text">District</label>
                                <input class="form-control form-control-sm" type="text" name="dist" value="<?php echo $dist; ?>">
                            </div>
                            <div class="form-group col-6">
                                <label for="text">State</label>
                                <input class="form-control form-control-sm" type="text" name="state" value="<?php echo $state; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-inverse">
                        <div class="form-group col-6 m-0">
                            <button type="button" class="btn btn-secondary btn-sm btn-block" data-dismiss="modal">Go Back</button>
                        </div>
                        <div class="form-group col-6 m-0">
                            <button type="submit" class="btn btn-primary btn-sm btn-block" name="update">Update </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['update'])){
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $contact2 = $_POST['contact2'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $dist = $_POST['dist'];
            $state = $_POST['state'];
            $query = "update user set name='$name', contact='$contact', contact2='$contact2', gender='$gender', address='$address', dist='$dist', state='$state' where email='$user'";
            $run = mysql_query($query);  
                
                echo "<script>window.open('profile.php','_self')</script>";
            }
        ?>
    </body>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result).class('imgfluid').height(auto);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script>
        function launch_modal(id) {
            // Hide all modals using class if required.
            $('.modal').modal('hide');
            $('#' + id).modal('show');
        }

    </script>

    </script>

    </html>
