<!DOCTYPE html>
<html lang="en">
<head><?php include 'template/head.php';?></head>
<body>
  <?php include 'template/header.php';?>
  <div class="content">
    <div>
      <h3>Регистрация</h3>
      <form action="user-validation/registrationProcessing.php" method="POST" name="registration">
        <input type="text" class="formControl" name="login" placeholder="Придумайте логин">
        <input type="text" class="formControl" name="name" placeholder="Имя">
        <input type="text" class="formControl" name="surname" placeholder="Фамилия">
        <input type="password" class="formControl" name="password" placeholder="Придумайте пароль">
        <input type="password" class="formControl" name="passwordCheck" placeholder="Повторите пароль">
        <?php if($_COOKIE['last_error'] == 'empty_field'): ?>
        <div class="error">Необходимо заполнить все поля</div>
        <?php elseif($_COOKIE['last_error'] == 'pass!=passCheck'): ?>
        <div class="error">Пароли не совпадают</div>
        <?php elseif($_COOKIE['last_error'] == 'login_is_taken'): ?>
        <div class="error">Логин занят, придумайте другой</div>
        <?php endif; ?>
        <button type="submit" name="submit">Зарегистрироваться</button>
        <?php setcookie('last_error', '', -1, '/registration.php'); ?>
      </form>
    </div>
  </div>

  <?php include 'template/footer.html';?>
</body>
<?php include 'template/jsSrc.html';?>
</html>
