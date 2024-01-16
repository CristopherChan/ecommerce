<?php
session_start();
include_once("session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="customer-shop.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="main-container">
    <!-- nav -->
    <?php
    include_once 'header.php';
    ?>
    
    
    <footer>
      <div class="items">
        <div class="logo-1">
          <a href="index.html">
         <img class="logos" src="./img/MULANA-removebg-preview.png" alt="Company Logo"/></a>
        </div>
        <ul class="footer-list">
          <li><a class="footer1" href="#">Home</a></li>
          <li><a class="footer1" href="#">Shop</a></li>
          <li><a class="footer1" href="#">About</a></li>
          <li><a class="footer1" href="#">Customize</a></li>
          <li><a class="footer1" href="#">Contact</a></li>
        </ul>
        <div class="has-1">
          <h2 id="hastag-1"> #ReadyForAnything #EndlessExplorations<h2>
        </div>
        <div class="icon-media-1">
          <ul class="media-1">
            <li><a href="https://www.facebook.com/mulanaph" target="_blank"><img class="fb-1" src="./img/icons8-facebook-50 (1).png" alt="icon"></a></li>
            <li><a href="https://www.instagram.com/mulanaph/" target="_blank"><img class="inst-1" src="./img/icons8-instagram-50.png" alt="icon" ></a></li>
            <li><a href="https://www.tiktok.com/@tumbler.ph" target="_blank"><img class="tik-1" src="./img/icons8-tiktok-50 (1).png" alt="icon"></a></li>
          </ul>
        </div>
        <div class="copyR">
         <a class="cr" href="index.html"> © 2021 Mulana. All rights reserved | Design by Cristopher Chan </a>
        </div>
      </div>
      
    </footer>
  </div>
</body>
</html>