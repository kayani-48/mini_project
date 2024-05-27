<?php
    require_once("header.php");

    // if( !isset( $_SESSION['cart'] ) ){
    //   header("location: show_products.php?cart_empty");
    // }

?>

<section class="h-100 h-custom" style="background-color: #d2c9ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                    <h6 class="mb-0 text-muted"> <?php
                      if( isset( $_SESSION['cart'] ) ){
                        echo count($_SESSION['cart']);
                      }
                    ?> items</h6>
                  </div>
                  <hr class="my-4">

                  <?php
                   
                   if( !isset( $_SESSION['cart'] ) ){
                    ?>
                      <h1 class="text-center"> Your CArt Is Empty </h1>
                    <?php
                    
                    }else{

                    

                    foreach( $_SESSION['cart'] as $array ){
                      ?>

                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="images/product_images/<?php
                    echo($array['product_image']);
                    ?>"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted"> <?php
                    echo($array['product_category']);
                    ?></h6>
                      <h6 class="text-black mb-0"> <?php
                    echo($array['product_name']);
                    ?></h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                        >
                        <i class="bi bi-plus-lg"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control" style="width:50px" />

                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                        >
                        <i class="bi bi-dash-lg"></i>
                      </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0">RS : <span class="price">
                      <?php
                      echo($array['product_price']);
                      ?> 
                      </span> </h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="process.php?remove_from_cart&product_id=<?php echo $array['product_id'] ?>" class="text-muted"><i class="bi bi-x-lg"></i></a>
                    </div>
                  </div>
                  <hr class="my-4">

                      <?php

                    }
                  }
                  ?>

                  


                  <div class="pt-5">
                    <h6 class="mb-0"><a href="#!" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items <?php
                      if( isset( $_SESSION['cart'] ) ){
                        echo count($_SESSION['cart']);
                      }
                     ?> </h5>
                    <h5>RS : <span class="total_price"></span></h5>
                  </div>

                  <h5 class="text-uppercase mb-3">Shipping</h5>

                  <div class="mb-4 pb-2">
                    <select data-mdb-select-init>
                      <option value="1">Standard-Delivery- €5.00</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                    </select>
                  </div>

                  <h5 class="text-uppercase mb-3">Give code</h5>

                  <div class="mb-5">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Enter your code</label>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <h5>RS : <span class="total_price"></span></h5>
                  </div>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
    let price = document.querySelectorAll(".price");
    let total_price = 0
    for (let value of price) {
       total_price += (+ value.innerHTML) ;
    }
    
    let show_total_price = document.querySelectorAll(".total_price");
    for (let value of show_total_price) {
        value.innerHTML = total_price
    }
</script>

<?php
    require_once("footer.php");
?>