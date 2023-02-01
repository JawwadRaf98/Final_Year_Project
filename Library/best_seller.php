<?php

    $query = "SELECT * FROM `books` ORDER BY `books`.`bookId` ASC LIMIT 6";
    $result = mysqli_query($connection, $query) or die("Query failed");
    $books = mysqli_fetch_all($result);
    
?>

<section class="books_section  best_seller">
      <div class="heading">
        <h2>Our Best Seller</h2>
      </div>
      <hr />
      <div class="container-fluid">
      <div class="books">
        <div class="row">

        <?php foreach($books as $book){?>
          
          <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-2   book">
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
          </div>

          <!-- <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-2  book">
            <div class="image">
               <div class="icon">
                <i class="fa-solid fa-bookmark fa-2x "></i>
              </div>
              <img src="./images/books/book2.jpg" alt="">
            </div><div class="content">
              <a href="">1t Ends with Us</a>
              <p>
                <span class="author">Colleen Hoover </span>
                <span class="year">(2016)</span></p>
            </div>
          </div>

          <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-2  book">
            <div class="image">
               <div class="icon">
                <i class="fa-solid fa-bookmark fa-2x "></i>
              </div>
              <img src="./images/books/book3.jpg" alt="">
            </div><div class="content">
              <a href="">1t Ends with Us</a>
              <p>
                <span class="author">Colleen Hoover </span>
                <span class="year">(2016)</span></p>
            </div>
          </div>

          <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-2  book">
            <div class="image">
               <div class="icon">
                <i class="fa-solid fa-bookmark fa-2x "></i>
              </div>
              <img src="./images/books/book1.jpg" alt="">
            </div><div class="content">
              <a href="">1t Ends with Us</a>
              <p>
                <span class="author">Colleen Hoover </span>
                <span class="year">(2016)</span></p>
            </div>
          </div>

          <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-2 book">
            <div class="image">
               <div class="icon">
                <i class="fa-solid fa-bookmark fa-2x "></i>
              </div>
              <img src="./images/books/book2.jpg" alt="">
            </div><div class="content">
              <a href="">1t Ends with Us</a>
              <p>
                <span class="author">Colleen Hoover </span>
                <span class="year">(2016)</span></p>
            </div>
          </div>

          <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-2 book">
            <div class="image">
               <div class="icon">
                <i class="fa-solid fa-bookmark fa-2x "></i>
              </div>
              <img src="./images/books/book3.jpg" alt="">
            </div><div class="content">
              <a href="">1t Ends with Us</a>
              <p>
                <span class="author">Colleen Hoover </span>
                <span class="year">(2016)</span></p>
            </div>
          </div> -->
            
          <?php } ?>

        </div>
      </div>
    </div>
</section>