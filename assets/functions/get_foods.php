<?php

/**
 * Summary of get_10_foods
 * @param mixed $link
 * @return void
 */
function get_10_foods($link) {

  $sql =
  "CREATE TEMPORARY TABLE vt_food SELECT
      food.id AS id
  FROM
      `food` AS food
  LIMIT 10;
  CREATE TEMPORARY TABLE vt_food_priority SELECT
      vt_food.id AS id,
      MIN(food_storage.priority) AS priority
  FROM
      `vt_food` AS vt_food
  LEFT JOIN `food_storage` AS food_storage
  ON
      vt_food.id = food_storage.food
  GROUP BY
      vt_food.id;
  DROP TABLE
      vt_food;
  SELECT
      food.name AS NAME,
      food.price AS price,
      food.weight AS weight,
      food.link AS link,
      food.about AS about,
      food_storage.link AS link_photo
  FROM
      `vt_food_priority` AS vt_food_priority
  LEFT JOIN `food` AS food
  ON
      vt_food_priority.id = food.id
  LEFT JOIN `food_storage` AS food_storage
  ON
      vt_food_priority.id = food_storage.food AND vt_food_priority.priority = food_storage.priority;
  DROP TABLE
      vt_food_priority;";

  mysqli_multi_query($link, $sql);

  return;

}

/**
 * Summary of get_all_foods
 * @param mixed $link
 * @return void
 */
function get_all_foods($link) {

  $sql =
  "CREATE TEMPORARY TABLE vt_food SELECT
      food.id AS id
  FROM
      `food` AS food
  LIMIT 100;
  CREATE TEMPORARY TABLE vt_food_priority SELECT
      vt_food.id AS id,
      MIN(food_storage.priority) AS priority
  FROM
      `vt_food` AS vt_food
  LEFT JOIN `food_storage` AS food_storage
  ON
      vt_food.id = food_storage.food
  GROUP BY
      vt_food.id;
  DROP TABLE
      vt_food;
  SELECT
      food.name AS NAME,
      food.price AS price,
      food.weight AS weight,
      food.link AS link,
      food.about AS about,
      food_storage.link AS link_photo
  FROM
      `vt_food_priority` AS vt_food_priority
  LEFT JOIN `food` AS food
  ON
      vt_food_priority.id = food.id
  LEFT JOIN `food_storage` AS food_storage
  ON
      vt_food_priority.id = food_storage.food AND vt_food_priority.priority = food_storage.priority;
  DROP TABLE
      vt_food_priority;";

  mysqli_multi_query($link, $sql);

  return;

}

?>