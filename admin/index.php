
    <?php
      require_once("../connection.php");
      require_once("sidebar.php");
      // if( !isset( $_SESSION['admin'] ) ){
      //     header("location: ../index.php?not_login");
      // }

      require_once("header.php");

      if( isset( $_GET['delete_user'] ) ){
      
        $user_id =  $_GET['users_id'] ;
      
        $delete = "DELETE FROM `users` WHERE `users_id` = '$user_id'";
      
        $result = mysqli_query($connection,$delete);
        
        if( $result ){
            echo '<script>
            location.assign("index.php?user_deleted")
          </script>';
        }
      }

      ?>
  

      <div class="container-fluid">
        <!--  Row 1 -->
        
        <div class="row">
          <div class="col-lg-12">

              <h1 class="display-3 text-center my-4">SHOW ALL USERS</h1>
              <table class="table table-stripted">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone_no</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $select_query="SELECT * FROM `users`";
                  $result=mysqli_query($connection,$select_query);

                  while($row=mysqli_fetch_assoc($result)){
                    ?>
                      <tr>
                        <th> <?php echo $row['users_id']?></th>
                        <td> <?php echo $row['user_name']?></td>
                        <td> <?php echo $row['user_gender']?></td>
                        <td> <?php echo $row['user_phone_no']?></td>
                        <td> <?php echo $row['user_email']?></td>
                        <td> <?php echo $row['user_password']?></td>
                        <td> <a href="update_register.php?update_user&users_id=<?php echo$row['users_id']?>" class="btn btn-sm btn-info">Update </a></td>
                        <td> <a href="index.php?delete_user&users_id=<?php echo$row['users_id']?>" class="btn btn-sm btn-danger">Delete </a></td>
                        
                      </tr>
                    <?php
                  }


                  ?>
                </tbody>
              </table>

          </div>
        </div>

        
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
      </div>

<?php
  require_once("footer.php");
?>