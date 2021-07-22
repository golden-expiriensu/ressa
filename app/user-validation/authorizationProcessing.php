<?php
  $hostN = 'localhost';
  $hostUserLogin = 'root';
  $hostUserPassword = 'root';

  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

  $password = md5($password."1ctCY6XsFvP9laE1CBD8");

  $dbConnection = new mysqli($hostN, $hostUserLogin, $hostUserPassword, 'user');
  $userInfo = $dbConnection->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");

  $userInfo = $userInfo->fetch_assoc();
  if(empty($userInfo)){
    setcookie('last_error', 'authorization_error', 0, '/authorization.php');
    header('Location: ../authorization.php');
    exit();
  }

  setcookie('last_error', '', -1, '/authorization.php');
  setcookie('user', $userInfo['name'], time() + 3600, "/");

  $dbConnection->close();

  header('Location: /')
?>
