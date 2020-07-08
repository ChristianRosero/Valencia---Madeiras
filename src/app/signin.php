<!DOCTYPE html>
<html lang="PT-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="/styles/main.scss">
</head>
<body>
<?php
  require "includes/header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
      <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    </section>
  </div>
</main>

<?php
  require "includes/footer.php";
?>
</body>
</html>