<?php

  function get_info_user($link, $id) {
    if ($id == '') {
      return;
    }

    $sql =
    'SELECT
      users.phone AS phone,
      users.email AS email,
      users.name_1 AS name_1,
      users.name_2 AS name_2,
      users.name_3 AS name_3,
      users.about AS about,
      users.use_phone AS use_phone,
      users.use_telegram AS use_telegram,
      users.use_whatsapp AS use_whatsapp,
      users.use_vk AS use_vk,
      users.link_vk AS link_vk,
      users.city AS city,
      users.street AS street,
      users.house AS house,
      users.photo_link AS photo_link,
      users.link AS link
    FROM
      `users` AS users
    WHERE
      users.id = "' . $id . '"';

    return mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

  }

  /**
   * Summary of get_10_users
   * @param mixed $link
   * @return array
   */
  function get_10_users($link) {

    $sql =
    "SELECT
      name_1, name_2, photo_link, link, about
    FROM
      users
    LIMIT 10";

    $result = mysqli_query($link, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);

  }

  /**
   * Summary of get_all_users
   * @param mixed $link
   * @return array
   */
  function get_all_users($link) {

    $sql =
    "SELECT
      name_1, name_2, photo_link, link, about
    FROM
      users
    LIMIT 100";

    $result = mysqli_query($link, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);

  }

?>