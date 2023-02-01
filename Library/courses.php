<?php  
  include_once("header.php");
  
  $query = "SELECT * FROM `category` ORDER BY `category`.`category_name` ASC";
  $result = mysqli_query($connection, $query) or die("Query failed");
  $categories = mysqli_fetch_all($result);

  $query = "SELECT * FROM `books`";
  $result2 = mysqli_query($connection, $query) or die("Query failed");
  $books = mysqli_fetch_all($result2);
?>


<script>
    const handleDetailView = (item) =>{
      const heading = item.childNodes[4].childNodes[1].value;
      const detail = item.childNodes[4].childNodes[3].value;
      const link = "admin/uploads/books/"+item.childNodes[4].childNodes[5].value;
      
        document.getElementById('modal_heading').innerHTML = heading
        document.getElementById('modal_body').innerHTML = detail
        document.getElementById('modal_link').setAttribute('href', link)
    }
</script>
        <div class="qualify grid gridcol-90">
            <div class="block__inner">
                <div class="qualifation__bottom">
                    <div class="left">
                        <ul class="list">
                            <li class="select-cat" data-filter="*">ALL <span>(6)</span></li>
                            <?php foreach($categories as $category){
                              // var_dump($category);
                              ?>
                              
                            <li data-filter="<?php echo '.book_'.$category[0] ?>"><?php echo $category[1] ?><span>(2)</span></li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="right">
                        <div class="grid">
                            <div class="container-fluid">
                                <div class="books">
                                  <div class="row">
                                    <?php foreach($books as $book) { ?>
                                   
                                    <div onclick="handleDetailView(this)" class=" col-xs-6 col-sm-4 col-md-4 col-lg-3  modalbtn  book qualifation__box book_<?php echo $book[3] ?>">
                                      
                                      <div class="image">
                                        <div class="icon">
                                          <i class="fa-solid fa-bookmark fa-2x "></i>
                                        </div>
                          
                                        <img src="<?php echo './admin/uploads/images/'.$book[7] ?>" alt="">
                                      </div><div class="content">
                                        <a href=""><?php echo $book[2] ?></a>
                                        <p>
                                          <span class="author"><?php echo $book[1] ?></span>
                                          <span class="year">(2016)</span></p>
                                      </div>

                                      <div>
                                        <input type="hidden" name="heading" value="<?php echo $book[1]?>">
                                        <input type="hidden" name="desc" value="<?php echo $book[5]?>">
                                        <input type="hidden" name="book" value="<?php echo $book[6]?>">
                                    </div>
                                    </div>
                                    
                                    <?php } ?>
                                
                          
                          
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal_heading">
                                <h3 id="modal_heading">AISP Diploma in Fire Safety Engineering</h3>
                                <span class="close">&times;</span>
                            </div>
                            <div class="modal_body">
                                <div class="parah">
                                    <p id="modal_body">
                                    </p>
                                </div>
                                <div class="btnn">
                                  <?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']) { ?>
                                    <a id="modal_link" href="" target="_blank" class="btn btn-secondary">Learn More</a>
                                  <?php }else { ?>
                                      <p>Please Login to read it</p>
                                  <?php }  ?>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>

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
                    <li class="list-item">
                      <a href="about_us.html">About Us</a>
                    </li>
                    <li class="list-item">
                      <a href="courses.html">Categories</a>
                    </li>
                    <li class="list-item">
                      <a href="contact_us.html">Contact Us</a>
  
                    </li>
                    <li class="list-item">
                      <a href="out_team.html">Our Team</a>
                    </li>
  
                  </ul>
                
                
              </div>
            </div>
  
          </div>
        </footer>
        
      </section>
      <section class="footer2">
        <p>Design and Created by : <span class="std_id">Bc180408671</span> &amp; <span class="std_id">Bc180408671</span></p>
      </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ISOTOP Link -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous"></script>
<script src="./js/main.js"></script>




</body>



</html>