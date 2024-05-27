<?php
    require_once('header.php');
    require_once('connection.php');

    if( isset( $_SESSION['user'] ) ){
        header("location: show_all_users.php?login_already");
    }
    
    if( isset( $_GET['login_form'] ) ){
        
    $user_email = $_GET['user_email'];
    $user_password = $_GET['user_password'];

     $select_query = "SELECT * FROM `users` WHERE `user_email` = '$user_email' AND `user_password` = '$user_password' ";

     $result = mysqli_query($connection,$select_query);

     
      if( $result -> num_rows == 1 ){

         $row = mysqli_fetch_assoc($result);

         if( $row['user_role'] =='admin' ){
            $_SESSION['admin'] = $row; 
          header("location: admin/index.php?login");
         }else{
          $_SESSION['user'] = $row;

          header("location: show_products.php?login");
         }
        
      }else{
       header("location: index.php?invalid_email_password");
     }

    }
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-2 text-center my-5"> Login Form </h1>

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="user_password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="login_form" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </section>

<?php
  require_once('footer.php');
?>