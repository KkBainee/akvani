<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<style>
   /* Style The Dropdown Button */
   .dropbtn {

      background-color: white;
      color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
   }

   /* The container <div> - needed to position the dropdown content */
   .dropdown {
      position: relative;
      display: inline-block;
   }

   /* Dropdown Content (Hidden by Default) */
   .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
   }

   /* Links inside the dropdown */
   .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
   }

   /* Change color of dropdown links on hover */
   .dropdown-content a:hover {
      background-color: #f1f1f1
   }

   /* Show the dropdown menu on hover */
   .dropdown:hover .dropdown-content {
      display: block;
   }

   /* Change the background color of the dropdown button when the dropdown content is shown */
   .dropdown:hover .dropbtn {
      background-color: white;
   }
</style>


<body>

   <!-- header section starts  -->

   <section class="header" style="background-color:black;">

      <a href="#" class="logo" style="color:white;"> <i class="fa-solid fa-radio" style="color:white;"></i> akasHavani </a>

      <nav class="navbar">
         <a href="home.php" class="logo"><i class="fa-solid fa-house" style="color:white;">Home</i></a>
         <a href="search.php" class="logo"> <i class="fa-solid fa-magnifying-glass" style="color:white;">Search</i></a>
         <a href="package.php" class="logo"><i class="fa-regular fa-bookmark" style="color:white;"></i></i></a>

         <div class="dropdown" style="background-color: black;">
            <button class="dropbtn"><i class="fa-solid fa-right-to-bracket" style="background-color: white;"></i></button>
            <div class="dropdown-content">
               <a href="login.php">User</a>
               <a href="admin.php">Admin</a>
            </div>
         </div>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->
   <!-- <section class="about">

<div class="image">
   
   <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1axmaC3HHzfPXlcBkXEVjY?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</div>

<div class="content">
   <h2 style="font-size:40px; padding-bottom:1rem;">Here goes the podcast of the week..</h2>
   <h5 style="font-size:18px; padding-top :1rem;">Trend set chesina Youtuber and actor, Anil Geela, ee podcast lo, thana graamam gurinchi kaburlu, mariyu interesting muchatlu tho paatu, entertain chestaru. Swayam krushi tho thana lokaani ela srushtincharo, daanigurinchi kuda ee podcast lo vinnocchu. 'My Village Show' dvaara popular aina Anil Geela, ippudu 'Urlo Muchatlu' dvaara mee munduki vochharu.</h5>
   <div class="icons-container">
      <div class="icons">
         <i class="fas fa-map"></i>
         <span>top destinations</span>
      </div>
      <div class="icons">
         <i class="fas fa-hand-holding-usd"></i>
         <span>affordable price</span>
      </div>
      <div class="icons">
         <i class="fas fa-headset"></i>
         <span>24/7 guide service</span>
      </div>
   </div>
</div>

</section> -->


   <section class="services">

      <h1 class="heading-title">Here goes the podcast of the week....</h1>

      <div class="">
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1axmaC3HHzfPXlcBkXEVjY?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

      </div>


   </section>







   <!-- home section ends -->


   <!-- top reccomendations -->
   <section class="services">

      <h1 class="heading-title" style="text-align: left;font-size:50px;"> TOP RECOMENDERS</h1>

      <div class="box-container">
         <!-- <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/0yCFI9q0fx8Rezjn2I6oMo?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe> -->
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/7FYviftMWJxDIGIdcLcPcf?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/4vEQ408F7tbP3yLmPafzen?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/1ymvFxRf8M4wChKd1LC9mW?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

      </div>
   </section>



   <section class="services">

      <h1 class="heading-title"></h1>

      <div class="box-container">

         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6Nhthu7iFL5uaOap5yYJTQ?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/3Hk3H6H0vi5tJSYtsxZUfH?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/7kXTwW1xCVei6efFjQgINx?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

      </div>
   </section>


   <section class="services">

      <h1 class="heading-title"></h1>

      <div class="box-container">
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/71tN63vXBZHBjGa28bjIxu?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/5Om5vIZt2WwjowdiK6QID4?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/0dSpx5nyMFMYN5VuqMjuKB?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

      </div>
   </section>



   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading-title" style="text-align: left;font-size:50px;"> POPULAR PAGES</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/21.png" alt="">
            <h3>COLLEGE KABURLU</h3>
         </div>

         <div class="box">
            <img src="images/26.png" alt="">
            <h3>ANAGANAGA</h3>
         </div>

         <div class="box">
            <img src="images/35.png" alt="">
            <h3>ASHISH BAGRECHA</h3>
         </div>

         <div class="box">
            <img src="images/41.png" alt="">
            <h3>JOE ROGAN</h3>
         </div>

         <div class="box">
            <img src="images/23.png" alt="">
            <h3>SRI KRISHNA LEELA</h3>
         </div>
      </div>

   </section>

   <!-- services section ends -->

   <!-- home about section ends -->

   <!-- home packages section starts  -->
   <section>
      <div class="load-more" style="text-align: center;"> <a href="login.php" class="btn">EXPLORE</a> </div>

   </section>

   <!-- home packages section ends -->

   <!-- home offer section starts  -->

   <!-- <section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div> -->
   <!-- </section> -->

   <!-- home offer section ends -->

















   <!-- footer section starts  -->

   <section class="footer">


      <div class="credit"> created by <span>AkasHavani</span> | all rights reserved! </div>

   </section>
   <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="script1.js"></script>

</body>

</html>