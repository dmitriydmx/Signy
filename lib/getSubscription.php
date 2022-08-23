<?
require_once('db.php');
$mail = $_POST['mail'];
$sql = "INSERT INTO subscription (mail) VALUES (?)";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt,'s',$mail);

mysqli_stmt_execute($stmt);

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>