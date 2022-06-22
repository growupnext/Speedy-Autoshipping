<?php include('./includes/head.php'); ?>
<title>Rapid Auto Shipping</title>
<link rel="stylesheet" href="./assets/css/header.css">
<link rel="stylesheet" href="./assets/css/global.css">
<link rel="stylesheet" href="./assets/css/utility.css">
<link rel="stylesheet" href="./assets/css/home.css">
<link rel="stylesheet" href="./assets/css/contact-us.css">
<style>
    .first-home {
        background-image: url('./assets/images/contact-us.jpg');
        height: 95vh;
        width: 100%;
    }
</style>

<body>
    <!-- ===========================  -->
    <!-- Srtip over Header section here -->
    <!-- ===========================  -->
    <?php include('./includes/views/header-strip.php'); ?>

    <!-- ===========================  -->
    <!--  Header landing Page section here -->
    <!-- ===========================  -->
    <?php
    $homepath = "./index.php";
    $contactpath = "./contact-us.php";
    $aboutpath = "./about-us.php";
    $servicepath = "./service.php";
    $heading = "Our team is always waiting to help you.";
    $paragraph = "Rapid Auto Shipping blogs provide advice on how to plan your car transport.Our car shipping blogs will show you how to ship a car in the United States and will assist our customers in shipping their vehicles from one location to another.";
    include('./includes/views/landing-page.php');
    ?>
    <!-- ===========================  -->
    <!--  second section here -->
    <!-- ===========================  -->
    <section class="second-contactus">
        <div class="second-contactus-form grid grid-2">
            <div class="second-contactus-form-left">
                <h2 class="main-heading">Contact US</h2>
                <p class="text">
                    Rapid Auto Shipping blogs provide advice on how to plan your car transport.Our car shipping blogs will show you how to ship a car in the United States and will assist our customers in shipping their vehicles from one location to another.
                </p>
                <div class="second-contactus-form-left-box grid">
                    <div class="second-contactus-form-left-box-1 grid-center">
                        <ion-icon name="location-sharp"></ion-icon>
                    </div>
                    <div class="second-contactus-form-left-box-2">
                        <a href="https://www.google.com/maps?ll=34.468384,-101.304284&z=5&t=m&hl=en&gl=US&mapclient=embed&cid=11474043018341862120">906 S Main Street
                            Silverton <br>Texas USA-79257</a>
                    </div>
                </div>
                <div class="second-contactus-form-left-box grid">
                    <div class="second-contactus-form-left-box-1 grid-center">
                        <ion-icon name="mail-sharp"></ion-icon>
                    </div>
                    <div class="second-contactus-form-left-box-2">
                        <a href="mail-to:info@rapidautoshipping.com">info@rapidautoshipping.com</a>
                    </div>
                </div>
                <div class="second-contactus-form-left-box grid">
                    <div class="second-contactus-form-left-box-1 grid-center">
                        <ion-icon name="call-sharp"></ion-icon>
                    </div>
                    <div class="second-contactus-form-left-box-2">
                        <a href="tel:+1-833-233-4447">+1-833-233-4447</a>
                    </div>
                </div>
            </div>
            <div class="second-contactus-form-right">
                <form action="" method="post">
                    <h3 class="main-heading">Personal Information</h3>
                    <div class="second-contactus-input">
                        <label for="Name">Full Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="second-contactus-input">
                        <label for="Email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="second-contactus-input">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone">
                    </div>
                    <div class="second-contactus-input">
                        <label for="date">Message Here</label>
                        <textarea>
                        </textarea>
                    </div>
                    <input type="submit" value="Submit" name="submit" class="submit-btn">
                </form>
            </div>
        </div>
    </section>
    <!-- ===========================  -->
    <!--  third section here -->
    <!-- ===========================  -->
    <section class="third-contactus">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404903.6195839215!2d-104.04787384413115!3d33.55074711107423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87004d8702dc4ac7%3A0x9f3bfd5545d14ae8!2sRAPID%20AUTO%20SHIPPING!5e0!3m2!1sen!2sus!4v1642075843595!5m2!1sen!2sus" width="80%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" title="map">
        </iframe>
    </section>
    <!-- ===========================  -->
    <!--  footer section here -->
    <!-- ===========================  -->
    <?php include('./includes/views/footer.php'); ?>
    <!-- ===========================  -->
    <!-- Review section slider js here -->
    <!-- ===========================  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>