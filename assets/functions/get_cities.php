<?php

  function get_all_cities($link) {
    
    $sql =
    'SELECT
      cities.id AS id,
      cities.name AS name
    FROM
      `cities` AS cities
    WHERE cities.id <> 1
    ORDER BY
      cities.name';

    return mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

  }

?>