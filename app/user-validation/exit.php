<?php
  setcookie('user', $name, time() - 3600, "/");
  header('Location: /authorization.php');
?>
