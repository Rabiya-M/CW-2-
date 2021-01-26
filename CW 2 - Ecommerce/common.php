<?php
 /*The PHP function used here is for my header
    includes: CSS being linked to each page and my banner that is at the top of every webpage  */
    function outputHeader($title){
        echo ' 
        <html>
            <head>
            <title>' .$title . '</title>
            <link rel = "stylesheet" href = "style.css">
           <center> <img src = "Images/header.png" alt = "logo" width = "1000" height = "250"></center>
            </head>
            <body>
            ';
    }

     /*The PHP function I have used here is for my navigation 
     This will allow you to navigate to each webpage*/
    function outputNavigation($currentPage){
        $navLinks = [
         "Home" => "index.php",
         "Mens" => "mens.php",
         "Womens" => "womens.php",
         "Help" => "help.php",
         "My account" => "register.php",
         "Basket" => "basket.php"
         
        ];

        echo '<div class => <nav> <ul>';

        
    /*PHP function: allows me to link each of my webpages together and for the navigation to function successfully
    It highlights the current page the users are on, and the pages that the users are not on remain normal.
    on remains blank*/
        foreach($navLinks as $linkName => $linkURL){
            if($linkName == $currentPage)
                echo '<li><a class ="active" href="' . $linkURL . '">' . $linkName . '</a></li>';

            else
               echo '<li><a href="' . $linkURL . '">' . $linkName . '</a><li>';
        }
        echo '<input type="text" name="search" placeholder="Search.." id = "search">'; 

        echo '</ul></nav></div>';
    }


       /*PHP function: footer of my website
     hyperlinks to social media logos that are in the footer*/
    function outputFooter(){
        echo '
        <div class="footer">
        <center> <footer>
        <a href="https://twitter.com">
            <img src="Images/Twitter.png" alt="Twitter"style="width:60px;height:60px;border:0">
        </a> 
        <a href="https://www.instagram.com">
            <img src="Images/Instagram.png" alt="Instagram"style="width:60px;height:60px;border:0">
        </a>
        <a href="https://www.facebook.com">
            <img src="Images/Facebook.png" alt="Facebook"style="width:60px;height:60px;border:0"> 
        </a>
        
        <a href="https://www.pinterest.co.uk/">
            <img src="Images/Pinterest.png" alt="Pinterest"style="width:60px;height:60px;border:0"> 
        </a>
        
        <br />
        <center><p><font size="2px"><font color = white>- Copyright © 2021 The Shoe Company, Inc. All rights reserved - <p> </center>
        
        </footer></center>
         
        
        </body>
        </html>
        ';
    }