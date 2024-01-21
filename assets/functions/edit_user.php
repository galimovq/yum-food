<?php

if (!isset($_COOKIE['user_id'])) {
  echo 'Авторизация прервана';
  return;
}

require_once 'connect_db.php';

$link = connect_db();

if ($link == false) {
  echo 'Плохое соединение с сервером';
  return;
}

$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$about = $_POST['about'];
$useVK = $_POST['useVK'];
$linkVK = $_POST['linkVK'];
$useTelegram = $_POST['useTelegram'];
$useWA = $_POST['useWA'];
$email = $_POST['email'];
$city = $_POST['city'];
$street = $_POST['street'];
$house = $_POST['house'];
$pass = $_POST['pass'];

$sql =
  'UPDATE `users` AS users
      SET
        users.name_1 = "' . $name1 . '",
        users.name_2 = "' . $name2 . '",
        users.name_3 = "' . $name3 . '",
        users.about = "' . $about . '",
        users.use_vk = "' . $useVK . '",
        users.link_vk = "' . $linkVK . '",
        users.use_telegram = "' . $useTelegram . '",
        users.use_whatsapp = "' . $useWA . '",
        users.email = "' . $email . '",
        users.city = "' . $city . '",
        users.street = "' . $street . '",
        users.house = "' . $house . '",
        users.password = "' . $pass . '"
    WHERE
      users.id = "' . $_COOKIE['user_id'] . '"';
mysqli_query($link, $sql);

?>