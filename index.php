<?php
  $title = 'Главная';
  require_once 'models/header.php';
?>

<body>

<?php
  require_once 'assets/functions/functions_global.php';

  require_once 'assets/functions/get_foods.php';
  require_once 'assets/functions/get_users.php';
  require_once 'assets/functions/get_cities.php';

  require_once 'models/noscript.php';
  require_once 'models/navbar.php';
  require_once 'models/margin_top_page.php';
?>

  <section id="main">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="bg-white border-block box-shadow">
            <div class="p-4">

<?php if (isset($_COOKIE['user_id'])) : ?>
<?php
  $user = get_info_user($link, $_COOKIE['user_id']);
  foreach ($user as $element):
?>

              <h1 class="text-medium mb-2">Привет, <?=$element['name_2']?>!</h1>
              <p class="mb-5">Мы рады, что Вы снова здесь! Что закажем/приготовим сегодня? :)</p>
              <p class="text-center"><a href="https://yum-food.ru/lk/user/" class="button-blue">Личный кабинет</a></p>

<?php endforeach; ?>
<?php else : ?>

              <h1 class="text-medium mb-2">Привет! Мы любители домашней еды!</h1>
              <p class="mb-5">Присоединяйтесь к нашему сообществу в роли повары или дегустатора, мы всегда рады пополнению :)</p>
              <p class="text-center"><a href="https://yum-food.ru/lk/registration/" class="button-blue">Присоединиться</a></p>

<?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-1" class="mt-4">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-11 col-sm-12">
          <h2 class="text-medium">Выгодные предложения</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <div class="catalog-carousel owl-carousel owl-theme">

<?php
  get_10_foods($link);
  do {
    if ($result = mysqli_store_result($link)) :
        while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) :
          foreach ($row as $element) :
?>

            <div class="item">
              <div class="bg-white border-block box-shadow">
                <div class="img-250">
                  <img src="<?=$element['link_photo']?>" class="img-250" alt="<?=$element['name']?>">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1"><?=$element['name']?></p>
                  <p class="small mb-4"><?=$element['about']?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="<?=$element['link']?>" class="button-blue">Заказать</a></p>
                    <p><?=$element['weight']?>г / <?=$element['price']?>₽</p>
                  </div>
                </div>
              </div>
            </div>

<?php
        endforeach;
      endwhile;
    endif;
  } while (mysqli_next_result($link));
?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="poster-1" class="mt-4">
    <div class="bg-white box-shadow">
      <div class="container pt-3 pb-4">
        <div class="row justify-content-center">
          <div class="col-11 col-sm-12 text-center">
            <h2 class="text-medium mb-4">Еда уже остывает!!! :(</h2>
            <p class="text-center"><a href="https://yum-food.ru/pages/foods/" class="button-blue">Смотреть</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-2" class="mt-4">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-11 col-sm-12">
          <h2 class="text-medium">Горячие блюда</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <div class="catalog-carousel owl-carousel owl-theme">

<?php
  get_10_foods($link);
  do {
    if ($result = mysqli_store_result($link)) :
        while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) :
          foreach ($row as $element) :
?>

            <div class="item">
              <div class="bg-white border-block box-shadow">
                <div class="img-250">
                  <img src="<?=$element['link_photo']?>" class="img-250" alt="<?=$element['name']?>">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1"><?=$element['name']?></p>
                  <p class="small mb-4"><?=$element['about']?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="<?=$element['link']?>" class="button-blue">Заказать</a></p>
                    <p><?=$element['weight']?>г / <?=$element['price']?>₽</p>
                  </div>
                </div>
              </div>
            </div>

<?php
        endforeach;
      endwhile;
    endif;
  } while (mysqli_next_result($link));
?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-3" class="mt-4">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-11 col-sm-12">
          <h2 class="text-medium">Закуски</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <div class="catalog-carousel owl-carousel owl-theme">

<?php
  get_10_foods($link);
  do {
    if ($result = mysqli_store_result($link)) :
        while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) :
          foreach ($row as $element) :
?>

            <div class="item">
              <div class="bg-white border-block box-shadow">
                <div class="img-250">
                  <img src="<?=$element['link_photo']?>" class="img-250" alt="<?=$element['name']?>">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1"><?=$element['name']?></p>
                  <p class="small mb-4"><?=$element['about']?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="<?=$element['link']?>" class="button-blue">Заказать</a></p>
                    <p><?=$element['weight']?>г / <?=$element['price']?>₽</p>
                  </div>
                </div>
              </div>
            </div>

<?php
        endforeach;
      endwhile;
    endif;
  } while (mysqli_next_result($link));
?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="poster-2" class="mt-4">
    <div class="bg-white box-shadow">
      <div class="container pt-3 pb-4">
        <div class="row justify-content-center">
          <div class="col-11 col-sm-12 text-center">
            <h2 class="text-bold mb-4">Станьте поваром за 1 минуту!</h2>
            <p class="text-center"><a href="https://yum-food.ru/lk/registration/" class="button-blue">Присоединиться</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-4" class="mt-4">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-11 col-sm-12">
          <h2 class="text-medium">Топ-повара</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <div class="catalog-carousel owl-carousel owl-theme">

<?php
  $users_10 = get_10_users($link);
  foreach ($users_10 as $element):
?>

            <div class="item">
              <div class="bg-white border-block box-shadow p-4">
                <div class="d-flex justify-content-center mb-4">
                  <img src="<?=$element['photo_link']?>" class="img-people" alt="<?=$element['name_1']?> <?=$element['name_2']?>">
                </div>
                <div class="text-center">
                  <p class="text-12 text-medium mb-1"><?=$element['name_1']?> <?=$element['name_2']?></p>
                  <p class="small mb-4"><?=$element['about']?></p>
                  <p><a href="<?=$element['link']?>" class="button-blue">Смотреть</a></p>
                </div>
              </div>
            </div>

<?php
  endforeach;
?>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  require_once 'models/footer.php';
?>

</body>

</html>