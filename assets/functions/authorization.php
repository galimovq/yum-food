<?php

  require_once 'connect_db.php';

  $link = connect_db();

  if ($link == false) {
    echo 'Плохое соединение с сервером';
    return;
  }

  $phone = $_POST['phone'];
  $pass = $_POST['pass'];

  $sql =
  'SELECT
    users.id AS id,
    users.password AS password
  FROM
    `users` AS users
  WHERE
    users.phone = "' . $phone . '"';

  $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

  if (count($result) == 1) {
    if ($pass == $result[0]['password']) {
      setcookie('user_id', $result[0]['id'], 0, '/');
    } else {
      echo 'Неверный пароль';
      return;
    }
  } elseif (count($result) == 0) {
    echo 'Пользователя с таким номером нет :(<br />Зарегестрируйтесь!';
    return;
  } else {
    echo 'Ошибка при входе (обратитесь в тех. поддержку)';
    return;
  }

?>