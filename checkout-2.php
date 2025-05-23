<?php
include("includes/db.php");
include("functions/functions.php");
include("header.php");
?>


    <!--Content starts-->
   
        <div id="right_content" class="checkout">
          <?php cart(); ?>
            <div id="headline">
                <div id="headline_content">
                  <?php
                      if(!isset($_SESSION['customer_email'])){
                        echo "<b>Welcome Guest !</b> <b style='color:yellow;'>Shopping Cart</b>";
                      }
                      else {
                        echo "<b>Welcome: " ."<span style='color:pink;'>". $_SESSION['customer_email']."</span></b>"."<b style='color:yellow;'>Your Shopping Cart</b>";
                      }
                   ?>
                    <span>-  Total Items: <?php items(); ?> - Total Price: ₹ <?php total_price(); ?><a href="cart.php" style="color:yellow;"> Go to Cart</a></span>



                </div>
            </div>
            <!--Headline ends her-->

            <div class="payment-opt">
                <?php
                  if(!isset($_SESSION['customer_email']))
                  {
                      include("customer/customer_login_1.php");
                  }
                  else{
                    include ("payment_options.php");
                  }

                 ?>
            </div>


        </div>





    </div>
    <!--Content ends-->


    <!-- Footer of site -->
    <footer>
      <div class="footer_wrap">
        <div class="footer_inner_wrap">
          <div class="footer_sections first_sec">
            <div class="heading_footer">
              <h2>About Us</h2>             
            </div>
            <div class="footer_content">
              <div class="footer_logo_text">
                <p>Discover the latest Furniture in the town. Furniture that will make your home excillent and attractive.</p>
              </div>
            </div>
          </div>  
          <div class="footer_sections scnd_sec">
            <div class="heading_footer">
              <h2>Contact Us</h2>             
            </div>
            <div class="footer_logo_text">
              <p>
                <b>Address:</b> BANGALORE,KARNATAKA<br>
              </p>
            </div>
          </div>  
          <div class="footer_sections thrd_sec">
            <div class="heading_footer">
              <h2>Social Links</h2>             
            </div>
            <div class="footer_content">
              <ul class="footer_social_links">
                <li>
                  <a href="https://www.facebook.com/" target="_blank"><img src="images/social_icons/fb.png" alt="Facebook"></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank"><img src="images/social_icons/insta.png" alt="Instagram"></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" target="_blank"><img src="images/social_icons/youtube.png" alt="Youtube"></a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank"><img src="images/social_icons/twitter.png" alt="Twitter"></a>
                </li>
                <li>
                  <a href="https://www.snapchat.com/" target="_blank"><img src="images/social_icons/snapchat.png" alt="Snapchat"></a>
                </li>
              </ul>
            </div>
          </div>          
        </div>
      
        <div class="go_top">
          <a id="go_to_top" href="javascript:void();"><img src="images/social_icons/top.png" alt="Go to Top"></a>
        </div>
        <div class="copyright_link">
        <span>&copy; 2025 Furniture House</span>
        </div>
      </div>
    </footer>
    
    <!-- Footer of site Ends Here-->
  </div>
  <!--Main Container ends -->
</body>
</html>
