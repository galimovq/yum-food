<?php

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  // подключение к бд
  $link = mysqli_connect('localhost', '', '', '');

  // проверка соединения
  if (mysqli_connect_errno()) {
    echo 'ошибка соединения';
  }

?>