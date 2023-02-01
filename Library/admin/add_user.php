<?php 
    session_start();
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/config.php');
    include('includes/auth.php');
    $errMsg = '';
    $err = false;
    if(isset($_POST['add-user-form'])){
        
        $email = $_POST['email'];
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $pass = $_POST['password'];
        $cpass = $_POST['C-password'];
        $passMd5 = md5($pass);


        

        $query = "SELECT * from users WHERE email = '$email' LIMIT 1";;
        $result = mysqli_query($connection, $query) or die("Query failed");
        $data = mysqli_num_rows($result);
        
        if($data > 0){
            $err = true;
            $errMsg = "This User already exist";
        }
        else{
            if($pass == $cpass){
               $query2 = " INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `status`) 
                VALUES ('$name','$lname','$email','$passMd5 ','1') ";
                $result2 = mysqli_query($connection, $query2) or die("Query failed");
               
                if($result2){
                    $err = true;
                    $errMsg = "user add successfully";
                }else{
                    $err = true;
                    $errMsg = "user add failed";
                }
            }
            else{
                $err = true;
                $errMsg = "Password doesn't matched";
            }
            
            
        }


    }
?>

 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
        <div id="content">
            <?php include('includes/navbar.php') ?>

        <!-- container fluid start -->
        <div class="container-fluid">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="category">
                    
                        <a href="user.php" class="back">back</a>
                       
                        <div class="form-body">
                        <?php if($err) {
                         echo '<div class="alert alert-success" role="alert">';
                         echo $errMsg;
                         echo '</div>';
                        }    
                        ?>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label"> Name:</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="lname" class="form-label">Last Name:</label>
                                    <input type="text" name="lname" class="form-control" id="lname" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="C-password" class="form-label">Confirm Password:</label>
                                    <input type="password" name="C-password" class="form-control" id="C-password" required>
                                </div>
                                
                                <button type="submit" name="add-user-form" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        </div>
        <!-- container fluid end -->

<?php 
    include('includes/scripts.php');
    include('includes/footer.php');
?>