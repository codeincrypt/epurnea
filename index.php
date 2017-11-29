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
                <div class='left-navigation box-shadow'>
                    <div class="list">
                        <?php $call->category1(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 row m-0 p-0">
                <div class="col-lg-12">
                    <div class="offset-lg-3 col-lg-6 mb-4">
                        <form class="form" action="search.php" method="get">
                            <div class="input-group stylish-input-group box-shadow">
                                <input type="search" name="search" class="form-control" placeholder="Search ePurnea.com | Shops, Showrrom, Class College etc.">
                                <span class="input-group-addon">
                                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Slider code open -->
                <div class="col-lg-12 mb-5">
                    <div id="sliderFrame">
                    <div id="slider">
                        <img src="Img/Wallmax-3086.jpg" class="img-fluid w-100"  alt="Welcome to ePurnea.com">
                        <img src="Img/Wallmax-3186.jpg" class="img-fluid w-100">
                        <img src="Img/Wallmax-3086.jpg" class="img-fluid w-100">
                        <img src="Img/Wallmax-3186.jpg" class="img-fluid w-100" alt="List Your Business here for Free">
                        <img src="Img/Wallmax-3086.jpg" class="img-fluid w-100">
                    </div>
                </div>
                </div>
                <!-- Slider code close  -->
                <div class="col-lg-12 row p-0 m-0">
                    <?php $call->allads(); ?>
                </div>
                <div class="col-lg-12">
                    <section class="container p-t-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>ePurnea Business Ads</h1>
                            </div>
                        </div>
                    </section>
                    <?php
                    
        $query = "select * from ads where status='1' order by id DESC LIMIT 6";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $title_slug = $row['title_slug'];
        $subcat  = $row['subcat'];
        $desc = $row['descrip'];
        $add = $row['address'];
        $img = $row['img1'];
        if(empty($img)) $img = "default.png";
        
        echo "";
        }
                    ?>
                    <section class="carousel slide" data-ride="carousel" id="postsCarousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 text-md-right lead">
                                    <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                                    <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="container p-t-0 m-t-2 carousel-inner">
                            <div class="row row-equal carousel-item active m-t-0">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="<?php echo "Img/$img";?>" alt="Carousel 1">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h6 class="small text-wide p-b-2"><?php echo $subcat; ?></h6>
                                            <h4>
                                                <a href><?php echo $title; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="<?php echo "Img/$img";?>" alt="Carousel 1">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h6 class="small text-wide p-b-2"><?php echo $subcat; ?></h6>
                                            <h4>
                                                <a href><?php echo $title; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="<?php echo "Img/$img";?>" alt="Carousel 1">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h6 class="small text-wide p-b-2"><?php echo $subcat; ?></h6>
                                            <h4>
                                                <a href><?php echo $title; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-equal carousel-item m-t-0">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h6 class="small text-wide p-b-2">Another</h6>
                                            <h2>
                                                <a href>Tagline or Call-to-action.</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
                                            <h2>
                                                <a href>This is a Blog Title.</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-4 fadeIn wow'>
                                    <div class='card'>
                                        <div class='card-img-top card-img-top-250'>
                                            <img class='img-fluid' src='//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg' alt='Carousel 6'>
                                        </div>
                                        <div class='card-block p-t-2'>
                                            <h6 class='small text-wide p-b-2'>Category 3</h6>
                                            <h2>
                                                <a href>Catchy Title of a Blog Post.</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="text" id="fieldUser" class="input" name="username" required pattern=.*\S.* />
                                    <label for="fieldUser" class="label">Username</label>
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
        <?php if(isset($_POST['login'])){ $user->loginuser(); } ?>
        <!-- Login Modal -->
        <?php include "include/footer.php"; ?>
    </body>
    <script>
        (function($) {
            "use strict";

            // manual carousel controls
            $('.next').click(function() {
                $('.carousel').carousel('next');
                return false;
            });
            $('.prev').click(function() {
                $('.carousel').carousel('prev');
                return false;
            });

        })(jQuery);

    </script>

    </html>
