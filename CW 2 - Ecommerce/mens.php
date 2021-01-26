<?php

/*calling PHP functions from common.php file*/
    include 'common.php';
/*the bracket shows the user what page they are currently on*/
    outputHeader("Mens");
    outputNavigation("Mens");
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

<!-- images of mens shoes --> 


<div class="row">
  <div class="column">
  <img src="Images/no1.png" onmouseover="this.src='Images/no0.png'" onmouseout= "this.src='Images/no1.png'" width= "400" height="400" alt="shoes"/> 
  <h2>Nike Air VaporMax Plus</h2>


  </div>
  <div class="column">
  <img src="Images/no3.png" onmouseover="this.src='Images/no2.png'" onmouseout= "this.src='Images/no3.png'" width= "400" height="400" alt="shoes"/>     
  <h2>Adidas Originals NMD_R1 V2</h2>

  </div>
  <div class="column">
  <img src="Images/no5.png" onmouseover="this.src='Images/no4.png'" onmouseout= "this.src='Images/no5.png'" width= "400" height="400" alt="shoes"/>     
  <h2>Nike Air Force 1 Low</h2>

  </div>
</div>

<?php 
//This calls the footer from the common.php file
    outputFooter();
    ?>