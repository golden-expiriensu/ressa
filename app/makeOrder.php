<?php $pageName = "Сделать заказ"; ?>
<?php include 'template/head.php';?>
<h2 class="underline">Сделать заказ</h2>
<form action="/makeOrderSend.php" method="post">
  <h4>Наименование организации или ФИО</h4>
  <input type="text" name="name" placeholder="Наименование организации или ФИО" required>
  <h4>Телефон</h4>
  <input id="phoneForm" type="text" name="phone" required>
  <h4>Почта</h4>
  <input type="text" name="mail" placeholder="example@mail.ru" required>
  <h4>Текст сообщения</h4>
  <textarea type="text" name="message" placeholder="Здесь вы можете написать ваши пожелания или уточнить вопрос" rows="3"></textarea>
  <button type="submit" name="submit">Отправить</button>
</form>
<?php include 'template/foot.php';?>
