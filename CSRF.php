//(...)
<form action="some_action.php" method="post">
   <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
//(...)
</form>

session_start();

if (isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {
   // токены равны, идёт обработка запроса
} else {
   // токены не равны, отклонение запроса
}
