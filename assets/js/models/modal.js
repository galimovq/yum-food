// modal-city
$('.modal-click-city').on('click', function () {
  $('#modal-city').fadeIn();
  //$('body').css('overflow-x', 'hidden');
  //$('html').css('overflow-x', 'hidden');
  $('body').css('overflow', 'hidden hidden');
  $('html').css('overflow', 'hidden hidden');
});

$('#modal-close-city').on('click', function () {
  $('#modal-city').fadeOut();
  //$('body').css('overflow-x', 'hidden');
  //$('html').css('overflow-x', 'hidden');
  $('body').css('overflow', 'hidden visible');
  $('html').css('overflow', 'hidden visible');
});

// modal-register
$('.modal-click-register').on('click', function () {
  $('#modal-register').fadeIn();
  //$('body').css('overflow-x', 'hidden');
  //$('html').css('overflow-x', 'hidden');
  $('body').css('overflow', 'hidden hidden');
  $('html').css('overflow', 'hidden hidden');
});

$('#modal-close-register').on('click', function () {
  $('#modal-register').fadeOut();
  //$('body').css('overflow-x', 'hidden');
  //$('html').css('overflow-x', 'hidden');
  $('body').css('overflow', 'hidden visible');
  $('html').css('overflow', 'hidden visible');
});

// 2 3 6 9 10 14 16 20 23 24 29 34 39 46 47 51