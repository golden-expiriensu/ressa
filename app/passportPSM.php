<?php $pageName = "Пасспорт ПСМ"; ?>
<?php include 'template/head.php';?>
<?php if($_COOKIE['user'] == null): ?>
  <h4>Данный контент доступен только зарегистрированным пользователям</h4>
  <hr><br>
  <h3><a href="/authorization.php">Войти</a></h3>
  <h3><a href="/registration.php">Зарегистрироваться</a></h3>
<?php else: ?>
  пасспорт псм
<?php endif; ?>
<?php include 'template/foot.php';?>
