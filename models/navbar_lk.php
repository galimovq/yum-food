<a href="https://yum-food.ru/lk/user/">
  <div class="link-grey link-active mb-3">Личный кабинет</div>
</a>

<?php if (isset($_COOKIE['user_id'])) : ?>

<a href="https://yum-food.ru/lk/foods/">
  <div class="link-grey link-active mb-3">Мои блюда</div>
</a>
<a href="https://yum-food.ru/lk/favorites/">
  <div class="link-grey link-active mb-3">Избранное</div>
</a>
<a href="https://yum-food.ru/assets/functions/exit.php">
  <div class="link-grey link-active">Выйти</div>
</a>

<?php else : ?>

<a href="https://yum-food.ru/lk/registration/">
  <div class="link-grey link-active">Регистрация на сайте</div>
</a>

<?php endif; ?>