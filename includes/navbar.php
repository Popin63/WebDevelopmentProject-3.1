<?php
  $sql = "SELECT * FROM categories WHERE parent=0";
  $pquery = $db->query($sql);
?>

<!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
              <img src="img/logo-white-resized2.png" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #093637;">
              <img src="img/ham.png" id="hamicon">
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">All Books</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="products.php?type=Bangla Story">Story</a>
              <a class="dropdown-item" href="products.php?type=English Medium">English Medium</a>
              <a class="dropdown-item" href="products.php?type=Bangla Medium">Bangla Medium</a>
              <a class="dropdown-item" href="products.php?type=Translated Books">Translated Books</a>
              <a class="dropdown-item" href="products.php?type=Varsity Books">Varsity Books</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Writers
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="products.php?writer=Humayun Ahmed">Humayun Ahmed</a>
              <a class="dropdown-item" href="products.php?writer=Zafor Iqbal">Zafor Iqbal</a>
              <a class="dropdown-item" href="products.php?writer=George R R Martin">George R R Martin</a>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            
            <?php if(isset($_SESSION['User']))  {
              echo 
              '<li class="nav-item">
                <a class="nav-link" href="myaccount.php">My Account</a>
              </li>';
              echo 
              '<li class="nav-item">
                <a class="nav-link" href="cart.php">My Cart</a>
              </li>';
              echo 
            '<li class="nav-item">
              <a class="nav-link" href="logout.php?logout">Log Out</a>
            </li>';
            }
            else
              echo '<li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>';
            ?>
            
            <li class="nav-item">
                <form class="example" action="products.php" method="post">
                  <input type="text" placeholder="Search.." name="search" style="color: black;">
                  <button type="submit" name="searcha"><i class="fa fa-search" style="height: 20px;margin-top: 3px;"></i></button>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
         
    <!-- END OF NAV BAR -->