<!DOCTYPE html>
<html lang="PT-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projeto Parte 2</title>
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="/styles/utilities.css">
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/footer.css">
  <link rel="stylesheet" href="/styles/reset.css">
  <script src="https://kit.fontawesome.com/fa63cbf539.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  require "includes/header.php";
  ?>

  <main>
  <!-- Slide of images to show the best images of products-->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="images/pavLam2.jpg">
      <div class="text">
        <h1>O Pavimento adequado para si!</h1>
      </div>
    </div>

    <div class="mySlides fade">
      <img src="images/revMad.png">
      <div class="text">
        <h1>Revestimentos de Decoração</h1>
      </div>
    </div>

    <div class="mySlides fade">
      <img src="images/rodape.jpg">
      <div class="text">
        <h1>Ampla gama de Rodapés</h1>
      </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align: center;">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>



  <div class="clearfix"></div>

  <!-- Section with links to some pages -->
  <div class="container-products">
        <div class="comment">
        <h2>Aprenda a aplicar pavimento</h2>
      <div class="floor col-12">
      </div>
    </div>
    <div class="strips col-3 col-xs-12 col-s-5"></div>
    <div class="videos col-8 col-xs-12 col-s-5"></div>
  </div>
  <div class="clearfix"></div>
  <br><br><br>

<!-- This is the section for sales -->
  <div class="titlePromos">
    <h1>As Melhores Pomoções!</h1>
  </div>
  <div class="container">
    <div class="gallery-container">
      
    </div>
  </div>
</main>
<div class="clearfix"></div>

<?php
  require "includes/footer.php";
?>

  <script src="/scripts/main.js"></script>
</body>
</html>