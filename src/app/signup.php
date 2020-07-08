<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign</title>
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="/styles/signup.css">
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/footer.css">
  <link rel="stylesheet" href="/styles/utilities.css">
  <link rel="stylesheet" href="/styles/reset.css">
</head>
<body>
  

<?php
  require_once("functions.php");
  require_once("includes/header.php");
?>
<div class="container auth">
<body>
  <main>
    <div class="container auth">
      <div>
        <form action="signup.php" method="post">
          <fieldset>
            <ul>
              <li>
                <label for="email">E-mail</label>
                <input type="text" name="email"></li>
              <li>
                <label for="password">Password</label>
                <input type="password" name="password"></li>
              <li>
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword">
              </li>
            </ul>
          </fieldset>
          <fieldset>
            <input type="submit" value="Signup">
          </fieldset>
        </form>
        <a href="signin.php">Signin</a> | <a href="reset.php">Reset password</a><br><br>


  <?php
    if (!empty($_POST)) {
        $password   = $_POST['password'];
        $cpassword  = $_POST['cpassword'];
        $email      = $_POST['email'];


        if (!empty($password) && $password === $cpassword && !empty($email)) {
            $password   = password_hash($_POST['cpassword'], PASSWORD_BCRYPT);
            $level      = 0;
            $status     = 0;
            $token      = sha1(bin2hex(date('U')));
            $timestamp  = date('U');

            $sql = "INSERT INTO users (email, password, level, status, token, timestamp) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = conn()->prepare($sql);
            if ($stmt->execute([$email, $password, $level, $status, $token, $timestamp])) {
                $stmt = null;

                echo "User signed up!";

                $subject = 'Verify your account';
                $message = 'Click the link to verify your account: <br><b><a href=https://www.app.com/verify.php?token='.$token.'&email='.$email.'>'.$token.'</a></b>';
                $output = '<p>A confirmation message has been sent to '.$email.'</p>';

                email($email, $subject, $message, $output);
            }
        } elseif ($password !== $cpassword) {
            echo "Passwords do not match";
        } else {
            echo "All fields are required";
        }
    }

    ?>
</div>

<?php
  require "includes/footer.php";
?>

</body>
</html>
