<?php
  $title = 'Список блюд';
  require_once '../../models/header.php';
?>

<body>

<?php
  require_once '../../assets/functions/functions_global.php';

  require_once '../../assets/functions/get_cities.php';
  require_once '../../assets/functions/get_foods.php';

  require_once '../../models/noscript.php';
  require_once '../../models/navbar.php';
  require_once '../../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/pages/foods/', 'name_page' => 'Список блюд'],
  ];
  require_once '../../models/way_page.php';
?>

  <section id="cooks-top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bg-white border-block box-shadow p-5">
            <div class="row justify-content-center">
              <div class="col-12">
                <h2 class="text-center text-bold">Список блюд</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cooks-main" class="pt-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-4 col-lg-3 mb-4 mb-sm-0">
          <h2 class="text-medium">Выбирай!</h2>
        </div>
        <div class="col-12 col-sm-8 col-lg-9">
          <h2 class="text-medium mb-3">Список блюд</h2>
          <div class="row justify-content-center justify-content-sm-start">

<?php
  get_all_foods($link);
  do {
    if ($result = mysqli_store_result($link)) :
      while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) :
        foreach ($row as $element) :
?>

            <div class="col-12 col-lg-6 mb-3">
              <div class="bg-white border-block">
                <div class="img-250">
                  <img src="<?=$element['link_photo']?>" class="img-250" alt="<?=$element['name']?>">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1"><?=$element['name']?></p>
                  <p class="small mb-4"><?=$element['about']?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="https://yum-food.ru/pages/food/" class="button-blue">Заказать</a></p>
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

<?php
  require_once '../../models/footer.php';
?>

</body>

</html>