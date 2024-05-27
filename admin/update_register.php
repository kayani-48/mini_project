<?php
    require_once("sidebar.php");
    require_once("header.php");
    require_once("../connection.php");

    if(isset( $_GET ["update_button"] )){
        $user_id=$_GET['users_id'];
        $user_name=$_GET['user_name'];
        $user_gender=$_GET['user_gender'];
        $user_phone_no=$_GET['user_phone_no'];
        $user_email=$_GET['user_email'];
        $user_password=$_GET['user_password'];
    
        $update_query = "UPDATE `users` SET `user_name`='$user_name',`user_gender`='$user_gender',`user_phone_no`='$user_phone_no',`user_email`='$user_email',`user_password`='$user_password'  WHERE `users_id` = '$user_id' ";
    
        $result = mysqli_query($connection , $update_query);
        if( $result ){
            echo '<script>
            location.assign("index.php?user_updated")
          </script>';
          }else{
            echo "Data ";
          }
    }
    
    $user_id=$_GET['users_id'];
    $select_query="SELECT * FROM`users`WHERE `users_id`='$user_id'";
    $result = mysqli_query($connection , $select_query);
    $row = mysqli_fetch_assoc($result);

?>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

        <form method="GET">
    
            <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="d-none" name="users_id" value="<?php echo $row['users_id'];?>">
            <input type="text" value="<?php echo$row['user_name']?>" name="user_name" id="name" class="form-control">
            </div>
            <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="user_gender" id="gender">
            <option value="Male" 
            <?php
                if( $row['user_gender'] == 'Male' ){
                echo "selected";
                }
        ?>
                >Male</option>
            <option value="female" <?php
                if( $row['user_gender'] == 'Female' ){
            echo "selected";
                }
            ?>
            >Female</option>
            </select>
            </div>
            <div class="mb-3">
            <label for="phone_no" class="form-label">Phone Number</label>
            <input type="text" value="<?php echo $row['user_phone_no']?>" name="user_phone_no" class="form-control" id="phone_no" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" value="<?php echo $row['user_email']?>" class="form-control" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password"   value="<?php echo $row['user_password']?>" name="user_password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="update_button" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>

</div>

<?php
    require_once("footer.php");
?>