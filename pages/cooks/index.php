<?php
$title = 'Список поваров';
require_once '../../models/header.php';
?>

<body>

  <?php
  require_once '../../assets/functions/functions_global.php';

  require_once '../../assets/functions/get_cities.php';
  require_once '../../assets/functions/get_users.php';

  require_once '../../models/noscript.php';
  require_once '../../models/navbar.php';
  require_once '../../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/pages/cooks/', 'name_page' => 'Список поваров'],
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
                <h2 class="text-center text-bold">Тут все повара!</h2>
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
          <h2 class="text-medium">Повара</h2>
          <div class="row justify-content-center justify-content-sm-start pt-3">

<?php
  $users_10 = get_all_users($link);
  foreach ($users_10 as $element):
?>

            <div class="col-12 col-md-6 col-lg-4 mb-3">
              <div class="bg-white border-block p-4">
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
  require_once '../../models/footer.php';
  ?>

</body>

</html>