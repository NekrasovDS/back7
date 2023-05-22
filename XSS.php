$fio = strip_tags($_POST['fio']);
$email = strip_tags($_POST['email']);
$birthday = intval($_POST['year']);
$gender = strip_tags($_POST['gender']);
$biografy = strip_tags($_POST['biografy']);
$ability = strip_tags($_POST['ability']);
$limbs = strip_tags($_POST['limbs']);

if (!preg_match("/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/", $_POST['email']) || empty($_POST['email'])) {
  print('Введите email.<br/>');
  $errors = TRUE;
}
