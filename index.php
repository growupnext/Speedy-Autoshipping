<?php include('./includes/head.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/utility.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <!-- ===========================  -->
    <!-- jquery link here -->
    <!-- ===========================  -->
    <style>
        .first-home {
            background-image: url('./assets/images/home-bg.jpg');
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

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
    $heading = "Best Auto Shipping Company";
    $paragraph = " We will help you to ship your vehicle on time at an affordable price. You can ship your vehicle without any hustle and bustle, only just by contacting us. We will provide you best representatives to help you out if you have any questions regarding auto shipping. ";
    include('./includes/views/landing-page.php'); ?>

    <!-- ===========================  -->
    <!-- Second section here -->
    <!-- ===========================  -->
    <section class="second-home">
        <h2 class="main-heading">Be the Part of the <span>RAPID AUTO SHIPPING</span> and become the member of the team which is trusted by </h2>
        <p class="text">On TransportReviews, TrustPilot, Facebook, the Better Business Bureau, and Google, Rapid Auto Shipping consistently obtains five-star ratings. Some reviewers are given a little deposit reimbursement that is unrelated to their rating score or pricing as an incentive to share their experience. We've delivered over 20,000 new and used cars, and while we're not perfect, we've built a solid reputation in the process.</p>
        <div class="grid grid-4">
            <div class="second-home-box grid-center">
                <img src="./assets/images/logos/google-logo.png" alt="Reviewing companies">
            </div>
            <div class="second-home-box grid-center">
                <img src="./assets/images/logos/bbb-logo.png" alt="Reviewing companies">
            </div>
            <div class="second-home-box grid-center">
                <img src="./assets/images/logos/trustpilot-logo.png" alt="Reviewing companies">
            </div>
            <div class="second-home-box grid-center">
                <img src="./assets/images/logos/transport-review-logo.png" alt="Reviewing companies">
            </div>
        </div>
    </section>
    <!-- ===========================  -->
    <!-- Third section here -->
    <!-- ===========================  -->
    <section class="third-home">
        <h2 class="main-heading">What we offers you at <span>Rapid Auto Shipping</span> ?</h2>
        <p class="text">
            Choose the top-rated <span>vehicle shipping</span> and <span>car shipping company</span> in United States (USA). We are known for our excellent services for individuals or businesses. we provide services in all the states of America. You can check the list of auto shipping states we serve . If you are looking for car shipping services, we provide cheap and Afordable auto shipping services our services include instant auto shipping, door-to-door auto transport, open auto shipping, inclosed auto shipping and other transport services. Contact us for any kind of <span>auto shipping services</span>.
        </p>
        <div class="third-home-grid grid grid-3">
            <div class="third-home-grid-box grid">
                <div class="third-home-grid-box-left grid-center">
                    <img src="./assets/images/truck-icon.png" alt="Our Happy Customers">
                </div>
                <div class="third-home-grid-box-right">
                    <h4>2 Million+ </h4>
                    <p>Successful Deliveries</p>
                </div>
            </div>
            <div class="third-home-grid-box grid">
                <div class="third-home-grid-box-left grid-center">
                    <img src="./assets/images/world-logo.png" alt="Our Happy Customers">
                </div>
                <div class="third-home-grid-box-right">
                    <h4>50+ States</h4>
                    <p>Serving in all 50 states</p>
                </div>
            </div>
            <div class="third-home-grid-box grid">
                <div class="third-home-grid-box-left grid-center">
                    <img src="./assets/images/happy-customer-logo.png" alt="Our Happy Customers">
                </div>
                <div class="third-home-grid-box-right">
                    <h4>99% +</h4>
                    <p>Happy Customers </p>
                </div>
            </div>
        </div>

    </section>
    <!-- ===========================  -->
    <!-- Fourth section here -->
    <!-- ===========================  -->
    <section class="fourth-home grid grid-2">
        <div class="fourth-home-grid-left">
            <h2 class="main-heading">We work in <span>Three simple steps</span></h2>
            <ul>
                <li class="flex sub-heading"><img src="./assets/images/right-arrow-icon.png" alt="Fast Delivery">Picking your Vehicle<br>

                </li>
                <p style="margin-left:4%;" class="text">We have the expert infrastructure to deliver your vehicle to the chosen destination safely. </p>
                <li class="flex sub-heading"><img src="./assets/images/right-arrow-icon.png" alt="Fast Delivery">Shipping Your Vehicle</li>
                <p style="margin-left:4%;" class="text">We have the expert infrastructure to deliver your vehicle to the chosen destination safely. </p>
                <li class="flex sub-heading"><img src="./assets/images/right-arrow-icon.png" alt="Fast Delivery">Delivering your Vehicle</li>
                <p style="margin-left:4%;" class="text">We have the expert infrastructure to deliver your vehicle to the chosen destination safely. </p>
            </ul>
        </div>
        <div class="fourth-home-grid-right">
            <form action="" method="post" class="main-form">
                <div class="fourth-home-form-img grid-center">
                    <img src="./assets/images/main-logo.png" class="" alt="">
                </div>
                <div class="fourth-home-form-contents">
                    <label for="Pickup from">Pickup From:</label>
                    <input type="text" placeholder="Pickup From :">
                </div>
                <div class="fourth-home-form-contents">
                    <label for="Pickup To">Delivering To:</label>
                    <input type="text" placeholder="Delivering to:">
                </div>
                <div class="fourth-home-form-contents fourth-home-form-contents-checkbox">
                    <label for="Method checking">Method You prefer to :</label>
                    Open: <input type="Checkbox" placeholder="method1">
                    Enclosed: <input type="Checkbox" placeholder="method2">
                </div>
                <button class="basic-button">NEXT</button>
            </form>
        </div>
    </section>
    <!-- ===========================  -->
    <!-- Fifth section here -->
    <!-- ===========================  -->
    <section class="fifth-home">
        <h2 class="main-heading"><span>Rapid Auto Shipping</span> Services</h2>
        <div class="fifth-home-grid grid grid-3">
            <div class="fifth-home-grid-box grid">
                <div class="fifth-home-grid-box-image grid-center">
                    <img src="./assets/images/shipping-truck-icon.png" alt="Auto shipping Services">
                </div>
                <div class="fifth-home-grid-box-content">
                    <h2>Snow Bird Shipping</h2>
                    <p>Max 5 Days</p>
                </div>
            </div>
            <div class="fifth-home-grid-box grid">
                <div class="fifth-home-grid-box-image grid-center">
                    <img src="./assets/images/train-icon.png" alt="Auto shipping Services">
                </div>
                <div class="fifth-home-grid-box-content">
                    <h2>Rail Shipping</h2>
                    <p>Max 5 Days</p>
                </div>
            </div>
            <div class="fifth-home-grid-box grid">
                <div class="fifth-home-grid-box-image grid-center">
                    <img src="./assets/images/motor-cycle-icon.png" alt="Auto shipping Services">
                </div>
                <div class="fifth-home-grid-box-content">
                    <h2>Motor-cycle Shipping</h2>
                    <p>Max 5 Days</p>
                </div>
            </div>
            <div class="fifth-home-grid-box grid">
                <div class="fifth-home-grid-box-image grid-center">
                    <img src="./assets/images/open-truck-icon.png" alt=" Auto shipping Services">
                </div>
                <div class="fifth-home-grid-box-content">
                    <h2>Open Auto Shipping</h2>
                    <p>Max 5 Days</p>
                </div>
            </div>
            <div class="fifth-home-grid-box grid">
                <div class="fifth-home-grid-box-image grid-center">
                    <img src="./assets/images/shipping-truck-icon.png" alt="Auto shipping Services">
                </div>
                <div class="fifth-home-grid-box-content">
                    <h2>Enclosed Auto Shipping</h2>
                    <p>Max 5 Days</p>
                </div>
            </div>
            <div class="fifth-home-grid-box grid">
                <div class="fifth-home-grid-box-image grid-center">
                    <img src="./assets/images/trailer-icon.png" alt="Auto shipping Services">
                </div>
                <div class="fifth-home-grid-box-content">
                    <h2>Lowboy Shipping</h2>
                    <p>Max 5 Days</p>
                </div>
            </div>

        </div>
    </section>
    <!-- ===========================  -->
    <!-- Sixth section here -->
    <!-- ===========================  -->
    <section class="sixth-home">
        <h2 class="main-heading"><span>States</span> We serve in</h2>
        <?php include('./includes/views/usa-map.php'); ?>
    </section>
    <!-- ===========================  -->
    <!-- Seventh section here -->
    <!-- ===========================  -->
    <section class="seventh-home">
        <h2 class="main-heading"><span>Rapid Auto Shipping</span>
            Our Recenet Articles
        </h2>
        <div class="seventh-home-grid grid grid-3">
            <div class="seventh-home-grid-1">
                <div class="seventh-home-grid-img grid-center">
                    <img src="./assets/images/blog-image-1.jpg" alt="Our Latetst Blogs">
                </div>
                <div class="seventh-home-grid-content">
                    <h3 class="sub-heading">How the Open auto ahipping works ?
                    </h3>
                    <p>
                        Certain regulations and parameters must be satisfied when exporting a vehicle to Mexico by using Mexico Car Service in order for the transaction to be successful.....
                    </p>
                </div>
            </div>
            <div class="seventh-home-grid-1">
                <div class="seventh-home-grid-img grid-center">
                    <img src="./assets/images/motorcycle-shipping.jpg" alt="Our Latetst Blogs">
                </div>
                <div class="seventh-home-grid-content">
                    <h3 class="sub-heading">How the Motor Cycle ahipping works ?
                    </h3>
                    <p>
                        Certain regulations and parameters must be satisfied when exporting a vehicle to Mexico by using Mexico Car Service in order for the transaction to be successful.....
                    </p>
                </div>
            </div>
            <div class="seventh-home-grid-1">
                <div class="seventh-home-grid-img grid-center">
                    <img src="./assets/images/blog-luxury.jpg" alt="Our Latetst Blogs">
                </div>
                <div class="seventh-home-grid-content">
                    <h3 class="sub-heading">How to ship luxury car ?
                    </h3>
                    <p>
                        Certain regulations and parameters must be satisfied when exporting a vehicle to Mexico by using Mexico Car Service in order for the transaction to be successful.....
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========================  -->
    <!-- eight section here -->
    <!-- ===========================  -->
    <!-- <section class="eight-home">
        <div class="eight-home-grid grid">
            <div class="eight-home-grid-1 flex-center">
                <button id="prev">Previous</button>
            </div>
            <div class="eight-home-grid-2 grid grid-3">
                <div class="slides slides-1"><img src="./assets/images/blog-luxury.jpg" alt="">
                    <h1>SLides<span> Previous</span></h1>
                </div>
                <div class="slides slides-2"><img src="./assets/images/blog-luxury.jpg" alt="">
                    <h1>SLides<span> Previous</span></h1>
                </div>
                <div class="slides slides-3"><img src="./assets/images/blog-luxury.jpg" alt="">
                    <h1>SLides<span> Previous</span></h1>
                </div>
            </div>
            <div class="eight-home-grid-1 flex-center">
                <button id="next">Next</button>
            </div>
        </div>
    </section> -->
    <!-- ===========================  -->
    <!--Footer Section here -->
    <!-- ===========================  -->

    <?php include('./includes/views/footer.php'); ?>
    <!-- ===========================  -->
    <!-- Review section slider js here -->
    <!-- ===========================  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $("#next").click(function() {
        //         $(".slides").prepend("<h2>Slides here</h2>");
        //     })
        // })
    </script>
</body>

</html>