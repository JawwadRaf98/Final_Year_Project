<?php 
  session_start();
    include_once('admin/includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php include_once('headerLinks.php') ?>

    <title>E-Library</title>
    
</head>
<body>
    <!-- header -->
    <section class="header">

        
        <div class="main_header">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="./images/logoTop.png" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="courses.php">Categories</a>
                    </li>
                    
                    <?php if(isset($_SESSION['isLogin']) &&  $_SESSION['isLogin']){ ?> 
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                      </li>
                    <?php } else { ?>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Login/Register</a>
                      </li>
                      <?php } ?>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Profile</a>
                    </li>
                  </ul>
                  
                </div>
                <form class="form-inline my-2 my-lg-0 search">
                    <input class="form-control mr-sm-2 search_box" type="search" placeholder="Search books by author" aria-label="Search">
                    
                    <button class="btn btn-outline-success my-2 my-sm-0" ><i type="submit" class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
              </nav>
        </div>
    </section>