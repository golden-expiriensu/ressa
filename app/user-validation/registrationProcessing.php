<?php
  $hostN = 'localhost';
  $hostUserLogin = 'root';
  $hostUserPassword = 'root';

  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
  $passwordCheck = filter_var(trim($_POST['passwordCheck']), FILTER_SANITIZE_STRING);

  if ($login == '' || $name == '' || $surname == '' || $password == '' || $passwordCheck == '') {
    setcookie('last_error', 'empty_field', 0, '/registration.php');
    header('Location: ../registration.php');
    exit();
  }elseif($password != $passwordCheck){
    setcookie('last_error', 'pass!=passCheck', 0, '/registration.php');
    header('Location: ../registration.php');
    exit();
  }

  $dbConnection = new mysqli($hostN, $hostUserLogin, $hostUserPassword, 'user');
  $userInfo = $dbConnection->query("SELECT * FROM `user` WHERE `login` = '$login'");
  $userInfo = $userInfo->fetch_assoc();
  if(!empty($userInfo)){
    setcookie('last_error', 'login_is_taken', 0, '/registration.php');
    header('Location: ../registration.php');
    exit();
  }

  $password = md5($password."1ctCY6XsFvP9laE1CBD8");

  $dbConnection->query("INSERT INTO `user` (`login`, `name`, `surname`, `password`) VALUES('$login', '$name', '$surname', '$password')");

  setcookie('last_error', '', -1, '/registration.php');
  setcookie('user', $name, time() + 3600, "/");

  $dbConnection->close();

  header('Location: /');
?>
