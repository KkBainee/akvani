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

<a href="#" class="logo"> <i class="fas fa-paper-plane"></i> Podacst&Co </a>

<nav class="navbar">
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


    <section class="services">

<h1 class="heading-title"> New releases </h1>

<div class="box-container">

   <div class="box">
      <img src="images/harsha.png" alt="">
      <h3>Side Effects</h3>
   </div>

   <div class="box">
      <img src="images/22.png" alt="">
      <h3>Hridayam</h3>
   </div>

   <div class="box">
      <img src="images/26.png" alt="">
      <h3>Anaganaga</h3>
   </div>

   <div class="box">
      <img src="images/25.png" alt="">
      <h3>Urlo Mucchatlu</h3>
   </div>

   <div class="box">
      <img src="images/24.png" alt="">
      <h3>Detective</h3>
   </div>

   <div class="box">
      <img src="images/23.png" alt="">
      <h3>Sri Krishna Leela</h3>
   </div>

</div>

</section>



<!-- Audio Podcasts -->


<section class="services">

<h1 class="heading-title"> Audio Podcasts </h1>

<div class="box-container">

   <div class="box">
      <img src="images/27.png" alt="">
      <h3>Rukmini Kalyanam</h3>
   </div>

   <div class="box">
      <img src="images/35.png" alt="">
      <h3>The Breakup Story</h3>
   </div>

   <div class="box">
      <img src="images/31.png" alt="">
      <h3>Kahaniyon Ka Mantra</h3>
   </div>

   <div class="box">
      <img src="images/36.png" alt="">
      <h3>Nannu Dochukunduvate</h3>
   </div>

   <div class="box">
      <img src="images/34.png" alt="">
      <h3>Drakkhani</h3>
   </div>

   <div class="box">
      <img src="images/32.png" alt="">
      <h3>How I Met Rukmini</h3>
   </div>

</div>

</section>


<!-- Video Podcasts -->


<section class="services">

<h1 class="heading-title"> Video Podcasts </h1>

<div class="box-container">

   <div class="box">
      <img src="images/41.png" alt="">
      <h3>Joe Rogan</h3>
   </div>

   <div class="box">
      <img src="images/45.png" alt="">
      <h3>OverThink Tank</h3>
   </div>

   <div class="box">
      <img src="images/44.png" alt="">
      <h3>Focus</h3>
   </div>

   <div class="box">
      <img src="images/46.png" alt="">
      <h3>Lex Man</h3>
   </div>

   <div class="box">
      <img src="images/42.png" alt="">
      <h3>PBD</h3>
   </div>

   <div class="box">
      <img src="images/43.png" alt="">
      <h3>gibi</h3>
   </div>

</div>

</section>









</body>
</html>
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
<table>
    <tr>
        <th>Name</th>
    </tr>
    <tr>
        <td><a href="play.php "><?php echo $row->name;?></a></td>
        <!-- <td><a href="play.php "><?php echo $row->location;?></a></td> -->
    </tr>
</table>
<?php
   }
    else{
        echo "Name does not exist";
    }
}

?>