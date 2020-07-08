<!DOCTYPE html>
<html lang="PT-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produtos</title>
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="/styles/produtos.css">
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

  <div class="products">
    <h1>PRODUTOS</h1>
      <p>Propomos-lhe uma extensa gama de produtos em madeira e derivados. <br>

      Escolhemos os melhores produtos e apontamos as melhores soluções para os seus projetos. <br>

<!-- Produtos - Placas -->
    <div class="galleria-placas">
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/mdf.jpg" alt="placa mdf">
        </div>
        <div class="product-details">
          <span class="product-catagory">Placas e painéis</span>
          <h4><a href="">Placa Mdf</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€19,99</div>
          </div>
        </div>
      </div>
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/osb.jpg" alt="placa Osb">
        </div>
        <div class="product-details">
          <span class="product-catagory">Placas e painéis</span>
          <h4><a href="">Placa Osb</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€19,99</div>
          </div>
        </div>
      </div>
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/placapinho.jpg" alt="painel pinho">
        </div>
        <div class="product-details">
          <span class="product-catagory">Placas e painéis</span>
          <h4><a href="">Painel de Pinho</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€14,99</div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="productName">
      <h2>Placas e Painéis</h2>
    </div>
<!-- Produtos - Rodapes -->
    <div class="galleria-rodapes">
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/rodape1.jpg" alt="placa mdf">
        </div>
        <div class="product-details">
          <span class="product-catagory">Rodapés</span>
          <h4><a href="">Rodapé Castanho</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€4,99</div>
          </div>
        </div>
      </div>
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/rodape2.jpg" alt="placa Osb">
        </div>
        <div class="product-details">
          <span class="product-catagory">Rodapés</span>
          <h4><a href="">Rodapé Castanho Claro</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€5,99</div>
          </div>
        </div>
      </div>
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/rodape3.jpg" alt="painel pinho">
        </div>
        <div class="product-details">
          <span class="product-catagory">Rodapés</span>
          <h4><a href="">Pack Rodapé Branco</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€12,49</div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="productName">
      <h2>Rodapés</h2>
    </div>

    <!-- Produtos - vinyl -->
    <div class="galleria-pavimento">
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/pav1.jpg" alt="pavimento">
        </div>
        <div class="product-details">
          <span class="product-catagory">Pavimento</span>
          <h4><a href="">Pavimento Castanho</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€6,99m2</div>
          </div>
        </div>
      </div>
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/pav2.jpg" alt="pavimento carvalho">
        </div>
        <div class="product-details">
          <span class="product-catagory">Pavimento</span>
          <h4><a href="">Pavimento Carvalho</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€5,99m2</div>
          </div>
        </div>
      </div>
      <div class="product-card col-xs-12 col-s-5 col-3">
        <div class="product-tumb">
          <img src="images/pav3.jpg" alt="pavimento branco">
        </div>
        <div class="product-details">
          <span class="product-catagory">Pavimento</span>
          <h4><a href="">Pavimento branco</a></h4>
          <div class="product-bottom-details">
            <div class="product-price">€8,49m2</div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="productName">
      <h2>Pavimentos</h2>
    </div>
  </div>

  <?php
  require "includes/footer.php";
  ?>
  
    <script src="/scripts/main.js"></script>
  </body>
  </html>