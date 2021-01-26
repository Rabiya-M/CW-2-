<?php
/*calling PHP functions from common.php file*/
	include 'common.php';
 /*the bracket shows the user what page they are currently on*/
    outputHeader("Basket");
    outputNavigation("Basket");

    ?>

    <br>
    <br>

    <body>
<!-- Checkout form starts here --> 

    <div class="container1">

<div class="row">
  <div class="col-75">
    <div class="container">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Name">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">Country</label>
                <input type="text" id="state" name="state" placeholder="Country">
              </div>
              <div class="col-50">
                <label for="zip">Postcode</label>
                <input type="text" id="zip" name="zip" placeholder="Postcode">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname"placeholder="Name" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="XXXX-XXXX-XXXX-XXX">
            <label for="expmonth">Exp Date</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="MM/YY">

            <div class="row">
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  <!-- Basket --> 

  <div class="col-25">
    <div class="container">
      <h4>Basket
        <span class="price" style="color:white">
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">£15</span></p>
      <p><a href="#">Product 2</a> <span class="price">£5</span></p>
      <p><a href="#">Product 3</a> <span class="price">£8</span></p>
      <p><a href="#">Product 4</a> <span class="price">£2</span></p>
      <hr>
      <p>Total <span class="price" style="color:white"><b>£30</b></span></p>
    </div>
  </div>
</div>
</div>
</body>


  <?php 
  //This calls the footer from the common.php file
    outputFooter();
    ?>