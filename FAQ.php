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
  <li><a href="#">Популярные вопросы</a></li>
</ul>
<div class="FAQ">
    <h1>Популярные вопросы и ответы на них</h1>
    <h3>Популярные вопросы-</h3> 
    <ul>
            <li>Почему круглую пиццу ставят в квадратную коробку, а нарезают треугольниками?</li>
            <li>Почему после ремонта дорога опять проваливается?</li>
            <li>Почему вода мокрая?</li>
            <li>Видят ли микробы друг друга?</li>
            <li>Почему кровь красная а вены синие?</li>
            <li>Из чего сделана радуга? </li>
    </ul>
    <h3>Настройка работы в Signy +</h3>
    <h3>Работа с документами +</h3>
    <h3>Информация по безопасности +</h3>
    <h3>Технические вопросы +</h3>
    <h3>Интеграция +</h3>
    <h3>Общие вопросы +</h3>

    <div class="formFAQ">
        <h1>Нет ответа на интересующий вопрос?</h1>
        <p>Заполни форму и наши менеджеры свяжутся с Вами</p>
		<form method="POST" action="lib/questions.php">
			<div class="contactText">Имя*:</div>
			<input class="contactPole" type="text" id="name" name="name" placeholder="Иван" required>
			<div class="contactText">Электронная почта*:</div>
			<input class="contactPole" type="email" id="mail" name="mail" placeholder="ivan@mail.com" required>
			<div class="contactText">Телефон:</div>
			<input class="contactPole" type="tel" id="phone" name="phone" placeholder="+7123 456 78 90">
			<div class="contactText">Сообщение</div>
			<textarea class="contactTextArea" id="message" name="message" placeholder="Введите тут" required></textarea>
			<br>
			<input type="submit" class="contactBtn" value="Отправить">
		</form>	
	</div>
	
</div>

<?require_once('block/footer.php');?> 
    
</body>
</html>