<?php

   $connection = mysqli_connect('localhost','root','','register_form');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $pass1 = $_POST['pass1'];
      $pass2 = $_POST['pass2'];
     
      $request = " insert into register_form(name, email, phone, address, pass1, pass2) values('$name','$email','$phone','$address','$pass1','$pass2') ";
      mysqli_query($connection, $request);

     // header('location:register.php'); 
     echo "<script>
            alert('registered successfully');
            window.location.pathname='PODCASTPLAYER/login.php'
         </script>";

   }else{
      echo 'something went wrong please try again!';
   }

?>