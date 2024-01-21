<div id="navbar-mobile-icon" class="d-flex d-lg-none justify-content-between align-items-center py-2 px-3">
  <div class="d-flex align-items-center">
    <div>
      <button id="navbar-mobile-btn-open" class="navbar-mobile-btn">
        <i class="fa-solid fa-bars text-12 mt-1"></i></button>
    </div>
    <div class="d-flex align-items-center">
      <div id="navbar-logo-mobile" class="mt-1 ml-3">
        <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path class="navbar-logo-color" d="M21.523 1.977h3.422l-7.567 20.269c-1.937 5.417-3.981 7.578-7.403 7.76v-2.649c1.651-0.276 2.973-1.442 3.472-2.978l0.009-0.031c0.21-0.524 0.331-1.131 0.331-1.767s-0.122-1.243-0.343-1.8l0.012 0.033-4.416-11.347h3.109l3.139 9.822zM20.829 1.004l-1.642 4.564h-11.407c-2.469 0.007-4.468 2.006-4.476 4.474v11.909c0.008 2.469 2.007 4.468 4.476 4.475h1.869q-0.112 0.020-0.225 0.036l-0.425 0.059v4.475h0.489c0.034 0.001 0.074 0.001 0.114 0.001 3.114 0 5.795-1.856 6.997-4.522l0.020-0.048h12.079v-16.383c-0.008-2.324-1.78-4.231-4.046-4.454l-0.018-0.001 1.71-4.584z"></path>
        </svg>
      </div>
      <p class="ml-2"><a href="#" class="navbar-link">yum-food.ru</a></p>
    </div>
  </div>
  <div class="d-flex align-items-center">
    <p class="link-icon-mobile mr-3"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></p>
    <p class="link-icon-mobile"><a href="#"><i class="fa-solid fa-user-large"></i></a></p>
  </div>
</div>

<div id="navbar-mobile" class="pt-5 pb-4 px-3">
  <div id="navbar-mobile-btn-pos" class="py-2 px-3">
    <button id="navbar-mobile-btn-close" class="navbar-mobile-btn">
      <i class="fa-solid fa-xmark text-12 mt-1"></i>
    </button>
  </div>
  <p class="text-bold mb-2"><a href="https://yum-food.ru/" class="link-standart">Главная</a></p>
  <p class="small mb-1"><a href="https://yum-food.ru/404/" class="link-standart">О нас</a></p>
</div>

<div id="navbar">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="navbar-background" class="d-flex justify-content-between align-items-center py-4 px-5">
          <div class="d-flex align-items-center">
            <div id="navbar-logo" class="mr-3">
              <a href="https://yum-food.ru/">
                <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <path class="navbar-logo-color" d="M21.523 1.977h3.422l-7.567 20.269c-1.937 5.417-3.981 7.578-7.403 7.76v-2.649c1.651-0.276 2.973-1.442 3.472-2.978l0.009-0.031c0.21-0.524 0.331-1.131 0.331-1.767s-0.122-1.243-0.343-1.8l0.012 0.033-4.416-11.347h3.109l3.139 9.822zM20.829 1.004l-1.642 4.564h-11.407c-2.469 0.007-4.468 2.006-4.476 4.474v11.909c0.008 2.469 2.007 4.468 4.476 4.475h1.869q-0.112 0.020-0.225 0.036l-0.425 0.059v4.475h0.489c0.034 0.001 0.074 0.001 0.114 0.001 3.114 0 5.795-1.856 6.997-4.522l0.020-0.048h12.079v-16.383c-0.008-2.324-1.78-4.231-4.046-4.454l-0.018-0.001 1.71-4.584z">
                  </path>
                </svg>
              </a>
            </div>
            <p class="navbar-link link-standart modal-click-city">Сургут</p>
          </div>
          <div class="w-100 px-5">
            <form action="" class="w-100 d-flex justify-content-end align-items-center">
              <input type="text" class="custom-input-search" placeholder="Поиск...">
              <button class="link-icon ml-3"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>

<?php if (isset($_COOKIE['user_id'])) : ?>

          <a href="https://yum-food.ru/lk/favorites/"><p class="link-icon"><i class="fa-regular fa-heart"></i></p></a>
          <a href="https://yum-food.ru/maps/"><p class="link-icon ml-3"><i class="fa-solid fa-location-dot"></i></p></a>
          <a href="https://yum-food.ru/lk/message/"><p class="link-icon ml-3"><i class="fa-regular fa-message"></i></p></a>

<?php else : ?>

            <a href="https://yum-food.ru/maps/"><p class="link-icon"><i class="fa-solid fa-location-dot"></i></p></a>

<?php endif; ?>

          <a href="https://yum-food.ru/lk/user/"><p class="link-icon ml-3"><i class="fa-solid fa-user"></i></p></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  require_once 'modal.php';
?>