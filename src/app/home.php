<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: signin.php');
        exit;
    } else {
        echo 'Olá, '.$_SESSION['email']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/styles/menu.css">
  <link rel="stylesheet" href="/styles/reset.css">
  <link rel="stylesheet" href="/styles/utilities.css">
</head>

<body class="app">
  <main>
    <div class="container">
      <div>Menu</div>
        <ul>
          <li><a href="produtos/index.php">Produtos</a></li>
          <li><a href="eventos/index.php">Eventos</a></li>
        </ul>
      <div>Content</div>
  </main>

<?php
    } ?>
    
</body>
</html>