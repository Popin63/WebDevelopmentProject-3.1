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
                    <form action="changepasswordprocess.php" method="post">
                        <input class="text" type="password" name="npassword" placeholder="New Password" required="" >
                        <input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
                        <input type="submit" value="UPDATE" name="updatebutton">
                    </form>
                </div>
            </div>
        </div>

    </section>