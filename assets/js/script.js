//validation
(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

//navbar
let scroll_pos = 0;
function scrollNav() {
  scroll_pos = $(this).scrollTop();
  if (scroll_pos > 50) {
    // меню компьютера
    $('#navbar').css('top', '15px');
    $('#navbar-background').css('background-color', '#fe8535');
    $('#navbar-background').css('box-shadow', '0 0 5px rgba(0, 0, 0, .1)');
    $('.navbar-logo-color').css('fill', '#ffffff');
    $('.navbar-link').css('color', '#ffffff');

    // меню телефона
    $('#navbar-mobile-icon').css('background-color', '#fe8535');
    $('#navbar-mobile-btn-open').css('color', '#ffffff');
    $('.navbar-logo-mobile-color').css('fill', '#ffffff');
  }
  else {
    // меню компьютера
    $('#navbar').css('top', '25px');
    $('#navbar-background').css('background-color', '#f6f7f8');
    $('#navbar-background').css('box-shadow', 'none');
    $('.navbar-logo-color').css('fill', '#fe8535');
    $('.navbar-link').css('color', '#000000');

    // меню телефона
    $('#navbar-mobile-icon').css('background-color', '#f6f7f8');
    $('#navbar-mobile-btn-open').css('color', '#000000');
    $('.navbar-logo-mobile-color').css('fill', '#fe8535');
  }
}

scrollNav();

$(document).scroll(function () {
  scrollNav();
});

// маска для ввода телефона
$('.phone').click(function () {
  if ($(this).val() == '+7 (___) ___-__-__') {
    $(this).setCursorPosition(4);
  }
}).mask('+7 (999) 999-99-99');

$.fn.setCursorPosition = function (pos) {
  this.each(function (index, elem) {
    if (elem.setSelectionRange) {
      elem.setSelectionRange(pos, pos);
    } else if (elem.createTextRange) {
      var range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  });
  return this;
};

//// открытие социальных ссылок
//$('#contacts-icon-main').on('click', () => {
//  if ($('#contacts-icon-main').hasClass('no-actives')) {
//    $('#contacts-icon-main').toggleClass('no-actives actives');
//    $("#contacts-icon-dop-1").css('top', '-300px');
//    $("#contacts-icon-dop-2").css('top', '-250px');
//    $("#contacts-icon-dop-3").css('top', '-200px');
//    $("#contacts-icon-dop-4").css('top', '-150px');
//    $("#contacts-icon-dop-5").css('top', '-100px');
//    $("#contacts-icon-dop-6").css('top', '-50px');
//    $(".contacts-icon-dop").css('opacity', '1');
//  } else {
//    $('#contacts-icon-main').toggleClass('actives no-actives');
//    $("#contacts-icon-dop-1").css('top', '0px');
//    $("#contacts-icon-dop-2").css('top', '0px');
//    $("#contacts-icon-dop-3").css('top', '0px');
//    $("#contacts-icon-dop-4").css('top', '0px');
//    $("#contacts-icon-dop-5").css('top', '0px');
//    $("#contacts-icon-dop-6").css('top', '0px');
//    $(".contacts-icon-dop").css('opacity', '0');
//  }
//});

// открытие мобильного меню
$('#navbar-mobile-btn-open').on('click', () => {
  $("#navbar-mobile").css('left', '0%');
  $("body").css('overflow', 'hidden');
});

// закрытие мобильного меню
$('#navbar-mobile-btn-close').on('click', () => {
  $("#navbar-mobile").css('left', '-100%');
  $("body").css('overflow-y', 'scroll');
});

//// пролистывание вверх страницы
//$('.link-scroll').on('click', function () {
//  $('html').animate({
//    scrollTop: 0
//  }, 300);
//  return false;
//});
//
//$('.phone').click(function () {
//  $(this).setCursorPosition(4);
//}).mask('+7 (999) 999-99-99');
//
////form
//$('#modal-alert').hide();
//$('#modal-process').hide();
//$('#modal-btn').on('click', () => {
//  if ($('#modal-form')[0].checkValidity()) {
//
//    // Inputs
//    const name = $('#modal-name');
//    const phone = $('#modal-phone');
//    const message = $('#modal-message');
//
//    // Items
//    const process = $('#modal-process');
//    const alert = $('#modal-alert');
//    const btn = $('#modal-btn');
//
//    // Request
//    $.ajax({
//      type: 'POST',
//      url: 'https://cmbrb.ru/assets/query/feedback_modal.php',
//      data: {
//        name: name.val(),
//        phone: phone.val(),
//        message: message.val(),
//      },
//      beforeSend: () => {
//
//        btn.hide();
//        process.show();
//
//      },
//      success: () => {
//
//        // Reset the form
//        $('#modal-form').removeClass('was-validated');
//
//        // Show/hide relevant items
//        process.hide();
//        alert.show();
//
//        // Clear form values
//        name.val('');
//        phone.val('');
//        message.val('');
//
//        // Close modal
//        setTimeout(function () {
//          alert.hide();
//          btn.show();
//        }, 3000);
//
//      },
//    });
//    return false;
//  }
//});