<?
ini_set('display_errors', '0');
session_start();
require_once('lib/db.php');
        $sql = 'SELECT * FROM users WHERE id ='.$_SESSION['signy'];
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
    ?>
<div class="topMenu">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <ul class = "navbar">
            <li> <a href="index.php">Главная</a></li>
            <li>Про нас</a>
                <ul>
                    <li><a href="blog.php">Блог</a></li>
                    <li><a href="aboutUs.php">Про нас</a></li>
                    <li><a href="FAQ.php">Вопросы</a></li>
                </ul>
            </li>
            <li><a href="contacts.php">КОНТАКТЫ</a></li>
        </ul>
        <button class="btnEntry" onClick = "showFormEntry()">ВХОД</button>
        <button class="btnRegistration" onClick = "showFormReg()" >РЕГИСТРАЦИЯ</button>
        <?echo 'Логин:'.$row['login'];?>
        <a href="lib/exit.php"><button class="btnExit">ВЫХОД</button></a>
</div>
