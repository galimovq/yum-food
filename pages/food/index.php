<?php
  $title = 'Список блюд | Блюдо 1';
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
    ['link_page' => 'https://yum-food.ru/pages/foods/', 'name_page' => 'Список блюд'],
    ['link_page' => 'https://yum-food.ru/pages/food/', 'name_page' => 'Блюдо 1'],
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
                  <p class="mb-4">Мясо - моя страсть!</p>
                  <p><a href="https://yum-food.ru/pages/cook/" class="button-blue">Смотреть</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="catalog-carousel-food owl-carousel owl-theme">
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-500">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-500" alt="Блюдо 1">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-500">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-500" alt="Блюдо 1">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-500">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-500" alt="Блюдо 1">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 pb-3">
          <div class="bg-white border-block-no-height p-4 mb-4">
            <h2 class="text-bold mb-2">Блюдо 1</h2>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore temporibus amet facere suscipit. Atque molestias, dolor id architecto corporis doloremque eaque eum accusantium non quisquam tenetur asperiores sed, quae tempore?</p>
            <div class="d-flex">
              <p class="text-number">200г / 500р</p>
            </div>
          </div>
          <div class="bg-white border-block-no-height p-4">
            <h2 class="text-bold mb-3">Для заказа</h2>
            <div class="d-flex align-items-center">
              <div class="mr-3">
                <a href="#" class="link-circle link-circle-green" target="_blank">
                  <i class="fa-solid fa-phone-volume"></i>
                </a>
              </div>
              <p class="text-number">+7 (800) 555-35-35</p>
            </div>
            <div class="d-flex align-items-center pt-3">
              <div class="mr-3">
                <a href="#" class="link-circle vk" target="_blank">
                  <i class="fa-brands fa-vk"></i>
                </a>
              </div>
              <div>
                <a href="#" class="link-circle whatsapp" target="_blank">
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="food-main-1" class="pt-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <h2 class="text-medium">Похожее</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11 col-sm-12">
          <div class="catalog-carousel owl-carousel owl-theme py-3">
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-250">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1">Блюдо 1</p>
                  <p class="small mb-4">Описание 1-2 строчки</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="https://yum-food.ru/pages/food/" class="button-blue">Заказать</a></p>
                    <p>200г / 500р</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-250">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1">Блюдо 2</p>
                  <p class="small mb-4">Описание 1-2 строчки</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="https://yum-food.ru/pages/food/" class="button-blue">Заказать</a></p>
                    <p>200г / 500р</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-250">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1">Блюдо 3</p>
                  <p class="small mb-4">Описание 1-2 строчки</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="https://yum-food.ru/pages/food/" class="button-blue">Заказать</a></p>
                    <p>200г / 500р</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-250">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1">Блюдо 4</p>
                  <p class="small mb-4">Описание 1-2 строчки</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="https://yum-food.ru/pages/food/" class="button-blue">Заказать</a></p>
                    <p>200г / 500р</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="bg-white border-block">
                <div class="img-250">
                  <img src="https://yum-food.ru/assets/img/photos/img_0.jpg" class="img-250" alt="Блюдо 1">
                </div>
                <div class="p-4">
                  <p class="text-12 text-medium mb-1">Блюдо 5</p>
                  <p class="small mb-4">Описание 1-2 строчки</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p><a href="https://yum-food.ru/pages/food/" class="button-blue">Заказать</a></p>
                    <p>200г / 500р</p>
                  </div>
                </div>
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