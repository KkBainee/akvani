<?php
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $dest = $_POST['dest'];
      $cname = $_POST['cname'];
      $ccnum = $_POST['ccnum'];
      $expmonth = $_POST['expmonth'];
      $expyear = $_POST['expyear'];
      $cvv = $_POST['cvv'];



      $request = " insert into payment(name, email, address, city, dest, cname, ccnum, expmonth, expyear, cvv) values
      ('$name','$email','$address','$city','$dest','$cname','$ccnum','$expmonth','$expyear','$cvv') ";
      //mysqli_query($connection, $request);
      // echo "$name";
      // header('location:book.php'); 
      $data=mysqli_query($connection,$request);
      if($name == null || $email == null || $city == null || $address == null || $dest == null || $cname == null || $ccnum == null || $expmonth == null || $expyear==null || $cvv==null ) {
         echo "<script>
            alert('Fill all the details to book a slot');
            window.location.pathname='TRAVELWEB/payment.php'
         </script>";
      }
      else {
         echo "<script>
            alert('Payment Succesfull');
            window.location.pathname='TRAVELWEB/home.php'
         </script>";
      }
   }else{
      echo 'something went wrong please try again!';
   }

?>