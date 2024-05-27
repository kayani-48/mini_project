<?php
    session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="show_products.php">Show Products</a>
        </li>
        
        </li>
        <li class="nav-item">
    <a class="nav-link"> <?php 
    if( isset( $_SESSION['user'] ) ){
    echo $_SESSION['user']['user_name'];
   }else{
     echo "No User login Yet";
  }
   
 ?> </a>
 </li>
</ul>
      <?php 
 if( isset( $_SESSION['user'] ) ){
 ?>
  <a href="add_to_cart.php" > <i class="bi bi-cart fs-2 me-4"></i> </a>
  <a href="logout.php" class="btn btn-outline-success"> Logout </a>
  <?php
  }else{
  ?>
  <a href="register.php" class="btn btn-outline-success mx-2"> Register </a>
   <a href="index.php" class="btn btn-outline-success"> Login </a>
    <?php
     }
                            
      ?>
    </div>
  </div>
</nav> 

<?php
  if(isset($_GET['user_register'])){
    ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alerts">
        <strong>Sucess!</strong> You Registered SuccessFully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
  }
  if(isset($_GET['alreadyregistered'])){
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerts">
        <strong>USER EMAIL ALREADY EXIST</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
  }
  if( isset($_GET['user_deleted']) ){
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerts">
            <strong>Success!</strong> User Deleted SuccessFully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
}
if( isset($_GET['update_user']) ){
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> User Updated SuccessFully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['login']) ){
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> User Login SuccessFully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['user_email_exist']) ){
  ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> User Email Already Exist.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['invalid_email_password']) ){
  ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> User Email OR Password is Incorrect.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['cart_empty']) ){
  ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerts">
          <strong>Danger!</strong> Your Cart Is Empty.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['update_product']) ){
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> product updated SuccessFully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['deleted_product']) ){
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> product Deleted SuccessFully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if( isset($_GET['item_removed']) ){
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerts">
          <strong>Success!</strong> Product Removed SuccessFully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
}
if(isset($_GET['product_register'])){
  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alerts">
      <strong>Sucess!</strong> You product SuccessFully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
}



if(isset($_GET['logout'])){
  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alerts">
      <strong>Sucess!</strong> user logout SuccessFully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
}
?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>