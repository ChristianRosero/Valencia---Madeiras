<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signin</title>
  <link rel="stylesheet" href="/styles/utilities.css">
  <link rel="stylesheet" href="/styles/reset.css">
  <link rel="stylesheet" href="/styles/form.css">
</head>
<body>
  

<?php
  require_once("functions.php");
?>

<div class="container auth">
<body>
  <main>
        <form action="signin.php" method="post">
          <fieldset>
            <ul>
              <li>
                <label for="email">E-mail</label>
                <input type="text" name="email"></li>
              <li>
                <label for="password">Password</label>
                <input type="password" name="password"></li>
            </ul>
          </fieldset>
          <fieldset>
            <input class="button" type="submit" value="Signin">
          </fieldset>
        </form>
        <a href="signup.php">Signup</a> | <a href="reset.php">Reset password</a><br><br>

        <?php

          if (!empty($_POST)) {
              $password   = $_POST['password'];
              $email      = $_POST['email'];

              if (!empty($password) && !empty($email)) {
                  $sql = "SELECT email, password, token, level FROM users WHERE email = ? AND level > ? AND status > ? LIMIT 1";

                  $stmt = conn()->prepare($sql);
                  if ($stmt->execute([$email, 0, 0])) {
                      $n = $stmt->rowCount();
                      $r = $stmt->fetch();

                      $stmt = null;

                      if ($n === 1 && password_verify($password, $r['password'])) {
                          session_start();
                          //session_regenerate_id();

                          $_SESSION['loggedin'] = true;

                          $_SESSION['email'] = $r['email'];
                          $_SESSION['token'] = $r['token'];
                          $_SESSION['level'] = $r['level'];

                          header("Location: home.php");
                      } else {
                          echo 'O teu e-mail ou password estão incorretos.';
                      }
                  }
              } else {
                  echo "Todos os campos devem ser preechidos";
              }
          }
          ?>
          </div>
  </main>
</body>
</html>