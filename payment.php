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
   <link rel="stylesheet" href="style2.css">  

</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment_form.php" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Pay now to get your Trip Booked</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Email">
            <label for="adr"><i class="fa fa-address-card"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="Enter Address">
            <label for="city"><i class="fa solid fa-city"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter City">
            <label for="city"><i class="fa fa-paper-plane"></i> Enter Destination</label>
            <input type="text" id="dest" name="dest" placeholder="Enter Destination">
            <label for="package">Choose Package</label>
    <select id="package" name="package">
      <option value="Varanasi">Varanasi-Rs.12,999/</option>
      <option value="Tirupati">Tirupati-Rs.10,999/</option>
      <option value="Chennai">Chennai-Rs.11,999</option>
      <option value="Mumbai">Mumbai-Rs.9,999/</option>
      <option value="Goa">Goa-Rs.9,899/</option>
      <option value="Manali">Manali-Rs.12,999/</option>
      <option value="Ladakh">Ladakh-Rs.11,999/</option>
      <option value="Mysore">Mysore-Rs.8,999/</option>
      <option value="Udaipur">Udaipur-Rs.13,999/</option>

    </select>
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa solid fa-credit-card" style="color:navy;"></i>
              <i class="fa solid fa-credit-card" style="color:orange;"></i>
              <i class="fa solid fa-credit-card" style="color:red;"></i>
              <i class="fa solid fa-credit-card" style="color:green;"></i>
              
              
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="Enter the Name on Card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="Enter Credit Card Number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Enter Expiry Month">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Enter Expiry Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" value="Pay Now" class="btn" name="send">
      </form>
    </div>
  </div>
  
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script1.js"></script>

</body>
</html>