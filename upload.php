<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video uploader</title>

    <!-- Links -->
    <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

    

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
</style>




</head>
<body>

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






<section class="">


<?php
        include("config.php");

        if(isset($_POST['btn_upload'])){
            $maxsize= 104857600;

            $name=$_FILES['file']['name'];
            $target_dir="videos/";
            $target_file=$target_dir.$_FILES["file"]["name"];

            $videoFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $extension_arr=array("mp4","mp3","ogg","avi","3gp","mpeg");

            if(in_array($videoFileType,$extension_arr))
            {
                if(($_FILES['file']['size']>=$maxsize) || ($_FILES["file"]['size']==0)){
                    echo "File too large,must be less than 5mb.";
                }
                else{

                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        $query="INSERT INTO videos(name,location) VALUES ('".$name."','".$target_file."' )";
                        mysqli_query($con,$query);

                        echo"Upload successfully.!!";
                    }
                }
                
            }
            else{
                echo "Invalid.";
            }

        }
    ?>



    <form action="" method="post" enctype="multipart/form-data" style="padding-left:30%;color:red;">
        <input type="file" style="font-size:30px;"name='file'>
        <input type="submit" style="font-size:30px;" name="btn_upload" value="Upload audio/video">


</form>
</section>





</body>
</html>