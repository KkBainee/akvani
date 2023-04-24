<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">  

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="#" class="logo"> <i class="fa-solid fa-radio"></i> akasHavani </a>

   <nav class="navbar">
      <a href="home.php" class="logo"><i class="fa-solid fa-house">Home</i></a>
      <a href="search.php" class="logo"> <i class="fa-solid fa-magnifying-glass">Search</i></a>
      <a href="about.php" class="logo"><i class="fa-regular fa-heart">Liked</i></a>
      <a href="package.php" class="logo"><i class="fa-regular fa-bookmark"></i></i></a>
      
      <div class="dropdown">
  <button class="dropbtn"><i class="fa-solid fa-right-to-bracket"></i></button>
  <div class="dropdown-content">
    <a href="login.php">User</a>
    <a href="admin.php">Admin</a>
  </div>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<div class="heading" style="background:url(images/u.jpg) no-repeat">
   <h1></h1>
</div>

<!-- header section ends -->

<!-- <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>hurry up!!</h1>
</div> -->

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Sign up</h1>

   <form action="register_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>create password :</span>
            <input type="text" placeholder="create password" name="pass1">
         </div>
         <div class="inputBox">
            <span>confirm password</span>
            <input type="text" placeholder="confirm password" name="pass2">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>
<!-- booking section ends -->


















<section class="footer">
<!-- footer section starts  -->

   <div class="credit"> created by <span>podcast&co</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script1.js"></script>

</body>
</html>