<?php include('./includes/head.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="./assets/css/full-form.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/utility.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <style>
        .first-home {
            background-image: url('./assets/images/enclosed-auto-transport.jpg');
            height: 95vh;
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
    $blogpage = "./blog.php";
    $servicepath = "./service.php";
    $heading = "  Get a Free Auto Transport Quote Today";
    $paragraph = " We provide The Best Car Shipping Services in United STtates. Check Our Auto Shipping Services
                    We Serve. Our car shipping advisors are available by calling +1 833-233-4447
                    to answer all your questions.";
    include('./includes/views/landing-page.php');
    ?>
    <!-- ===========================  -->
    <!-- second section here -->
    <!-- ===========================  -->
    <section class="second-contact">
        <div class="second-contact-form">
            <form action="" method="post">
                <h3 class="sub-heading">Personal Information</h3>
                <div class="second-contact-input">
                    <label for="Name">Full Name</label>
                    <input type="text" name="name">
                </div>
                <div class="second-contact-input">
                    <label for="Email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="second-contact-input">
                    <label for="phone">Phone Number</label>
                    <input type="number" name="phone">
                </div>
                <div class="second-contact-input">
                    <label for="date">Estimated Ship Date</label>
                    <input type="number" name="date">
                </div>
                <div class="transport-type">
                    <label for="date">Transport Type</label><br>
                    <input type="radio" name="trailer-type">Open Trailer
                    <input type="radio" name="trailer-type">Closed Trailer
                </div>
                <div class="second-contact-grid grid grid-2">
                    <div class="second-contact-grid-left">
                        <h3 class="sub-heading">#1 Vechicle Information</h3>
                        <div class="second-contact-input">
                            <label for="year">Vhicle Year</label>
                            <input type="number" name="year">
                        </div>
                        <div class="second-contact-input">
                            <label for="Vehicle Make">Vehicle Make</label>
                            <input type="number" name="make">
                        </div>
                        <div class="second-contact-input">
                            <label for="Vehicle Model">Vehicle Model</label>
                            <input type="number" name="phone">
                        </div>
                        <div class="second-contact-input">
                            <label for="Vehicle Type">Vehicle Type</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="transport-type">
                            <label for="date">Vehcile Run</label><br>
                            <input type="radio" name="trailer-type">Yes
                            <input type="radio" name="trailer-type">No
                        </div>
                    </div>
                    <div class="second-contact-grid-right">
                        <h3 class="sub-heading">#2 Vechicle Information</h3>
                        <div class="second-contact-input">
                            <label for="year">Vhicle Year</label>
                            <input type="number" name="year">
                        </div>
                        <div class="second-contact-input">
                            <label for="Vehicle Make">Vehicle Make</label>
                            <input type="number" name="make">
                        </div>
                        <div class="second-contact-input">
                            <label for="Vehicle Model">Vehicle Model</label>
                            <input type="number" name="phone">
                        </div>
                        <div class="second-contact-input">
                            <label for="Vehicle Type">Vehicle Type</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="transport-type">
                            <label for="date">Vehcile Run</label><br>
                            <input type="radio" name="trailer-type">Yes
                            <input type="radio" name="trailer-type">No
                        </div>
                    </div>
                </div>
                <div class="second-contact-grid grid grid-2">
                    <div class="second-contact-grid-left">
                        <h3 class="sub-heading">Pick-up From</h3>
                        <div class="second-contact-input">
                            <label for="Pick-up From">Pick-up From</label>
                            <input type="text" name="Pick-up">
                        </div>
                    </div>
                    <div class="second-contact-grid-right">
                        <h3 class="sub-heading">Delivering To</h3>
                        <div class="second-contact-input">
                            <label for="Deliverong To">Delivering To</label>
                            <input type="text" name="Delivering-to">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Submit" name="submit" class="submit-btn">
            </form>
        </div>
    </section>
    <!-- ===========================  -->
    <!-- Footer section here -->
    <!-- ===========================  -->
    <section class="third-contact">
        <h2 class="main-heading">For more information <span>contact us</span></h2>
        <div class="third-contact-grid grid grid-3">
            <div class="third-contact-grid-1 grid-center">
                <img src="./assets/images/main-logo.png" alt="rapid auto shipping logo">
            </div>
            <div class="third-contact-grid-1 grid-center">
                <div class="third-contact-grid-1-1 grid grid-center">
                    <ion-icon name="home-sharp"></ion-icon>
                    <div class="third-contact-grid-1-1-content">
                        <h3>Address</h3>
                        <p>
                            906 S Main Street<br>
                            Silverton Texas USA-79257
                        </p>
                    </div>

                </div>
            </div>
            <div class="third-contact-grid-1 grid-center">
                <div class="third-contact-grid-1-1 grid grid-center">
                    <ion-icon name="mail-sharp"></ion-icon>
                    <div class="third-contact-grid-1-1-content">
                        <h3>Email </h3>
                        <p>
                            info@rapidautoshipping.com<br>
                            +1-833-233-4447
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========================  -->
    <!-- Footer section here -->
    <!-- ===========================  -->
    <?php include('./includes/views/footer.php'); ?>
</body>

</html>