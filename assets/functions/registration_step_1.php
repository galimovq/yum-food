<?php

  if (isset($_COOKIE['user_id'])) {
    echo 'Вы уже вошли в систему';
    return;
  }

  require_once 'functions_global.php';

  // проверка по телефону
  $phone = $_POST['phone'];

  $sql = 'SELECT users.id FROM `users` AS users WHERE users.phone = "' . $phone . '"';
  $query = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);
  if (count($query) > 0) {
    echo 'Пользователь с таким телефоном уже есть';
    return;
  }

  // провера по почте
  $email = $_POST['email'];

  $sql = 'SELECT users.id FROM `users` AS users WHERE users.email = "' . $email . '"';
  $query = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);
  if (count($query) > 0) {
    echo 'Пользователь с такой почтой уже есть';
    return;
  }

  $random_number = "" . rand(10, 99) . "-" . rand(10, 99);
	
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "../query/PHPMailer/PHPMailer.php";
	include_once "../query/PHPMailer/Exception.php";
	include_once "../query/PHPMailer/SMTP.php";
	
	$subject = 'Регистрация на сайта "yum-food.ru"';
	$message =
  '<h3>Регистрация на сайта "yum-food.ru"</h3>
	<p>Код подтверждления: ' . $random_number . '</p>';
	
	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();
	$mail->Host = 'ssl://smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'info@yum-food.ru';
	$mail->Password = '';
	$mail->SMTPSecure = 'SSL';
	$mail->Port = 465;
	
	$mail->setFrom('info@yum-food.ru');
	$mail->addAddress($email);
	$mail->addAddress('web@yum-food.ru');
	$mail->Subject = $subject;
	$mail->isHTML(true);
	$mail->Body = $message;
	
	$mail->send();

  if (isset($_COOKIE['user_code'])) {
    setcookie('user_code', '', -1, '/');
  }
  setcookie('user_code', $random_number, 0, '/');

?>