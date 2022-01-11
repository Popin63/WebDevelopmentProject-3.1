    <?php
      $sql = "SELECT * FROM products";
      $pquery = $db->query($sql);
    ?>

    <?php
      $sql1 = "SELECT * 
                FROM (SELECT * FROM products 
                      ORDER BY id DESC 
                      LIMIT 3) t
                ORDER BY id ASC";
      $pquery1 = $db->query($sql1);
    ?>

    <?php
        if(isset($_GET['writer'])){
              $sql = "SELECT * FROM products WHERE author='".$_GET['writer']."'";
              $pquery = $db->query($sql);
              //$parent = mysqli_fetch_assoc($pquery);
        }  
    ?>

    <?php
        if(isset($_GET['type'])){
              $sql = "SELECT * FROM products WHERE categories='".$_GET['type']."'";
              $pquery = $db->query($sql);
              //$parent = mysqli_fetch_assoc($pquery);
        }  
    ?>

    <?php
        if(isset($_GET['cat'])){
              $sql = "SELECT * FROM products WHERE categories='".$_GET['cat']."'";
              $pquery = $db->query($sql);
              //$parent = mysqli_fetch_assoc($pquery);
        }  
    ?>

    <?php
        if(isset($_GET['tag'])){
              $sql = "SELECT * FROM products WHERE brand='".$_GET['tag']."'";
              $pquery = $db->query($sql);
              //$parent = mysqli_fetch_assoc($pquery);
        }  
    ?>

    <?php
        if(isset($_POST['searcha'])){
                $keywords = $db->escape_string($_POST['search']);
              $sql = "SELECT * FROM products WHERE title like '%{$keywords}%' OR author like '%{$keywords}%'";
              $pquery = $db->query($sql);
              //$parent = mysqli_fetch_assoc($pquery);
        }  
    ?>

    <?php
        if(isset($_GET['value'])){
              if($_GET['value'] == 1){
                $sql = "SELECT * FROM products";
                  $pquery = $db->query($sql);
                  //$parent = mysqli_fetch_assoc($pquery);
              }else if($_GET['value'] == 2){
                $sql = "SELECT * FROM products GROUP BY price";
                  $pquery = $db->query($sql);
              }else if($_GET['value'] == 3){
                $sql = "SELECT * FROM products GROUP BY price DESC";
                  $pquery = $db->query($sql);
              }
        }  
    ?>

    <!-- Products -->
    <section id="products">
        <div class="container">
            <div class="row product-details-full-section">
                <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                    

                            <div class="htc__category">
                                <h4 class="title__line--4">Categories</h4>
                                <hr>
                                <ul class="ht__cat__list">
                                    <li><a href="products.php?cat=Bangla Story">Bangla Story</a></li>
                                    <li><a href="products.php?cat=English Story">English Story</a></li>
                                    <li><a href="products.php?cat=Translated">Translated Books</a></li>
                                    <li><a href="products.php?cat=English Medium">English Medium Books</a></li>
                                    <li><a href="products.php?cat=Bangla Medium">Bangla Medium Books</a></li>
                                    <li><a href="products.php?cat=Varsity Books">Varsity Books</a></li>
                                </ul>
                            </div>

                            <div class="htc__tag">
                                <h4 class="title__line--4">Tags</h4>
                                <hr>
                                <ul class="ht__tag__list">
                                    <li><a href="products.php?tag=2">Science Fiction</a></li>
                                    <li><a href="products.php?tag=5">A Level</a></li>
                                    <li><a href="products.php?tag=6">O Level</a></li>
                                    <li><a href="products.php?tag=7">SSC</a></li>
                                    <li><a href="products.php?tag=8">HSC</a></li>
                                    <li><a href="products.php?tag=9">Engineering</a></li>
                                    <li><a href="products.php?tag=10">BBA</a></li>
                                </ul>
                            </div>

                            <div class="best-seller-product">
                                <h4 class="title__line--4">Best Seller Products</h4>
                                <hr>
                                <div class="best-products">
                                    <?php while ($parent1 = mysqli_fetch_assoc($pquery1)) : ?>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?php echo $parent1['image']; ?>" class="product-image">
                                        </div>
                                        <div class="col">
                                            <h4 class="best-product-image-name"><?php echo $parent1['title']; ?></h4>
                                            <h4 class="best-product-image-price">Price: <?php echo $parent1['price']; ?> Tk</h4>
                                            <a href="productbook.php?product-id=<?php echo $parent1['id']; ?>" class="btn btn-primary best-book-button">View Details</a>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                </div>
                <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                    <div class="product-top justify-content-center">
                        <div class="number-of-items">
                            <a href="products.php?value=1" class="btn btn-primary">Default Sorting</a>
                            <a href="products.php?value=2" class="btn btn-primary">Sort By Price(Low to High)</a>
                            <a href="products.php?value=3" class="btn btn-primary">Sort By Price(High to Low)</a>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                        <?php while ($parent = mysqli_fetch_assoc($pquery)) : ?>
                            <div class="col-md-4">
                                <div class="book-container">
                                    <img src="<?php echo $parent['image']; ?>" class="book-image">
                                    <div class="book-image-writing">
                                        <h5 class="text-center"><?php echo $parent['title']; ?></h5>
                                        <h5 class="text-center">Price: <?php echo $parent['price']; ?> Tk</h5>
                                    </div>
                                    <a href="productbook.php?product-id=<?php echo $parent['id']; ?>" class="btn btn-primary book-image-button">View Details</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>