    <?php
        $name = $_SESSION['User'];
        $sql = "SELECT * FROM members WHERE userName='".$_SESSION['User']."'";
        $pquery = $db->query($sql);
        $info = mysqli_fetch_assoc($pquery);
    ?>

    <section class="video-background">
        <div class="bg-video">
            <video class="bg-video-content" autoplay muted loop>
                <source src="img/video.mp4" type="video/mp4">
            </video>
        </div>


        <div class="main-w3layouts wrapper">
            <div class="main-agileinfo">
                <div class="agileits-top">
                    <form action="updateprocess.php" method="post">
                        <input class="text" type="text" name="firstname" placeholder="First Name" required="" value="<?php echo $info['firstName']; ?>">
                        <input class="text" type="text" name="lastname" placeholder="Last Name" required="" value="<?php echo $info['lastName']; ?>">
                        <input class="text email" type="email" name="email" placeholder="Email" required="" value="<?php echo $info['Email']; ?>">
                        <input class="text" type="password" name="password" placeholder="Password" required="" >
                        <input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
                        <input class="text" type="text" name="address" placeholder="Address" required="" value="<?php echo $info['Address']; ?>">
                        <input class="text" type="text" name="phone" placeholder="Phone Number" required="" value="<?php echo $info['Phone']; ?>">
                        <input type="submit" value="UPDATE" name="updatebutton">
                        <input type="submit" value="CHANGE PASSWORD" name="passwordchangebutton" style="margin-bottom: 0; margin-top: 10px;">
                    </form>
                </div>
            </div>
        </div>

    </section>