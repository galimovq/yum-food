<?php
$title = 'Личный кабинет';
require_once '../../models/header.php';
?>

<body>

  <?php
  require_once '../../assets/functions/functions_global.php';

  require_once '../../assets/functions/get_cities.php';

  require_once '../../models/noscript.php';
  require_once '../../models/messages.php';
  require_once '../../models/navbar.php';
  require_once '../../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/lk/user/', 'name_page' => 'Личный кабинет'],
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
          <h2 id="name-page" class="text-medium mb-3">Личный кабинет</h2>
          <div class="bg-white border-block box-shadow">
            <div class="p-4">

              <?php if (isset($_COOKIE['user_id'])): ?>
                <?php
                require_once '../../assets/functions/get_users.php';
                require_once '../../assets/functions/address.php';

                $user = get_info_user($link, $_COOKIE['user_id']);
                ?>

                <div class="d-flex align-items-center mb-4">
                  <div class="mr-4">
                    <img src="<?= $user[0]['photo_link'] ?>" class="lk-user" alt="">
                  </div>
                  <div>
                    <p>
                      <?= $user[0]['name_1'] ?>
                      <?= $user[0]['name_2'] ?>
                    </p>
                  </div>
                </div>

                <?php if ((isset($user[0]['phone']) && $user[0]['phone'] !== '')): ?>
                  <p class="mb-3">Телефон:
                    <?= $user[0]['phone'] ?>
                  </p>
                <?php else: ?>
                  <p class="mb-3">Телефон: не заполнен</p>
                <?php endif; ?>

                <?php if ((isset($user[0]['email']) && $user[0]['email'] !== '')): ?>
                  <p class="mb-3">E-mail:
                    <?= $user[0]['email'] ?>
                  </p>
                <?php else: ?>
                  <p class="mb-3">E-mail: не заполнен</p>
                <?php endif; ?>

                <?php if ((isset($user[0]['about']) && $user[0]['about'] !== '')): ?>
                  <p class="mb-3">Обо мне:
                    <?= $user[0]['about'] ?>
                  </p>
                <?php else: ?>
                  <p class="mb-3">Обо мне: не заполнено</p>
                <?php endif; ?>

                <div class="d-flex align-items-center mb-3">

                  <?php if ($user[0]['use_phone'] == 1): ?>
                    <div class="icon-circle icon-circle-green mr-2">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                  <?php else: ?>
                    <div class="icon-circle icon-circle-red mr-2">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                  <?php endif; ?>

                  <?php if ($user[0]['use_telegram'] == 1): ?>
                    <div class="icon-circle icon-circle-green mr-2">
                      <i class="fa-brands fa-telegram"></i>
                    </div>
                  <?php else: ?>
                    <div class="icon-circle icon-circle-red mr-2">
                      <i class="fa-brands fa-telegram"></i>
                    </div>
                  <?php endif; ?>

                  <?php if ($user[0]['use_whatsapp'] == 1): ?>
                    <div class="icon-circle icon-circle-green mr-2">
                      <i class="fa-brands fa-whatsapp"></i>
                    </div>
                  <?php else: ?>
                    <div class="icon-circle icon-circle-red mr-2">
                      <i class="fa-brands fa-whatsapp"></i>
                    </div>
                  <?php endif; ?>

                  <?php if ($user[0]['use_vk'] == 1): ?>
                    <div class="icon-circle icon-circle-green mr-2">
                      <i class="fa-brands fa-vk"></i>
                    </div>
                  <?php else: ?>
                    <div class="icon-circle icon-circle-red mr-2">
                      <i class="fa-brands fa-vk"></i>
                    </div>
                  <?php endif; ?>

                </div>
                <p class="mb-4"> Адрес:
                  <?= get_address($user[0]['city'], $user[0]['street'], $user[0]['house']) ?>
                </p>
                <div class="d-flex justify-content-center align-items-center">
                  <p class="mr-2"><a href="<?= $user[0]['link'] ?>" class="button-blue">Посмотреть профиль</a></p>
                  <p><a href="https://yum-food.ru/lk/user/edit/" class="button-blue">Изменить профиль</a></p>
                </div>

              <?php else: ?>

                <h2 class="text-medium mb-3">Войти в личный кабинет</h2>
                <form id="form-authorization" class="needs-validation" novalidate>
                  <div class="row">
                    <div class="col-12 mb-3">
                      <label for="authorization-phone" class="form-label">Телефон</label>
                      <input type="text" class="form-control form-input phone" id="authorization-phone"
                        placeholder="+7 (000) 000-00-00" required>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="authorization-pass" class="form-label">Пароль</label>
                      <input type="password" class="form-control form-input" id="authorization-pass" placeholder="Пароль"
                        required>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-3">
                      <button id="authorization-btn" class="form-btn" type="submit">Войти</button>
                    </div>
                    <div class="col-12 text-right">
                      <p><a href="https://yum-food.ru/lk/registration/" class="link-standart">Зарегистрироваться</a> / <a
                          href="https://yum-food.ru/lk/new_password/" class="link-standart">Забыл пароль</a></p>
                    </div>
                  </div>
                </form>
              </div>

            <?php endif; ?>

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