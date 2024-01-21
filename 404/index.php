<?php
  $title = 'yum-food | 404';
  require '../models/header.php';
?>

<body>

<?php
  require_once '../assets/functions/functions_global.php';

  require_once '../assets/functions/get_cities.php';

  require '../models/noscript.php';
  require '../models/navbar.php';
  require '../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/404/', 'name_page' => '404'],
  ];
  require '../models/way_page.php';
?>

  <section id="page-404" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="text-bold text-red">404</h1>
          <p>Извините, запрашиваемая Вами страница не найдена, попробуйте начать сначала...</p>
        </div>
      </div>
    </div>
  </section>

  <section id="food-cook" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bg-white border-block box-shadow p-5">
            <div class="row justify-content-center">
              <div class="col-12 d-md-flex align-items-md-center text-center text-md-left">
                <img src="https://yum-food.ru/assets/img/photos/people_0.jpg" class="img-people mb-4 mb-md-0 mr-0 mr-md-5" alt="">
                <div>
                  <p class="text-12 text-bold mb-3">Иван Иванов | Основатель</p>
                  <p>Упс... Похоже Вы нашли страницу, которую мы еще не приготовили.</p>
                  <p>Давайте попьем чаю и Вы попробуете начать сначала.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  require '../models/footer.php';
?>

</body>

</html>