<?php

   $connection = mysqli_connect('localhost','root','','admin_login');

   // if(isset($_POST['send'])){
      $name = $_POST['admin_name'];
      $email = $_POST['email'];
      $pas = $_POST['pwd'];

      $request = "select * from login where admin_name='$name' and pwd='$pas' and email='$email'  ";
      $result=$connection->query($request);
    //   echo "$result";
      



      if($name == null || $email == null ||$pas ==null) {
         echo "<script>
            alert('Fill all the details to LOGIN');
            window.location.pathname='PODCASTPLAYER/admin.php'
         </script>";
      }
      else {
         echo "<script>
            alert('admin login successful');
            window.location.pathname='PODCASTPLAYER/upload.php'
         </script>";
      }
?>