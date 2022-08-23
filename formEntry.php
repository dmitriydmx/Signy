<div id="formEntry">
        <div class="formRegInput">
            <button class="closeformEntry" onClick = "closeformEntry()">X</button>
            <h1>Введите данные для входа</h1>
            <br>
                <form method="POST" action="lib/settings.php">
                    <div class="contactText">Логин или электронная почта:</div>
                    <input class="contactPole" type="text" id="login" name="login" required>
                    <br>
                    <div class="contactText">Пароль:</div>
                    <input class="contactPole" type="password" id="password" name="password" required>
                    <br><br>
                    <input type="submit" class="contactBtn" value="Войти" >
                </form>
        </div>
    </div>