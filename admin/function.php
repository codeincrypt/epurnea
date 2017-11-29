<?php 
class dbconnect{
    function __construct(){
        define('SERVER','localhost');
        define('USERNAME','root');
        define('PASS','');
        define('DB','epurnea');
        $connect = mysql_connect(SERVER,USERNAME,PASS);
        $db = mysql_select_db(DB,$connect);
    } 
}
class insert{
    // To insert category by admin
    function add_category(){
        $cat = $_POST['cat'];
        $cat_slug = $_POST['slug'];
        $desc = $_POST['desc'];
        $icon = $_POST['icon'];
        $parent = $_POST['parent'];
        $maincat = $_POST['maincat'];
        
        $query = "insert into category (cat_name, cat_slug, maincat, descrip, parent_id, icon) value ('$cat','$cat_slug','$maincat','$desc','$parent','$icon')";
        
        $run = mysql_query($query);
        echo "<script>window.open('addcat.php','_self')</script>";
    }
    // This function is user for add business by users
    function addbusinessbyuser(){
        $title = $_POST['title'];
        $cat = $_POST['cat'];
        $subcat = $_POST['subcat'];
        $desc = $_POST['desc'];
        $contact = $_POST['contact'];
        $contact2 = $_POST['contact2'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $address = $_POST['address'];
        $user = $_POST['user'];
            
        $img1 = $_FILES['img1'] ['name'];
        $img2 = $_FILES['img2'] ['name'];
        $img3 = $_FILES['img3'] ['name'];
        
        $tmp_img1 = $_FILES['img1'] ['tmp_name'];
        $tmp_img2 = $_FILES['img2'] ['tmp_name'];
        $tmp_img3 = $_FILES['img3'] ['tmp_name'];
        
        move_uploaded_file($tmp_img1,"Img/$img1");
        move_uploaded_file($tmp_img2,"Img/$img2");
        move_uploaded_file($tmp_img3,"Img/$img3");
            
        $query = "insert into ads(title, subcat, cat_slug, descrip, contact, contact2, email, website, address, img1, img2, img3, user) value('$title','$subcat','$cat','$desc','$contact','$contact2','$email','$web','$address','$img1','$img2','$img3','$user')";
            
            $run = mysql_query($query);
    }
}
class call{  
    function subcategory(){
        $query = "select * FROM category where parent_id='0'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $subcat = $row['subcat'];
    
        echo "<option value='$subcat'>$subcat</option> ";
        }
    }
    
    function callsubcategory(){
        
        $slug = $_GET['category'];
                    
        $query = "select * FROM category where maincat='$slug'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $slug  = $row['cat_slug'];
        $icon  = $row['icon'];
        $parent  = $row['parent_id'];
    
        echo "<div class='col-lg-3 text-center'>
                <a href='subcat.php?subcategory=$slug' class='nav-link p-0 mb-2'>
                    <div class='card card-secondery' title='$cat'>
                        <div class='card-block'>
                        <i class='fa fa-$icon fa-4x'></i>
                        <h5 class='card-title mt-3'>$cat</h5>
                        </div>
                    </div>
                </a>
            </div>";
        } 
    }
    // call ads list filter by category in category page
    function callcategoryads(){
        
        $slug = $_GET['category'];
                    
        $query = "select * FROM ads where cat_slug='$slug' AND status='1' ";
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
        
        
        echo "<div class='col-lg-4 mt-3'>
        
<a href='business.php?business=$title_slug'>
    <div class='card box-shadow' title='$title | ePurnea.com A Online Business Directory'>
        <img class='card-img-top' src='Img/$img' style='width:100%;height:260px;' alt='$title Image'>
        <div class='card-block p-2'>
            <p class='card-text small text-muted m-0'>$subcat</p>
            <h4 class='card-title text-center text-grey m-0'>$title</h4>
            <p class='card-text text-center small m-0'>$add</p>
        </div>
    </div>
</a>
        </div>";
        } 
    }
    // call ads list filter by subcategory in subcategory page
    function callsubcatads(){
        
        $slug = $_GET['subcategory'];
                    
        $query = "select * FROM ads where subcat_slug='$slug' AND status='1' ";
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
        
        
        echo "<div class='col-lg-4 mt-3'>
        
<a href='business.php?business=$title_slug'>
    <div class='card box-shadow' title='$title | ePurnea.com A Online Business Directory'>
        <img class='card-img-top' src='Img/$img' style='width:100%;height:260px;' alt='$title Image'>
        <div class='card-block p-2'>
            <p class='card-text small text-muted m-0'>$subcat</p>
            <h4 class='card-title text-center text-grey m-0'>$title</h4>
            <p class='card-text text-center small m-0'>$add</p>
        </div>
    </div>
</a>
        </div>";
        } 
    }
    // sidebar menu category
    function category1(){
        $query = "select * FROM category where parent_id='0'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $maincat = $row['maincat'];
        $slug  = $row['cat_slug'];
        $desc = $row['descrip'];
        $icon  = $row['icon'];
        $parent  = $row['parent_id'];
    
        echo " 
            <li>
                <a href='category.php?category=$slug' class='text-white nav-link'>
                    <span class='col-1 p-0 m-0'><i class='fa fa-$icon fa-lg text-muted'></i></span>
                    <span class='col-10 m-0 p-0' style='float:right'>$cat</span>
                </a> 
            </li>";
        }
    }
    // all business list in homepage
    function allads(){
        $query = "select * FROM ads where status='1' order by id DESC LIMIT 12";
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
        
        echo "
<div class='col-md-4 mb-3'>
    <a href='business.php?business=$title_slug'>
        <div class='column'>
            <div class='post-module'>
                <div class='thumbnail'>
                    <img src='Img/$img' class='img-fluid thumbnail' alt='$title | ePurnea.com | Profile Image'> </div>
                <div class='post-content'>
                    <div class='category'>$subcat</div>
                    <h1 class='title'>$title</h1>
                    <p class='description'>$desc</p>
                </div>
            </div>
        </div>
    </a>
</div>";
        }
    }
    // business detail
    function business(){
        if(isset($_GET['business'])){
            $title_slug = $_GET['business'];
        $query = "select * FROM ads where title_slug='$title_slug'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        
        global $id;
        global $title;
        global $title_slug;
        global $subcat;
        global $subcat_slug;
        global $contact;
        global $desc;
        global $contact2;
        global $email;
        global $website;
        global $address;
        global $img1;
        global $img2;
        global $img3;
        
        
        $id = $row['id'];
        $title = $row['title'];
        $title_slug = $row['title_slug'];
        $subcat  = $row['subcat'];
        $subcat_slug  = $row['subcat_slug'];
        $cat_slug = $row['cat_slug'];
        $desc = $row['descrip'];
        $contact = $row['contact'];
        $contact2 = $row['contact2'];
        $email = $row['email'];
        $website = $row['website'];
        $address = $row['address'];
        $img1 = $row['img1'];
        $img2 = $row['img2'];
        $img3 = $row['img3'];
    }
        }
    }
}
class approve{
    // call for approve
    function call_approve(){
        if(isset($_GET['approve'])){
            $id = $_GET['approve'];
            
            $qry = "select * FROM ads where id=$id";
            $run = mysql_query($qry);
            
            while($row = mysql_fetch_array($run)){
                global $id;
                global $title;
                global $title_slug;
                global $subcat;
                global $cat_slug;
                global $desc;
                global $contact;
                global $contact2;
                global $email;
                global $website;
                global $address;
                global $img1;
                global $img2;
                global $img3;
                global $user1;
                
                $id = $row['id'];
                $title = $row['title'];
                $title_slug = $row['title_slug'];
                $subcat = $row['subcat'];
                $subcat_slug = $row['subcat_slug'];
                $cat_slug = $row['cat_slug'];
                $desc = $row['descrip'];
                $contact = $row['contact'];
                $contact2 = $row['contact2'];
                $email = $row['email'];
                $website = $row['website'];
                $address = $row['address'];
                $img1 = $row['img1'];
                $img2 = $row['img2'];
                $img3 = $row['img3'];
                $user1 = $row['user'];
            }
        }
    
    }
    // approve the business by admin
    function approve_business(){
        $id = $_GET['approve'];
        
        $title = $_POST['title'];
        $title_slug = $_POST['title_slug'];
        $cat_slug = $_POST['cat_slug'];
        $subcat = $_POST['subcat'];
        $subcat_slug = $_POST['subcat_slug'];
        $desc = $_POST['desc'];
        $contact = $_POST['contact'];
        $contact2 = $_POST['contact2'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $address = $_POST['address'];
        $status = $_POST['status'];
        $rate = $_POST['rate'];
        $premium = $_POST['premium'];
            
        $query = "update ads set title='$title', title_slug='$title_slug', subcat='$subcat', subcat_slug='$subcat_slug', cat_slug='$cat_slug', descrip='$desc', contact='$contact', contact2='$contact', email='$email', website='$website', address='$address', rate='$rate', premium='$premium', status='$status' where id='$id'";
            $run = mysql_query($query);
        
        
    }
    // call sub cat slug for approve the list
    function subcatslug_approve(){
        $query = "select * FROM category";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $slug  = $row['cat_slug'];
    
        echo "<option value='$slug'>$cat</option> ";
        }
    }
}
class admin_call{
    // call all business lists in table in admin panel
    function allads(){
        $query = "select * FROM ads order by id DESC";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $title_slug = $row['title_slug'];
        $subcat  = $row['subcat'];
        $cat  = $row['cat_slug'];
        $user  = $row['user'];
        $status = $row['status'];
        if($status==""){
        $status  = ("<span class='btn btn-danger btn-sm'>Pending</span>");}
        else {
            $status = ("<span class='btn btn-success btn-sm'>Active</span>");
        }
        echo "
        <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$subcat</td>
            <td>$cat</td>
            <td>$user</td>
            <td class='small'>$status</td>
            <td>
                <a href='view.php?view=$title_slug' class='btn btn-outline-primary a2 btn-sm'>View</i></a> 
                <a href='list.php?delete=$id' class='btn btn-outline-danger a2 btn-sm'>Delete</a>
            </td>
        </tr>
        ";
        }
    }
    // Users List in admin panel
    function userlist(){
        $query = "SELECT * FROM ads JOIN user ON ads.user = user.email";
        
        $run = (mysql_query($query));
            
       
    while ($row = mysql_fetch_array($run)){
     $business = $row['user'];
    }
        $query = "select * FROM user order by id DESC";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $address = $row['address'];
        $img = $row['img'];
        if(empty($img)) $img = "default.png";
        echo "
        <tr>
            <td><img src='../Img/$img' class='img-fluid' style='width:40px;height:40px;border-radius:50%;'></td>
            <td>$id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$address</td>
            <td></td>
            <td>
            <a href='view.php?view=$id' data-toggle='modal' data-target='#User'><i class='fa fa-pencil fa-eye'></i></a>
            </td>
        </tr>
        ";
        }
    }
    // call all Pending lists
    function pending(){
        $query = "select * FROM ads where status=0";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $subcat  = $row['subcat'];
        $cat  = $row['cat_slug'];
        
        echo "
        <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$subcat</td>
            <td>$cat</td>
            <td>
                <a href='approve.php?approve=$id' class='btn btn-outline-primary a2 btn-sm'>Approve</i></a> 
            </td>
        </tr>
        ";
        }
    }
    // call categoty in admin panel in card 
    function category(){
        $query = "select * FROM category where parent_id='0'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $slug  = $row['cat_slug'];
        $desc = $row['descrip'];
        $icon  = $row['icon'];
        $parent  = $row['parent_id'];
    
        echo "<div class='col-lg-3'>
                <a href='#'>
                    <div class='card card-danger text-white'>$cat</div>
                </a></div>
            ";
        }
    }
}
class user{
    // signup new user
    public function newaccount_user(){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $pass =sha1($_POST['pass']);
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $dist = $_POST['dist'];
        $state = $_POST['state'];
            
        $query = "insert into user(name, contact, email, password, gender, address, dist, state) value('$name','$contact','$email','$pass','$gender','$address','$dist','$state')";
        $run = mysql_query($query);
        
        echo "<script>window.open('profile.php','_self')</script>";
    }
    // login user
    public function loginuser(){
                $user = $_POST['username'];
                $pass = sha1($_POST['password']);
                
                $qry = "select * FROM user where email='$user' AND password='$pass'";
                $run = mysql_query($qry);
                $count = mysql_num_rows($run);
                
            if($count>0) {
                $_SESSION['email'] = $user;
                
                echo "<script>window.open('profile.php','_self')</script>";
            }
            else { echo "<script>alert('Incorrect Username or password !! Please Try Again !!')</script>";  }
    }
    // update users profile picture
    public function update_img(){
        $id = $_GET['profile']; 
        $img = $_FILES['img'] ['name'];
        $tmp_img = $_FILES['img'] ['tmp_name'];
        move_uploaded_file($tmp_img,"Img/$img");
                        
        $qry = "update user set img='$img' where email='$user'";
                        
        $run = mysql_query($qry);   
    }
    // All business lists in table in user profile
    public function useradded_business(){
        $query = "select * FROM ads where user='$user'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $title = $row['title'];
        $subcat  = $row['subcat'];
        $cat  = $row['cat_slug'];
        
        echo "
        <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$subcat</td>
            <td>$cat</td>
            <td><i class='fa fa-eye'></i></td>
        </tr>
        ";
        }
    }
}
class category{
    //for insert business list category were called in insert form
    function callcategory(){
        $query = "select * FROM category where parent_id='0'";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $slug  = $row['cat_slug'];
    
        echo "<option value='$slug'>$cat</option> ";
        }
    }
    //for insert business list sub category were called in insert form
    function callsubcategory(){
        $query = "select * FROM category";
        $run = (mysql_query($query));
            
    while ($row = mysql_fetch_array($run)){
        $id = $row['id'];
        $cat = $row['cat_name'];
        $slug  = $row['cat_slug'];
    
        echo "<option value='$cat'>$cat</option> ";
        }
    }
}
class delete{
    function delete_business(){
        $id = $_GET['delete'];
        $qry = "delete from ads where id='$id'";
    if(mysql_query($qry)) {
            echo "<script>window.open('list.php','_self')</script>";

            } 
        }
}

?>