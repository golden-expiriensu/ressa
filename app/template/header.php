<div id="popupBackground"></div>
<header>
  <div><a href="index.php"><img src="images/dest/logo.png" alt="логотип" class="logo"></a></div>
  <div>
    <ul>
      <li>
        <a href="about.php">
          <h1>О нас</h1>
        </a>
      </li>
      <li>
        <a href="products.php">
          <h1>Продукция</h1>
        </a>
      </li>
      <li>
        <a href="development.php">
          <h1>Разработки</h1>
        </a>
      </li>
      <li>
        <a href="contacts.php">
          <h1>Контакты</h1>
        </a>
      </li>
    </ul>
  </div>
  <div>
    <button type="button" name="personalArea" class="buttonPopupButton">
      Личный кабинет
    </button>
    <div id="personalAreaPopup" class="popup buttonPopup userPersonalArea">
      <?php if($_COOKIE['user'] == ''): ?>
      <ul>
        <li><a href="authorization.php">Войти</a></li>
        <li><a href="registration.php">Зарегистрироваться</a></li>
      </ul>
      <?php else: ?>
      <ul class="userPersonalArea">
        <li><p>Добрый день, <?= $_COOKIE['user'] ?></p></li>
        <li><a href="">Паспорт ПСМ</a></li>
        <li><a href="">Личный кабинет</a></li>
        <li><a href="user-validation/exit.php">Выйти</a></li>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</header>
