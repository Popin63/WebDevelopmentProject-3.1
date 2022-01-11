    <?php
      $sql = "SELECT * FROM products WHERE id='".$_GET['product-id']."'";
      $pquery = $db->query($sql);
      $parent = mysqli_fetch_assoc($pquery);
    ?>
    <?php
      $sql1 = "SELECT * FROM products 
                      ORDER BY RAND()
                      LIMIT 3";
      $pquery1 = $db->query($sql1);
    ?>
    <?php
      $sql2 = "SELECT * FROM products 
                      ORDER BY RAND()
                      LIMIT 3";
      $pquery2 = $db->query($sql2);
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
                    <div class="row product-detail-section">
                        <div class="col-md-4">
                            <img src="<?php echo $parent['image']; ?>" class="product-details">
                        </div>
                        <div class="col-md-8">
                            <table class="table-fill">
                                <tbody class="table-hover">
                                    <tr>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left"><?php echo $parent['title']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Price</td>
                                        <td class="text-left"><?php echo $parent['price']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Author</td>
                                        <td class="text-left"><?php echo $parent['author']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Publisher</td>
                                        <td class="text-left"><?php echo $parent['publisher']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Category</td>
                                        <td class="text-left"><?php echo $parent['categories']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Number Of Pages</td>
                                        <td class="text-left"><?php echo $parent['nop']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Edition</td>
                                        <td class="text-left"><?php echo $parent['edition']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <form action="cartaddprocess.php?id=<?php echo $parent['id']; ?>" method="post">
                                <input type="number" name="quantity" style="margin-top: 40px; left: 20%; position: relative;">
                                <input type="submit" name="submitbutton" value="ADD TO CART" class="btn btn-primary" style="width: 80%;">
                            </form>
                            <!-- <div class="action-buttons">
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-primary" style="margin-left: 20px;">View Cart</a>
                            </div> -->
                        </div>
                    </div>
                    <hr style="width: 85%; margin-top: 50px;">
                    <h4 align="center">People who viewed this also viewed</h4>
                    <div class="row also-viewed-products">
                    <?php while ($parent2 = mysqli_fetch_assoc($pquery2)) : ?>
                        <div class="col-md-4">
                            <img src="<?php echo $parent2['image']; ?>" class="also-viewed-books">
                            <h5 class="also-viewed-products-name" align="center"><?php echo $parent2['title']; ?></h5>
                            <h5 class="also-viewed-products-name" align="center">Price: <?php echo $parent2['price']; ?> Tk</h5>
                            <a href="productbook.php?product-id=<?php echo $parent2['id']; ?>" class="btn btn-primary also-viewed-button">View Details</a>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>