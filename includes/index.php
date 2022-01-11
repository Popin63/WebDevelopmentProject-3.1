    <?php
      $sql = "SELECT * 
                FROM (SELECT * FROM products 
                      ORDER BY id DESC 
                      LIMIT 3) t
                ORDER BY id ASC";
      $pquery = $db->query($sql);
    ?>

    <?php
      $sql1 = "SELECT * FROM products 
                      ORDER BY RAND()
                      LIMIT 8";
      $pquery1 = $db->query($sql1);
    ?>

    <!-- third part -->
    <section id="third-part">
        <div class="third-part-white-bg">
            <h1 class="text-center">New Additions</h1>        
            <p class="text-center">The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>

            <div class="container">
                <div class="row">
                <?php while ($parent = mysqli_fetch_assoc($pquery)) : ?>
                    <div class="col-md-4">
                        <div class="third-part-content">
                            <img src="<?php echo $parent['image']; ?>" class="third-part-image">
                            <h5 class="text-center"><?php echo $parent['title']; ?></h5>
                            <p class="text-center third-part-image-writings">Price: <?php echo $parent['price']; ?> Tk</p>
                            <div class="text-center">
                                <a class="btn btn-primary third-part-content-button" href="productbook.php?product-id=<?php echo $parent['id']; ?>">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>    
        </div>
        
    </section>
    <!-- End of Third Part -->

    <!-- Fourth Part -->
    <section id="fourth-part">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="fourth-part-content">
                        <div class="fourth-part-image-container">
                            <img src="img/truck.png" class="fourth-part-image">
                        </div>
                        <p class="text-center fourth-part-image-writings text-white">We give the fastest delivery in Bangladesh. We offer same day delivery.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fourth-part-content">
                        <div class="fourth-part-image-container">
                            <img src="img/money.png" class="fourth-part-image2">
                        </div>
                        <p class="text-center fourth-part-image-writings text-white">We assure you the best price in the market.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fourth-part-content">
                        <div class="fourth-part-image-container">
                            <img src="img/book.png" class="fourth-part-image3">
                        </div>
                        <p class="text-center fourth-part-image-writings text-white">You can order any kinds of books from use</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END of Fourth Part -->

    <section id="fifth-part">
        <div class="third-part-white-bg">
            <h1 class="text-center">Featured Products</h1>        
            <p class="text-center">The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>

            <div class="container">
                <div class="row">
                    <?php while ($parent1 = mysqli_fetch_assoc($pquery1)) : ?>
                    <div class="col-md-3">
                        <div class="fifth-part-content">
                            <img src="<?php echo $parent1['image']; ?>" class="fifth-part-image">
                            <p class="text-center third-part-image-writings">Price: <?php echo $parent1['price']; ?> Tk</p>
                            <div class="text-center">
                                <a class="btn btn-primary third-part-content-button" href="productbook.php?product-id=<?php echo $parent1['id']; ?>">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                
            </div>
        </div>
    </section>
    <!-- End of Third Part -->
