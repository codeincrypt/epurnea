
<?php
include "admin/function.php";
$connection = new dbconnect();
$insert = new insert();
$call = new call();
$user = new user();
session_start();

    if(isset($_SESSION['username'])){
        header ("location: profile.php");
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>epurnea.com</title>
        <?php include "include/links.php"; ?>
        <link href="/(directory)/menu-vertical.css" rel="stylesheet" type="text/css" />
<script src="/(directory)/menu-vertical.js" type="text/javascript"></script>
        
        <style>
        
#menu-v li, #menu-v a {zoom:1;} /* Hacks for IE6, IE7 */
#menu-v, #menu-v ul
{
    width: 180px; /* Main Menu Item widths */
    border: 1px solid #ccc;
    border-top:none;
    position: relative; font-size:0;
    list-style: none; margin: 0; padding: 0; display:block;
    z-index:9;
}
                
/* Top level menu links style
---------------------------------------*/

#menu-v li
{
    background: #FFF url(bg.gif) repeat-x 0 2px;
    list-style: none; margin: 0; padding: 0;
}
#menu-v li a
{
    font: normal 12px Arial;
    border-top: 1px solid #ccc;
    display: block;
    /*overflow: auto; force hasLayout in IE7 */
    color: black;
    text-decoration: none;
    line-height:26px;
    padding-left:26px;            
}
#menu-v ul li a
{
    line-height:30px;
}
                
#menu-v li a.arrow:hover
{
    background-image:url(arrowon.gif);
    background-repeat: no-repeat;
    background-position: 97% 50%;
}
        
/*Sub level menu items
---------------------------------------*/
#menu-v li ul
{
    position: absolute;
    width: 200px; /*Sub Menu Items width */
    visibility:hidden;
}
        
#menu-v a.arrow
{
    background-image:url(arrow.gif);
    background-repeat: no-repeat;
    background-position: 97% 50%;
}
#menu-v li:hover, #menu-v li.onhover
{
    background-position:0 -62px;
}
#menu-v ul li
{
    background: rgba(255, 255, 255, 0.86);
    background-image:none;
}
#menu-v ul li:hover, #menu-v ul li.onhover
{
    background: #FFF;
    background-image:none;
}
        
/* Holly Hack for IE \
* html #menu-v  li
{
    float:left;
    height: 1%;
}
* html #menu-v  li a
{
    height: 1%;
}*/
/* End */</style>
        <script>
        
    var mcVM_options = {
        menuId: "menu-v",
        alignWithMainMenu: true
    };


    init_v_menu(mcVM_options);

    function init_v_menu(a) {
        if (window.addEventListener) window.addEventListener("load", function() {
            start_v_menu(a)
        }, false);
        else window.attachEvent && window.attachEvent("onload", function() {
            start_v_menu(a)
        })
    }

    function start_v_menu(i) {
        var e = document.getElementById(i.menuId),
            j = e.offsetHeight,
            b = e.getElementsByTagName("ul"),
            g = /msie|MSIE 6/.test(navigator.userAgent);
        if (g)
            for (var h = e.getElementsByTagName("li"), a = 0, l = h.length; a < l; a++) {
                h[a].onmouseover = function() {
                    this.className = "onhover"
                };
                h[a].onmouseout = function() {
                    this.className = ""
                }
            }
        for (var k = function(a, b) {
                if (a.id == i.menuId) return b;
                else {
                    b += a.offsetTop;
                    return k(a.parentNode.parentNode, b)
                }
            }, a = 0; a < b.length; a++) {
            var c = b[a].parentNode;
            c.getElementsByTagName("a")[0].className += " arrow";
            b[a].style.left = c.offsetWidth + "px";
            b[a].style.top = c.offsetTop + "px";
            if (i.alignWithMainMenu) {
                var d = k(c.parentNode, 0);
                if (b[a].offsetTop + b[a].offsetHeight + d > j) {
                    var f;
                    if (b[a].offsetHeight > j) f = -d;
                    else f = j - b[a].offsetHeight - d;
                    b[a].style.top = f + "px"
                }
            }
            c.onmouseover = function() {
                if (g) this.className = "onhover";
                var a = this.getElementsByTagName("ul")[0];
                if (a) {
                    a.style.visibility = "visible";
                    a.style.display = "block"
                }
            };
            c.onmouseout = function() {
                if (g) this.className = "";
                this.getElementsByTagName("ul")[0].style.visibility = "hidden";
                this.getElementsByTagName("ul")[0].style.display = "none"
            }
        }
        for (var a = b.length - 1; a > -1; a--) b[a].style.display = "none"
    }

</script>
    </head>

    <body class="bg-faded">
        <nav class="navbar navbar-toggleable-md navbar-light bg-blue fixed-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <a class="navbar-brand" href="index.php"><img src="Image/epurnea.png" alt="ePurnea.com" width="125px"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav offset-lg-8 col-lg-4 text-center">
                    <div id='cssmenu' class="">
                        <ul>
                            <li class='last'><a href='login.php' data-toggle='modal' data-target='#exampleModal' data-whatever='@getbootstrap'><span>Login</span></a></li>
                            <li class=''><a href='signup.php'><span>SignUp</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container margin-top"></div>
        <div class="col-lg-12 row m-0">
            <div class="col-lg-3" style="margin-top:-25px;">
                <div class='left-navigation box-shadow'>
                    <ul class="list">
                       
                       <?php 
                        $query2 = "select * FROM category where maincat='$slug'";
                        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        global $cat2;
        $cat2 = $row['cat_name'];}
                        ?>
                        <?php $query = "select * FROM category where parent_id='0'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $maincat = $row['maincat'];
        $slug  = $row['cat_slug'];
        
        $icon  = $row['icon'];
    
        echo " 
            <li>
                
                    <span class='col-1 p-0 m-0'><i class='fa fa-$icon fa-lg text-muted'></i></span>
                    <span class='col-10 m-0 p-0' style='float:right'>$maincat</span>
                <ul class='sub'>
                <li><a href='vertical-menu#1'>$cat</a></li>
                </ul>
            </li>";
        } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3" style="margin-top:-25px;">
               
               
               
                <ul id="menu-v">
    <li><a href="#">Item 1</a></li>
    
    
    <li><a href="#">Item 2</a>
        <ul class="sub">
            <li><a href="vertical-menu#1">Vertical Menu</a></li>
            <li><a href="vertical-menu#2">Vertical Menus</a></li>
        </ul>
    </li>
    <li><a href="#">Item 3</a>
        <ul class="sub">
            <li><a href="#">Sub Item 3.1</a></li>
            <li><a href="#">Sub Item 3.2</a></li>
            <li><a href="#">Sub Item 3.3</a></li>
            <li><a href="#">Sub Item 3.4</a></li>
            <li><a href="#">Sub Item 3.5</a></li>
        </ul>
    </li>
    <li><a href="#">Item 4</a></li>
    <li><a href="#">Item 5</a>
        <ul class="sub">
            <li><a href="#">Sub Item 5.1</a></li>
            <li><a href="#">Sub Item 5.2</a>
                <ul class="sub">
                    <li><a href="#521">Vertical Menu 5.2.1</a></li>
                    <li><a href="#522">Vertical Menu 5.2.2</a></li>
                    <li><a href="#523">Vertical Menu 5.2.3</a></li>
                    <li><a href="#524">Vertical Menu 5.2.4</a></li>
                    <li><a href="#525">Vertical Menu 5.2.5</a></li>
                </ul>
            </li>
            <li><a href="#">Sub Item 5.3</a>
                <ul class="sub">
                    <li><a href="#">Sub Item 5.3.1</a></li>
                    <li><a href="#">Sub Item 5.3.2</a></li>
                    <li><a href="#">Sub Item 5.3.3</a></li>
                    <li><a href="#">Sub Item 5.3.4</a></li>
                    <li><a href="#">Sub Item 5.3.5</a></li>
                    <li><a href="#">Sub Item 5.3.6</a></li>
                    <li><a href="#537">Vertical Menus 5.3.7</a></li>
                    <li><a href="#538">Vertical Menus 5.3.8</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href="#">Item 6</a></li>
</ul>
            </div>
        

        <!-- Login Modal -->
        
        </body>
    </html>
