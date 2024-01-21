<?php

function add_page_cook($id_user, $id_user_md5) {
  // создание папки
  $dir = '../../pages/cooks/cook-' . $id_user_md5;
  $file_to_write = 'index.php';
  if (is_dir($dir) === false) {
    mkdir($dir);
  }
  $file = fopen($dir . '/' . $file_to_write, 'w');
  fwrite($file, '');
  fclose($file);
  include $dir . '/' . $file_to_write;
  
  // запись в папку
  $file = '../../pages/cooks/cook-' . $id_user_md5 . '/index.php';
  $current = '<?php $id = ' . $id_user . '; require "../models/sample.php"; ?>';
  file_put_contents($file, $current);
}

?>