<!DOCTYPE html>
<html lang="en">
<head><?php include 'template/head.php';?></head>
<body>
  <?php include 'template/header.php';?>
  <div class="content">
    <div>
      <h3>Вход в аккаунт</h3>
      <form action="user-validation/authorizationProcessing.php" method="POST" name="authorization">
        <input type="text" class="formControl" name="login" placeholder="Логин">
        <input type="password" class="formControl" name="password" id="regPassword" placeholder="Пароль">
        <?php if($_COOKIE['last_error'] == 'authorization_error'): ?>
        <div class="error">Неверный логин и/или пароль</div>
        <?php endif; ?>
        <button type="submit" name="submit" id="authorizationButton">Войти</button>
        <?php setcookie('last_error', '', -1, '/authorization.php'); ?>
      </form>
    </div>
  </div>

  <?php include 'template/footer.html';?>
</body>
<?php include 'template/jsSrc.html';?>
</html>
