$('.code').click(function () { }).mask('99-99');

// форма авторизации
$('#authorization-btn').on('click', () => {
  if ($('#form-authorization')[0].checkValidity()) {
    // проверки
    if ($('#authorization-pass').val().length < 8) {
      createmessage('Пароль должен содержать минимум 8 символов');

      return false;
    }
    
    // поля
    const phone = $('#authorization-phone');
    const pass = $('#authorization-pass');

    // объекты
    const btn = $('#authorization-btn');

    // запрос
    $.ajax({
      type: 'POST',
      url: 'https://yum-food.ru/assets/functions/authorization.php',
      data: {
        phone: phone.val(),
        pass: pass.val(),
      },
      beforeSend: () => {
        btn.prop('disabled', true);
      },
      success: (response) => {
        // меняем отображение объектов
        btn.prop('disabled', false);

        // очищаем форму
        pass.val('');

        if ((typeof response === 'string') && (response != '')) {
          createmessage(response);
        } else {
          // убираем валидацию
          $('#form-authorization').removeClass('was-validated');

          window.location.replace('https://yum-food.ru/lk/user/');
        }
      },
    });
    return false;
  } else {
    createmessage('Заполните обязательные поля');
  }
});

// форма регистрации
$('#registration-btn').on('click', () => {
  if ($('#form-registration')[0].checkValidity()) {
    // проверки
    if ($('#register-password').val().length < 8) {
      createmessage('Пароль должен содержать минимум 8 символов');

      return false;
    }

    // поля
    const phone = $('#register-phone');
    const email = $('#register-email');
    const pass = $('#register-password');

    // объекты
    const btn = $('#registration-btn');

    // запрос
    $.ajax({
      type: 'POST',
      url: 'https://yum-food.ru/assets/functions/registration_step_1.php',
      data: {
        phone: phone.val(),
        email: email.val(),
      },
      beforeSend: () => {
        btn.prop('disabled', true);
      },
      success: (response) => {
        // меняем отображение объектов
        btn.prop('disabled', false);

        // очищаем форму
        pass.val('');

        if ((typeof response === 'string') && (response != '')) {
          createmessage(response);
        } else {
          $('#modal-register').fadeIn();
          $('body').css('overflow', 'hidden');
          $('html').css('overflow', 'hidden');
        }
      },
    });
    return false;
  } else {
    createmessage('Заполните обязательные поля');
  }
});

// форма регистрации с кодом
$('#registration-code-btn').on('click', () => {
  if ($('#form-registration-code')[0].checkValidity()) {
    // поля
    const phone = $('#register-phone');
    const email = $('#register-email');
    const pass = $('#register-password');
    const code = $('#register-code');

    // объекты
    const btn = $('#registration-code-btn');

    // запрос
    $.ajax({
      type: 'POST',
      url: 'https://yum-food.ru/assets/functions/registration_step_2.php',
      data: {
        phone: phone.val(),
        email: email.val(),
        pass: pass.val(),
        code: code.val(),
      },
      beforeSend: () => {
        btn.prop('disabled', true);
      },
      success: (response) => {
        // меняем отображение объектов
        btn.prop('disabled', false);

        // очищаем форму
        code.val('');

        if ((typeof response === 'string') && (response != '')) {
          createmessage(response);
        } else {
          // убираем валидацию
          $('#form-registration-code').removeClass('was-validated');

          $("#modal-close-register").trigger('click');

          window.location.replace('https://yum-food.ru/lk/user/');
        }
      },
    });
    return false;
  } else {
    createmessage('Введите код');
  }
});

// форма регистрации с кодом
$('#edit-user-btn').on('click', () => {
  if ($('#form-edit-user')[0].checkValidity()) {
    // поля
    const name1 = $('#edit-user-name-1');
    const name2 = $('#edit-user-name-2');
    const name3 = $('#edit-user-name-3');
    const about = $('#edit-user-about');
    let useVK;
    if ($('#edit-user-use-vk').prop('checked')) {
      useVK = '1';
    } else {
      useVK = '0';
    }
    const linkVK = $('#edit-user-link-vk');
    let useTelegram;
    if ($('#edit-user-use-telegram').prop('checked')) {
      useTelegram = '1';
    } else {
      useTelegram = '0';
    }
    let useWA;
    if ($('#edit-user-use-wa').prop('checked')) {
      useWA = '1';
    } else {
      useWA = '0';
    }
    const email = $('#edit-user-email');
    const city = $('#edit-user-city');
    const street = $('#edit-user-street');
    const house = $('#edit-user-house');
    const pass = $('#edit-user-password');

    // объекты
    const btn = $('#edit-user-btn');

    // запрос
    $.ajax({
      type: 'POST',
      url: 'https://yum-food.ru/assets/functions/edit_user.php',
      data: {
        name1: name1.val(),
        name2: name2.val(),
        name3: name3.val(),
        about: about.val(),
        useVK: useVK,
        linkVK: linkVK.val(),
        useTelegram: useTelegram,
        useWA: useWA,
        email: email.val(),
        city: city.val(),
        street: street.val(),
        house: house.val(),
        pass: pass.val(),
      },
      beforeSend: () => {
        btn.prop('disabled', true);
      },
      success: (response) => {
        // меняем отображение объектов
        btn.prop('disabled', false);

        if ((typeof response === 'string') && (response != '')) {
          createmessage(response);
        } else {
          // убираем валидацию
          $('#form-edit-user').removeClass('was-validated');

          window.location.replace('https://yum-food.ru/lk/user/');
        }
      },
    });
    return false;
  } else {
    createmessage('Введите обязательные поля');
  }
});