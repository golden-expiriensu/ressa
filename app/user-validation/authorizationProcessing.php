<?php
  include "variables.php";

  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

  $login = md5($login.$salt);
  $password = md5($password.$salt);

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
  setcookie('admin',
   $login == md5($adminName.$salt),
   time() + 3600, "/");

  $dbConnection->close();

  header('Location: /')
?>
