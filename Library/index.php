<?php 
  include_once("header.php")

  ?>


    <!-- Banner -->
    <section class="banner">
      <div class="text">
       <h3>Enjoy ebooks and audiobooks for free</h3>
       <p>Ebooks, audiobooks, magazines and more are available for free through your local library or school</p>
      </div>
    </section>

    <!-- explore more -->
    <section class="explore_more books_section  best_seller">
      <div class="heading">
        <h2>Our Best Categories</h2>
        <div class="container">
          <div class="categories">

            <div class="row">

              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                <div class="category">
                <div class="image">
                  <img src="./images/category/computer.png" alt="">
                </div>
                <div class="link">
                  <p><a href="courses.php">computer Science</a></p>
                </div>
                </div>
              </div>

              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4   ">
                
                <div class="category">
                <div class="image">
                  <img src="./images/category/english.png" alt="">
                </div>
                <div class="link">
                  <p><a href="courses.php">English</a></p>
                </div>
              </div>
              </div>

              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                <div class="category">
                <div class="image">
                  <img src="./images/category/maths.jpg" alt="">
                </div>
                <div class="link">
                  <p><a href="courses.php">Mathematics</a></p>
                </div>
              </div>
            </div>
              
            </div>
          </div>
          </div>
      </div>
    </section>


    <!-- Best Seller -->
    <?php include_once ("best_seller.php") ?>

    
    <!-- Top Latest -->
    <?php include_once("latest_books.php") ?>

    <!-- footer -->

    <section class="footer">
      <footer>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="logo">
              <img src="./images/logo.png" alt="">
            </div>
          </div>
          
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="about">
              <h4>About E-Libarary</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem odit voluptas, 
                it dolorum placeat. Quisquam quam velit  a quod voluptatibus doloremque quos. Magnam sit
                 perferendis necessitatibus, repellendus ab atque?</p>
            </div>
          </div>

          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
            <div class="useful-links">
              <h4>Useful Links</h4>
                <ul class="links">
                  <!-- <li class="list-item">
                    <a href="about_us.html">About Us</a>
                  </li> -->
                  <li class="list-item">
                    <a href="courses.php">Categories</a>
                  </li>
                  <!-- <li class="list-item">
                    <a href="contact_us.html">Contact Us</a>

                  </li> -->
                  <!-- <li class="list-item">
                    <a href="out_team.html">Our Team</a>
                  </li> -->

                </ul>
              
              
            </div>
          </div>

        </div>
      </footer>
      
    </section>
    <section class="footer2">
      <p>Design and Created by : <span class="std_id">Bc180408671</span> &amp; <span class="std_id">Bc180408671</span></p>
    </section>

    

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>