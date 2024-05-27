<?php

require_once("header.php");
require_once("connection.php");
if( isset( $_SESSION['user'] ) ){
  header("location: show_all_users.php?login_already");
}

if(isset( $_GET ["register"] )){
    $user_name=$_GET['user_name'];
    $user_gender=$_GET['user_gender'];
    $user_phone_no=$_GET['user_phone_no'];
    $user_email=$_GET['user_email'];
    $user_password=$_GET['user_password'];

    $file_name = $_FILES["product_image"]['name'];
    $file_tmp_path = $_FILES["product_image"]['tmp_name'];


    $select_query = "SELECT * FROM `users` WHERE `user_email` = '$user_email'";
    $result = mysqli_query($connection , $select_query);
    if( $result -> num_rows == 1 ){
      header("location: register.php?user_email_exist&user_name=$user_name");
    }

     $insert_query="INSERT INTO `users`( `user_name`, `user_gender`, `user_phone_no`, `user_email`, `user_password`) VALUES ('$user_name','$user_gender','$user_phone_no','$user_email','$user_password')";
    $result=mysqli_query($connection,$insert_query);
    if( $result ){
      move_uploaded_file($file_tmp_path,'images/user_pic' . $file_name);
      header("location: index.php?user_register");
    }
}

?>

<form method="GET">
    
  <div class="mb-3">
    <label for="name">Name</label>
    <input type="text" value="<?php if( isset($_GET['user_name']) ) echo $_GET['user_name']  ?>" name="user_name" id="name"  class="form-control" required>
  </div>
  <div class="mb-3">
  <label for="gender">Gender</label>
  <select name="user_gender" id="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="phone_no" class="form-label ">Phone Number</label>
    <input type="text" name="user_phone_no" class="form-control " required id="phone_no" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" required name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  name="user_password" class="form-control" required id="exampleInputPassword1">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Submit</button>
</form>





























<?php
require_once("footer.php");
?>
