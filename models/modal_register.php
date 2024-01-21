<div id="modal-register" class="modal">
  <div class="modal-window">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center justify-content-between p-4">
        <p class="text-12">Введите код отправленный на указанную почту</p>
        <p>
          <button id="modal-close-register" class="modal-close">
            <div>
              <i class="fa-solid fa-xmark"></i>
            </div>
          </button>
        </p>
      </div>
      <div class="modal-text p-4">
        <form id="form-registration-code" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-12 mb-3">
              <label for="register-code" class="form-label">Код</label>
              <input type="text" class="form-control form-input code" id="register-code" placeholder="__-__" required>
            </div>
            <div class="col-12 d-flex justify-content-center">
              <button id="registration-code-btn" class="form-btn" type="submit">Закончить регистрацию</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>