<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: signin.php');
        exit;
    } else {
        require_once('../functions.php');
        $section = !empty($_GET['s']) ? $_GET['s'] : null;
        $token = !empty($_GET['token']) ? $_GET['token'] : null;


        $sql = "SELECT * FROM products WHERE token = ?";
        $stmt = conn()->prepare($sql);
        if ($stmt->execute([$token])) {
            $n = $stmt->rowCount();
            if ($n === 1) {
                $r = $stmt->fetch();
                $stmt = null;
            }
        } ?>

<body class="app">
  <main>
    <div class="container">
      <?php require_once('../includes/menu.php'); ?>
      <div>
        <!-- Section name -->
        <div class="section-title">
          <h1><?php echo $section; ?></h1>
        </div>
        <!-- to use the same page -->
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
          <fieldset>
            <ul>
              <li>
                <label for="title">Title</label>
                <input type="text" name="title" value="<?php echo !empty($r['title']) ? $r['title'] : null ; ?>">
              </li>
              <li>
                <label for="summary">Summary</label>
                <textarea rows="3" name="summary"><?php echo !empty($r['summary']) ? $r['summary'] : null ; ?></textarea>
              </li>
              <li>
                <label for="price">Price</label>
                <input type="number" value="price"><?php echo !empty($r['price']) ? $r['price'] : null ; ?></input>
              </li>
              <li>
                <label for="brand">Brand</label>
                <input type="text" name="brand" value="<?php echo !empty($r['brand']) ? $r['brand'] : null ; ?>">
              </li>
              <?php
              if ($_SESSION['level'] >= 2) { ?>
                <li>
                  <label for="status">Status</label>
                  <select name="status">
                    <option value="0" <?php echo $r['status'] === 0 ? 'selected' : ''; ?> >Esboço</option>
                    <option value="1" <?php echo $r['status'] === 1 ? 'selected' : ''; ?>>Rever</option>
                    <option value="2" <?php echo $r['status'] === 2 ? 'selected' : ''; ?>>Publicar</option>
                  </select>
              </li>
              <?php } ?>
            </ul>
          </fieldset>
          <fieldset>
            <!-- inputs needed for the form summit -->
            <input type="hidden" name="section" value="<?php echo $section; ?>">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <input type="submit" value="Save">
          </fieldset>
        </form>
        <?php
        if (!empty($_POST)) {
            $title      = $_POST['title'];
            $summary    = $_POST['summary'];
            $price       = $_POST['price'];
            $brand     = $_POST['brand'];
            
            $status     = !empty($_POST['status']) ? $_POST['status'] : 0;
            $token      = !empty($_POST['token']) ? $_POST['token'] : sha1(bin2hex(date('U')));
            $timestamp  = date('Y-m-d');
            $section    = $_POST['section'];

            if (!empty($_POST['token'])) {
                if ($_SESSION['level'] >= 2) {
                    $sql = "UPDATE products SET title = ?, summary = ?, price = ?, brand = ?, status = ? WHERE token = ?";
                } else {
                    $sql = "UPDATE products SET title = ?, summary = ?, price = ?, brand = ? WHERE token = ?";
                }

                $stmt = conn()->prepare($sql);
                $stmt->bindValue(1, $title, PDO::PARAM_STR);
                $stmt->bindValue(2, $summary, PDO::PARAM_STR);
                $stmt->bindValue(3, $price, PDO::PARAM_INT);
                $stmt->bindValue(4, $brand, PDO::PARAM_STR);


                if ($_SESSION['level'] >= 2) {
                    $stmt->bindValue(5, $status, PDO::PARAM_INT);
                    $stmt->bindValue(6, $token, PDO::PARAM_STR);
                } else {
                    $stmt->bindValue(5, $token, PDO::PARAM_STR);
                }
            } else {
                $sql = "INSERT INTO products (title, summary, price, brand, status, token, date) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = conn()->prepare($sql);
                $stmt->bindValue(1, $title, PDO::PARAM_STR);
                $stmt->bindValue(2, $summary, PDO::PARAM_STR);
                $stmt->bindValue(3, $price, PDO::PARAM_STR);
                $stmt->bindValue(4, $brand, PDO::PARAM_STR);
                $stmt->bindValue(5, $status, PDO::PARAM_INT);
                $stmt->bindValue(6, $token, PDO::PARAM_STR);
                $stmt->bindValue(7, $timestamp, PDO::PARAM_STR);
            }

            if ($stmt->execute()) {
                $stmt = null;
                //echo "Registo inserido";
                header("Location: ../$section/");
                exit;
            }
        } ?>
      </div>
    </div>
  </main>

</body>
</html>


<?php
    } ?>