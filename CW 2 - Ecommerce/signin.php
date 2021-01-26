<?php
/*calling PHP functions from common.php file*/
	include 'common.php';
 /*the bracket shows the user what page they are currently on*/
    outputHeader("Sign in");
	outputNavigation("Sign in");

    ?>


<!--Login form -->
<center><form action="action_page.php">
	<div class="box1">
		<form action = "">
	  <center><p1>Please fill in the form below to continue</p1></center>
	  <hr>
	  <input type="text" placeholder="Enter username" name="username" id="username" required>
	  	  <input type="text" placeholder="Enter Password" name="psw" id="psw" required>
		</hr>
	   
  
	  <center><button type="submit" class="loginbtn">Login</button></center>
	</div>
  

  </form></center>

  <?php 
  //This calls the footer from the common.php file
    outputFooter();
    ?>