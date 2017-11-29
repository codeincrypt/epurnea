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
            <div class="col-lg-9 row m-0">
                <div class="col-lg-12 row m-0 p-0">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form class="form" action="search.php" method="get">
                            <div class="input-group stylish-input-group box-shadow">
                                <input type="search" name="search" class="form-control" placeholder="Search ePurnea.com" value="<?php if(isset($_GET['submit'])){ echo $_GET['search']; }?>">
                                <span class="input-group-addon">
                                <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 row">
                    <?php
            if(isset($_GET['submit'])){
                $search = $_GET['search'];
                
                if(strlen($search) < 3){
                    echo "too short keyword";
                }
               
                else{
                $query = "select * from ads where title LIKE '%$search%' AND status='1'";
        
                $run = mysql_query($query);
                $count = mysql_num_rows($run);
            
                echo "<div class='col-lg-12'>
                        <h4 class='text-muted'>Your search : <span>$search</span> 
                        <span class='text-danger'> $count result found</span> </h4>
                    </div>";
        
                if($count < 1){
                    echo "<blockquote class='blockquote'>
                            <p class='text-muted'>Sorry $count Result Found</p>
                        </blockquote>";
                    }
                else{
                    while ($row = mysql_fetch_array($run)){
        
                        $id = $row['id'];
                        $title = $row['title'];
                        $title_slug = $row['title_slug'];
                        $subcat  = $row['subcat'];
                        $desc = $row['descrip'];
                        $add = $row['address'];
                        $img = $row['img1'];

                        if(empty($img)) $img = "default.png";
        
        echo "<div class='col-lg-4 mt-3'>    
            <a href='business.php?business=$title_slug' style='text-decoration:none;'>
                <div class='card box-shadow' title='$title | ePurnea.com A Online Business Directory'>
                    <img class='card-img-top' src='Img/$img' style='width:100%;height:260px;' alt='$title Image'>
                    <div class='card-block p-2'>
                        <p class='card-text small text-muted m-0'>$subcat</p>
                        <h4 class='card-title text-center text-grey m-0'>$title</h4>
                        <p class='card-text text-center small m-0'>$add Eon Kids</p>
                    </div>
                </div>
            </a>
        </div>";
            }    
        }
    }
}
                    ?>
                </div>
            </div>
        </div>
        <?php include "include/footer.php"; ?>
    </body>

    </html>
