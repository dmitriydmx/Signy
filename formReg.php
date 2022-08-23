<div id="formReg">
    <div class="formRegInput">
        <button class="closeFormReg" onClick = "closeFormReg()">X</button>
        <h1>Регистрация</h1>
        <h3>Заполни форму для регистрации на нашем сайте</h3>
        <br>
            <form method="POST" action="lib/registration.php">
                <div class="contactText">Логин или электронная почта:</div>
                <input class="contactPole" type="text" id="userLogin" name="userLogin" required>
                <br>
                <div class="contactText">Пароль:</div>
                <input class="contactPole" type="password" id="userPassword" name="userPassword" required>
                <br><br>
                <input type="submit" class="contactBtn" value="ЗАРЕГИСТРИРОВАТЬСЯ" >
            </form>
    </div>
</div>