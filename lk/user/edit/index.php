<?php
$title = 'Личный кабинет (редактирование)';
require_once '../../../models/header.php';
?>

<body>

  <?php
  require_once '../../../assets/functions/functions_global.php';

  require_once '../../../assets/functions/get_cities.php';

  require_once '../../../models/noscript.php';
  require_once '../../../models/messages.php';
  require_once '../../../models/navbar.php';
  require_once '../../../models/margin_top_page.php';

  $data = [
    ['link_page' => 'https://yum-food.ru/lk/user/', 'name_page' => 'Личный кабинет'],
  ];
  require '../../../models/way_page.php';
  ?>

  <section id="lk" class="mb-3">
    <div class="container">
      <div class="row">
        <div id="navbar-lk" class="col-12 col-sm-4 col-lg-3 mb-4 mb-sm-0">

          <?php
          require_once '../../../models/navbar_lk.php';
          ?>

        </div>
        <div class="col-12 col-sm-8 col-lg-9">
          <h2 class="text-medium mb-3"><span id="name-page">Личный кабинет</span> (редактирование)</h2>
          <div class="bg-white border-block box-shadow">
            <div class="p-4">

              <?php if (isset($_COOKIE['user_id'])): ?>
                <?php
                require_once '../../../assets/functions/get_users.php';
                require_once '../../../assets/functions/address.php';

                $user = get_info_user($link, $_COOKIE['user_id']);
                ?>

                <form id="form-edit-user" class="needs-validation" novalidate>
                  <div class="row">

                    <div class="col-12 d-flex justify-content-center align-items-center mb-3">
                      <div>
                        <img src="<?= $user[0]['photo_link'] ?>" class="lk-user" alt="">
                      </div>
                    </div>

                    <div class="col-12 mb-3">
                      <label for="edit-user-name-1" class="form-label">Фамилия</label>
                      <input type="text" class="form-control form-input" id="edit-user-name-1" placeholder="Фамилия"
                        value="<?= $user[0]['name_1'] ?>" required>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-name-2" class="form-label">Имя</label>
                      <input type="text" class="form-control form-input" id="edit-user-name-2" placeholder="Имя"
                        value="<?= $user[0]['name_2'] ?>" required>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-name-3" class="form-label">Отчество</label>
                      <input type="text" class="form-control form-input" id="edit-user-name-3" placeholder="Отчество"
                        value="<?= $user[0]['name_3'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-about" class="form-label">Какой Ваш слоган?</label>
                      <textarea class="form-control form-textarea" id="edit-user-about" maxlength="250"
                        placeholder="Мясо - это моя страсть"><?= $user[0]['about'] ?></textarea>
                    </div>
                    <div class="col-12 mb-3">
                      <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-phone" checked
                        disabled>
                      <label class="form-check-label" for="edit-user-use-phone">
                        Могут ли Вам позвонить клиенты?
                      </label>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-phone" class="form-label">Телефон</label>
                      <input type="text" class="form-control form-input phone" id="edit-user-phone"
                        value="<?= $user[0]['phone'] ?>" required disabled>
                    </div>
                    <div class="col-12 mb-3">
                      <?php if ($user[0]['use_vk'] == 1): ?>
                        <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-vk" checked>
                      <?php else: ?>
                        <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-vk">
                      <?php endif; ?>
                      <label class="form-check-label" for="edit-user-use-vk">
                        Могут ли Вам написать клиенты в ВКонтакте?
                      </label>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-link-vk" class="form-label">Ссылка на страницу ВКонтакте</label>
                      <input type="text" class="form-control form-input" id="edit-user-link-vk"
                        value="<?= $user[0]['link_vk'] ?>" placeholder="Ссылка на страницу ВКонтакте">
                    </div>
                    <div class="col-12 mb-3">
                      <?php if ($user[0]['use_telegram'] == 1): ?>
                        <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-telegram" checked>
                      <?php else: ?>
                        <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-telegram">
                      <?php endif; ?>
                      <label class="form-check-label" for="edit-user-use-telegram">
                        Могут ли Вам написать клиенты в Telegram?
                      </label>
                    </div>
                    <div class="col-12 mb-3">
                      <?php if ($user[0]['use_whatsapp'] == 1): ?>
                        <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-wa" checked>
                      <?php else: ?>
                        <input class="form-check-input check-custom" type="checkbox" id="edit-user-use-wa">
                      <?php endif; ?>
                      <label class="form-check-label" for="edit-user-use-wa">
                        Могут ли Вам написать клиенты в WhatsApp?
                      </label>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-email" class="form-label">E-mail</label>
                      <input type="email" class="form-control form-input" id="edit-user-email" placeholder="E-mail"
                        value="<?= $user[0]['email'] ?>" required disabled>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-city" class="form-label">Город</label>
                      <select class="form-control form-input" id="edit-user-city" required>
                        <?php
                        $cities = get_all_cities($link);
                        foreach ($cities as $element):
                          if ($element['id'] == $user[0]['city']): ?>
                            <option value="<?= $element['id'] ?>" selected="selected">
                              <?= $element['name'] ?>
                            </option>
                          <?php else: ?>
                            <option value="<?= $element['id'] ?>">
                              <?= $element['name'] ?>
                            </option>
                            <?php
                          endif;
                        endforeach;
                        ?>
                      </select>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-street" class="form-label">Улица</label>
                      <input type="text" class="form-control form-input" id="edit-user-street" placeholder="Улица"
                        value="<?= $user[0]['street'] ?>" required>
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-house" class="form-label">Номер дома</label>
                      <input type="text" class="form-control form-input" id="edit-user-house" placeholder="Номер дома"
                        value="<?= $user[0]['house'] ?>">
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-password" class="form-label">Новый пароль</label>
                      <input type="password" class="form-control form-input" id="edit-user-password" placeholder="Пароль">
                    </div>
                    <div class="col-12 mb-3">
                      <label for="edit-user-double-password" class="form-label">Повторите пароль</label>
                      <input type="password" class="form-control form-input" id="edit-user-double-password"
                        placeholder="Повторите пароль">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <button id="edit-user-btn" class="form-btn" type="submit">Сохранить</button>
                    </div>
                  </div>
                </form>

              <?php else:

                header('Location: https://yum-food.ru/lk/user/');

              endif; ?>

            </div>
          </div>
        </div>
      </div>
  </section>

  <?php
  require_once '../../../models/footer.php';
  require_once '../../../models/footer_lk.php';
  ?>

</body>

</html>