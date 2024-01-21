function createmessage(message) {

  $('#messages').append(`
    <div class="message">
      <p class="block-message-close">
        <button class="message-close">
          <div>
            <i class="fa-solid fa-xmark"></i>
          </div>
        </button>
      </p>
      <p class="message-text">${message}</p>
    </div>`
  );

  $('#messages .message:last').slideDown(400);

}

$('#messages').on('click', '.message-close', function() {
  
  let message = $(this).closest('.message');
  
  message.slideUp(400);
  setTimeout(() => {message.remove()}, 450);

});