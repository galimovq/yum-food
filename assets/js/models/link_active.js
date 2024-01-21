let namePage = $('#name-page').text();
$('.link-active:contains(' + namePage + ')').html(function() {
  $(this).removeClass('link-active');
  $(this).addClass('link-activeted');
});