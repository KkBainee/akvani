<?php

   $connection = mysqli_connect('localhost','root','','register_form');

   // if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $request = "select * from register_form where name='$name' and pass1='$password' and email='$email' ";
      $result=$connection->query($request);
      if($result->num_rows != 0) {
         echo "<script>
            alert('login successfull');
            window.location.pathname='PODCASTPLAYER/book.php'
         </script>";
         // header('location:book.php');
      }
      else {
         echo " <script>
            alert('New User!! please register to login');
            window.location.pathname='PODCASTPLAYER/register.php'
         </script>";
      }
?>