<?php 
    include "admin/function.php";
    $connection = new dbconnect();

    session_start();
    session_destroy();
    header ("location: index.php");
exit();
?>