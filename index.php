<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php
echo "<body style='background-image: url(gr.jpg);background-size: cover;'>";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!empty($_GET['save'])) {
    print('Спасибо, результаты сохранены.');
  }
  include('form.php');
  exit();
}

$errors = FALSE;

if (empty($_POST['name1'])) {
  $error_text ="Заполните имя";
  $errors = TRUE;
}

if (empty($_POST['email1'])) {
  if($errors){
    $error_text ="Заполните поля";
  }else $error_text ="Заполните email";
  $errors = TRUE;
}

if (empty($_POST['date1'])) {
  if($errors){
    $error_text ="Заполните поля";
  }else $error_text ="Укажите дату рождения";
  $errors = TRUE;
}
if (empty($_POST['chek1'])) {
  if($errors){
    $error_text ="Заполните поля";
  }else $error_text ="Вы не ознакомились с контрактом";
  $errors = TRUE;
}

if ($errors) {
  echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'>" . $error_text . "</h2></div></div>";
  exit();
}

include('bd.php');

try {
  $stmt = $db->prepare("INSERT INTO users (firstname, email, bdate, sex, amount, immortality, god, fly, bio) VALUES (:firstname, :email, :bdate, :sex, :amount, :immortality, :god, :fly, :bio)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':bdate', $bdate);
$stmt->bindParam(':sex', $sex);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':ability', $ability);
$stmt->bindParam(':bio', $bio);

$firstname = $_POST['name1'];
$email = $_POST['email1'];
$bdate = $_POST['date1'];
$sex = $_POST['radio1'];
$amount = $_POST['radio2'];
$immortality = $_POST['select1'];
$god = $_POST['select2'];
$fly = $_POST['select3'];
$bio = $_POST['bio1'];

$stmt->execute();
}
catch(PDOException $e){
  echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'> Ошибка : " . $e->getMessage() . "</h2></div></div>";
  exit();
}
