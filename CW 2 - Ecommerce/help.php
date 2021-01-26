<?php

/*calling PHP functions from common.php file*/
    include 'common.php';
    /*the bracket shows the user what page they are currently on*/
    outputHeader("Help");
    outputNavigation("Help");

    ?>


<div class="card">

        <h3>FAQs</h3>

        <h4> 
            Can I track my order? <br> Sign into your account and check your order history. Alternatively you can check the tracking link we sent in your despatch email to view the latest tracking information.   
            <br><br> Can I change my delivery address? <br> Once your order has been confirmed we are unable to change your delivery address due to security reasons. We advise that you make sure all details are correct before processing your order.
            <br><br> Can I cancel my order? <br> We start processing your order quickly which means we can’t make any changes once it’s confirmed. However you may be able to cancel your order and place a new one instead as we have a short grace period after the order is confirmed. 

		</h4>
	  </div>


<?php 
//This calls the footer from the common.php file
    outputFooter();
    ?>