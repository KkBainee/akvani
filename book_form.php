<?php
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      //mysqli_query($connection, $request);
      // echo "$name";
      // header('location:book.php'); 
      $data=mysqli_query($connection,$request);
      if($name == null || $email == null || $phone == null || $address == null || $location == null || $guests == null || $arrivals == null || $leaving == null) {
         echo "<script>
            alert('Fill all the details to book a slot');
            window.location.pathname='TRAVELWEB/book.php'
         </script>";
      }
      else {
         echo "<script>
            alert('Pay now to book you trip');
            window.location.pathname='TRAVELWEB/payment.php'
         </script>";
      }
   }else{
      echo 'something went wrong please try again!';
   }

?>