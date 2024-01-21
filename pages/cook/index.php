<?php
  $title = 'Список поваров | Иван Иванов';
  require_once '../../models/header.php';
?>

<body>

<?php
  require_once '../../assets/functions/functions_global.php';

  require_once '../../assets/functions/get_cities.php';

  require_once '../../models/noscript.php';
  require_once '../../models/navbar.php';
  require_once '../../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/pages/cooks/', 'name_page' => 'Список поваров'],
    ['link_page' => 'https://yum-food.ru/pages/cook/', 'name_page' => 'Иван Иванов'],
  ];
  require_once '../../models/way_page.php';
?>

  <section id="food-cook">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bg-white border-block box-shadow p-5">
            <div class="row justify-content-center">
              <div class="col-12 d-md-flex align-items-md-center text-center text-md-left">
                <img src="https://yum-food.ru/assets/img/photos/people_0.jpg" class="img-people mb-4 mb-md-0 mr-0 mr-md-5" alt="">
                <div>
                  <p class="text-12 text-medium mb-2">Иван Иванов | На счету 23 блюда</p>
                  <p class="mb-1">Готовлю только мясные блюда :)</p>
                  <p class="mb-1">Мясо - моя страсть!</p>
                  <p>Я тут - г Сургут, Мира 43</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cook-main" class="pt-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <h2 class="text-medium">То, что делают мои руки</h2>
        </div>
      </div>
      <div class="row justify-content-center justify-content-sm-start pt-3">
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="bg-white border-block">
            <div class="img-250">
              <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
            </div>
            <div class="p-4">
              <p class="text-12 text-medium mb-1">Блюдо 1</p>
              <p class="small mb-4">Описание 1-2 строчки</p>
              <div class="d-flex justify-content-between align-items-center">
                <p><a href="#" class="button-blue">Заказать</a></p>
                <p>200г / 500р</p>
              </div>
            </div>
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