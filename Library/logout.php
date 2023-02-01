<?php 
    session_start();
    // var_dump($_SESSION['isLgoin']);
    unset($_SESSION['isLogin']);
    unset($_SESSION['userInfo']);
    // var_dump($_SESSION['isLgoin']);

    

    header("location: index.php");
?>