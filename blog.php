<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/utility.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/blog.css">
    <!-- ===========================  -->
    <!-- jquery link here -->
    <!-- ===========================  -->
    <?php include('./includes/head.php'); ?>
    <style>
        .first-home {
            background-image: url('./assets/images/blog-image-1.jpg');
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
    $blogpage = "./blog.php";
    $heading = "OUR LATEST BLOGS";
    $paragraph = "Are you looking for a trusted auto transport service provider? We arrange safe and reliable vehicle transportation by assigning each shipment to one of our pre-qualified and reputable auto transport carriers. We only represent active and insured carriers and we continually monitor our carriers’ performance, insurance and licenses to protect our customers’ interests. ";
    include('./includes/views/landing-page.php'); ?>
    <!-- ===========================  -->
    <!--First Section here -->
    <!-- ===========================  -->
    <section class="first-blog">
        <h2 class="main-heading">Our Latest Blogs</h2>
        <div class="first-blog-grid grid">
            <div class="first-blog-grid-1">
                <div class="first-blog-grid-1-img">
                    <img src="./assets/images/contact-us.jpg" alt="our blogs">
                </div>
                <div class="first-blog-grid-1-content">
                    <h3 class="sub-heading">How to ship vehicle from Arizona to Alaska ?</h3>
                    <p class="text">
                        Moving to California is a typical occurrence in America because it is a pleasant place to live. Every year, a large number of visitors go to California because of its pleasant weather. Also, if you're relocating to Texas for employment, you should know that it's also a fantastic place to live. It would be inconvenient to ship your vehicle personally during covid.
                    </p>
                    <div></div>
                    <button class="basic-button"><a class="anchor" href="#">READ MORE</a></button>
                </div>
            </div>
            <div class="first-blog-grid-1">
                <div class="first-blog-grid-1-img">
                    <img src="./assets/images/contact-us.jpg" alt="our blogs">
                </div>
                <div class="first-blog-grid-1-content">
                    <h3 class="sub-heading">How to ship vehicle from Arizona to Alaska ?</h3>
                    <p class="text">
                        Moving to California is a typical occurrence in America because it is a pleasant place to live. Every year, a large number of visitors go to California because of its pleasant weather. Also, if you're relocating to Texas for employment, you should know that it's also a fantastic place to live. It would be inconvenient to ship your vehicle personally during covid.
                    </p>
                    <button class="basic-button"><a class="anchor" href="#">READ MORE</a></button>
                </div>
            </div>
            <div class="first-blog-grid-1">
                <div class="first-blog-grid-1-img">
                    <img src="./assets/images/contact-us.jpg" alt="our blogs">
                </div>
                <div class="first-blog-grid-1-content">
                    <h3 class="sub-heading">How to ship vehicle from Arizona to Alaska ?</h3>
                    <p class="text">
                        Moving to California is a typical occurrence in America because it is a pleasant place to live. Every year, a large number of visitors go to California because of its pleasant weather. Also, if you're relocating to Texas for employment, you should know that it's also a fantastic place to live. It would be inconvenient to ship your vehicle personally during covid.
                    </p>
                    <button class="basic-button"><a class="anchor" href="#">READ MORE</a></button>
                </div>
            </div>
            <div class="first-blog-grid-1">
                <div class="first-blog-grid-1-img">
                    <img src="./assets/images/contact-us.jpg" alt="our blogs">
                </div>
                <div class="first-blog-grid-1-content">
                    <h3 class="sub-heading">How to ship vehicle from Arizona to Alaska ?</h3>
                    <p class="text">
                        Moving to California is a typical occurrence in America because it is a pleasant place to live. Every year, a large number of visitors go to California because of its pleasant weather. Also, if you're relocating to Texas for employment, you should know that it's also a fantastic place to live. It would be inconvenient to ship your vehicle personally during covid.
                    </p>
                    <button class="basic-button"><a class="anchor" href="#">READ MORE</a></button>
                </div>
            </div>
            <div class="first-blog-grid-1">
                <div class="first-blog-grid-1-img">
                    <img src="./assets/images/contact-us.jpg" alt="our blogs">
                </div>
                <div class="first-blog-grid-1-content">
                    <h3 class="sub-heading">How to ship vehicle from Arizona to Alaska ?</h3>
                    <p class="text">
                        Moving to California is a typical occurrence in America because it is a pleasant place to live. Every year, a large number of visitors go to California because of its pleasant weather. Also, if you're relocating to Texas for employment, you should know that it's also a fantastic place to live. It would be inconvenient to ship your vehicle personally during covid.
                    </p>
                    <button class="basic-button"><a class="anchor" href="#">READ MORE</a></button>
                </div>
            </div>
            <div class="first-blog-grid-1">
                <div class="first-blog-grid-1-img">
                    <img src="./assets/images/contact-us.jpg" alt="our blogs">
                </div>
                <div class="first-blog-grid-1-content">
                    <h3 class="sub-heading">How to ship vehicle from Arizona to Alaska ?</h3>
                    <p class="text">
                        Moving to California is a typical occurrence in America because it is a pleasant place to live. Every year, a large number of visitors go to California because of its pleasant weather. Also, if you're relocating to Texas for employment, you should know that it's also a fantastic place to live. It would be inconvenient to ship your vehicle personally during covid.
                    </p>
                    <button class="basic-button"><a class="anchor" href="#">READ MORE</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========================  -->
    <!--Footer Section here -->
    <!-- ===========================  -->

    <?php include('./includes/views/footer.php'); ?>
</body>

</html>