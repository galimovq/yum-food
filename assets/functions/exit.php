<?php

  if (isset($_COOKIE['user_id'])) {
    setcookie('user_id', '', -1, '/');
  }

  header('Location: https://yum-food.ru/lk/user/');

  // выход (завершение сессии)
  //session_start();
  //unset($_SESSION['id']);
  //header('Location: https://yum-food.ru/lk/user/');

?>