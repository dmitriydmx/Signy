<?
session_start();

require_once('db.php');
$sql = 'SELECT * FROM users';
$result = mysqli_query($link,$sql);
$key = "Signy";
$password = md5($_POST['password'].$key);

while($row = mysqli_fetch_array($result)){   
    $login=$row['login'];
    $pass=$row['password'];  

if($_POST['login'] == $login and $password == $pass) {
    $_SESSION['signy'] = $row['id'];
    header("location: ../index.php");
    exit();
    }
    header("location: ../index.php");
}
$sql = 'SELECT * FROM users WHERE id ='.$_SESSION['signy'];
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result);
        echo 'Логин: '.$row['login'];
?>