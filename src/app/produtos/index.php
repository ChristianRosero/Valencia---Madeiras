<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: signin.php');
        exit;
    } else {
        require_once('../functions.php');
        echo 'Olá, '.$_SESSION['email']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/styles/menu.css">
  <link rel="stylesheet" href="/styles/reset.css">
</head>

<body class="app">
  <h1>Produtos</h1>
  <main>
    <div class="container">
      <div class="menu">
        Menu
        <ul>
          <li> <a href="../home.php"> Home</a></li>
          <li><a href="../profile.php"> Perfil</a></li>
          <li><a href="../signout.php"> signout</a></li>
        </ul>
      </div>
        <ul>
          <li><a href="">Produtos</a></li>
          <li><a href="">Eventos</a></li>
        </ul>
      <div>
        <?php
          $sql = "SELECT * FROM products WHERE status = ? ORDER BY date DESC";
          $stmt = conn()->prepare($sql);
          if($stmt->execute([[1]])) {
            $n = $stmt->rowCount();
            if($n > 0 ) {
              $r = $stmt->fetchall();
              $stmt = null;

              var_dump($r);
            } else {
              echo "Não existem registos. <a href='create.php'>Inserir</a>";
            }
          }
        ?>
      </div>
  </main>

<?php
    } ?>
    
</body>
</html>