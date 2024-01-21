<?php

  function get_address($city = '', $street = '', $house = '') {

    $city = trim($city);
    $street = trim($street);
    $house = trim($house);

    if ((isset($city) && $city !== '')
      && (isset($street) && $street !== '')
      && (isset($house) && $house !== '')) {
      return 'г. ' . $city . ', ул. ' . $street . ', д. ' . $house;
    } else {
      return 'Адрес заполнен неверно :(';
    }

  }

?>