<?php

  $allowed = array('png', 'jpg', 'jpeg', 'gif');

  if (isset($_FILES['upl']) && $_FILES['upl']['error'] == 0) {

    $extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
    $fileType = $extension;

    if (!in_array($fileType, $allowed)) {
      echo '{"status":"error"}';
      exit;
    }

    if (move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/' . uniqid() . '.' . $fileType)) {
      echo '{"status":"success"}';
      exit;
    }
  }

  echo '{"status":"error"}';
  exit;

?>