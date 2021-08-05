<?php $pageName = "ТГУ-4"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/head.php';?>
<h2>ТГУ-4</h2>
<div class="bigImg">
  <img src="/images/dest/tracked_universal_tractors/заполнить" alt="mainView">
  <p class="imgDescription">Трактор ТГУ-4</p>
</div>
<hr>


<button class="unfoldingListButton"><h2>Описание трактора</h2></button>
<div class="unfoldingList">
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/description.html';?>
</div>


<button class="unfoldingListButton"><h2>Технические характеристики</h2></button>
<ul class="unfoldingList">

  <li>
    <button class="unfoldingListButton"><h3>Двигатель</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/engine.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Трансмиссия</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/transmission.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Шасси</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/chassis.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Кабина</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/cabin.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Управление</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/control.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Навесоспособность</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/load_capacity.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

  <li>
    <button class="unfoldingListButton"><h3>Комплектации</h3></button>
    <div class="unfoldingList">
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/TRACTOR/tracked_universal_tractors/TGU-4/specifications/equipment.html';?>
    </div>
  </li>
  <div class="clearfix"></div>

</ul>


<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/orderOptionInProduction.html';?>
<?php include $_SERVER['DOCUMENT_ROOT'] .'/template/foot.php';?>
