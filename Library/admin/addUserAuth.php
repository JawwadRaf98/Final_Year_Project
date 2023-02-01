<?php  
    include_once("includes/config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST['Password'];
    $cpassword = $_POST['C-Password'];

    $user_checking_query = "SELECT * from users WHERE email = '$email' LIMIT 1";
        
    $result = mysqli_query($connection, $user_checking_query);
    $user = mysqli_fetch_assoc($result);
    $rowcount = mysqli_num_rows($user)
    if($rowcount > 0){
        $err = "This email already exist!"
    }
    else{
        if($password == $cpassword){

        $query = "";
    }

    

    echo($name. " ". $email . " ".$password ." ".$cpassword);


   
}
  
?>