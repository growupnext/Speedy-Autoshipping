 <link rel="stylesheet" href="./assets/css/header.css">
 <link rel="stylesheet" href="./assets/css/global.css">
 <link rel="stylesheet" href="./assets/css/utility.css">

 <style>
     /* ===========================  */


     /* first section here  */


     /* ===========================  */

     .first-home-mask {
         height: 100%;
         width: 100%;
     }

     .first-home-color-mask {
         height: 100%;
         width: 100%;
         background-color: #091e42b5;
     }

     .first-home-content {
         position: absolute;
         top: 30%;
         padding: 0 5%;
     }

     .first-home-content {
         color: #fff;
         width: 100%;
     }

     .first-home-content>h2 {
         text-align: center;
         font-size: 55px;
         letter-spacing: 2px;
         font-family: var(--heading-font);
     }

     .first-home-content>p {
         margin: 2% 0;
         text-align: center;
         font-size: 20px;
         font-weight: 400;
         line-height: 1.4;
         letter-spacing: 0.6px;
     }

     .first-home-form {
         margin-top: 4%;
         padding: 2% 5%;
         backdrop-filter: blur(10px);
         color: var(--white);
         border-radius: 14px;
     }

     .first-home-form-contents>label:nth-child(1) {
         margin-left: 0;
     }

     .first-home-form-contents>label {
         margin-left: 3%;
     }

     .first-home-form-contents>input {
         height: 45px;
         width: 30%;
         border-radius: 6px;
         background-color: var(--light-grey);
         border: 1px solid var(--primary-color);
         font-size: 18px;
         padding: 0 8px;
     }

     .first-home-form-contents>button {
         width: 10%;
         height: 45px;
         border: none;
         background-color: var(--primary-pink);
     }
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