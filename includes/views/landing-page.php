 <link rel="stylesheet" href="./assets/css/header.css">
 <link rel="stylesheet" href="./assets/css/global.css">
 <link rel="stylesheet" href="./assets/css/utility.css">

 <style>
     /* ===========================  */


     /* first section here  */


     /* ===========================  */
 </style>

 <section class="first-home background-property">
     <div class="first-home-color-mask">
         <div class="first-home-mask">
             <header class="header flex-center background-property">
                 <a href="#"><img src="./assets/images/main-logo.png" alt="RapidAutoShipping logo"></a>
                 <nav class="header-nav">
                     <ul class="nav-list flex">
                         <li class="nav-list-item text"><a href="<?php echo "$homepath"; ?>">Home</a></li>
                         <li class="nav-list-item text"><a href="#">Blogs</a></li>
                         <li class="nav-list-item text"><a href="#">Service</a></li>
                         <li class="nav-list-item text"><a href="<?php echo "$contactpath"; ?>">Contact</a></li>
                         <li class="nav-list-item text"><a href="<?php echo "$aboutpath"; ?>">About Us</a></li>
                     </ul>
                 </nav>
             </header>
             <!-- ===========================  -->
             <!-- First section here -->
             <!-- ===========================  -->

         </div>
         <div class="first-home-content contact-first-home-content">
             <h2 class="main-heading">
                 <?php echo "$heading"; ?>
             </h2>
             <p>
                 <?php echo "$paragraph"; ?>
             </p>
             <div class="first-home-form">
                 <div class="first-home-form-contents">
                     <label for="Pickup To">Pickup From :</label>
                     <input type="text" placeholder="Pickup From :">
                     <label for="Delivering to" class="delivering-to">Delivering To :</label>
                     <input type="text" placeholder="Delivering To :">
                     <button class="basic-button">NEXT</button>
                 </div>
             </div>
         </div>

     </div>
 </section>