<?
require_once('db.php');
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$sql = "INSERT INTO questions (name,mail,phone,message) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt,'ssss',$name,$mail,$phone,$message);

mysqli_stmt_execute($stmt);

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>