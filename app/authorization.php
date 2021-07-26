<?php include 'template/head.php';?>
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
<?php include 'template/foot.php';?>
