<div class="b-example-divider"></div>


    <footer class="py-5" >

      <div class="container" >
        <div class="row">
          
          <div class="col-lg-4 mb-3">
            <button type="button" class="btn btn-primary" ><h2><b>AABID</b></h2></button>
              <p">   Our center operates on weekdays <br> from 9:00 am to 
                 5:00 pm and <br>on weekends from 9:00 am to 9:00pm.
                <br>
                <a href="https://www.google.com/mymaps/viewer?mid=1O7pQDJTpG7yaIswTcG_FeAlQTsk&hl=en"><i class="bi bi-geo-alt-fill display-6"></i></a>
                <a href=""><i class="bi bi-envelope-fill display-6"></i></a>
              </p>
          </div>
  
          <div class="col-lg-4 mb-3 " >
            <h4  > Useful Links</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0 text-body-secondary" ><span">-Home Page</span></a></li>
              <li class="nav-item mb-2"><a href="disclaimer.html" class="nav-link p-0 text-body-secondary"> <span">-Disclaimer</a></li></span>
              <li class="nav-item mb-2"><a href="aboutus.html" class="nav-link p-0 text-body-secondary"><span">-About Us</a></li></span>
            </ul>
          </div>       
  
          <div class="col-lg-4 mb-3 ">
            <form>
              <h3  style="color:white;">Newsletter</h3>
              <div class="d-flex flex-column flex-sm-row w-75 gap-2 my-3">
            
                <input id="newsletter1" type="text"  class="form-control" placeholder="YOUR EMAIL">
                <button class="btn btn-primary d-none" id="email_model_btn" type="button" data-bs-toggle="modal" data-bs-target="#emailModal">Model</button>
                <button class="btn btn-primary" type="button" onclick="email()" style="box-shadow: 2px 2px 2px;">Subscribe</button>

                <!-- email modal -->
                <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="emailModalLabel"> Alert! </h1>
                        <button type="button" onclick="email_clear()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h1 class="display-5"> You Are Registered Successfully </h1>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="email_clear()" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- email modal end -->
              
              </div>
              <a href="https://www.facebook.com/"><i class="bi bi-facebook " style="margin-right: 10px; "></i></a> 
              <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Ftechlauv%2Fp%2FCx-3V1EvAnH%2F&source=logged_out_half_sheet&img_index=1"><i class="bi bi-instagram text-light" style="margin-right: 10px;"></i></a> 
             <a href="https://twitter.com/"><i class="bi bi-twitter" style="margin-right: 10px; "></i></a> 
            </form>
          </div>

        </div>
      </div>

      <script>
        setTimeout(() => {
          document.getElementById('alerts').style.display = "none";
        }, 5000);
      </script>
      <div class="d-flex flex-column border-top text-center ">
        <p>© 2024 AABid All rights reserved.</p>
      </div>

    </footer>