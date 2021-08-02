<div id="popupBackground"></div>
<header>
  <div><a href="<?php echo '/index.php';?>"><img src="<?php echo "/images/dest/logo.png";?>" alt="логотип" class="logo"></a></div>
  <div>
    <ul>
      <li>
        <a href="<?php echo '/about.php';?>">О нас</a>
      </li>
      <li>
        <a href="<?php echo '/products.php';?>">Продукция</a>
      </li>
      <li>
        <a href="<?php echo '/development.php';?>">Разработки</a>
      </li>
      <li>
        <a href="<?php echo '/contacts.php';?>">Контакты</a>
      </li>
      <li>
        <button type="button" name="personalArea" class="buttonPopupButton">
          Личный кабинет
        </button>
        <div id="personalAreaPopup" class="popup buttonPopup userPersonalArea">
          <?php if($_COOKIE['user'] == ''): ?>
          <ul>
            <li><a href="<?php echo '/authorization.php';?>">Войти</a></li>
            <li><a href="<?php echo '/registration.php';?>">Зарегистрироваться</a></li>
          </ul>
          <?php else: ?>
          <ul class="userPersonalArea">
            <li>Добрый день, <?= $_COOKIE['user'] ?></li>
            <li><a href="/passportPSM.php">Паспорт ПСМ</a></li>
            <li><a href="">Личный кабинет</a></li>
            <li><a href="<?php echo '/user-validation/exit.php';?>">Выйти</a></li>
          </ul>
          <?php endif; ?>
        </div>
      </li>
    </ul>
  </div>
</header>
