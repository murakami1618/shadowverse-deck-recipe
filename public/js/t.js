$(function() {

  $('.CardTrigger').on('click', function() {

    $(this).clone(true, false).appendTo('.normal-pc');
  })
  
})