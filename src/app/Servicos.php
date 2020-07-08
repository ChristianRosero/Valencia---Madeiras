<!DOCTYPE html>
<html lang="PT-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Serviços</title>
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="/styles/servicos.css">
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/footer.css">
  <link rel="stylesheet" href="/styles/utilities.css">
  <link rel="stylesheet" href="/styles/reset.css">
  <script src="https://kit.fontawesome.com/fa63cbf539.js" crossorigin="anonymous"></script>
</head>
<body>
  <!---->
  <?php
  require "includes/header.php";
  ?>

  <div class="servicesTittle">
      <h1>Serviços</h1>
      <p>Tutoriais e vídeos para aprender a realizar os seus projetos de bricolage!</p>
  </div>

  <div class="services">
    <div class="section1">
      <div class="description1 col-s-6">
        <h2>PAVIMENTO FLUTUANTE</h2>
        <p>Aprenda da forma mais fácil e eficaz a instalar o pavimento flutuante.</p>
      </div>
      <div class="videoWrapper col-s-6">
        <iframe src="https://www.youtube.com/embed/hfNZw9OOyN4"></iframe>
      </div>
      </div>
    <div class="clearfix"></div>
    
    <div class="section1">
      <div class="videoWrapper col-s-6">
        <iframe src="https://www.youtube.com/embed/uwaxpVPcjK4"></iframe>
      </div>
      <div class="description2 col-s-6">
        <h2>REVESTIMENTO DE PAREDES</h2>
        <p>Aprenda a fazer a melhor descoração das suas paredes interiores ou exteriores:</p>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="section1">
      <div class="description3 col-s-6">
        <h2>APLICAÇÃO DE RODAPÉS</h2>
        <p>Elegância em cada canto da sua casa!</p>
      </div>
      <div class="videoWrapper col-s-6">
        <iframe src="https://www.youtube.com/embed/FAjjenH9-ZI"></iframe>
      </div>
    </div>
    <div class="clearfix"></div>


  </div>

  <?php
  require "includes/footer.php";
  ?>



  <script src="/scripts/main.js"></script>
</body>
</html>