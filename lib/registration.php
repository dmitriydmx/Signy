<?
require_once('db.php');
$key = "Signy";
$login = $_POST['userLogin'];
$password = md5($_POST['userPassword'].$key);

if($login == ""){
    echo "Вы не ввели Логин";
    exit();
}
if($password == ""){
    echo "Вы не ввели Пароль";
    exit();
}
$sql = "INSERT INTO users (login,password) VALUES (?,?)";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt,'ss',$login,$password);
mysqli_stmt_execute($stmt);
header("location: ../index.php");
?>