<nav class="navbar navbar-toggleable-md navbar-light bg-blue fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="index.php"><img src="Image/epurnea.png" alt="ePurnea.com" width="125px"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav offset-lg-9 col-lg-3 text-center">
            <ul class='nav'>
                <?php  
                if(isset($_SESSION['email'])){
                    $log = $_SESSION['email'];
                    $query ="select * from user where email='$log'";
                    $run = mysql_query($query);
               while ($row = mysql_fetch_array($run)) {
                    $id = $row['id']; 
                    $name = $row['name'];
                    $img = $row['img'];               
                    if(empty($img)) $img = "default.png";
                } 
                echo "<div class='dropdown'>
                    <a class='p-1 btn bg-dblue a2 btn-sm' href='#' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <img class='img-fluid' style='border-radius:50%;width:30px;height:30px;' src='Img/$img'>
                    <span class='font-normal m-2'>$name</span>
                    <i class='fa fa-caret-down mr-1'></i>
                    </a>
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='profile.php'><i class='fa fa-user fa-fw'></i> My Profile</a>
                        <a class='dropdown-item' href='list.php'><i class='fa fa-briefcase fa-fw'></i> My Business</a>
                        <div class='dropdown-divider'></div>
                        <h6 class='dropdown-header'>Manage Your Account</h6>
                        <a class='dropdown-item' href='setting.php'><i class='fa fa-cog fa-fw'></i> Setting</a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='logout.php'><i class='fa fa-sign-out fa-fw'></i> Logout</span></a>
                    </div>
                </div>
                    "; }
                else{
                    echo "<div class='dropdown'>
                    <a class='p-0 btn bg-dblue a2 btn-sm' href='#' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <span class='fa-stack fa-lg ml-2'>
                            <i class='fa fa-circle fa-stack-2x text-blue'></i>
                            <i class='fa fa-user fa-stack-1x fa-inverse'></i>
                        </span>
                        <span class='m-3'>Sign Up</span>
                    </a>
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='profile.php'><i class='fa fa-user fa-fw'></i> My Profile</a>
                        <a class='dropdown-item' href='list.php'><i class='fa fa-briefcase fa-fw'></i> My Business</a>
                        <div class='dropdown-divider'></div>
                        <div class='text-center small'>Register here for Free</div>
                        <a class='dropdown-item' href='signup.php'><i class='fa fa-sign-in fa-fw'></i> Sign Up</a>
                        <div class='dropdown-divider'></div>
                        <div class='text-center small'>If you are a User</div>
                        <a class='dropdown-item' href='login.php' data-toggle='modal' data-target='#Login' data-whatever='@getbootstrap'><span class='btn btn-danger btn-sm btn-block'>Login</span></a>
                    </div>
                    </div>
                </div>"; } 
            ?>
            </ul>
        </div>
    </div>
    </div>
</nav>
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
