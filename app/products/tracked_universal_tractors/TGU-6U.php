<?php $pageName = "Ресса | ТГУ-6У"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/head.php';?>
<h2>ТГУ-6У</h2>
<div class="bigImg">
  <img src="/images/dest/tracked_universal_tractors/tgu_6/mainView_1.png" alt="mainView_1">
</div>
<div class="bigImg">
  <img src="/images/dest/tracked_universal_tractors/tgu_6/mainView_2.png" alt="mainView_2">
</div>
<hr>

<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/scrollButton.php';?>


<button class="unfoldingListButton"><h2>Описание трактора</h2></button>
<div class="unfoldingList">
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/description.php';?>
</div>


<button class="unfoldingListButton"><h2>Технические характеристики</h2></button>
<ul class="unfoldingList">

  <li>
    <button class="unfoldingListButton"><h3>Трактор</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/tractor.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Двигатель</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/engine.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Трансмиссия</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/transmission.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Шасси</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/chassis.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Кабина</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/cabin.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Управление</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/control.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Комплектации</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-6U/specifications/equipment.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

</ul>


<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/orderOptionInProduction.html';?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/foot.php';?>
