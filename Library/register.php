<?php 
    include_once("./admin/includes/config.php");
    // var_dump($_POST);
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
                VALUES ('$name','$lname','$email','$passMd5','1') ";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "headerLinks.php" ;?>
    <title>Register</title>
</head>
<body>
    <div class="">
        <div class="login">
            <div class="_flex">
                <div class="section-1">
                    
                     <div class="loginInner">
                     
                         <h3 class="heading">Register</h3>

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

                         <div class="regLink">
                             <p>Do not have account? <a href="register.php">Register Here</a>

                         </div>
                     </div>
                </div>
                <div class="section-2">
                <div class="loginInner">
                         <h3 class="heading">Hello, Friends</h3>
                         <p>Enter your detail to register yourself.</p>
                        <a href="login.php">Sign In</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>