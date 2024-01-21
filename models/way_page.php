<section id="way-page" class="pb-5">
  <div class="bg-white box-shadow py-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>
            <a href="https://yum-food.ru/" class="link-standart">Главная</a>
<?php
foreach ($data as ["link_page" => $link_page, "name_page" => $name_page]) {
  echo '<span class="mx-2">
          <i class="fa-solid fa-angles-right"></i>
        </span>
        <a href="' . $link_page . '" class="link-standart">' . $name_page . '</a>';
}
?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>