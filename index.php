<?php
if (isset($_POST['pseudo']) && ($_POST['password'])) {
  setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, '/', null, false, true);
  setcookie('password', $_POST['password'], time() + 365*24*3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice 3 partie 8 php</title>
</head>
<body>
  <form class="form" action="index.php" method="post">
    <input type="text" name="pseudo" placeholder="pseudo">
    <input type="password" name="password" placeholder="mot de passe">
    <button type="submit" name="validate">Valider</button>
  </form>
  <p>
    <?php
    echo 'Bonjour ' . htmlspecialchars($_COOKIE['pseudo']) . htmlspecialchars($_COOKIE['password']);
    ?>
  </p>
</body>
</html>
