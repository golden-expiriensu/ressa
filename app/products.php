<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Продукты</title>
  <?php include 'template/styleSrc.html';?>
</head>

<body>
  <?php include 'template/header.php';?>
  <div class="content">
    <div class="products">
      <h1>ПРОДУКЦИЯ</h1>
      <button class="unfoldingListButton">
        <h2>Гусенечные сельскохозяйственные трактора</h2>
      </button>
      <ul class="unfoldingList">
        <li>
          <button class="popupButton"><h3>ТПУ 3</h3></button>
          <div class="popup prompt">
            <a href="">
              Трактор гусеничный сельскохозяйственный тяговый класс 3
            </a>
          </div>
        </li>
        <li>
          <button class="popupButton"><h3>ТПУ 4</h3></button>
          <div class="popup prompt">
            <a href="">
              Трактор гусеничный сельскохозяйственный тяговый класс 4
            </a>
          </div>
        </li>
        <li>
          <button class="popupButton"><h3>ТСХ 600</h3></button>
          <div class="popup prompt">
            <a href="">
              Трактор гусеничный сельскохозяйственный тяговый класс 6-8
            </a>
          </div>
        </li>
      </ul>
      <button class="unfoldingListButton">
        <h2>Гусенечные промышленные трактора</h2>
      </button>
      <ul class="unfoldingList">
        <li>
          <button class="popupButton"><h3>ТПУ 3а</h3></button>
          <div class="popup">
            <ul>
              <li>
                <a href="">База</a>
              </li>
              <li>
                <a href="">Трелёвочный</a>
              </li>
              <li>
                <a href="">Форвадер</a>
              </li>
              <li>
                <a href="">Харвестер</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <button class="popupButton"><h3>ТПУ 4а</h3></button>
          <div class="popup">
            <ul>
              <li>
                <a href="">Лесопосадочный комплекс</a>
              </li>
              <li>
                <a href="">Дробительный комплекс</a>
              </li>
              <li>
                <a href="">Самосвал</a>
              </li>
              <li>
                <a href="">Погрузчик-корчеватель</a>
              </li>
              <li>
                <a href="">Обслуживающая машина</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <button class="unfoldingListButton">
        <h2>Гусенечные универсальные трактора</h2>
      </button>
      <ul class="unfoldingList">
        <li>
          <button class="popupButton"><h3>Лесозаготовительная</h3></button>
          <div class="popup">
            <ul>
              <li>
                <a href="">База</a>
              </li>
              <li>
                <a href="">Трелёвочный</a>
              </li>
              <li>
                <a href="">Форвадер</a>
              </li>
              <li>
                <a href="">Харвестер</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <button class="popupButton"><h3>Лесовосстановительная</h3></button>
          <div class="popup">
            <ul>
              <li>
                <a href="">Лесопосадочный комплекс</a>
              </li>
              <li>
                <a href="">Дробительный комплекс</a>
              </li>
              <li>
                <a href="">Самосвал</a>
              </li>
              <li>
                <a href="">Погрузчик-корчеватель</a>
              </li>
              <li>
                <a href="">Обслуживающая машина</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <button class="popupButton"><h3>Лесозащитная</h3></button>
          <div class="popup">
            <ul>
              <li>
                <a href="">Лесопожарный 1 типа</a>
              </li>
              <li>
                <a href="">Лесопожарный 2 типа</a>
              </li>
              <li>
                <a href="">Лесопожарный 3 типа</a>
              </li>
              <li>
                <a href="">Лесной бульдозер</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <?php include 'template/footer.html';?>
</body>
<?php include 'template/jsSrc.html';?>
</html>
