<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bar </title>

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- icon links -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  /* border-radius: 150px; */
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background:salmon;
  /* border-radius: 100px; */
  color: black;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: salmon;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<body>
<section class="header">

<a href="#" class="logo"> <i class="fa-solid fa-radio"></i> AkasHavani </a>

<nav class="navbar">
      <a href="home.php">home</a>
</nav>

<nav class="navbar"  style="background-color:black;">
<form class="example" method="post">
<!-- <label>search</label> -->
<input type="text" placeholder="Search.." name="search">
<!-- <input type="submit" name="submit"> -->
<button type="submit" name="submit"><i class="fa fa-search"></i></button> 
</form>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
    <!-- <form class="example" method="post">
        <label>search</label>
        <input type="text" name ="search">
        <input type="submit" name="submit">
    </form> -->


    <?php
$con = new PDO("mysql:host=localhost;dbname=podplayer",'root','');
if(!$con){
    die("connection failed".mysqli_connect_error());
}
if(isset($_POST["submit"])){ 
    $str=$_POST["search"];
    $sth=$con->prepare("SELECT * FROM `videos` WHERE name='$str'");

    $sth->setFetchMode(PDO::  FETCH_OBJ);
    $sth->execute();

    if($row = $sth->fetch())
    {
?>

<br>
<!-- <h1 style="color:black,font-size:50px,text-align;center;">File found successfully</h1> -->
<p style="color:black; font-size: 35px; text-align:center;text-decoration:underline;">File Found Successfully</p>
<p style="color:black; font-size: 30px; text-align:center;"><a href="play.php "><?php echo $row->name;?></a></p>
        <!-- <td><a href="play.php "><?php echo $row->location;?></a></td> -->
<?php
   }
    else{
        echo "Name does not exist";
    }
}

?>






    <section class="services">

<h1 class="heading-title"> New releases </h1>

<div class="box-container">
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1Np9KmKRZK6va04TRuSmac?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/5wOfNUJ2SflgnFsWnzKCHL?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>


    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/5nOO1OPj6bZyz319goKtTp?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/7sV5N5eZsGuAUclsLtBvhm?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
         
    


   
</div>
</section>



<!-- Audio Podcasts -->


<section class="services">

<h1 class="heading-title"> Audio Podcasts </h1>

<div class="box-container">

<iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6BlhvqnK3rhO5IFD7T7kQF?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/274IsSXTQpn3le4e5A1tzq?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>  
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/4m8AM9Ka6N1bXlOpV4xHLy?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/7FYviftMWJxDIGIdcLcPcf?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

   
</div>

</section>


<!-- Video Podcasts -->


<section>

<h1 class="heading-title"> VIDEO PODCASTS </h1>



<iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/4rOoJ6Egrf8K2IrywzwOMk/video?utm_source=generator" width="1300"  height="300" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/3FVOp5guWNV4b0S9pfuVcw/video?utm_source=generator" width="1300" height="300" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6RUrXD02AC9k9dQ9LuySvm/video?utm_source=generator" width="1300" height="300" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/2MAi0BvDc6GTFvKFPXnkCL/video?utm_source=generator" width="1300" height="300" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>  
       
</section>





<!-- custom js link -->
<script src="script2.js"></script>

<section class="footer">
<!-- footer section starts  -->

   <div class="credit"> created by <span>podcast&co</span> | all rights reserved! </div>

</section>



</body>
</html>
