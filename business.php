<?php
include "admin/function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
session_start();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Your Business Details</title>
        <?php include "include/links.php"; ?>
        <style>
            .mySlides { display: none }
            .demo { cursor: pointer }
        </style>
    </head>

    <body class="bg-faded">
        <?php include "include/nav.php"; ?>
        <div class="container margin-top"></div>
        <div class="col-lg-12 row m-0">
            <div class="col-lg-3 listbar-margin">
                <div class='box-shadow'>
                    <div class="list">
                        <?php $call->category1(); ?>
                    </div>
                </div>
            </div>
            <?php $call->business(); ?>
            <div class="col-lg-9 row">
                <!-- Image Slider start -->
                <div class="col-lg-5 hover01 column">
                    <img class="mySlides w-100" title='Image of <?php  echo $title; ?>' style="height:350px;" src="<?php if($img1==" "){ echo "Img/default.png ";} else { echo "Img/$img1 "; } ?>">
                    <img class="mySlides w-100" title='Image of <?php  echo $title; ?>' style="height:350px;" src="<?php if($img2==" "){ echo "Img/default.png ";} else { echo "Img/$img2 "; } ?>">
                    <img class="mySlides w-100" title='Image of <?php  echo $title; ?>' style="height:350px;" src="<?php if($img3==" "){ echo "Img/default.png ";} else { echo "Img/$img3 "; } ?>">

                    <div class="col-lg-12 row m-0 mt-3 p-0">
                        <div class="col-lg-4 col-4 p-0">
                            <img class="demo opacity opacity-off" src="<?php if($img1==" "){ echo "Img/default.png ";} else { echo "Img/$img1 "; } ?>" onclick="currentDiv(1)" style="width:100%;height:auto;" title='Image1 of <?php  echo $title; ?>'>
                        </div>
                        <div class="col-lg-4 col-4 p-0">
                            <img class="demo opacity opacity-off" src="<?php if($img2==" "){ echo "Img/default.png ";} else { echo "Img/$img2 "; } ?>" onclick="currentDiv(2)" style="width:100%;height:auto;">
                        </div>
                        <div class="col-lg-4 col-4 p-0">
                            <img class="demo opacity opacity-off" src="<?php if($img3==" "){ echo "Img/default.png ";} else { echo "Img/$img3 "; } ?>" onclick="currentDiv(3)" style="width:100%;height:auto;">
                        </div>
                    </div>
                </div>
                <!-- Image Slider End -->
                <div class="col-lg-7">
                    <div class="card p-4">
                        <div class="col-lg-12 row p-0 m-0">
                            <h4 class="text-muted"><?php echo $subcat; ?></h4>
                        </div>
                        <h1 class="text-muted"><?php echo $title; ?> </h1>
                        <div class="col-lg-12 row">
                            <div class="col-lg-4 p-2">Contact</div>
                            <div class="col-lg-8 p-2">(+91)
                                <?php echo $contact; ?>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8 p-2">(+91)
                                <?php echo $contact2; ?>
                            </div>
                            <div class="col-lg-4 p-2">Email Id</div>
                            <div class="col-lg-8 p-2">
                                <?php echo $email; ?>
                            </div>
                            <div class="col-lg-4 p-2">Addres : </div>
                            <div class="col-lg-8 p-2">
                                <?php echo $address; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card p-4">
                        <h5>Description :</h5>
                        <p>
                            <?php echo $desc; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php include "include/footer.php"; ?>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" opacity-off", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += "opacity-off";
            }

        </script>
    </body>

    </html>
