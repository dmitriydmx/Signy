 <?
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <? require_once('block/head.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<? require_once('block/topMenu.php');?>

    <div class="slayder">    
        <h1>Цифровой документооборот в три этапа:</h1>
        <ul>
            <li class = "one">1</li>
            <span></span>
            <li class = "two">2</li>
            <span></span>
            <li class = "three">3</li>
        </ul>
        <h3>Быстрая регистрация</h3>
        <h4>Мы создали, возможно, самую простую регистрацию. 
            Регистрируйся, получай полный доступ к сервису и 
            1000 подписей документов в подарок!</h4>
        <button class = "tryFree" onClick = "showFormReg()">Попробовать Бесплатно</button>
    </div>
    <div class="properties">
        <img src="img/properties.png" alt="properties">
    </div>
    <div class="comfort">
        <div class="comfort1">
            <div class="text">
                <h1>Комфорт в работе</h1>
                <ul>
                    <li>Создавай документы по твоим личным привычным шаблонам. Это индивидуально!</li>
                    <li>Настраивай порядок подписание документа, если вас несколько человек. Это ответственно!</li>
                    <li>Загружай XML файл с собственным шаблоном готового документа. Это удобно!</li>
                    <li>Работай в супер простом и понятном интерфейсе без сложностей. Это приятно!</li>
                </ul>
                <a href="FAQ.php"><button>Узнать больше</button></a>
            </div>
            <img src="img/comfort1.png" alt="comfort">
        </div>
        <div class="comfort2">
            <img src="img/comfort2.png" alt="our product">
            <div class="text">
                <h1>Наш продукт это:</h1>
                <ul>
                    <li>Web версия без установки программного обеспечения</li>
                    <li>Возможность бесплатно и безлимитно обрабатывать входящие документы</li>
                    <li>Простота интеграции с 1С и другими сервисами</li>
                    <li>Поддержка входа через Mobile ID</li>
                </ul>
                <button onClick = "showFormReg()">Зарегистрироваться</button>
            </div>
        </div>

    </div>
    <div class="signature">
        <h1>Пакеты цифровых подписей </h1>
        <div class="packets">
            <div class="packet">
                <h2>Demo</h2>
                <p>30 документов</p>
                <h3><span>0</span>руб/мес</h3>
                <button onClick = "showFormReg()">Зарегистрироваться</button>
            </div>
            <div class="packet">
                <h2>Business</h2>
                <p>1000 документов</p>
                <h3><span>1000</span>руб/мес</h3>
                <button onClick = "showFormReg()">Зарегистрироваться</button>
            </div>
            <div class="packet">
                <h2>Pro</h2>
                <p>10000 документов</p>
                <h3><span>9000</span>руб/мес</h3>
                <button onClick = "showFormReg()">Зарегистрироваться</button>
            </div>
            <div class="packet">
                <h2>Individual</h2>
                <p>неограниченное количество документов</p>
                <h3><span></span></h3>
                <br>
                <a href="FAQ.php"><button>Связаться с нами</button></a>
            </div>
        </div>
    </div>
    <div class="documents">
        <h1>5 820 125 114 </h1>
        <h2>подписано документов</h2>
        <h3>Наша компания уже более 30 лет создает удобные решения
            для бизнеса любого размера. Мы гордимся Signy как безопасным
            и комфортным продуктом</h3>
    </div>
    <div class="interesting">
        <h2>Интересно пишем про </h2>
        <div class="interestingBlock">
            <div class="interestingImg">
                <img src="img/interesting1.png" alt="interesting1.png">
                <p>28.05.2020</p>
                <h3>Заголовок короткий в две строки</h3>
            </div>
            <div class="interestingImg">
                <img src="img/interesting2.png" alt="interesting1.png">
                <p>28.05.2020</p>
                <h3>Заголовок короткий в две строки</h3>
            </div>
            <div class="interestingImg">
                <img src="img/interesting1.png" alt="interesting1.png">
                <p>28.05.2020</p>
                <h3>Заголовок короткий в две строки</h3>
            </div>
        </div>
    </div>
    <div class="answers">
        <h1>Популярные вопросы и ответы на них</h1>
        <ul>
            <li>Почему круглую пиццу ставят в квадратную коробку, а нарезают треугольниками?</li>
            <li>Почему после ремонта дорога опять проваливается?</li>
            <li>Почему вода мокрая?</li>
            <li>Видят ли микробы друг друга?</li>
            <li>Почему кровь красная а вены синие?</li>
            <li>Из чего сделана радуга? </li>
        </ul>
    </div>

    
    <?require_once('formReg.php');?> 
    <?require_once('formEntry.php');?>     
    <?require_once('block/subscription.php');?> 
    <?require_once('block/footer.php');?> 
   

    
</body>
</html>