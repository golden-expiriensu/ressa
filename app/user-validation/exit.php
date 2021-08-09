<?php
  setcookie('user', $name, time() - 3600, "/");
  setcookie('admin', false, time() - 3600, "/");
  header('Location: /authorization.php');
?>
