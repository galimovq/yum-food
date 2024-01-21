<?php
  if (isset($_COOKIE['user_id'])) {
    header('Location: https://yum-food.ru/lk/user/');
  }

  $title = 'Регистрация';
  require_once '../../models/header.php';
?>

<body>

<?php
  require_once '../../assets/functions/functions_global.php';

  require_once '../../assets/functions/get_cities.php';
  
  require_once '../../models/noscript.php';
  require_once '../../models/messages.php';
  require_once '../../models/navbar.php';
  require_once '../../models/modal_register.php';
  require_once '../../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/lk/registration/', 'name_page' => 'Регистрация на сайте'],
  ];
  require '../../models/way_page.php';
?>

  <section id="lk" class="mb-3">
    <div class="container">
      <div class="row">
        <div id="navbar-lk" class="col-12 col-sm-4 col-lg-3 mb-4 mb-sm-0">

<?php
  require_once '../../models/navbar_lk.php';
?>

        </div>
        <div class="col-12 col-sm-8 col-lg-9">
          <h2 id="name-page" class="text-medium mb-3">Регистрация на сайте</h2>
          <div class="bg-white border-block box-shadow">
            <div class="p-4">
              <h3 class="text-medium mb-3">Введите свои данные, чтобы зарегистрироваться</h3>
              <form id="form-registration" class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="register-phone" class="form-label">Телефон</label>
                    <input type="text" class="form-control form-input phone" id="register-phone" placeholder="+7 (000) 000-00-00" required>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="register-email" class="form-label">E-mail</label>
                    <input type="email" class="form-control form-input" id="register-email" placeholder="E-mail" required>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="register-password" class="form-label">Пароль</label>
                    <input type="password" class="form-control form-input" id="register-password" placeholder="Пароль" required>
                  </div>
                  <div class="col-12 d-flex justify-content-center">
                    <button id="registration-btn" class="form-btn" type="submit">Зарегестрироваться</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  require_once '../../models/footer.php';
  require_once '../../models/footer_lk.php';
?>

</body>

</html>