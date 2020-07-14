<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: signin.php');
        exit;
    } else {
        echo 'Olá, '.$_SESSION['email']; ?>


<body class="app">
  <main>
    <div class="container">
      <div>Content</div>
    </div>
  </main>
</body>
</html>



<?php
    } ?>