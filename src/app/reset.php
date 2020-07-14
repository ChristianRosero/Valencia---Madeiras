<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/styles/utilities.css">
  <link rel="stylesheet" href="/styles/reset.css">
  <link rel="stylesheet" href="/styles/form.css">
</head>
<body>
<div class="container auth">
<body>
  <main>
      <form action="signin.php" method="post">
        <fieldset>
          <ul>
            <li>
              <label for="email">E-mail</label>
              <input type="text" name="email"></li>
        </fieldset>
        <fieldset>
          <input class="button" type="submit" value="Reset">
        </fieldset>
      </form>
      <a href="signup.php">Signup</a> | <a href="reset.php">Reset password</a><br><br>

      <?php

        if (!empty($_POST)) {
            $email      = $_POST['email'];

            if (!empty($email)) {
                $sql = "SELECT email FROM users WHERE email = ?";

                $stmt = conn()->prepare($sql);
                if ($stmt->execute([$email])) {
                    $n = $stmt->rowCount();
                    

                    if ($n === 1) {
                        $r = $stmt->fetch();
                        // --- Generate and encript the new password
                        $newPassword = randomPassword();
                        $encPassword = password_hash($newPassword, PASSWORD_BCRYPT);

                        $subject = 'Password reset';
                        $message = 'A tua nova password é:' . $npass . '<br> Podes fazer login em: <b><a href=http://localhost/app/signin.php>Signin</a></b>';
                        $output = '<p>Um email com a tua nova password foi enviado</p>';
                        email($email, $subject, $message, $output);

                        //---Updates the user with the new password
                        $sql = "UPDATE users SET password = ? WHERE email = ?";
                        $stmt = conn()->prepare($sql);
                        if ($stmt->execute([$enpass, $email])) {
                          $stmt = null;
                        }

                        $stmt = null;
                    } else {
                        echo 'O teu e-mail está incorreto.';
                    }
                }
            } else {
                echo "Todos os campos devem ser preechidos";
            }
        }
          ?>
          </div>
  </main>