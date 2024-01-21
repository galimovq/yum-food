<?php

  $random_number = rand(100000, 999999);

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$text = $_POST['message'];
	
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";
	
	$subject = 'Регистрация на сайта "yum-food.ru"';
	$message =
  '<h3>Регистрация на сайта "yum-food.ru"</h3>
	<p>Код подтверждления: ' . $phone . '</p>';
	
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
	$mail->addAddress('web@yum-food.ru');
	$mail->Subject = $subject;
	$mail->isHTML(true);
	$mail->Body = $message;
	
	$mail->send();

?>