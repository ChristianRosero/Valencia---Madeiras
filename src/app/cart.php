<!DOCTYPE html>
<html lang="PT-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projeto Parte 1</title>
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="/styles/cart.css">
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

  <div class="cartPage" data-value="5">
    <h1>Carrinho de compras</h1>

    <div class="totals">
      <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value subtotal" data-value="45.70">45.70</div>
      </div>
      <div class="totals-item">
        <label>IVA (23%)</label>
        <div class="totals-value">10.51</div>
      </div>
      <div class="totals-item">
        <label>Portes</label>
        <div class="totals-value shippingValue" data-value="15">15.00</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Total</label>
        <div class="totals-value">71.2 (Eur)</div>
      </div>
    </div>
      
    <button class="buy">Comprar</button>
  </div>

  <div class="clearfix"></div>

  <?php
  require "includes/footer.php";
  ?>
  
    <script src="/scripts/main.js"></script>
  </body>
  </html>