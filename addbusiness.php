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
        <title>ePurnea.com | List Your Business Here for Free</title>
        <?php include "include/links.php"; ?>
        <script>
            function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blah1').attr('src', e.target.result).class('imgfluid3').height(auto);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blah2').attr('src', e.target.result).class('imgfluid2').height(auto);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }function readURL3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blah3').attr('src', e.target.result).class('imgfluid1').height(auto);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>
    </head>
 <?php $query ="select * From user where email='$user'";
        $run = mysql_query($query);
            
        while ($row = mysql_fetch_array($run)) {
            global $name;
            $name = $row['name'];  
            $email = $row['email'];  
            $img = $row['img'];  
        }?>
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
                <div class="card box-shadow">
                    <div class="card-header bg-success text-white">
                        <form action="addbusiness.php" class="form" method="post" enctype="multipart/form-data">
                            <h6> <i class="fa fa-info"></i> Business Details</h6>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Business_Title" class="col-form-label col-form-label-sm">Business Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="Category" class="col-form-label col-form-label-sm">Category
                                <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="cat" id="" required>
                                    <option selected disabled>Choose Category...</option>
                                    <?php $category->callcategory(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Category" class="col-form-label col-form-label-sm">Sub Category
                                <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="subcat" id="" required>
                                    <option selected disabled>Choose Sub Category...</option>
                                    <?php $category->callsubcategory(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Description" class="col-form-label col-form-label-sm">Description
                                <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="desc" placeholder="Write Description about your Business..." id="Textarea" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 box-shadow">
                    <div class="card-header bg-info text-white">
                        <h6><i class="fa fa-address-card-o"></i>Contact & Address Details</h6>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="form-group col-6">
                            <label for="Title" class="col-form-label col-form-label-sm">Contact
                                <span class="text-danger">*</span></label>
                            <input type="text" name="contact" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-6">
                            <label for="Contact2" class="col-form-label col-form-label-sm">Contact 2</label>
                            <input type="text" name="contact2" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-6">
                            <label for="Email_Id" class="col-form-label col-form-label-sm">Email Id
                                <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-6">
                            <label for="Website" class="col-form-label col-form-label-sm">Website</label>
                            <input type="text" name="web" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-12">
                            <label for="Address" class="col-form-label col-form-label-sm">Address
                                <span class="text-danger">*</span></label>
                            <input type="text" name="address" class="form-control form-control-sm">
                        </div>
                    </div>

                </div>
                <div class="card mt-3 box-shadow">
                    <div class="card-header bg-primary text-white">
                        <h6><i class="fa fa-picture-o"></i> Upload Inmages for Business Profile</h6>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group row">
                                <div class="form-group col-lg-4 col-12">
                                    <img src="Img/default.png" alt="Your profile picture" id="blah1" class="card-img-top img-fluid3 w-100">
                                    <div class="card-footer">
                                        <input type="file" class="w-100" name="img1" onchange="readURL1(this);">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <img src="Img/default.png" alt="Your profile picture" id="blah2" class="card-img-top img-fluid2 w-100">
                                    <div class="card-footer">
                                        <input type="file" class="w-100" name="img2" onchange="readURL2(this);">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <img src="Img/default.png" alt="Your profile picture" id="blah3" class="card-img-top img-fluid3 w-100">
                                    <div class="card-footer">
                                        <input type="file" class="w-100" name="img3" onchange="readURL3(this);">
                                    </div>                        </div>
                    </div>
                </div>
                <div class="form-group col-12 mt-4">
                    <input type="text" name="user" value="<?php echo $email; ?>" hidden>
                    <input type="submit" name="submit" class="btn btn-sm btn-primary btn-block">
                </div>
                </form>
                <?php if(isset($_POST['submit'])){ $insert->addbusinessbyuser(); }?>
            </div>
        </div>
        </div>
    </body>

    </html>
