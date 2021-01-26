<?php
/*calling PHP functions from common.php file*/
	include 'common.php';
 /*the bracket shows the user what page they are currently on*/
    outputHeader("Womens");
    outputNavigation("Womens");

    ?>

<br>


<!-- Drop down menu to sort products --> 

<select name="Sort" id="sort">
  <option value="LowHigh">Low to High</option>
  <option value="HighLow">High to Low</option>
  <option value="Relevance">Relevance</option>
</select>

 <label for="sort" id="mens">Sort Items: </label>

<br> 
<br>
<br>
<br>
<br>
<br>


<!-- images of womens shoes --> 

<div class="row">
  <div class="column">
  <img src="Images/no7.png" onmouseover="this.src='Images/no6.png'" onmouseout= "this.src='Images/no7.png'" width= "400" height="400" alt="shoes"/>     
  <h2>Nike Air Max 270 Women's
</h2>

  </div>
  <div class="column">
  <img src="Images/no9.png" onmouseover="this.src='Images/no8.png'" onmouseout= "this.src='Images/no9.png'" width= "400" height="400" alt="shoes"/>
  <h2>Timberland Statsberg Field
</h2>
     
  </div>
  <div class="column">
  <img src="Images/no11.png" onmouseover="this.src='Images/no10.png'" onmouseout= "this.src='Images/no11.png'" width= "400" height="400" alt="shoes"/>   
  <h2>Vans Old Skool Women's
</h2>
  
  </div>
</div>

  <?php 
  //This calls the footer from the common.php file
    outputFooter();
    ?>