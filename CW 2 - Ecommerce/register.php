<?php

/*calling PHP functions from common.php file*/
    include 'common.php';
/*the bracket shows the user what page they are currently on*/
    outputHeader("Register");
    outputNavigation("Register");
    ?>

<!-- Register form -->

<center><form action="action_page.php">
  <div class="box">
	  <form action = "">
    <center><p>Please fill in this form to create an account.</p></center>
    <hr>
	
	<input type="text" placeholder="Enter First Name" name="first name" id="first name" required>
	<input type="text" placeholder="Enter Last Name" name="last name" id="last name" required>
	<input type="text" placeholder="Enter username" name="username" id="username" required>
  <input type="text" placeholder="Enter Email address" name="email" id="email" required>
  <input type="text" placeholder="Enter Password" name="psw" id="psw" required>
  <input type="text" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
	  </hr>
	 

    <center><button type="submit" class="registerbtn">Register</button></center>

    <h4>Already have an account? <a href="signin.php">Sign in</a></h4> 
  </div>
</form></center>


<?php 
//This calls the footer from the common.php file
    outputFooter();
    ?>