<?
    $link = mysqli_connect('localhost', 'root', '','signy');
    if($link == false){
        echo"Ошибка:Невозможно подключиться к БД". mysqli_connect_error();
    }
?>