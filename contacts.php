<!DOCTYPE html>
<html lang="en">
<head>
<? require_once('block/head.php');?>
</head>
<body>
  <? require_once('block/topMenu.php');?>
  <?require_once('formReg.php');?> 
  <?require_once('formEntry.php');?> 
<ul class="breadcrumb">
  <li><a href="index.php">Signy</a></li>
  <li><a href="#">Контакты</a></li>
</ul>
<div class="contacts">
  <h1>Наши контакты</h1>
  <div class="ourContacts">
    <div class="adressContacts">
      <p>Мы всегда рады ответить на ваши вопросы и развивать эффективное сотрудничество по
         всем вопросам, связанным с электронным документооборотом.
      </p>
      <div class="phone">
        <img src="img/phone.png" alt="">
        <p>8 800 750 6431</p>
      </div>
      <br>
      <div class="phone">
        <img src="img/mail.png" alt="">
        <p>infosmartsign@smarttender.biz</p>
      </div>
      <br>
      <div class="phone">
        <img src="img/location.png" alt="">
        <p>пр-т Ленина, 14 А Москва, 02072</p>
      </div>
    </div>
    <div class="map">
    <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/geo/leninskiy_prospekt/8063114/?ll=37.536365%2C55.680787&utm_medium=mapframe&utm_source=maps&z=13.7" style="color:#eee;font-size:12px;position:absolute;top:14px;">Ленинский проспект — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUFiRXgPA" width="605" height="249" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>
  </div>
  <h1>...или напишите нам:</h1>

  <div class="form">
    <form action="lib/questions.php" method = "POST">
      <div class="contactText">Имя*:</div>
      <input class="contactPole" type="text" id="name" name = "name" placeholder="Иван" required>
      <div class="contactText">Электронная почта*:</div>
      <input class="contactPole" type="email" id="mail" name = "mail" placeholder="ivan@mail.com" required>
      <div class="contactText">Телефон*:</div>
      <input class="contactPole" type="tel" id="phone" name = "phone" placeholder="+7123 456 78 90" required>
      <div class="contactText">Сообщение</div>
      <textarea class="contactTextArea" id="message" name = "message" placeholder="Введите тут" required></textarea>
      <br>
      <input type="submit" class="contactBtn" value="Отправить" onclick="contactPole()">
    </form>
	</div>
</div>
<?require_once('block/footer.php');?> 
</body>
</html>