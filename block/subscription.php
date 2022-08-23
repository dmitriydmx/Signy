<div class="subscription">
        <h1>Подпишись на наши новости!</h1> 
        <p>Введи свой электронный адрес и будь в курсе всех обновлений</p>
        <form method="POST" action="lib/getSubscription.php">
            <input type="email" id="mail" name = "mail" required>
            <button type="submit" onClick ="getSubscription()">Подписаться</button>
        </form>
</div>
<? require_once('getSub.php');?>
