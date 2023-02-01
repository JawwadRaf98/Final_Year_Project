<?php 
    session_start();
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/config.php');
    include('includes/auth.php');
    $msg = false;
    $errMsg ="";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
        $name = $_POST["name"];
        $name = $_POST["l-name"];
        $email = $_POST["email"];
        $password = $_POST['Password'];
        $cpassword = $_POST['C-Password'];
    
        $user_checking_query = "SELECT * from users WHERE email = '$email' LIMIT 1";
            
        $result = mysqli_query($connection, $user_checking_query);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            $msg= true;
            $errMsg = "This email already exist!";
        }
        else{
            if($password == $cpassword){
                $msg= true;
                $errMsg = "pass amtch";
            }
            else{
                $msg= true;
                $errMsg = "This Doen't matched!";
            }
        }}


?>
<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
        <div id="content">
            <?php include('includes/navbar.php') ?>

        <!-- container fluid start -->
        <div class="container-fluid">
        <h1>Users</h1>
        <div>
        <a href="add_user.php" class="btn btn-outline-primary" >
            Add User
            </a>
        </div>
        <hr class="blue-divider">


        <?php 
            
            $query = "SELECT * FROM users";
            $run_query = mysqli_query($connection, $query);
            $data = mysqli_fetch_all($run_query);

        ?>

        <!-- user table -->
        <table class="table table-hover" id="users" width= '100%'>
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>

            <?php 
                if(mysqli_num_rows($run_query) > 0){
                    $i = 1;
                    foreach($data as $row){
                        // var_dump($row);
                        $status = $row[5] == "1" ? "Active" : "Deactive";
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td style='text-transform: none'>$row[3]</td>";
                        echo "<td>". $status . "</td>";
                        echo "<td>
                        <a href = 'editUser.php?id=".$row[0]."'>Edit</a>
                        <a onClick=\"javascript: return confirm('Please confirm deletion');\" href = 'deleteUser.php?id=".$row[0]."'>Delete</a></td>";
                        echo "</tr>";

                        $i++;
                    }
                }
            ?>
                
            </tbody>
        </table>

        </div>
        <!-- container fluid end -->


<!-- Modal -->
<div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
            if($msg){
                echo '<div class="alert alert-primary" role="alert">'.
                    $errMsg  
                .'</div>';
            }
        ?>
      <form action="" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name = "name" id="name" aria-describedby="emailHelp" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="l-name">Last Name</label>
            <input type="text" class="form-control" name = "l-name" id="l-name" aria-describedby="emailHelp" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name = "email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name='Password'  placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="C-Password" placeholder="Enter Confirm Password">
        </div>
    
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name='addUser'>Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-primary">Save </button> -->
      </div>
      </form>

    </div>
  </div>
</div>

</div>

<?php 
    include('includes/scripts.php');
    include('includes/footer.php');
?>