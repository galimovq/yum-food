<div id="modal-city" class="modal">
  <div class="modal-window">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center justify-content-between p-4">
        <p class="text-12">Ваш город</p>
        <p>
          <button id="modal-close-city" class="modal-close">
            <div>
              <i class="fa-solid fa-xmark"></i>
            </div>
          </button>
        </p>
      </div>
      <div class="modal-text p-4">
        <div class="row">

<?php
  $cities = get_all_cities($link);
  foreach ($cities as $element):
?>

          <div class="col-4 mb-3">
            <span class="link-standart"><?=$element['name']?></span>
          </div>

<?php
  endforeach;
?>

        </div>
      </div>
    </div>
  </div>
</div>