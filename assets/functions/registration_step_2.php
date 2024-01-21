<?php

  $code = $_POST['code'];

  if (isset($_COOKIE['user_code'])) {
    if ($_COOKIE['user_code'] != $code) {
      setcookie('user_code', '', -1, '/');

      echo 'Неверный код подтверждения';
      return;
    }
    setcookie('user_code', '', -1, '/');
  } else {
    echo 'Код подтверждения отсутствует, попробуйте снова';
    return;
  }

  require_once 'functions_global.php';

  // переменные
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql =
  'INSERT INTO
    users (password, phone, email, use_phone, city, photo_link)
  VALUES
    ("' . $pass . '", "' . $phone . '", "' . $email . '", 1, 1, "https://yum-food.ru/assets/img/photos/man.jpg")';
  mysqli_query($link, $sql);

  // поиск созданного пользователя
  $sql = 'SELECT users.id FROM `users` AS users WHERE users.phone = "' . $phone . '"';
  $query = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);
  if (count($query) == 1) {
    require_once 'add_pages.php';

    $id_user_md5 = md5($query[0]['id']);
    $sql =
    'UPDATE `users` AS users
      SET
        users.link = "https://yum-food.ru/pages/cooks/cook-' . $id_user_md5 . '/",
        users.name_1 = "Любитель еды",
        users.name_2 = "' . rand(1, 99999) . '"
    WHERE
      users.id = "' . $query[0]['id'] . '"';
    mysqli_query($link, $sql);

    add_page_cook($query[0]['id'], $id_user_md5);

    if (isset($_COOKIE['user_id'])) {
      setcookie('user_id', '', -1, '/');
    }
    setcookie('user_id', $query[0]['id'], 0, '/');
  } else {
    echo 'Ошибка при создании пользователя (попробуйте еще раз или обратитесь в тех. поддержку)';
    return;
  }

?>