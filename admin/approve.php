<?php
include "function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$category = new category();
$approve = new approve();
?>

    <!DOCTYPE html>
    <html lang="en">
    <?php $approve->call_approve(); ?>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <title>Welcome to School Management</title>
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
                            <p class="h1 font-weight-normal">Approve List of <br><span class='text-info'><?php echo $title; ?></span></p>
                        </div>
                        <div class="col-lg-3">
                            <a href="logout.php" title="Log Out Admin" class="btn btn-outline-secondary">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end title -->
                    <hr class="hr">

                    <!-- Workpage-Workpage-Workpage-Workpage-Workpage-Workpage-Workpage-Workpage-Workpage-Workpage-Workpage-Workpage- -->
                    <div class="col-lg-12 m-0 text-grey">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <form action="approve.php?approve=<?php echo $id; ?>" class="form" method="post" enctype="multipart/form-data">
                                    <h6> <i class="fa fa-info"></i> Business Details</h6>
                            </div>
                            <div class="col-lg-12 row">
                                <div class="form-group col-6">
                                    <label for="Business_Title" class="col-form-label col-form-label-sm">Business Title</label>
                                    <input type="text" value="<?php echo $title; ?>" name="title" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="Business_Title" class="col-form-label col-form-label-sm">Title Slug<span class="text-danger">*</span></label>
                                    <input type="text" name="title_slug" value="<?php echo $title_slug ?>" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group col-4">
                                    <label for="Category" class="col-form-label col-form-label-sm">Category_slug</label>
                                    <select class="form-control form-control-sm" name="cat_slug">
                                        <option value="<?php echo $cat_slug; ?>"><?php echo $cat_slug ?></option>
                                        <?php $category->callcategory(); ?>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="Category" class="col-form-label col-form-label-sm">Sub Category</label>
                                    <select class="form-control form-control-sm" name="subcat">
                                        <option value="<?php echo $subcat; ?>"><?php echo $subcat ?></option>
                                        <?php $category->callsubcategory(); ?>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="Category" class="col-form-label col-form-label-sm">Sub Category Slug
                                <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-sm" name="subcat_slug" required>
                                        <option selected disabled>Choose Sub Category...</option>
                                        <?php $approve->subcatslug_approve(); ?>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="Description" class="col-form-label col-form-label-sm">Description</label>
                                    <textarea class="form-control" name="desc" rows="6"><?php echo $desc; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Admin Card  -->
                        <div class="card mt-3">
                            <div class="card-header bg-danger text-white">
                                <form action="addbusiness.php" class="form" method="post" enctype="multipart/form-data">
                                    <h6> <i class="fa fa-info"></i> Admin Approve</h6>
                            </div>
                            <div class="col-lg-12 row">
                                <div class="form-group col-6">
                                    <label for="Business_Title" class="col-form-label col-form-label-sm">Status
                                    <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-sm" name="status" id="">
                                        <option value="1">Activate</option>
                                        <option>Deactivate</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="Business_Title" class="col-form-label col-form-label-sm">Rate
                                    <span class="text-danger">*</span></label>
                                    <input type="text" name="rate" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="Business_Title" class="col-form-label col-form-label-sm">Premium
                                    <span class="text-danger">*</span></label>
                                    <input type="text" name="premium" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="Business_Title" class="col-form-label col-form-label-sm">User
                                    <span class="text-danger">*</span></label>
                                    <input type="text" name="user" value="<?php echo $user1; ?>" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <!-- Admin Card  -->
                        <div class="card mt-3">
                            <div class="card-header bg-info text-white">
                                <h6><i class="fa fa-address-card-o"></i>Contact & Address Details</h6>
                            </div>
                            <div class="col-lg-12 row">
                                <div class="form-group col-6">
                                    <label for="Title" class="col-form-label col-form-label-sm">Contact</label>
                                    <input type="text" value="<?php echo $contact; ?>" name="contact" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="Contact2" class="col-form-label col-form-label-sm">Contact 2</label>
                                    <input type="text" value="<?php echo $contact2; ?>" name="contact2" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="Email_Id" class="col-form-label col-form-label-sm">Email Id</label>
                                    <input type="email" value="<?php echo $email; ?>" name="email" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="Website" class="col-form-label col-form-label-sm">Website</label>
                                    <input type="text" value="<?php echo $website; ?>" name="website" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-12">
                                    <label for="Address" class="col-form-label col-form-label-sm">Address</label>
                                    <input type="text" value="<?php echo $address; ?>" name="address" class="form-control form-control-sm">
                                </div>
                            </div>

                        </div>
                        <div class="card mt-3">
                            <div class="card-header bg-primary text-white">
                                <h6><i class="fa fa-picture-o"></i> Upload Inmages for Business Profile</h6>
                            </div>
                            <div class="col-lg-12 row">
                                <div class="form-group col-lg-4 col-12">
                                    <label for="Title" class="col-form-label col-form-label-sm">Images 1</label>
                                    <img src="<?php if($img1==""){ echo "../Img/default.png";} else { echo "../Img/$img1"; } ?>" alt="Your profile picture" id="blah1" class="card-img-top img-fluid3 w-100">
                                    <div class="card-footer">
                                        <input type="file" class="w-100" name="img1" onchange="readURL1(this);">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <label for="Title" class="col-form-label col-form-label-sm">Images 2</label>
                                    <img src="<?php if($img2==""){ echo "../Img/default.png";} else { echo "../Img/$img2"; } ?>" alt="Your profile picture" id="blah2" class="card-img-top img-fluid2 w-100">
                                    <div class="card-footer">
                                        <input type="file" class="w-100" name="img2" onchange="readURL2(this);">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <label for="Title" class="col-form-label col-form-label-sm">Images 3</label>
                                    <img src="<?php if($img3==""){ echo "../Img/default.png";} else { echo "../Img/$img3"; } ?>" alt="Your profile picture" id="blah3" class="card-img-top img-fluid3 w-100">
                                    <div class="card-footer">
                                        <input type="file" class="w-100" name="img3" onchange="readURL3(this);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 mt-4">
                            <input type="submit" name="approve" class="btn btn-sm btn-primary btn-block">
                        </div>
                        </form>
                        <?php if(isset($_POST['approve'])) { $approve->approve_business(); }?>
                    </div>
                    <!-- End_Workpage-End_Workpage-End_Workpage-End_Workpage-End_Workpage-End_Workpage-End_Workpage-End_Workpage- -->
                </div>
            </div>
        </div>
    </body>

    </html>
