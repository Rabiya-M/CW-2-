<?php
/*calling PHP functions from common.php file*/
  include 'common.php'; 
  

	/*the bracket shows the user what page they are currently on*/
    outputHeader("Home");
    outputNavigation("Home");
    ?>

<!-- Slideshow Starts Here --> 
<body> 
  <br>
  <br>
  <br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Images/Image2.png" style="width:1500px; height:800px;">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Images/Image1.png" style="width:1500px; height:800px;">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Images/Image3.png" style="width:1500px; height:800px;">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<br>

<!-- Rollover images of shoes --> 

<center><h1>Latest Drops</h1></center>


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

<div style = "background-image: url('Images/background.jpg');">

<?php 
//This calls the footer from the common.php file
    outputFooter();
    ?>
