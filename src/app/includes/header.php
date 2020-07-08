<html lang="PT-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>
</head>
<body>
<header>
    <div class="container-header">
      <!--Logo-->
      <div class="logo">
        <a href="index.php">
          <img src="images/logo.png" alt="logo">
        </a>
      </div>
      <!--Search bar-->
      <div class="search">
        <input type="text" name="search" placeholder="Search..">
      </div>
      <!--User icon-->
      <span class="clientArea">
        <a href="signin.php">
          <i class="fas fa-user"></i>
        </a>
      </span>
      <!--Cart icon-->
      <span class="cart">
        <a href="cart.php">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </span>
    </div>  
      <div class="clearfix"></div>
    
    <div class="navbar">
      <ul>
        <li>
          <a href="empresa.php"><h3>Empresa</h3></a>
        </li>
        <li>
          <a href="produtos.php"><h3>Produtos</h3></a>
        </li>
        <li>
          <a href="servicos.php"><h3>Serviços</h3></a>
        </li>
        <li>
          <a href="contactos.php"><h3>Contactos</h3></a>
        </li>
      </ul>
    </div>
    
    <div class="menu">
      <h3>MENU</h3>
    </div>
    <div class="navbar-mobile">
      <div class="dropdown">
        <div class="dropdown-content">
          <a href="empresa.php">Empresa</a>
        </div>
        <div class="dropdown-content">
          <a href="produtos.php">Produtos</a>
        </div>
        <div class="dropdown-content">
          <a href="servicos.php">Serviços</a>
        </div>
        <div class="dropdown-content">
          <a href="contactos.php">Contactos</a>
        </div>
      </div>
    </div>
  </header>
</body>
</html>